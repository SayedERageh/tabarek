<?php

namespace Database\Seeders;

use App\Models\CompanySetting;
use Illuminate\Database\Seeder;

class CompanySettingSeeder extends Seeder
{
    public function run(): void
    {
        CompanySetting::updateOrCreate(
            ['id' => 1],
            [
                'company_name_en' => 'Tabarak Scaffold Services',
                'company_name_ar' => 'تبـارك لخدمات السقالات',

                'email' => 'info@tabarak.com',
                'phone' => '+20 XXX XXX XXXX',
                'whatsapp' => '+20 XXX XXX XXXX',

                'about_en' => <<<'TEXT'
We are a specialized Industrial Construction and Services Company delivering high-quality solutions to the Oil & Gas, Power Generation, Energy, and Industrial sectors.

Our expertise encompasses Industrial Construction, Scaffolding, Insulation, and Power Plant Services, supported by experienced professionals, qualified technical personnel, and skilled site teams capable of working in demanding and highly regulated industrial environments.

We understand that industrial projects require more than technical capability. They require safety, reliability, quality, productivity, and disciplined execution. For this reason, we place HSE and operational excellence at the core of every project we undertake.

From project mobilization and site preparation through execution and completion, we work closely with EPC contractors, main contractors, plant owners, operators, and industrial clients to deliver solutions that meet project specifications, schedules, and performance requirements.

Our teams are committed to maintaining the highest standards of Health, Safety & Environment (HSE), Quality Assurance, Quality Control, and professional project execution.
TEXT,

                'about_ar' => <<<'TEXT'
نحن شركة متخصصة في الإنشاءات والخدمات الصناعية، نقدم حلولًا عالية الجودة لقطاعات النفط والغاز وتوليد الطاقة والطاقة والمشروعات الصناعية.

تشمل خبرتنا الإنشاءات الصناعية والسقالات والعزل وخدمات محطات الطاقة، وندعم أعمالنا بفريق من المهنيين ذوي الخبرة والفنيين المؤهلين وفرق العمل الميدانية القادرة على العمل في البيئات الصناعية الصعبة والخاضعة للمعايير واللوائح.

نحن ندرك أن المشروعات الصناعية تحتاج إلى أكثر من مجرد القدرة الفنية؛ فهي تحتاج إلى السلامة والموثوقية والجودة والإنتاجية والتنفيذ المنضبط.

لذلك نضع الصحة والسلامة والبيئة والتميز التشغيلي في صميم كل مشروع نقوم بتنفيذه.

نعمل عن قرب مع مقاولات الـEPC والمقاولين الرئيسيين ومالكي ومشغلي المصانع والعملاء الصناعيين لتقديم حلول تتوافق مع مواصفات المشروع والجداول الزمنية ومتطلبات الأداء.
TEXT,

                'vision_en' => <<<'TEXT'
To become a leading and trusted industrial services partner across the Oil & Gas, Power, Energy, and Industrial sectors, recognized for safety excellence, superior quality, operational reliability, and outstanding project performance.
TEXT,

                'vision_ar' => <<<'TEXT'
أن نصبح شريكًا صناعيًا رائدًا وموثوقًا في قطاعات النفط والغاز والطاقة والمشروعات الصناعية، وأن نتميز بالسلامة والجودة العالية والموثوقية التشغيلية والأداء المتميز في المشروعات.
TEXT,

                'mission_en' => <<<'TEXT'
To deliver safe, reliable, and cost-effective industrial solutions through experienced people, strong technical capabilities, disciplined execution, and continuous improvement.

We are committed to creating long-term value for our clients by understanding their challenges, responding with practical solutions, and consistently delivering to the highest professional standards.
TEXT,

                'mission_ar' => <<<'TEXT'
تقديم حلول صناعية آمنة وموثوقة وفعالة من حيث التكلفة من خلال فريق من ذوي الخبرة، وقدرات فنية قوية، وتنفيذ منضبط، وتحسين مستمر.

نلتزم بتحقيق قيمة طويلة الأجل لعملائنا من خلال فهم تحدياتهم وتقديم حلول عملية والاستمرار في تنفيذ الأعمال وفقًا لأعلى المعايير المهنية.
TEXT,

                'commitment_en' => <<<'TEXT'
We are committed to being more than a service provider. We strive to be a dependable partner throughout the project lifecycle.

By combining experienced people, technical expertise, strong HSE practices, quality-driven execution, and responsive project support, we help our clients achieve their project objectives safely, efficiently, and successfully.

We are ready to support major industrial projects, power plants, shutdowns, turnarounds, maintenance programs, and construction activities with the professionalism, flexibility, and commitment required by today's industrial sector.

BUILT ON SAFETY. DRIVEN BY QUALITY. DELIVERING PERFORMANCE.

Your Project. Our Commitment.
TEXT,

                'commitment_ar' => <<<'TEXT'
نحن ملتزمون بأن نكون أكثر من مجرد مقدم للخدمات، ونسعى لأن نكون شريكًا موثوقًا طوال دورة حياة المشروع.

من خلال الجمع بين الخبرات البشرية والكفاءة الفنية وممارسات الصحة والسلامة والبيئة القوية والتنفيذ القائم على الجودة والدعم السريع للمشروعات، نساعد عملاءنا على تحقيق أهداف مشروعاتهم بأمان وكفاءة ونجاح.

نحن مستعدون لدعم المشروعات الصناعية الكبرى ومحطات الطاقة وأعمال التوقفات والصيانة وبرامج الـTurnaround وأعمال الإنشاءات، مع توفير الاحترافية والمرونة والالتزام الذي يتطلبه القطاع الصناعي اليوم.

نبني أعمالنا على السلامة. وندفعها بالجودة. ونحقق بها الأداء.

مشروعك. التزامنا.
TEXT,

                'address_en' => 'Egypt',
                'address_ar' => 'مصر',
            ]
        );
    }
}