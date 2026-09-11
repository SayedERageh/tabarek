<?php

namespace Database\Seeders;

use App\Models\HeroSlide;
use Illuminate\Database\Seeder;

class HeroSlideSeeder extends Seeder
{
    public function run(): void
    {
        HeroSlide::query()->delete();

        HeroSlide::create([
            'title_ar' => 'حلول صناعية متكاملة',
            'title_en' => 'Integrated Industrial Solutions',

            'subtitle_ar' => 'تبرك لخدمات السقالات والمشروعات الصناعية',
            'subtitle_en' => 'Tabarak Scaffold Services',

            'description_ar' => 'نقدم حلولاً متخصصة في السقالات والإنشاءات الصناعية والعزل وخدمات محطات الطاقة وفق أعلى معايير الجودة والسلامة.',
            'description_en' => 'Specialized solutions in scaffolding, industrial construction, insulation, and power plant services with the highest standards of quality and safety.',

            'image' => 'hero-slides/slide-1.jpg',

            'button_text_ar' => 'اكتشف خدماتنا',
            'button_text_en' => 'Explore Our Services',
            'button_url' => '/services',

            'secondary_button_text_ar' => 'تواصل معنا',
            'secondary_button_text_en' => 'Contact Us',
            'secondary_button_url' => '/contact',

            'sort_order' => 1,
            'is_active' => true,
        ]);

        HeroSlide::create([
            'title_ar' => 'السقالات باحترافية وأمان',
            'title_en' => 'Professional & Safe Scaffolding',

            'subtitle_ar' => 'خبرة. جودة. سلامة.',
            'subtitle_en' => 'Experience. Quality. Safety.',

            'description_ar' => 'خدمات متكاملة لتركيب وتعديل وفحص وفك السقالات لمشروعات الإنشاء والصيانة والإيقاف والصيانة الدورية.',
            'description_en' => 'Complete scaffolding services including erection, modification, inspection, and dismantling for construction, maintenance, shutdown, and turnaround projects.',

            'image' => 'hero-slides/slide-2.jpg',

            'button_text_ar' => 'خدمات السقالات',
            'button_text_en' => 'Scaffolding Services',
            'button_url' => '/services',

            'secondary_button_text_ar' => 'اعرف المزيد',
            'secondary_button_text_en' => 'Learn More',
            'secondary_button_url' => '/about',

            'sort_order' => 2,
            'is_active' => true,
        ]);

        HeroSlide::create([
            'title_ar' => 'شريكك في المشروعات الصناعية والطاقة',
            'title_en' => 'Your Partner in Industrial & Energy Projects',

            'subtitle_ar' => 'نبني الأداء... ونلتزم بالسلامة',
            'subtitle_en' => 'Built on Safety. Driven by Quality.',

            'description_ar' => 'ندعم مشروعات النفط والغاز والطاقة ومحطات الكهرباء والمشروعات الصناعية بخبرات فنية وتنفيذ منضبط.',
            'description_en' => 'Supporting Oil & Gas, Power, Energy, and Industrial projects through technical expertise and disciplined execution.',

            'image' => 'hero-slides/slide-3.jpg',

            'button_text_ar' => 'مشروعاتنا',
            'button_text_en' => 'Our Projects',
            'button_url' => '/projects',

            'secondary_button_text_ar' => 'اطلب استشارة',
            'secondary_button_text_en' => 'Request Consultation',
            'secondary_button_url' => '/contact',

            'sort_order' => 3,
            'is_active' => true,
        ]);
    }
}