<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReboundController extends Controller
{
    public function index()
    {
        $data = [
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 250cc-350cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki Ninja 300",
                    "Yamaha YZF-R25",
                    "Yamaha YZF-R3",
                    "Honda CBR250RR",
                    "Honda CBR300R",
                    "KTM RC 250",
                    "KTM RC 390",
                    "CFMoto 300SR",
                    "Benelli 302R"
                ],
                'service' => 'DEPAN',
                'price' => 950000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 250cc-350cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki Ninja 300",
                    "Yamaha YZF-R25",
                    "Yamaha YZF-R3",
                    "Honda CBR250RR",
                    "Honda CBR300R",
                    "KTM RC 250",
                    "KTM RC 390",
                    "CFMoto 300SR",
                    "Benelli 302R"
                ],
                'service' => 'BELAKANG',
                'price' => 850000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 250cc-350cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki Ninja 300",
                    "Yamaha YZF-R25",
                    "Yamaha YZF-R3",
                    "Honda CBR250RR",
                    "Honda CBR300R",
                    "KTM RC 250",
                    "KTM RC 390",
                    "CFMoto 300SR",
                    "Benelli 302R"
                ],
                'service' => 'DEPAN+BLKG',
                'price' => 1700000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 400cc-550cc',
                'motor' => [
                    "Kawasaki Ninja 400",
                    "Kawasaki Ninja 500",
                    "Yamaha YZF-R3",
                    "Honda CBR500R",
                    "KTM RC 390",
                    "CFMoto 450SR",
                    "Benelli Tornado 402",
                    "Kawasaki Ninja ZX-4R",
                    "Aprilia RS 457",
                    "Yamaha YZF-R7"
                ],
                'service' => 'DEPAN',
                'price' => 1500000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 400cc-550cc',
                'motor' => [
                    "Kawasaki Ninja 400",
                    "Kawasaki Ninja 500",
                    "Yamaha YZF-R3",
                    "Honda CBR500R",
                    "KTM RC 390",
                    "CFMoto 450SR",
                    "Benelli Tornado 402",
                    "Kawasaki Ninja ZX-4R",
                    "Aprilia RS 457",
                    "Yamaha YZF-R7"
                ],
                'service' => 'BELAKANG',
                'price' => 1300000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 400cc-550cc',
                'motor' => [
                    "Kawasaki Ninja 400",
                    "Kawasaki Ninja 500",
                    "Yamaha YZF-R3",
                    "Honda CBR500R",
                    "KTM RC 390",
                    "CFMoto 450SR",
                    "Benelli Tornado 402",
                    "Kawasaki Ninja ZX-4R",
                    "Aprilia RS 457",
                    "Yamaha YZF-R7"
                ],
                'service' => 'DEPAN+BLKG',
                'price' => 2600000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 600cc-800cc',
                'motor' => [
                    "Kawasaki Ninja 650",
                    "Yamaha YZF-R6",
                    "Honda CBR650R",
                    "Suzuki GSX-R600",
                    "Kawasaki ZX-6R",
                    "Aprilia RS 660",
                    "Yamaha YZF-R7",
                    "Benelli 752S",
                    "CFMoto 650 NK",
                    "Ducati Panigale V2"
                ],
                'service' => 'DEPAN',
                'price' => 2200000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 600cc-800cc',
                'motor' => [
                    "Kawasaki Ninja 650",
                    "Yamaha YZF-R6",
                    "Honda CBR650R",
                    "Suzuki GSX-R600",
                    "Kawasaki ZX-6R",
                    "Aprilia RS 660",
                    "Yamaha YZF-R7",
                    "Benelli 752S",
                    "CFMoto 650 NK",
                    "Ducati Panigale V2"
                ],
                'service' => 'BELAKANG',
                'price' => 1800000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 600cc-800cc',
                'motor' => [
                    "Kawasaki Ninja 650",
                    "Yamaha YZF-R6",
                    "Honda CBR650R",
                    "Suzuki GSX-R600",
                    "Kawasaki ZX-6R",
                    "Aprilia RS 660",
                    "Yamaha YZF-R7",
                    "Benelli 752S",
                    "CFMoto 650 NK",
                    "Ducati Panigale V2"
                ],
                'service' => 'DEPAN+BLKG',
                'price' => 3800000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 900cc-1500cc',
                'motor' => [
                    "Yamaha R1",
                    "Honda CBR1000RR",
                    "Suzuki GSX-R1000",
                    "Kawasaki Ninja ZX-10R",
                    "Ducati Panigale V4",
                    "Kawasaki Ninja ZX-14R"
                ],
                'service' => 'DEPAN',
                'price' => 2800000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 900cc-1500cc',
                'motor' => [
                    "Yamaha R1",
                    "Honda CBR1000RR",
                    "Suzuki GSX-R1000",
                    "Kawasaki Ninja ZX-10R",
                    "Ducati Panigale V4",
                    "Kawasaki Ninja ZX-14R"
                ],
                'service' => 'BELAKANG',
                'price' => 2400000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT 900cc-1500cc',
                'motor' => [
                    "Yamaha R1",
                    "Honda CBR1000RR",
                    "Suzuki GSX-R1000",
                    "Kawasaki Ninja ZX-10R",
                    "Ducati Panigale V4",
                    "Kawasaki Ninja ZX-14R"
                ],
                'service' => 'DEPAN+BLKG',
                'price' => 5000000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 250cc-350cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki Ninja 300",
                    "Yamaha YZF-R25",
                    "Yamaha YZF-R3",
                    "Honda CBR250RR",
                    "Honda CBR300R",
                    "KTM RC 250",
                    "KTM RC 390",
                    "CFMoto 300SR",
                    "Benelli 302R"
                ],
                'service' => 'DEPAN',
                'price' => 850000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 250cc-350cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki Ninja 300",
                    "Yamaha YZF-R25",
                    "Yamaha YZF-R3",
                    "Honda CBR250RR",
                    "Honda CBR300R",
                    "KTM RC 250",
                    "KTM RC 390",
                    "CFMoto 300SR",
                    "Benelli 302R"
                ],
                'service' => 'BELAKANG',
                'price' => 700000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 250cc-350cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki Ninja 300",
                    "Yamaha YZF-R25",
                    "Yamaha YZF-R3",
                    "Honda CBR250RR",
                    "Honda CBR300R",
                    "KTM RC 250",
                    "KTM RC 390",
                    "CFMoto 300SR",
                    "Benelli 302R"
                ],
                'service' => 'DEPAN+BLKG',
                'price' => 1500000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 400cc-550cc',
                'motor' => [
                    "Kawasaki Ninja 400",
                    "Kawasaki Ninja 500",
                    "Yamaha YZF-R3",
                    "Honda CBR500R",
                    "KTM RC 390",
                    "CFMoto 450SR",
                    "Benelli Tornado 402",
                    "Kawasaki Ninja ZX-4R",
                    "Aprilia RS 457",
                    "Yamaha YZF-R7"
                ],
                'service' => 'DEPAN',
                'price' => 950000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 400cc-550cc',
                'motor' => [
                    "Kawasaki Ninja 400",
                    "Kawasaki Ninja 500",
                    "Yamaha YZF-R3",
                    "Honda CBR500R",
                    "KTM RC 390",
                    "CFMoto 450SR",
                    "Benelli Tornado 402",
                    "Kawasaki Ninja ZX-4R",
                    "Aprilia RS 457",
                    "Yamaha YZF-R7"
                ],
                'service' => 'BELAKANG',
                'price' => 800000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 400cc-550cc',
                'motor' => [
                    "Kawasaki Ninja 400",
                    "Kawasaki Ninja 500",
                    "Yamaha YZF-R3",
                    "Honda CBR500R",
                    "KTM RC 390",
                    "CFMoto 450SR",
                    "Benelli Tornado 402",
                    "Kawasaki Ninja ZX-4R",
                    "Aprilia RS 457",
                    "Yamaha YZF-R7"
                ],
                'service' => 'DEPAN+BLKG',
                'price' => 1600000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 600cc-800cc',
                'motor' => [
                    "Kawasaki Ninja 650",
                    "Yamaha YZF-R6",
                    "Honda CBR650R",
                    "Suzuki GSX-R600",
                    "Kawasaki ZX-6R",
                    "Aprilia RS 660",
                    "Yamaha YZF-R7",
                    "Benelli 752S",
                    "CFMoto 650 NK",
                    "Ducati Panigale V2"
                ],
                'service' => 'DEPAN',
                'price' => 1200000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 600cc-800cc',
                'motor' => [
                    "Kawasaki Ninja 650",
                    "Yamaha YZF-R6",
                    "Honda CBR650R",
                    "Suzuki GSX-R600",
                    "Kawasaki ZX-6R",
                    "Aprilia RS 660",
                    "Yamaha YZF-R7",
                    "Benelli 752S",
                    "CFMoto 650 NK",
                    "Ducati Panigale V2"
                ],
                'service' => 'BELAKANG',
                'price' => 950000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 600cc-800cc',
                'motor' => [
                    "Kawasaki Ninja 650",
                    "Yamaha YZF-R6",
                    "Honda CBR650R",
                    "Suzuki GSX-R600",
                    "Kawasaki ZX-6R",
                    "Aprilia RS 660",
                    "Yamaha YZF-R7",
                    "Benelli 752S",
                    "CFMoto 650 NK",
                    "Ducati Panigale V2"
                ],
                'service' => 'DEPAN+BLKG',
                'price' => 2000000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 900cc-1500cc',
                'motor' => [
                    "Yamaha R1",
                    "Honda CBR1000RR",
                    "Suzuki GSX-R1000",
                    "Kawasaki Ninja ZX-10R",
                    "Ducati Panigale V4",
                    "Kawasaki Ninja ZX-14R"
                ],
                'service' => 'DEPAN',
                'price' => 1500000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 900cc-1500cc',
                'motor' => [
                    "Yamaha R1",
                    "Honda CBR1000RR",
                    "Suzuki GSX-R1000",
                    "Kawasaki Ninja ZX-10R",
                    "Ducati Panigale V4",
                    "Kawasaki Ninja ZX-14R"
                ],
                'service' => 'BELAKANG',
                'price' => 1200000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT 900cc-1500cc',
                'motor' => [
                    "Yamaha R1",
                    "Honda CBR1000RR",
                    "Suzuki GSX-R1000",
                    "Kawasaki Ninja ZX-10R",
                    "Ducati Panigale V4",
                    "Kawasaki Ninja ZX-14R"
                ],
                'service' => 'DEPAN+BLKG',
                'price' => 2500000
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 250cc-350cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki Ninja 300",
                    "Yamaha YZF-R25",
                    "Yamaha YZF-R3",
                    "Honda CBR250RR",
                    "Honda CBR300R",
                    "KTM RC 250",
                    "KTM RC 390",
                    "CFMoto 300SR",
                    "Benelli 302R"
                ],
                'service' => 'DEPAN',
                'price' => 2900000
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 250cc-350cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki Ninja 300",
                    "Yamaha YZF-R25",
                    "Yamaha YZF-R3",
                    "Honda CBR250RR",
                    "Honda CBR300R",
                    "KTM RC 250",
                    "KTM RC 390",
                    "CFMoto 300SR",
                    "Benelli 302R"
                ],
                'service' => 'BELAKANG',
                'price' => 2500000
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 250cc-350cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki Ninja 300",
                    "Yamaha YZF-R25",
                    "Yamaha YZF-R3",
                    "Honda CBR250RR",
                    "Honda CBR300R",
                    "KTM RC 250",
                    "KTM RC 390",
                    "CFMoto 300SR",
                    "Benelli 302R"
                ],
                'service' => 'DEPAN+BLKG',
                'price' => 5400000
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 400cc-550cc',
                'motor' => [
                    "Kawasaki Ninja 400",
                    "Kawasaki Ninja 500",
                    "Yamaha YZF-R3",
                    "Honda CBR500R",
                    "KTM RC 390",
                    "CFMoto 450SR",
                    "Benelli Tornado 402",
                    "Kawasaki Ninja ZX-4R",
                    "Aprilia RS 457",
                    "Yamaha YZF-R7"
                ],
                'service' => 'DEPAN',
                'price' => 4800000
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 400cc-550cc',
                'motor' => [
                    "Kawasaki Ninja 400",
                    "Kawasaki Ninja 500",
                    "Yamaha YZF-R3",
                    "Honda CBR500R",
                    "KTM RC 390",
                    "CFMoto 450SR",
                    "Benelli Tornado 402",
                    "Kawasaki Ninja ZX-4R",
                    "Aprilia RS 457",
                    "Yamaha YZF-R7"
                ],
                'service' => 'BELAKANG',
                'price' => 4500000
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 400cc-550cc',
                'motor' => [
                    "Kawasaki Ninja 400",
                    "Kawasaki Ninja 500",
                    "Yamaha YZF-R3",
                    "Honda CBR500R",
                    "KTM RC 390",
                    "CFMoto 450SR",
                    "Benelli Tornado 402",
                    "Kawasaki Ninja ZX-4R",
                    "Aprilia RS 457",
                    "Yamaha YZF-R7"
                ],
                'service' => 'DEPAN+BLKG',
                'price' => 9000000
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 600cc-800cc',
                'motor' => [
                    "Kawasaki Ninja 650",
                    "Yamaha YZF-R6",
                    "Honda CBR650R",
                    "Suzuki GSX-R600",
                    "Kawasaki ZX-6R",
                    "Aprilia RS 660",
                    "Yamaha YZF-R7",
                    "Benelli 752S",
                    "CFMoto 650 NK",
                    "Ducati Panigale V2"
                ],
                'service' => 'DEPAN',
                'price' => 0
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 600cc-800cc',
                'motor' => [
                    "Kawasaki Ninja 650",
                    "Yamaha YZF-R6",
                    "Honda CBR650R",
                    "Suzuki GSX-R600",
                    "Kawasaki ZX-6R",
                    "Aprilia RS 660",
                    "Yamaha YZF-R7",
                    "Benelli 752S",
                    "CFMoto 650 NK",
                    "Ducati Panigale V2"
                ],
                'service' => 'BELAKANG',
                'price' => 0
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 600cc-800cc',
                'motor' => [
                    "Kawasaki Ninja 650",
                    "Yamaha YZF-R6",
                    "Honda CBR650R",
                    "Suzuki GSX-R600",
                    "Kawasaki ZX-6R",
                    "Aprilia RS 660",
                    "Yamaha YZF-R7",
                    "Benelli 752S",
                    "CFMoto 650 NK",
                    "Ducati Panigale V2"
                ],
                'service' => 'DEPAN+BLKG',
                'price' => 0
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 900cc-1500cc',
                'motor' => [
                    "Yamaha R1",
                    "Honda CBR1000RR",
                    "Suzuki GSX-R1000",
                    "Kawasaki Ninja ZX-10R",
                    "Ducati Panigale V4",
                    "Kawasaki Ninja ZX-14R"
                ],
                'service' => 'DEPAN',
                'price' => 6900000
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 900cc-1500cc',
                'motor' => [
                    "Yamaha R1",
                    "Honda CBR1000RR",
                    "Suzuki GSX-R1000",
                    "Kawasaki Ninja ZX-10R",
                    "Ducati Panigale V4",
                    "Kawasaki Ninja ZX-14R"
                ],
                'service' => 'BELAKANG',
                'price' => 6500000
            ],
            [
                'category' => 'UPGRADE',
                'subcategory' => 'SPORT 900cc-1500cc',
                'motor' => [
                    "Yamaha R1",
                    "Honda CBR1000RR",
                    "Suzuki GSX-R1000",
                    "Kawasaki Ninja ZX-10R",
                    "Ducati Panigale V4",
                    "Kawasaki Ninja ZX-14R"
                ],
                'service' => 'DEPAN+BLKG',
                'price' => 15000000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'motor' => [
                    "Honda CB150R Streetfire",
                    "Yamaha MX King 150",
                    "Honda Supra GTR 150",
                    "Yamaha Jupiter MX 135",
                    "Honda Sonic 150R",
                    "Suzuki Satria F150",
                    "Kawasaki KLX 150",
                    "Yamaha WR155R",
                    "Honda CRF150L",
                    "Yamaha XSR155"
                ],
                'service' => 'DEPAN',
                'price' => 350000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'motor' => [
                    "Honda CB150R Streetfire",
                    "Yamaha MX King 150",
                    "Honda Supra GTR 150",
                    "Yamaha Jupiter MX 135",
                    "Honda Sonic 150R",
                    "Suzuki Satria F150",
                    "Kawasaki KLX 150",
                    "Yamaha WR155R",
                    "Honda CRF150L",
                    "Yamaha XSR155"
                ],
                'service' => 'BELAKANG',
                'price' => 350000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'motor' => [
                    "Honda CB150R Streetfire",
                    "Yamaha MX King 150",
                    "Honda Supra GTR 150",
                    "Yamaha Jupiter MX 135",
                    "Honda Sonic 150R",
                    "Suzuki Satria F150",
                    "Kawasaki KLX 150",
                    "Yamaha WR155R",
                    "Honda CRF150L",
                    "Yamaha XSR155"
                ],
                'service' => 'USD',
                'price' => 450000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'motor' => [
                    "Honda CB150R Streetfire",
                    "Yamaha MX King 150",
                    "Honda Supra GTR 150",
                    "Yamaha Jupiter MX 135",
                    "Honda Sonic 150R",
                    "Suzuki Satria F150",
                    "Kawasaki KLX 150",
                    "Yamaha WR155R",
                    "Honda CRF150L",
                    "Yamaha XSR155"
                ],
                'service' => 'USD REALJUMP',
                'price' => 500000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'motor' => [
                    "Honda CBR150R",
                    "Yamaha R15",
                    "Kawasaki Ninja 150",
                    "Suzuki GSX-R150",
                    "Yamaha MT-15",
                    "Kawasaki KLX150BF (Big Foot)",
                    "Honda CRF150L",
                    "Yamaha WR155R",
                    "Kawasaki D-Tracker 150",
                    "Honda CB150X"
                ],
                'service' => 'DEPAN',
                'price' => 400000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'motor' => [
                    "Honda CBR150R",
                    "Yamaha R15",
                    "Kawasaki Ninja 150",
                    "Suzuki GSX-R150",
                    "Yamaha MT-15",
                    "Kawasaki KLX150BF (Big Foot)",
                    "Honda CRF150L",
                    "Yamaha WR155R",
                    "Kawasaki D-Tracker 150",
                    "Honda CB150X"
                ],
                'service' => 'BELAKANG',
                'price' => 400000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'motor' => [
                    "Honda CBR150R",
                    "Yamaha R15",
                    "Kawasaki Ninja 150",
                    "Suzuki GSX-R150",
                    "Yamaha MT-15",
                    "Kawasaki KLX150BF (Big Foot)",
                    "Honda CRF150L",
                    "Yamaha WR155R",
                    "Kawasaki D-Tracker 150",
                    "Honda CB150X"
                ],
                'service' => 'USD',
                'price' => 500000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'motor' => [
                    "Honda CBR150R",
                    "Yamaha R15",
                    "Kawasaki Ninja 150",
                    "Suzuki GSX-R150",
                    "Yamaha MT-15",
                    "Kawasaki KLX150BF (Big Foot)",
                    "Honda CRF150L",
                    "Yamaha WR155R",
                    "Kawasaki D-Tracker 150",
                    "Honda CB150X"
                ],
                'service' => 'USD REALJUMP',
                'price' => 550000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki KLX250",
                    "Honda CRF250L",
                    "Yamaha WR250R",
                    "KTM Duke 200",
                    "KTM RC 200",
                    "TVS Apache RTR 200",
                    "Honda CBR250RR",
                    "Kawasaki Versys-X 250",
                    "Benelli TNT 25"
                ],
                'service' => 'DEPAN',
                'price' => 450000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki KLX250",
                    "Honda CRF250L",
                    "Yamaha WR250R",
                    "KTM Duke 200",
                    "KTM RC 200",
                    "TVS Apache RTR 200",
                    "Honda CBR250RR",
                    "Kawasaki Versys-X 250",
                    "Benelli TNT 25"
                ],
                'service' => 'BELAKANG',
                'price' => 450000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki KLX250",
                    "Honda CRF250L",
                    "Yamaha WR250R",
                    "KTM Duke 200",
                    "KTM RC 200",
                    "TVS Apache RTR 200",
                    "Honda CBR250RR",
                    "Kawasaki Versys-X 250",
                    "Benelli TNT 25"
                ],
                'service' => 'USD',
                'price' => 550000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki KLX250",
                    "Honda CRF250L",
                    "Yamaha WR250R",
                    "KTM Duke 200",
                    "KTM RC 200",
                    "TVS Apache RTR 200",
                    "Honda CBR250RR",
                    "Kawasaki Versys-X 250",
                    "Benelli TNT 25"
                ],
                'service' => 'USD REALJUMP',
                'price' => 600000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'motor' => [
                    "Honda CB150R Streetfire",
                    "Yamaha MX King 150",
                    "Honda Supra GTR 150",
                    "Yamaha Jupiter MX 135",
                    "Honda Sonic 150R",
                    "Suzuki Satria F150",
                    "Kawasaki KLX 150",
                    "Yamaha WR155R",
                    "Honda CRF150L",
                    "Yamaha XSR155"
                ],
                'service' => 'DEPAN',
                'price' => 200000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'motor' => [
                    "Honda CB150R Streetfire",
                    "Yamaha MX King 150",
                    "Honda Supra GTR 150",
                    "Yamaha Jupiter MX 135",
                    "Honda Sonic 150R",
                    "Suzuki Satria F150",
                    "Kawasaki KLX 150",
                    "Yamaha WR155R",
                    "Honda CRF150L",
                    "Yamaha XSR155"
                ],
                'service' => 'BELAKANG',
                'price' => 200000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'motor' => [
                    "Honda CB150R Streetfire",
                    "Yamaha MX King 150",
                    "Honda Supra GTR 150",
                    "Yamaha Jupiter MX 135",
                    "Honda Sonic 150R",
                    "Suzuki Satria F150",
                    "Kawasaki KLX 150",
                    "Yamaha WR155R",
                    "Honda CRF150L",
                    "Yamaha XSR155"
                ],
                'service' => 'USD',
                'price' => 300000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'motor' => [
                    "Honda CBR150R",
                    "Yamaha R15",
                    "Kawasaki Ninja 150",
                    "Suzuki GSX-R150",
                    "Yamaha MT-15",
                    "Kawasaki KLX150BF (Big Foot)",
                    "Honda CRF150L",
                    "Yamaha WR155R",
                    "Kawasaki D-Tracker 150",
                    "Honda CB150X"
                ],
                'service' => 'DEPAN',
                'price' => 250000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'motor' => [
                    "Honda CBR150R",
                    "Yamaha R15",
                    "Kawasaki Ninja 150",
                    "Suzuki GSX-R150",
                    "Yamaha MT-15",
                    "Kawasaki KLX150BF (Big Foot)",
                    "Honda CRF150L",
                    "Yamaha WR155R",
                    "Kawasaki D-Tracker 150",
                    "Honda CB150X"
                ],
                'service' => 'BELAKANG',
                'price' => 250000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'motor' => [
                    "Honda CBR150R",
                    "Yamaha R15",
                    "Kawasaki Ninja 150",
                    "Suzuki GSX-R150",
                    "Yamaha MT-15",
                    "Kawasaki KLX150BF (Big Foot)",
                    "Honda CRF150L",
                    "Yamaha WR155R",
                    "Kawasaki D-Tracker 150",
                    "Honda CB150X"
                ],
                'service' => 'USD',
                'price' => 350000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki KLX250",
                    "Honda CRF250L",
                    "Yamaha WR250R",
                    "KTM Duke 200",
                    "KTM RC 200",
                    "TVS Apache RTR 200",
                    "Honda CBR250RR",
                    "Kawasaki Versys-X 250",
                    "Benelli TNT 25"
                ],
                'service' => 'DEPAN',
                'price' => 300000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki KLX250",
                    "Honda CRF250L",
                    "Yamaha WR250R",
                    "KTM Duke 200",
                    "KTM RC 200",
                    "TVS Apache RTR 200",
                    "Honda CBR250RR",
                    "Kawasaki Versys-X 250",
                    "Benelli TNT 25"
                ],
                'service' => 'BELAKANG',
                'price' => 300000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki KLX250",
                    "Honda CRF250L",
                    "Yamaha WR250R",
                    "KTM Duke 200",
                    "KTM RC 200",
                    "TVS Apache RTR 200",
                    "Honda CBR250RR",
                    "Kawasaki Versys-X 250",
                    "Benelli TNT 25"
                ],
                'service' => 'USD',
                'price' => 400000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'motor' => [
                    "Vario KZR",
                    "Vario 110",
                    "Freego",
                    "Genio",
                    "Beat",
                    "Fino",
                    "Scopy",
                    "Suzuki Address",
                    "Suzuki Next",
                    "Suzuki Spin",
                    "Avenis 125",
                    "X-Ride",
                    "Lexi 125",
                    "Filano",
                    "Fazio",
                    "Mio Sporty",
                    "Mio M3",
                    "Mio J",
                    "Soul GT",
                    "Spacy"
                ],
                'service' => 'DEPAN STD',
                'price' => 250000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'motor' => [
                    "Vario KZR",
                    "Vario 110",
                    "Freego",
                    "Genio",
                    "Beat",
                    "Fino",
                    "Scopy",
                    "Suzuki Address",
                    "Suzuki Next",
                    "Suzuki Spin",
                    "Avenis 125",
                    "X-Ride",
                    "Lexi 125",
                    "Filano",
                    "Fazio",
                    "Mio Sporty",
                    "Mio M3",
                    "Mio J",
                    "Soul GT",
                    "Spacy"
                ],
                'service' => 'USD',
                'price' => 300000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'motor' => [
                    "Vario KZR",
                    "Vario 110",
                    "Freego",
                    "Genio",
                    "Beat",
                    "Fino",
                    "Scopy",
                    "Suzuki Address",
                    "Suzuki Next",
                    "Suzuki Spin",
                    "Avenis 125",
                    "X-Ride",
                    "Lexi 125",
                    "Filano",
                    "Fazio",
                    "Mio Sporty",
                    "Mio M3",
                    "Mio J",
                    "Soul GT",
                    "Spacy"
                ],
                'service' => 'BLKG SINGLE',
                'price' => 300000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'motor' => [
                    "Vario KZR",
                    "Vario 110",
                    "Freego",
                    "Genio",
                    "Beat",
                    "Fino",
                    "Scopy",
                    "Suzuki Address",
                    "Suzuki Next",
                    "Suzuki Spin",
                    "Avenis 125",
                    "X-Ride",
                    "Lexi 125",
                    "Filano",
                    "Fazio",
                    "Mio Sporty",
                    "Mio M3",
                    "Mio J",
                    "Soul GT",
                    "Spacy"
                ],
                'service' => 'BLKG DOUBLE',
                'price' => 350000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'motor' => [
                    "NMAX",
                    "Aerox",
                    "PCX",
                    "Vario",
                    "ADV",
                    "Stylo",
                    "Lexi"
                ],
                'service' => 'DEPAN STD',
                'price' => 300000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'motor' => [
                    "NMAX",
                    "Aerox",
                    "PCX",
                    "Vario",
                    "ADV",
                    "Stylo",
                    "Lexi"
                ],
                'service' => 'USD',
                'price' => 400000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'motor' => [
                    "NMAX",
                    "Aerox",
                    "PCX",
                    "Vario",
                    "ADV",
                    "Stylo",
                    "Lexi"
                ],
                'service' => 'BLKG SINGLE',
                'price' => 350000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'motor' => [
                    "NMAX",
                    "Aerox",
                    "PCX",
                    "Vario",
                    "ADV",
                    "Stylo",
                    "Lexi"
                ],
                'service' => 'BLKG DOUBLE',
                'price' => 400000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'motor' => [
                    "XMAX",
                    "Beneli Zefferano",
                    "SYM GTS",
                    "Kymco X Town",
                    "BMW C 650 GT",
                    "Kymco Downtown",
                    "Honda Forza",
                    "TMAX",
                    "Burgman",
                    "Kymco Xciting",
                    "BMW C400"
                ],
                'service' => 'DEPAN STD',
                'price' => 450000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'motor' => [
                    "XMAX",
                    "Beneli Zefferano",
                    "SYM GTS",
                    "Kymco X Town",
                    "BMW C 650 GT",
                    "Kymco Downtown",
                    "Honda Forza",
                    "TMAX",
                    "Burgman",
                    "Kymco Xciting",
                    "BMW C400"
                ],
                'service' => 'USD',
                'price' => 500000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'motor' => [
                    "XMAX",
                    "Beneli Zefferano",
                    "SYM GTS",
                    "Kymco X Town",
                    "BMW C 650 GT",
                    "Kymco Downtown",
                    "Honda Forza",
                    "TMAX",
                    "Burgman",
                    "Kymco Xciting",
                    "BMW C400"
                ],
                'service' => 'BELAKANG',
                'price' => 450000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'motor' => [
                    "Yamaha TMAX",
                    "Honda Forza 750",
                    "Honda X-ADV",
                    "Suzuki Burgman 400",
                    "Kymco AK 550",
                    "BMW C 400 X",
                    "BMW C 400 GT",
                    "BMW C 650 GT",
                    "Kymco Xciting 400",
                    "Vespa GTS 300"
                ],
                'service' => 'DEPAN STD',
                'price' => 550000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'motor' => [
                    "Yamaha TMAX",
                    "Honda Forza 750",
                    "Honda X-ADV",
                    "Suzuki Burgman 400",
                    "Kymco AK 550",
                    "BMW C 400 X",
                    "BMW C 400 GT",
                    "BMW C 650 GT",
                    "Kymco Xciting 400",
                    "Vespa GTS 300"
                ],
                'service' => 'USD',
                'price' => 600000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'motor' => [
                    "Yamaha TMAX",
                    "Honda Forza 750",
                    "Honda X-ADV",
                    "Suzuki Burgman 400",
                    "Kymco AK 550",
                    "BMW C 400 X",
                    "BMW C 400 GT",
                    "BMW C 650 GT",
                    "Kymco Xciting 400",
                    "Vespa GTS 300"
                ],
                'service' => 'BELAKANG',
                'price' => 550000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'motor' => [
                    "Honda CB150R Streetfire",
                    "Yamaha MX King 150",
                    "Honda Supra GTR 150",
                    "Yamaha Jupiter MX 135",
                    "Honda Sonic 150R",
                    "Suzuki Satria F150",
                    "Kawasaki KLX 150",
                    "Yamaha WR155R",
                    "Honda CRF150L",
                    "Yamaha XSR155"
                ],
                'service' => 'DEPAN STD',
                'price' => 350000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'motor' => [
                    "Honda CB150R Streetfire",
                    "Yamaha MX King 150",
                    "Honda Supra GTR 150",
                    "Yamaha Jupiter MX 135",
                    "Honda Sonic 150R",
                    "Suzuki Satria F150",
                    "Kawasaki KLX 150",
                    "Yamaha WR155R",
                    "Honda CRF150L",
                    "Yamaha XSR155"
                ],
                'service' => 'USD',
                'price' => 450000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'motor' => [
                    "Honda CB150R Streetfire",
                    "Yamaha MX King 150",
                    "Honda Supra GTR 150",
                    "Yamaha Jupiter MX 135",
                    "Honda Sonic 150R",
                    "Suzuki Satria F150",
                    "Kawasaki KLX 150",
                    "Yamaha WR155R",
                    "Honda CRF150L",
                    "Yamaha XSR155"
                ],
                'service' => 'BELAKANG',
                'price' => 350000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'motor' => [
                    "Honda CBR150R",
                    "Yamaha R15",
                    "Kawasaki Ninja 150",
                    "Suzuki GSX-R150",
                    "Yamaha MT-15",
                    "Kawasaki KLX150BF (Big Foot)",
                    "Honda CRF150L",
                    "Yamaha WR155R",
                    "Kawasaki D-Tracker 150",
                    "Honda CB150X"
                ],
                'service' => 'DEPAN STD',
                'price' => 400000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'motor' => [
                    "Honda CBR150R",
                    "Yamaha R15",
                    "Kawasaki Ninja 150",
                    "Suzuki GSX-R150",
                    "Yamaha MT-15",
                    "Kawasaki KLX150BF (Big Foot)",
                    "Honda CRF150L",
                    "Yamaha WR155R",
                    "Kawasaki D-Tracker 150",
                    "Honda CB150X"
                ],
                'service' => 'USD',
                'price' => 550000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'motor' => [
                    "Honda CBR150R",
                    "Yamaha R15",
                    "Kawasaki Ninja 150",
                    "Suzuki GSX-R150",
                    "Yamaha MT-15",
                    "Kawasaki KLX150BF (Big Foot)",
                    "Honda CRF150L",
                    "Yamaha WR155R",
                    "Kawasaki D-Tracker 150",
                    "Honda CB150X"
                ],
                'service' => 'BELAKANG',
                'price' => 450000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki KLX250",
                    "Honda CRF250L",
                    "Yamaha WR250R",
                    "KTM Duke 200",
                    "KTM RC 200",
                    "TVS Apache RTR 200",
                    "Honda CBR250RR",
                    "Kawasaki Versys-X 250",
                    "Benelli TNT 25"
                ],
                'service' => 'DEPAN',
                'price' => 450000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki KLX250",
                    "Honda CRF250L",
                    "Yamaha WR250R",
                    "KTM Duke 200",
                    "KTM RC 200",
                    "TVS Apache RTR 200",
                    "Honda CBR250RR",
                    "Kawasaki Versys-X 250",
                    "Benelli TNT 25"
                ],
                'service' => 'USD',
                'price' => 600000
            ],
            [
                'category' => 'DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki KLX250",
                    "Honda CRF250L",
                    "Yamaha WR250R",
                    "KTM Duke 200",
                    "KTM RC 200",
                    "TVS Apache RTR 200",
                    "Honda CBR250RR",
                    "Kawasaki Versys-X 250",
                    "Benelli TNT 25"
                ],
                'service' => 'BELAKANG',
                'price' => 450000
            ],
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
                'motor' => [
                    "Vario KZR",
                    "Vario 110",
                    "Freego",
                    "Genio",
                    "Beat",
                    "Fino",
                    "Scopy",
                    "Suzuki Address",
                    "Suzuki Next",
                    "Suzuki Spin",
                    "Avenis 125",
                    "X-Ride",
                    "Lexi 125",
                    "Filano",
                    "Fazio",
                    "Mio Sporty",
                    "Mio M3",
                    "Mio J",
                    "Soul GT",
                    "Spacy"
                ],
                'service' => 'DEPAN STD',
                'price' => 250000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'motor' => [
                    "Vario KZR",
                    "Vario 110",
                    "Freego",
                    "Genio",
                    "Beat",
                    "Fino",
                    "Scopy",
                    "Suzuki Address",
                    "Suzuki Next",
                    "Suzuki Spin",
                    "Avenis 125",
                    "X-Ride",
                    "Lexi 125",
                    "Filano",
                    "Fazio",
                    "Mio Sporty",
                    "Mio M3",
                    "Mio J",
                    "Soul GT",
                    "Spacy"
                ],
                'service' => 'USD',
                'price' => 300000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'motor' => [
                    "Vario KZR",
                    "Vario 110",
                    "Freego",
                    "Genio",
                    "Beat",
                    "Fino",
                    "Scopy",
                    "Suzuki Address",
                    "Suzuki Next",
                    "Suzuki Spin",
                    "Avenis 125",
                    "X-Ride",
                    "Lexi 125",
                    "Filano",
                    "Fazio",
                    "Mio Sporty",
                    "Mio M3",
                    "Mio J",
                    "Soul GT",
                    "Spacy"
                ],
                'service' => 'BLKG SINGLE',
                'price' => 300000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'motor' => [
                    "Vario KZR",
                    "Vario 110",
                    "Freego",
                    "Genio",
                    "Beat",
                    "Fino",
                    "Scopy",
                    "Suzuki Address",
                    "Suzuki Next",
                    "Suzuki Spin",
                    "Avenis 125",
                    "X-Ride",
                    "Lexi 125",
                    "Filano",
                    "Fazio",
                    "Mio Sporty",
                    "Mio M3",
                    "Mio J",
                    "Soul GT",
                    "Spacy"
                ],
                'service' => 'BLKG DOUBLE',
                'price' => 350000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'motor' => [
                    "NMAX",
                    "Aerox",
                    "PCX",
                    "Vario",
                    "ADV",
                    "Stylo",
                    "Lexi"
                ],
                'service' => 'DEPAN STD',
                'price' => 300000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'motor' => [
                    "NMAX",
                    "Aerox",
                    "PCX",
                    "Vario",
                    "ADV",
                    "Stylo",
                    "Lexi"
                ],
                'service' => 'USD',
                'price' => 400000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'motor' => [
                    "NMAX",
                    "Aerox",
                    "PCX",
                    "Vario",
                    "ADV",
                    "Stylo",
                    "Lexi"
                ],
                'service' => 'BLKG SINGLE',
                'price' => 350000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'motor' => [
                    "NMAX",
                    "Aerox",
                    "PCX",
                    "Vario",
                    "ADV",
                    "Stylo",
                    "Lexi"
                ],
                'service' => 'BLKG DOUBLE',
                'price' => 400000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'motor' => [
                    "XMAX",
                    "Beneli Zefferano",
                    "SYM GTS",
                    "Kymco X Town",
                    "BMW C 650 GT",
                    "Kymco Downtown",
                    "Honda Forza",
                    "TMAX",
                    "Burgman",
                    "Kymco Xciting",
                    "BMW C400"
                ],
                'service' => 'DEPAN STD',
                'price' => 450000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'motor' => [
                    "XMAX",
                    "Beneli Zefferano",
                    "SYM GTS",
                    "Kymco X Town",
                    "BMW C 650 GT",
                    "Kymco Downtown",
                    "Honda Forza",
                    "TMAX",
                    "Burgman",
                    "Kymco Xciting",
                    "BMW C400"
                ],
                'service' => 'USD',
                'price' => 500000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'motor' => [
                    "XMAX",
                    "Beneli Zefferano",
                    "SYM GTS",
                    "Kymco X Town",
                    "BMW C 650 GT",
                    "Kymco Downtown",
                    "Honda Forza",
                    "TMAX",
                    "Burgman",
                    "Kymco Xciting",
                    "BMW C400"
                ],
                'service' => 'BELAKANG',
                'price' => 450000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'motor' => [
                    "Yamaha TMAX",
                    "Honda Forza 750",
                    "Honda X-ADV",
                    "Suzuki Burgman 400",
                    "Kymco AK 550",
                    "BMW C 400 X",
                    "BMW C 400 GT",
                    "BMW C 650 GT",
                    "Kymco Xciting 400",
                    "Vespa GTS 300"
                ],
                'service' => 'DEPAN STD',
                'price' => 550000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'motor' => [
                    "Yamaha TMAX",
                    "Honda Forza 750",
                    "Honda X-ADV",
                    "Suzuki Burgman 400",
                    "Kymco AK 550",
                    "BMW C 400 X",
                    "BMW C 400 GT",
                    "BMW C 650 GT",
                    "Kymco Xciting 400",
                    "Vespa GTS 300"
                ],
                'service' => 'USD',
                'price' => 600000
            ],
            [
                'category' => 'REBOUND',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'motor' => [
                    "Yamaha TMAX",
                    "Honda Forza 750",
                    "Honda X-ADV",
                    "Suzuki Burgman 400",
                    "Kymco AK 550",
                    "BMW C 400 X",
                    "BMW C 400 GT",
                    "BMW C 650 GT",
                    "Kymco Xciting 400",
                    "Vespa GTS 300"
                ],
                'service' => 'BELAKANG',
                'price' => 550000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'motor' => [
                    "Vario KZR",
                    "Vario 110",
                    "Freego",
                    "Genio",
                    "Beat",
                    "Fino",
                    "Scopy",
                    "Suzuki Address",
                    "Suzuki Next",
                    "Suzuki Spin",
                    "Avenis 125",
                    "X-Ride",
                    "Lexi 125",
                    "Filano",
                    "Fazio",
                    "Mio Sporty",
                    "Mio M3",
                    "Mio J",
                    "Soul GT",
                    "Spacy"
                ],
                'service' => 'DEPAN STD',
                'price' => 160000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'motor' => [
                    "Vario KZR",
                    "Vario 110",
                    "Freego",
                    "Genio",
                    "Beat",
                    "Fino",
                    "Scopy",
                    "Suzuki Address",
                    "Suzuki Next",
                    "Suzuki Spin",
                    "Avenis 125",
                    "X-Ride",
                    "Lexi 125",
                    "Filano",
                    "Fazio",
                    "Mio Sporty",
                    "Mio M3",
                    "Mio J",
                    "Soul GT",
                    "Spacy"
                ],
                'service' => 'USD',
                'price' => 200000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'motor' => [
                    "Vario KZR",
                    "Vario 110",
                    "Freego",
                    "Genio",
                    "Beat",
                    "Fino",
                    "Scopy",
                    "Suzuki Address",
                    "Suzuki Next",
                    "Suzuki Spin",
                    "Avenis 125",
                    "X-Ride",
                    "Lexi 125",
                    "Filano",
                    "Fazio",
                    "Mio Sporty",
                    "Mio M3",
                    "Mio J",
                    "Soul GT",
                    "Spacy"
                ],
                'service' => 'BELAKANG',
                'price' => 200000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'motor' => [
                    "NMAX",
                    "Aerox",
                    "PCX",
                    "Vario",
                    "ADV",
                    "Stylo",
                    "Lexi"
                ],
                'service' => 'DEPAN STD',
                'price' => 190000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'motor' => [
                    "NMAX",
                    "Aerox",
                    "PCX",
                    "Vario",
                    "ADV",
                    "Stylo",
                    "Lexi"
                ],
                'service' => 'USD',
                'price' => 250000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'motor' => [
                    "NMAX",
                    "Aerox",
                    "PCX",
                    "Vario",
                    "ADV",
                    "Stylo",
                    "Lexi"
                ],
                'service' => 'BELAKANG',
                'price' => 200000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'motor' => [
                    "XMAX",
                    "Beneli Zefferano",
                    "SYM GTS",
                    "Kymco X Town",
                    "BMW C 650 GT",
                    "Kymco Downtown",
                    "Honda Forza",
                    "TMAX",
                    "Burgman",
                    "Kymco Xciting",
                    "BMW C400"
                ],
                'service' => 'DEPAN STD',
                'price' => 450000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'motor' => [
                    "XMAX",
                    "Beneli Zefferano",
                    "SYM GTS",
                    "Kymco X Town",
                    "BMW C 650 GT",
                    "Kymco Downtown",
                    "Honda Forza",
                    "TMAX",
                    "Burgman",
                    "Kymco Xciting",
                    "BMW C400"
                ],
                'service' => 'USD',
                'price' => 500000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'motor' => [
                    "XMAX",
                    "Beneli Zefferano",
                    "SYM GTS",
                    "Kymco X Town",
                    "BMW C 650 GT",
                    "Kymco Downtown",
                    "Honda Forza",
                    "TMAX",
                    "Burgman",
                    "Kymco Xciting",
                    "BMW C400"
                ],
                'service' => 'BELAKANG',
                'price' => 450000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'motor' => [
                    "Yamaha TMAX",
                    "Honda Forza 750",
                    "Honda X-ADV",
                    "Suzuki Burgman 400",
                    "Kymco AK 550",
                    "BMW C 400 X",
                    "BMW C 400 GT",
                    "BMW C 650 GT",
                    "Kymco Xciting 400",
                    "Vespa GTS 300"
                ],
                'service' => 'DEPAN STD',
                'price' => 550000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'motor' => [
                    "Yamaha TMAX",
                    "Honda Forza 750",
                    "Honda X-ADV",
                    "Suzuki Burgman 400",
                    "Kymco AK 550",
                    "BMW C 400 X",
                    "BMW C 400 GT",
                    "BMW C 650 GT",
                    "Kymco Xciting 400",
                    "Vespa GTS 300"
                ],
                'service' => 'USD',
                'price' => 600000
            ],
            [
                'category' => 'MAINTENANCE',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'motor' => [
                    "Yamaha TMAX",
                    "Honda Forza 750",
                    "Honda X-ADV",
                    "Suzuki Burgman 400",
                    "Kymco AK 550",
                    "BMW C 400 X",
                    "BMW C 400 GT",
                    "BMW C 650 GT",
                    "Kymco Xciting 400",
                    "Vespa GTS 300"
                ],
                'service' => 'BELAKANG',
                'price' => 550000
            ],
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
                'motor' => [
                    "Vario KZR",
                    "Vario 110",
                    "Freego",
                    "Genio",
                    "Beat",
                    "Fino",
                    "Scopy",
                    "Suzuki Address",
                    "Suzuki Next",
                    "Suzuki Spin",
                    "Avenis 125",
                    "X-Ride",
                    "Lexi 125",
                    "Filano",
                    "Fazio",
                    "Mio Sporty",
                    "Mio M3",
                    "Mio J",
                    "Soul GT",
                    "Spacy"
                ],
                'service' => 'DEPAN STD',
                'price' => 350000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'motor' => [
                    "Vario KZR",
                    "Vario 110",
                    "Freego",
                    "Genio",
                    "Beat",
                    "Fino",
                    "Scopy",
                    "Suzuki Address",
                    "Suzuki Next",
                    "Suzuki Spin",
                    "Avenis 125",
                    "X-Ride",
                    "Lexi 125",
                    "Filano",
                    "Fazio",
                    "Mio Sporty",
                    "Mio M3",
                    "Mio J",
                    "Soul GT",
                    "Spacy"
                ],
                'service' => 'USD',
                'price' => 400000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'motor' => [
                    "Vario KZR",
                    "Vario 110",
                    "Freego",
                    "Genio",
                    "Beat",
                    "Fino",
                    "Scopy",
                    "Suzuki Address",
                    "Suzuki Next",
                    "Suzuki Spin",
                    "Avenis 125",
                    "X-Ride",
                    "Lexi 125",
                    "Filano",
                    "Fazio",
                    "Mio Sporty",
                    "Mio M3",
                    "Mio J",
                    "Soul GT",
                    "Spacy"
                ],
                'service' => 'BLKG SINGLE',
                'price' => 400000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 110cc-125cc',
                'motor' => [
                    "Vario KZR",
                    "Vario 110",
                    "Freego",
                    "Genio",
                    "Beat",
                    "Fino",
                    "Scopy",
                    "Suzuki Address",
                    "Suzuki Next",
                    "Suzuki Spin",
                    "Avenis 125",
                    "X-Ride",
                    "Lexi 125",
                    "Filano",
                    "Fazio",
                    "Mio Sporty",
                    "Mio M3",
                    "Mio J",
                    "Soul GT",
                    "Spacy"
                ],
                'service' => 'BLKG DOUBLE',
                'price' => 450000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'motor' => [
                    "NMAX",
                    "Aerox",
                    "PCX",
                    "Vario",
                    "ADV",
                    "Stylo",
                    "Lexi"
                ],
                'service' => 'DEPAN STD',
                'price' => 400000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'motor' => [
                    "NMAX",
                    "Aerox",
                    "PCX",
                    "Vario",
                    "ADV",
                    "Stylo",
                    "Lexi"
                ],
                'service' => 'USD',
                'price' => 500000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'motor' => [
                    "NMAX",
                    "Aerox",
                    "PCX",
                    "Vario",
                    "ADV",
                    "Stylo",
                    "Lexi"
                ],
                'service' => 'BLKG SINGLE',
                'price' => 450000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 150cc-160cc',
                'motor' => [
                    "NMAX",
                    "Aerox",
                    "PCX",
                    "Vario",
                    "ADV",
                    "Stylo",
                    "Lexi"
                ],
                'service' => 'BLKG DOUBLE',
                'price' => 500000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'motor' => [
                    "XMAX",
                    "Beneli Zefferano",
                    "SYM GTS",
                    "Kymco X Town",
                    "BMW C 650 GT",
                    "Kymco Downtown",
                    "Honda Forza",
                    "TMAX",
                    "Burgman",
                    "Kymco Xciting",
                    "BMW C400"
                ],
                'service' => 'DEPAN STD',
                'price' => 550000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'motor' => [
                    "XMAX",
                    "Beneli Zefferano",
                    "SYM GTS",
                    "Kymco X Town",
                    "BMW C 650 GT",
                    "Kymco Downtown",
                    "Honda Forza",
                    "TMAX",
                    "Burgman",
                    "Kymco Xciting",
                    "BMW C400"
                ],
                'service' => 'USD',
                'price' => 600000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 200cc-250cc',
                'motor' => [
                    "XMAX",
                    "Beneli Zefferano",
                    "SYM GTS",
                    "Kymco X Town",
                    "BMW C 650 GT",
                    "Kymco Downtown",
                    "Honda Forza",
                    "TMAX",
                    "Burgman",
                    "Kymco Xciting",
                    "BMW C400"
                ],
                'service' => 'BELAKANG',
                'price' => 550000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'motor' => [
                    "Yamaha TMAX",
                    "Honda Forza 750",
                    "Honda X-ADV",
                    "Suzuki Burgman 400",
                    "Kymco AK 550",
                    "BMW C 400 X",
                    "BMW C 400 GT",
                    "BMW C 650 GT",
                    "Kymco Xciting 400",
                    "Vespa GTS 300"
                ],
                'service' => 'DEPAN STD',
                'price' => 650000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'motor' => [
                    "Yamaha TMAX",
                    "Honda Forza 750",
                    "Honda X-ADV",
                    "Suzuki Burgman 400",
                    "Kymco AK 550",
                    "BMW C 400 X",
                    "BMW C 400 GT",
                    "BMW C 650 GT",
                    "Kymco Xciting 400",
                    "Vespa GTS 300"
                ],
                'service' => 'USD',
                'price' => 700000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'BEBEK/MATIC 400cc-750cc',
                'motor' => [
                    "Yamaha TMAX",
                    "Honda Forza 750",
                    "Honda X-ADV",
                    "Suzuki Burgman 400",
                    "Kymco AK 550",
                    "BMW C 400 X",
                    "BMW C 400 GT",
                    "BMW C 650 GT",
                    "Kymco Xciting 400",
                    "Vespa GTS 300"
                ],
                'service' => 'BELAKANG',
                'price' => 650000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'motor' => [
                    "Honda CB150R Streetfire",
                    "Yamaha MX King 150",
                    "Honda Supra GTR 150",
                    "Yamaha Jupiter MX 135",
                    "Honda Sonic 150R",
                    "Suzuki Satria F150",
                    "Kawasaki KLX 150",
                    "Yamaha WR155R",
                    "Honda CRF150L",
                    "Yamaha XSR155"
                ],
                'service' => 'DEPAN STD',
                'price' => 450000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'motor' => [
                    "Honda CB150R Streetfire",
                    "Yamaha MX King 150",
                    "Honda Supra GTR 150",
                    "Yamaha Jupiter MX 135",
                    "Honda Sonic 150R",
                    "Suzuki Satria F150",
                    "Kawasaki KLX 150",
                    "Yamaha WR155R",
                    "Honda CRF150L",
                    "Yamaha XSR155"
                ],
                'service' => 'USD',
                'price' => 500000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 110cc-140cc',
                'motor' => [
                    "Honda CB150R Streetfire",
                    "Yamaha MX King 150",
                    "Honda Supra GTR 150",
                    "Yamaha Jupiter MX 135",
                    "Honda Sonic 150R",
                    "Suzuki Satria F150",
                    "Kawasaki KLX 150",
                    "Yamaha WR155R",
                    "Honda CRF150L",
                    "Yamaha XSR155"
                ],
                'service' => 'BELAKANG',
                'price' => 450000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'motor' => [
                    "Honda CBR150R",
                    "Yamaha R15",
                    "Kawasaki Ninja 150",
                    "Suzuki GSX-R150",
                    "Yamaha MT-15",
                    "Kawasaki KLX150BF (Big Foot)",
                    "Honda CRF150L",
                    "Yamaha WR155R",
                    "Kawasaki D-Tracker 150",
                    "Honda CB150X"
                ],
                'service' => 'DEPAN STD',
                'price' => 500000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'motor' => [
                    "Honda CBR150R",
                    "Yamaha R15",
                    "Kawasaki Ninja 150",
                    "Suzuki GSX-R150",
                    "Yamaha MT-15",
                    "Kawasaki KLX150BF (Big Foot)",
                    "Honda CRF150L",
                    "Yamaha WR155R",
                    "Kawasaki D-Tracker 150",
                    "Honda CB150X"
                ],
                'service' => 'USD',
                'price' => 650000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 150cc-180cc',
                'motor' => [
                    "Honda CBR150R",
                    "Yamaha R15",
                    "Kawasaki Ninja 150",
                    "Suzuki GSX-R150",
                    "Yamaha MT-15",
                    "Kawasaki KLX150BF (Big Foot)",
                    "Honda CRF150L",
                    "Yamaha WR155R",
                    "Kawasaki D-Tracker 150",
                    "Honda CB150X"
                ],
                'service' => 'BELAKANG',
                'price' => 500000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki KLX250",
                    "Honda CRF250L",
                    "Yamaha WR250R",
                    "KTM Duke 200",
                    "KTM RC 200",
                    "TVS Apache RTR 200",
                    "Honda CBR250RR",
                    "Kawasaki Versys-X 250",
                    "Benelli TNT 25"
                ],
                'service' => 'DEPAN STD',
                'price' => 550000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki KLX250",
                    "Honda CRF250L",
                    "Yamaha WR250R",
                    "KTM Duke 200",
                    "KTM RC 200",
                    "TVS Apache RTR 200",
                    "Honda CBR250RR",
                    "Kawasaki Versys-X 250",
                    "Benelli TNT 25"
                ],
                'service' => 'USD',
                'price' => 550000
            ],
            [
                'category' => 'PAKET REBOUND & DOWNSIZE',
                'subcategory' => 'SPORT/NAKED/TRAIL 200cc-230cc',
                'motor' => [
                    "Kawasaki Ninja 250",
                    "Kawasaki KLX250",
                    "Honda CRF250L",
                    "Yamaha WR250R",
                    "KTM Duke 200",
                    "KTM RC 200",
                    "TVS Apache RTR 200",
                    "Honda CBR250RR",
                    "Kawasaki Versys-X 250",
                    "Benelli TNT 25"
                ],
                'service' => 'BELAKANG',
                'price' => 750000
            ],
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
            return $item['category'] == 'REBOUND';
        });
        return view('rebound', ['data' => $data]);
    }
}
