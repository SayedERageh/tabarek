<?php

namespace Database\Seeders;

use App\Models\PageSeo;
use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingsSeeder extends Seeder
{
    public function run(): void
    {
        /*
        |--------------------------------------------------------------------------
        | Site Settings
        |--------------------------------------------------------------------------
        */

        SiteSetting::updateOrCreate(
            ['id' => 1],
            [
                'site_name' => 'Tabarak',

                'primary_color' => '#55bce8',
                'primary_dark_color' => '#168dcc',

                'secondary_color' => '#061a2b',
                'secondary_dark_color' => '#0b2b43',

                'light_blue_color' => '#dff4fc',
                'light_color' => '#f5f8fa',

                'white_color' => '#ffffff',

                'text_color' => '#182b3a',
                'muted_color' => '#71808d',

                'border_color' => '#dfe7ec',

                'site_description' =>
                    'شركة متخصصة في خدمات السقالات والمقاولات وتوفير حلول آمنة وعالية الجودة.',
            ]
        );


        /*
        |--------------------------------------------------------------------------
        | SEO Pages
        |--------------------------------------------------------------------------
        */

        $pages = [

            /*
            |--------------------------------------------------------------------------
            | Home
            |--------------------------------------------------------------------------
            */

            'home' => [
                'title_ar' => 'تبـارك للسقالات والخدمات',
                'title_en' => 'Tabarak Scaffolding & Services',

                'description_ar' =>
                    'شركة تبـارك متخصصة في خدمات السقالات والحلول الإنشائية وتوفير خدمات آمنة وعالية الجودة.',

                'description_en' =>
                    'Tabarak specializes in scaffolding services and construction solutions with high-quality and safe services.',

                'keywords_ar' =>
                    'سقالات, سقالات معدنية, شركات سقالات, تأجير سقالات, تركيب سقالات',

                'keywords_en' =>
                    'scaffolding, metal scaffolding, scaffolding company, scaffolding rental, scaffolding services',

                'og_title_ar' =>
                    'تبـارك للسقالات والخدمات',

                'og_title_en' =>
                    'Tabarak Scaffolding & Services',

                'og_description_ar' =>
                    'حلول متكاملة وآمنة في مجال السقالات والخدمات الإنشائية.',

                'og_description_en' =>
                    'Professional and safe scaffolding and construction solutions.',
            ],


            /*
            |--------------------------------------------------------------------------
            | About
            |--------------------------------------------------------------------------
            */

            'about' => [
                'title_ar' => 'من نحن | تبـارك للسقالات والخدمات',
                'title_en' => 'About Us | Tabarak Scaffolding & Services',

                'description_ar' =>
                    'تعرف على شركة تبـارك وخبراتها في مجال السقالات والخدمات الإنشائية.',

                'description_en' =>
                    'Learn more about Tabarak and our experience in scaffolding and construction services.',

                'keywords_ar' =>
                    'من نحن, تبـارك, شركة سقالات, خدمات إنشائية',

                'keywords_en' =>
                    'about tabarak, scaffolding company, construction services',

                'og_title_ar' =>
                    'من نحن - تبـارك',

                'og_title_en' =>
                    'About Tabarak',

                'og_description_ar' =>
                    'تعرف على شركة تبـارك وخبراتها وخدماتها.',

                'og_description_en' =>
                    'Learn more about Tabarak and our services.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Services
            |--------------------------------------------------------------------------
            */

            'services' => [
                'title_ar' => 'خدماتنا | تبـارك للسقالات والخدمات',
                'title_en' => 'Services | Tabarak Scaffolding & Services',

                'description_ar' =>
                    'اكتشف خدمات تبـارك المتخصصة في السقالات والحلول الإنشائية.',

                'description_en' =>
                    'Discover Tabarak professional scaffolding and construction services.',

                'keywords_ar' =>
                    'خدمات السقالات, سقالات, تركيب سقالات, تأجير سقالات',

                'keywords_en' =>
                    'scaffolding services, scaffolding installation, scaffolding rental',

                'og_title_ar' =>
                    'خدماتنا - تبـارك',

                'og_title_en' =>
                    'Our Services - Tabarak',

                'og_description_ar' =>
                    'مجموعة متكاملة من خدمات السقالات والحلول الإنشائية.',

                'og_description_en' =>
                    'Professional scaffolding and construction solutions.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Projects
            |--------------------------------------------------------------------------
            */

            'projects' => [
                'title_ar' => 'مشروعاتنا | تبـارك للسقالات والخدمات',
                'title_en' => 'Projects | Tabarak Scaffolding & Services',

                'description_ar' =>
                    'تعرف على أبرز المشروعات التي نفذتها شركة تبـارك في مجال السقالات والخدمات الإنشائية.',

                'description_en' =>
                    'Explore some of Tabarak’s major projects in scaffolding and construction services.',

                'keywords_ar' =>
                    'مشروعات السقالات, مشاريع إنشائية, تبـارك, سقالات',

                'keywords_en' =>
                    'scaffolding projects, construction projects, Tabarak',

                'og_title_ar' =>
                    'مشروعاتنا - تبـارك',

                'og_title_en' =>
                    'Our Projects - Tabarak',

                'og_description_ar' =>
                    'استعرض مشروعات وأعمال شركة تبـارك.',

                'og_description_en' =>
                    'Explore Tabarak projects and completed work.',
            ],


            /*
            |--------------------------------------------------------------------------
            | Contact
            |--------------------------------------------------------------------------
            */

            'contact' => [
                'title_ar' => 'تواصل معنا | تبـارك للسقالات والخدمات',
                'title_en' => 'Contact Us | Tabarak Scaffolding & Services',

                'description_ar' =>
                    'تواصل مع شركة تبـارك للاستفسار عن خدمات السقالات والحلول الإنشائية.',

                'description_en' =>
                    'Contact Tabarak for scaffolding services and construction solutions.',

                'keywords_ar' =>
                    'تواصل معنا, شركة تبـارك, سقالات, خدمات إنشائية',

                'keywords_en' =>
                    'contact Tabarak, scaffolding, construction services',

                'og_title_ar' =>
                    'تواصل معنا - تبـارك',

                'og_title_en' =>
                    'Contact Us - Tabarak',

                'og_description_ar' =>
                    'تواصل معنا لمعرفة المزيد عن خدماتنا وحلولنا.',

                'og_description_en' =>
                    'Get in touch with us to learn more about our services.',
            ],
        ];


        /*
        |--------------------------------------------------------------------------
        | Insert / Update SEO
        |--------------------------------------------------------------------------
        */

        foreach ($pages as $pageKey => $seo) {

            PageSeo::updateOrCreate(
                [
                    'page_key' => $pageKey,
                ],
                array_merge(
                    $seo,
                    [
                        'index' => true,
                        'follow' => true,
                    ]
                )
            );
        }
    }
}