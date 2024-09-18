<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Laptop HP ProBook', 'description' => 'Laptop HP con procesador Intel i5 y 8GB RAM', 'price' => 899.99, 'stock' => 15],
            ['name' => 'Smartphone Samsung Galaxy S21', 'description' => 'Teléfono inteligente Samsung de última generación', 'price' => 999.99, 'stock' => 30],
            ['name' => 'Monitor Dell 24"', 'description' => 'Monitor de 24 pulgadas con resolución Full HD', 'price' => 149.99, 'stock' => 10],
            ['name' => 'Teclado Mecánico Logitech', 'description' => 'Teclado gaming RGB con switches mecánicos', 'price' => 89.99, 'stock' => 25],
            ['name' => 'Mouse Inalámbrico Microsoft', 'description' => 'Mouse inalámbrico ergonómico de Microsoft', 'price' => 29.99, 'stock' => 50],
            ['name' => 'Auriculares Sony WH-1000XM4', 'description' => 'Auriculares inalámbricos con cancelación de ruido', 'price' => 299.99, 'stock' => 20],
            ['name' => 'Tablet Apple iPad Air', 'description' => 'Tablet Apple con pantalla de 10.9 pulgadas y chip A14 Bionic', 'price' => 649.99, 'stock' => 12],
            ['name' => 'Cámara Canon EOS R6', 'description' => 'Cámara full-frame sin espejo con grabación 4K', 'price' => 2499.99, 'stock' => 5],
            ['name' => 'Impresora Multifunción HP DeskJet', 'description' => 'Impresora multifunción con WiFi y escaneo automático', 'price' => 99.99, 'stock' => 40],
            ['name' => 'Disco Duro Externo Seagate 2TB', 'description' => 'Disco duro externo de 2TB con conexión USB 3.0', 'price' => 79.99, 'stock' => 35],
            ['name' => 'Memoria USB Kingston 64GB', 'description' => 'Memoria USB 3.1 de 64GB de capacidad', 'price' => 12.99, 'stock' => 100],
            ['name' => 'Cargador Portátil Anker 20,000mAh', 'description' => 'Batería externa con carga rápida de 20,000mAh', 'price' => 49.99, 'stock' => 22],
            ['name' => 'Smartwatch Garmin Forerunner 945', 'description' => 'Reloj inteligente para deportistas con GPS y pulsómetro', 'price' => 599.99, 'stock' => 8],
            ['name' => 'Televisor LG OLED 55"', 'description' => 'Televisor OLED de 55 pulgadas con resolución 4K UHD', 'price' => 1299.99, 'stock' => 7],
            ['name' => 'Barra de Sonido Bose Soundbar 700', 'description' => 'Barra de sonido premium con control por voz', 'price' => 799.99, 'stock' => 10],
            ['name' => 'Router Wi-Fi Mesh TP-Link Deco X60', 'description' => 'Sistema de router Wi-Fi 6 mesh para cobertura en toda la casa', 'price' => 199.99, 'stock' => 25],
            ['name' => 'SSD Samsung 970 EVO 1TB', 'description' => 'Disco de estado sólido NVMe de alto rendimiento', 'price' => 149.99, 'stock' => 20],
            ['name' => 'Silla Gamer Secretlab TITAN', 'description' => 'Silla ergonómica para gaming con soporte lumbar ajustable', 'price' => 399.99, 'stock' => 15],
            ['name' => 'Cámara de Seguridad Xiaomi Mi Home', 'description' => 'Cámara de seguridad con visión nocturna y detección de movimiento', 'price' => 59.99, 'stock' => 50],
            ['name' => 'Placa Base ASUS ROG Strix B550-F', 'description' => 'Placa base gaming compatible con procesadores AMD Ryzen', 'price' => 199.99, 'stock' => 18],
        ];

        DB::table('products')->insert($products);
    }
}
