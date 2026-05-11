<?php
    require_once __DIR__ . '/../core/Response.php';
    require_once __DIR__ . '/../core/FirestoreClient.php';

    class HealthController {
        public function index(): void {
            Response::json([
                'status' => 'ok',
                'message' => 'Backend Funcionando'
            ]);
        }

        public function firebase(): void {
            try {
                $Client = new FirestoreClient();
                Response::json([
                    'status' => 'ok',
                    'message' => 'Conexión con la BD'
                ]);

            } catch (Exception $e) {
                Response::json([
                    'status' => 'error',
                    'message' => $e->getMessage()
                ]);
            }
        }
    }
?>