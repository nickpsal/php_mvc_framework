<?php
    class Home {
        use Controller;
        public function index($data = []): void
        {
            $data['title'] = 'Κεντρική Σελίδα';
            $this->view('home', $data); 
        }
    }