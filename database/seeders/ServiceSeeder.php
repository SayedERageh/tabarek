<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'title_ar' => 'خدمات السقالات',
                'title_en' => 'Scaffolding Services',
                'slug' => 'scaffolding-services',
                'short_description_ar' => 'تركيب وتعديل وفحص وفك السقالات للمشروعات الصناعية.',
                'short_description_en' => 'Erection, modification, inspection, and dismantling of scaffolding for industrial projects.',
                'description_ar' => 'نقدم خدمات متكاملة للسقالات تشمل المعاينة والتصميم والتركيب والتعديل والفحص والفك لمشروعات الإنشاء والصيانة والإيقاف.',
                'description_en' => 'We provide complete scaffolding services including surveys, design, erection, modification, inspection, and dismantling for construction, maintenance, shutdown, and turnaround projects.',
                'icon' => 'bi bi-ladder',
                'image' => 'services/scaffolding.jpg',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title_ar' => 'الإنشاءات الصناعية',
                'title_en' => 'Industrial Construction',
                'slug' => 'industrial-construction',
                'short_description_ar' => 'حلول متخصصة للإنشاءات والمشروعات الصناعية.',
                'short_description_en' => 'Specialized solutions for industrial construction projects.',
                'description_ar' => 'تنفيذ أعمال الإنشاءات الصناعية وفق أعلى معايير الجودة والسلامة والكفاءة.',
                'description_en' => 'Industrial construction execution according to the highest standards of quality, safety, and efficiency.',
                'icon' => 'bi bi-building-gear',
                'image' => 'services/industrial-construction.jpg',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title_ar' => 'خدمات العزل',
                'title_en' => 'Insulation Services',
                'slug' => 'insulation-services',
                'short_description_ar' => 'حلول العزل للمشروعات والمنشآت الصناعية.',
                'short_description_en' => 'Insulation solutions for industrial facilities and projects.',
                'description_ar' => 'خدمات عزل متخصصة لدعم كفاءة وسلامة المنشآت الصناعية.',
                'description_en' => 'Specialized insulation services supporting the efficiency and safety of industrial facilities.',
                'icon' => 'bi bi-layers',
                'image' => 'services/insulation.jpg',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'title_ar' => 'خدمات محطات الطاقة',
                'title_en' => 'Power Plant Services',
                'slug' => 'power-plant-services',
                'short_description_ar' => 'خدمات متخصصة لمحطات الكهرباء والمشروعات الصناعية.',
                'short_description_en' => 'Specialized services for power plants and industrial projects.',
                'description_ar' => 'دعم المشروعات الكهربائية ومحطات الطاقة من خلال خدمات التركيب والصيانة والتطوير.',
                'description_en' => 'Supporting power and electrical projects through installation, maintenance, upgrading, and related services.',
                'icon' => 'bi bi-lightning-charge',
                'image' => 'services/power-plant.jpg',
                'sort_order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::updateOrCreate(
                ['slug' => $service['slug']],
                $service
            );
        }
    }
}