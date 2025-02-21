<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UpgradeController extends Controller
{
    public function index()
    {
        $data = [
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 250cc-350cc',
                'service' => 'DEPAN',
                'price' => 950000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 250cc-350cc',
                'service' => 'BELAKANG',
                'price' => 850000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 250cc-350cc',
                'service' => 'DEPAN+BLKG',
                'price' => 1700000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 400cc-550cc',
                'service' => 'DEPAN',
                'price' => 1500000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 400cc-550cc',
                'service' => 'BELAKANG',
                'price' => 1300000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 400cc-550cc',
                'service' => 'DEPAN+BLKG',
                'price' => 2600000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 600cc-800cc',
                'service' => 'DEPAN',
                'price' => 2200000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 600cc-800cc',
                'service' => 'BELAKANG',
                'price' => 1800000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 600cc-800cc',
                'service' => 'DEPAN+BLKG',
                'price' => 3800000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 900cc-1500cc',
                'service' => 'DEPAN',
                'price' => 2800000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 900cc-1500cc',
                'service' => 'BELAKANG',
                'price' => 2400000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 900cc-1500cc',
                'service' => 'DEPAN+BLKG',
                'price' => 5000000
            ],

            // MAINTENANCE
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 250cc-350cc',
                'service' => 'DEPAN',
                'price' => 850000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 250cc-350cc',
                'service' => 'BELAKANG',
                'price' => 700000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 250cc-350cc',
                'service' => 'DEPAN+BLKG',
                'price' => 1500000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 400cc-550cc',
                'service' => 'DEPAN',
                'price' => 950000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 400cc-550cc',
                'service' => 'BELAKANG',
                'price' => 800000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 400cc-550cc',
                'service' => 'DEPAN+BLKG',
                'price' => 1600000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 600cc-800cc',
                'service' => 'DEPAN',
                'price' => 1200000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 600cc-800cc',
                'service' => 'BELAKANG',
                'price' => 950000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 600cc-800cc',
                'service' => 'DEPAN+BLKG',
                'price' => 2000000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 900cc-1500cc',
                'service' => 'DEPAN',
                'price' => 1500000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 900cc-1500cc',
                'service' => 'BELAKANG',
                'price' => 1200000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 900cc-1500cc',
                'service' => 'DEPAN+BLKG',
                'price' => 2500000
            ],

            // UPGRADE
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 250cc-350cc',
                'service' => 'DEPAN',
                'price' => 2900000
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 250cc-350cc',
                'service' => 'BELAKANG',
                'price' => 2500000
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 250cc-350cc',
                'service' => 'DEPAN+BLKG',
                'price' => 5400000
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 400cc-550cc',
                'service' => 'DEPAN',
                'price' => 4800000
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 400cc-550cc',
                'service' => 'BELAKANG',
                'price' => 4500000
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 400cc-550cc',
                'service' => 'DEPAN+BLKG',
                'price' => 9000000
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 600cc-800cc',
                'service' => 'DEPAN',
                'price' => 0 // Data asli: 0.000.000
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 600cc-800cc',
                'service' => 'BELAKANG',
                'price' => 0 // Data asli: 0.000.000
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 600cc-800cc',
                'service' => 'DEPAN+BLKG',
                'price' => 0 // Data asli: 0.000.000
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 900cc-1500cc',
                'service' => 'DEPAN',
                'price' => 6900000
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 900cc-1500cc',
                'service' => 'BELAKANG',
                'price' => 6500000
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 900cc-1500cc',
                'service' => 'DEPAN+BLKG',
                'price' => 15000000
            ],
            // REBOUND 110cc-140cc
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'service' => 'DEPAN',
                'price' => 350000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'service' => 'BELAKANG',
                'price' => 350000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'service' => 'USD',
                'price' => 450000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'service' => 'USD REALJUMP',
                'price' => 500000
            ],

            // REBOUND 150cc-180cc
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'service' => 'DEPAN',
                'price' => 400000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'service' => 'BELAKANG',
                'price' => 400000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'service' => 'USD',
                'price' => 500000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'service' => 'USD REALJUMP',
                'price' => 550000
            ],

            // REBOUND 200cc-230cc
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'service' => 'DEPAN',
                'price' => 450000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'service' => 'BELAKANG',
                'price' => 450000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'service' => 'USD',
                'price' => 550000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'service' => 'USD REALJUMP',
                'price' => 600000
            ],

            // MAINTENANCE 110cc-140cc
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'service' => 'DEPAN',
                'price' => 200000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'service' => 'BELAKANG',
                'price' => 200000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'service' => 'USD',
                'price' => 300000
            ],

            // MAINTENANCE 150cc-180cc
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'service' => 'DEPAN',
                'price' => 250000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'service' => 'BELAKANG',
                'price' => 250000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'service' => 'USD',
                'price' => 350000
            ],

            // MAINTENANCE 200cc-230cc
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'service' => 'DEPAN',
                'price' => 300000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'service' => 'BELAKANG',
                'price' => 300000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'service' => 'USD',
                'price' => 400000
            ],
            // BEBEK/MATIC 110cc-125cc
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'service' => 'DEPAN STD',
                'price' => 250000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'service' => 'USD',
                'price' => 300000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'service' => 'BLKG SINGLE',
                'price' => 300000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'service' => 'BLKG DOUBLE',
                'price' => 350000
            ],

            // BEBEK/MATIC 150cc-160cc
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'service' => 'DEPAN STD',
                'price' => 300000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'service' => 'USD',
                'price' => 400000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'service' => 'BLKG SINGLE',
                'price' => 350000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'service' => 'BLKG DOUBLE',
                'price' => 400000
            ],

            // BEBEK/MATIC 200cc-250cc
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'service' => 'DEPAN STD',
                'price' => 450000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'service' => 'USD',
                'price' => 500000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'service' => 'BELAKANG',
                'price' => 450000
            ],

            // BEBEK/MATIC 400cc-750cc
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'service' => 'DEPAN STD',
                'price' => 550000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'service' => 'USD',
                'price' => 600000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'service' => 'BELAKANG',
                'price' => 550000
            ],

            // SPORT/NAKED/TRAIL 110cc-140cc
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'service' => 'DEPAN STD',
                'price' => 350000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'service' => 'USD',
                'price' => 450000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'service' => 'BELAKANG',
                'price' => 350000
            ],

            // SPORT/NAKED/TRAIL 150cc-180cc
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'service' => 'DEPAN STD',
                'price' => 400000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'service' => 'USD',
                'price' => 550000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'service' => 'BELAKANG',
                'price' => 450000
            ],

            // SPORT/NAKED/TRAIL 200cc-230cc
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'service' => 'DEPAN',
                'price' => 450000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'service' => 'USD',
                'price' => 600000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'service' => 'BELAKANG',
                'price' => 450000
            ],

            // OHLINS
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'OHLINS 110cc-150cc',
                'service' => 'OHLINS',
                'price' => 600000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'OHLINS 160cc-230cc',
                'service' => 'OHLINS',
                'price' => 750000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'OHLINS 240cc-750cc',
                'service' => 'OHLINS',
                'price' => 900000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'service' => 'DEPAN STD',
                'price' => 250000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'service' => 'USD',
                'price' => 300000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'service' => 'BLKG SINGLE',
                'price' => 300000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'service' => 'BLKG DOUBLE',
                'price' => 350000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'service' => 'DEPAN STD',
                'price' => 300000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'service' => 'USD',
                'price' => 400000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'service' => 'BLKG SINGLE',
                'price' => 350000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'service' => 'BLKG DOUBLE',
                'price' => 400000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'service' => 'DEPAN STD',
                'price' => 450000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'service' => 'USD',
                'price' => 500000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'service' => 'BELAKANG',
                'price' => 450000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'service' => 'DEPAN STD',
                'price' => 550000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'service' => 'USD',
                'price' => 600000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'service' => 'BELAKANG',
                'price' => 550000
            ],

            // MAINTENANCE
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'service' => 'DEPAN STD',
                'price' => 160000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'service' => 'USD',
                'price' => 200000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'service' => 'BELAKANG',
                'price' => 200000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'service' => 'DEPAN STD',
                'price' => 190000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'service' => 'USD',
                'price' => 250000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'service' => 'BELAKANG',
                'price' => 200000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'service' => 'DEPAN STD',
                'price' => 450000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'service' => 'USD',
                'price' => 500000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'service' => 'BELAKANG',
                'price' => 450000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'service' => 'DEPAN STD',
                'price' => 550000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'service' => 'USD',
                'price' => 600000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'service' => 'BELAKANG',
                'price' => 550000
            ],

            // OHLINS
            [
                'category' => 'OHLINS',
                'subcategory' => 'BEBEK/MATIC 110cc-150cc',
                'price' => 600000
            ],
            [
                'category' => 'OHLINS',
                'subcategory' => 'BEBEK/MATIC 160cc-230cc',
                'price' => 750000
            ],
            [
                'category' => 'OHLINS',
                'subcategory' => 'BEBEK/MATIC 240cc-750cc',
                'price' => 900000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'service' => 'DEPAN STD',
                'price' => 350000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'service' => 'USD',
                'price' => 400000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'service' => 'BLKG SINGLE',
                'price' => 400000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'service' => 'BLKG DOUBLE',
                'price' => 450000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'service' => 'DEPAN STD',
                'price' => 400000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'service' => 'USD',
                'price' => 500000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'service' => 'BLKG SINGLE',
                'price' => 450000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'service' => 'BLKG DOUBLE',
                'price' => 500000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'service' => 'DEPAN STD',
                'price' => 550000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'service' => 'USD',
                'price' => 600000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'service' => 'BELAKANG',
                'price' => 550000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'service' => 'DEPAN STD',
                'price' => 650000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'service' => 'USD',
                'price' => 700000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'service' => 'BELAKANG',
                'price' => 650000
            ],

            // SPORT/NAKED/TRAIL
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'service' => 'DEPAN STD',
                'price' => 450000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'service' => 'USD',
                'price' => 500000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'service' => 'BELAKANG',
                'price' => 450000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'service' => 'DEPAN STD',
                'price' => 500000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'service' => 'USD',
                'price' => 650000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'service' => 'BELAKANG',
                'price' => 500000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'service' => 'DEPAN STD',
                'price' => 550000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'service' => 'USD',
                'price' => 550000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'service' => 'BELAKANG',
                'price' => 750000
            ],

            // OHLINS
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'OHLINS 110cc-150cc',
                'service' => 'OHLINS',
                'price' => 700000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'OHLINS 160cc-230cc',
                'service' => 'OHLINS',
                'price' => 850000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'OHLINS 240cc-750cc',
                'service' => 'OHLINS',
                'price' => 1000000
            ]
        ];
        $data = array_filter($data, function ($item) {
            return $item['category'] == 'UPGRADE';
        });
        return view('upgrade', ['data' => $data]);
    }
}
