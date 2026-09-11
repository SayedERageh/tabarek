<?php

namespace Database\Seeders;

use App\Models\CoreValue;
use Illuminate\Database\Seeder;

class CoreValueSeeder extends Seeder
{
    public function run(): void
    {
        $values = [
            [
                'title_ar' => 'السلامة أولاً',
                'title_en' => 'Safety First',
                'description_ar' => 'نضع صحة وسلامة العاملين والعملاء والمجتمع في مقدمة أولوياتنا.',
                'description_en' => 'We place the health and safety of our people, clients, and communities first.',
                'icon' => 'bi bi-shield-check',
                'sort_order' => 1,
                'is_active' => true,
            ],
            [
                'title_ar' => 'الجودة دون تنازل',
                'title_en' => 'Quality Without Compromise',
                'description_ar' => 'نلتزم بأعلى معايير الجودة في جميع مراحل تنفيذ المشروعات.',
                'description_en' => 'We maintain the highest quality standards throughout project execution.',
                'icon' => 'bi bi-award',
                'sort_order' => 2,
                'is_active' => true,
            ],
            [
                'title_ar' => 'النزاهة والمسؤولية',
                'title_en' => 'Integrity & Accountability',
                'description_ar' => 'نعمل بشفافية ونلتزم بمسؤولياتنا تجاه عملائنا وشركائنا.',
                'description_en' => 'We operate with transparency and take responsibility for our commitments.',
                'icon' => 'bi bi-hand-thumbs-up',
                'sort_order' => 3,
                'is_active' => true,
            ],
            [
                'title_ar' => 'الاعتمادية',
                'title_en' => 'Reliability',
                'description_ar' => 'نقدم حلولاً موثوقة ونلتزم بالمواعيد ومتطلبات المشروع.',
                'description_en' => 'We deliver reliable solutions while meeting project requirements and schedules.',
                'icon' => 'bi bi-check2-circle',
                'sort_order' => 4,
                'is_active' => true,
            ],
            [
                'title_ar' => 'العمل الجماعي',
                'title_en' => 'People & Teamwork',
                'description_ar' => 'نؤمن بقوة الفريق وتطوير الأشخاص والخبرات.',
                'description_en' => 'We believe in strong teamwork and continuous development of our people.',
                'icon' => 'bi bi-people',
                'sort_order' => 5,
                'is_active' => true,
            ],
            [
                'title_ar' => 'التميز التشغيلي',
                'title_en' => 'Operational Excellence',
                'description_ar' => 'نسعى دائماً لتحسين الأداء والكفاءة والإنتاجية.',
                'description_en' => 'We continuously improve performance, efficiency, and productivity.',
                'icon' => 'bi bi-graph-up-arrow',
                'sort_order' => 6,
                'is_active' => true,
            ],
        ];

        foreach ($values as $value) {
            CoreValue::updateOrCreate(
                ['title_en' => $value['title_en']],
                $value
            );
        }
    }
}