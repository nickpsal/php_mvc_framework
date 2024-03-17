<?php
class MigrationManager
{
    protected $migrationDIR = '../App/migrations';

    public function __construct()
    {
        $migration = new Migration();
        $checkTable = $migration->checkifTableExists('migration');
        if (!$checkTable) {
            $createMigrationTable = '../App/migrations/migration.sql';
            $migrationName = basename($createMigrationTable);
            $sqlContents = file_get_contents($createMigrationTable);
            $migration->query($sqlContents);
            $data['Name'] = $migrationName;
            $migration->insert_data_to_db($data);
        }
    }

    public function runMigration() {
        $migration = new Migration();
        $executed_migrations = $migration->find_all_data_from_db();
        $migration_files = glob($this->migrationDIR  . '/*.sql');
        foreach ($migration_files as $migrationFile) {
            $migrationName = basename($migrationFile);
            foreach($executed_migrations as $migr) {
                if ($migrationName != $migr->Name) {
                    $sqlContents = file_get_contents($migrationFile);
                    $migration->query($sqlContents);
                    $data['Name'] = $migrationName;
                    $migration->insert_data_to_db($data);
                }
            }
        }
    }
}
