<?php

namespace Database\Seeders;

use App\Models\HomeSection;
use Illuminate\Database\Seeder;

class HomeSectionSeeder extends Seeder
{
    public function run(): void
    {
        $sections = [
            [
                'key' => 'about',
                'title_ar' => 'من نحن',
                'title_en' => 'ABOUT US',
                'subtitle_ar' => 'خبرة صناعية موثوقة',
                'subtitle_en' => 'Trusted Industrial Expertise',
                'description_ar' => 'نقدم حلولًا متخصصة في الإنشاءات الصناعية والسقالات والعزل وخدمات محطات الطاقة.',
                'description_en' => 'We deliver specialized solutions in industrial construction, scaffolding, insulation, and power plant services.',
                'button_text_ar' => 'اعرف المزيد',
                'button_text_en' => 'Learn More',
                'button_url' => '/about',
            ],

            [
                'key' => 'services',
                'title_ar' => 'خدماتنا',
                'title_en' => 'OUR SERVICES',
                'subtitle_ar' => 'حلول صناعية متخصصة',
                'subtitle_en' => 'Specialized Industrial Solutions',
                'description_ar' => 'خدمات متكاملة مصممة لتلبية متطلبات المشاريع الصناعية الكبرى.',
                'description_en' => 'Integrated services designed to meet the requirements of major industrial projects.',
                'button_text_ar' => 'جميع الخدمات',
                'button_text_en' => 'All Services',
                'button_url' => '/services',
            ],

            [
                'key' => 'values',
                'title_ar' => 'قيمنا الأساسية',
                'title_en' => 'OUR CORE VALUES',
                'subtitle_ar' => 'نبني الثقة من خلال ما نفعله',
                'subtitle_en' => 'Building Trust Through What We Do',
                'description_ar' => 'السلامة والجودة والالتزام والاعتمادية هي أساس عملنا.',
                'description_en' => 'Safety, quality, commitment, and reliability are at the heart of everything we do.',
            ],

            [
                'key' => 'projects',
                'title_ar' => 'مشروعاتنا',
                'title_en' => 'OUR PROJECTS',
                'subtitle_ar' => 'خبرة في المشاريع الصناعية الكبرى',
                'subtitle_en' => 'Experience Across Major Industrial Projects',
                'description_ar' => 'نساهم في تنفيذ ودعم المشاريع الصناعية والطاقة ومحطات القوى.',
                'description_en' => 'We contribute to the execution and support of industrial, energy, and power projects.',
                'button_text_ar' => 'جميع المشروعات',
                'button_text_en' => 'All Projects',
                'button_url' => '/projects',
            ],

            [
                'key' => 'commitment',
                'title_ar' => 'التزامنا',
                'title_en' => 'OUR COMMITMENT',
                'subtitle_ar' => 'شريك يعتمد عليه',
                'subtitle_en' => 'A Partner You Can Depend On',
                'description_ar' => 'نلتزم بتقديم حلول آمنة وموثوقة وفعالة طوال دورة حياة المشروع.',
                'description_en' => 'We are committed to delivering safe, reliable, and efficient solutions throughout the project lifecycle.',
            ],

            [
                'key' => 'cta',
                'title_ar' => 'هل لديك مشروع صناعي؟',
                'title_en' => 'HAVE AN INDUSTRIAL PROJECT?',
                'subtitle_ar' => 'لنعمل معًا',
                'subtitle_en' => 'LET’S WORK TOGETHER',
                'description_ar' => 'تواصل معنا لمناقشة متطلبات مشروعك والحلول المناسبة له.',
                'description_en' => 'Contact us to discuss your project requirements and the right solutions for your needs.',
                'button_text_ar' => 'تواصل معنا',
                'button_text_en' => 'Contact Us',
                'button_url' => '/contact',
            ],
        ];

        foreach ($sections as $section) {
            HomeSection::updateOrCreate(
                ['key' => $section['key']],
                $section
            );
        }
    }
}