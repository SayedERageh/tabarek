<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $projects = [
            [
                'title_ar' => 'مشروعات محطات الكهرباء',
                'title_en' => 'Power Plant Projects',
                'slug' => 'power-plant-projects',
                'category_ar' => 'محطات الطاقة',
                'category_en' => 'Power Plants',
                'description_ar' => 'تنفيذ ودعم أعمال المشروعات الخاصة بمحطات توليد الكهرباء.',
                'description_en' => 'Execution and support services for power generation projects.',
                'location_ar' => 'مصر',
                'location_en' => 'Egypt',
                'image' => 'projects/power-plant.jpg',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title_ar' => 'مشروعات النفط والغاز',
                'title_en' => 'Oil & Gas Projects',
                'slug' => 'oil-gas-projects',
                'category_ar' => 'النفط والغاز',
                'category_en' => 'Oil & Gas',
                'description_ar' => 'خدمات صناعية متخصصة لمشروعات النفط والغاز والبتروكيماويات.',
                'description_en' => 'Specialized industrial services for Oil & Gas and petrochemical projects.',
                'location_ar' => 'مصر',
                'location_en' => 'Egypt',
                'image' => 'projects/oil-gas.jpg',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title_ar' => 'مشروعات السقالات الصناعية',
                'title_en' => 'Industrial Scaffolding Projects',
                'slug' => 'industrial-scaffolding-projects',
                'category_ar' => 'السقالات',
                'category_en' => 'Scaffolding',
                'description_ar' => 'تنفيذ أعمال السقالات لمشروعات الإنشاء والصيانة والإيقاف.',
                'description_en' => 'Scaffolding execution for construction, maintenance, shutdown, and turnaround projects.',
                'location_ar' => 'مصر',
                'location_en' => 'Egypt',
                'image' => 'projects/scaffolding.jpg',
                'sort_order' => 3,
                'is_active' => true,
            ],
        ];

        foreach ($projects as $project) {
            Project::updateOrCreate(
                ['slug' => $project['slug']],
                $project
            );
        }
    }
}