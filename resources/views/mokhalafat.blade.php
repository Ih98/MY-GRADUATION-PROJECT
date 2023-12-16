@extends('layout.layout')



@section('content')
    <div id="page" class="container py-5 px-5">



        <!-- start text  -->
        <div class="text-center">
            <h1 class="text-green">نظام الرخصه بالنقاط</h1>
            <h5>المادة 66 مكرر:</h5>


            <P>
                عندما يرتكب السائق احدى المخالفات لحركة المرور المذكورة في الفصل السادس من هذا القانون يتم سحب النقاط حسب
                الجدول ادناه:
            </P>
        </div>

        <!-- end text  -->


        <div class="buttons py-5 w-100">
            <div class="row justify-content-evenly">
                <div class="col">
                    <div class="d-flex justify-content-evenly gap-2 flex-wrap">
                        <button class="btn bg-green text-white">الكل</button>
                        <button class="btn bg-green text-white">نقطة واحدة</button>
                        <button class="btn bg-green text-white">نقطتان</button>
                        <button class="btn bg-green text-white">ثلاثة نقاط</button>
                        <button class="btn bg-green text-white">أربعة نقاط</button>
                        <button class="btn bg-green text-white">الجنح</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- start table  -->
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col" class="text-green">درجتها
                    </th>
                    <th scope="col" class="text-green">إسم المخالفة</th>
                    <th scope="col" class="text-green">عدد نقاطها</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>الدرجة الاولى</td>
                    <td> مخالفه الاحكام المتعلقه بالانارة والاشاره وكبح الدراجات </td>
                    <td>نقطة واحدة</td>
                </tr>


                <tr>
                    <td>الدرجة الاولى</td>
                    <td> مخالفه الاحكام المتعلقه بالاناره والاشاره وكبح الدراجات المتحركه والدراجات الناريه</td>
                    <td>نقطة واحدة</td>
                </tr>


                <tr>
                    <td>الدرجة الاولى</td>
                    <td>مخالفة الاحكام المتعلقه بتقديم وثايق المركبة وعند الاقتضاء شهاده الكفاءه المهنيه </td>
                    <td>نقطة واحدة</td>
                </tr>

                <tr>
                    <td>الدرجة الاولى</td>
                    <td> مخالفه الاحكام المتعلقه باستخدام اله او جهاز مركبه غير مطابق </td>
                    <td>نقطة واحدة</td>
                </tr>

                </td>
                <td>الدرجة الاولى</td>
                <td>مخالفه الراجلين للقواعد التي تنظم سيرهم لا سيما القواعد المتعلقه باستعمال الممرات المحميه </td>
                <td>نقطة واحدة </td>
                </tr>

                <tr>
                    <td>الدرجة الاولى</td>
                    <td> مخالفه الاحكام المتعلقه بالخلل في اجهزة الاناره واشاره السيارات</td>
                    <td>نقطه واحدة </td>
                </tr>

                <tr>
                    <td>الدرجة الاولى</td>
                    <td> مخالفه الاحكام المتعلقه بوضع حزام الامن من قبل راكبي المركبات ذات محرك</td>
                    <td>نقطه واحدة </td>
                </tr>

                <tr>
                    <td>الدرجة الثانية</td>
                    <td> مخالفه الاحكام المتعلقه باستخدام اجهزه التنبيه الصوتي </td>
                    <td>نقطتان</td>
                </tr>
                <tr>
                    <td>الدرجة الثانية</td>
                    <td>مخالفه الاحكام المتعلقه بالمرور في اوساط الطرق او المسالك </td>
                    <td>نقطتان</td>
                </tr>
                <tr>
                    <td>الدرجة الثانيةى</td>
                    <td>مخالفه الاحكام المتعلقه بالتخفيض غير العادي للسرعة بدون اسباب حتميه من شانه تقليص سيوله حركه المرور
                    </td>
                    <td> نقطتان</td>
                </tr>
                <tr>
                    <td>الدرجة الثانية</td>
                    <td>مخالفة الاحكام المتعلقه بلوحات التسجيل والتجهيزات واشاره النقل الاستثنائي وكدا مؤشرات السرعه </td>
                    <td>نقطتان</td>
                </tr>
                <tr>
                    <td>الدرجة الثانية </td>
                    <td>مخالفه الاحكام المتعلقه بالسير على الخط المتواصل </td>
                    <td>نقطتان</td>
                </tr>
                <tr>
                    <td>الدرجة الثانية</td>
                    <td>مخالفه الاحكام المتعلقه بالتوقف او الوقوف التعسفي المعيق لحركه المرور</td>
                    <td>نقطتان</td>
                </tr>
                <tr>
                    <td>الدرجة الثانية</td>
                    <td>مخافه الاحكام المتعلقه بمرور مركبه ذات محرك او مقطوره في المسالك المفتوحة لحركه المرور دون ان تكون
                        هذه تكون هذه المركبه مزودة بلوحتي التسجيل </td>
                    <td>نقطتان</td>
                </tr>
                <tr>
                    <td>الدرجة الثانية</td>
                    <td>مخالفه الاحكام المتعلقه بعدم التصريح بنقل ملكيه المركبه او عدم التصريح بتغييير اقامة مالك المركبه
                    </td>
                    <td>نقطتان</td>
                </tr>
                <tr>
                    <td>الدرجة الثانية</td>
                    <td>مخافه الاحكام المتعلقه بتجاوز حد السرعه القانونيه المرخص بها بنسبه لا تفوق </td>
                    <td>نقطتان</td>
                </tr>
                <tr>
                    <td>الدرجة الثالثة </td>
                    <td>مخالفه الاحكام المتعلقه بتجاوز حد السرعه القانونيه المرخص بها بنسبه تفوق وتقل عن والتي قامت
                        التجهيزات المعتمدة بمعاينتها للمركبات ذات محرك بمقطوره او دون مقطوره او نصف مقطوره في بعض مقاطع
                        الطرق ولكل صنف من اصناف المركبات </td>
                    <td>ثلاث نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الثالثة </td>
                    <td>مخالفه الاحكام المتعلقه بمنع المرور او تقيييده في بعض خطوط السير بالنسبه لبعض اصناف المركبات او
                        بالنسبه للمركبات التى تقوم ببعض انواع النقل </td>
                    <td>ثلاث نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الثالثة</td>
                    <td>مخالفه الاحكام المتعلقه بوضع حزام الامن من قبل سائق مركبه دات محرك </td>
                    <td>ثلاث نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الثالثة</td>
                    <td>مخالفه الاحكام المتعلقه بالارتداء الاجباري للخوذه بالنسبه لسائقي الدراجات المتحركه والدراجات الناريه
                        وراكبيها </td>
                    <td>ثلاث نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الثالثة</td>
                    <td>مخالفه الاحكام المتعلقه بالمرور او التوقف او الوقوف بدون ضرورة حتميه على الشريط الوقوف الاستعجالي
                        للطريق السيار او طريق السريع </td>
                    <td>ثلاث نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الثالثة </td>
                    <td>مخالفه الاحكام المتعلقه بالتوقف والوقوف الخطيرين </td>
                    <td>ثلاث نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الثالثة </td>
                    <td>مخالفه الاحكام المتعلقه بمنع نقل الاطفال الذين تقل اعمارهم عن عشره سنوات في المقاعد الاماميه </td>
                    <td>ثلاث نقاط</td>
                </tr>
                <tr>
                <tr>
                    <td>الدرجة الثالثة </td>
                    <td>مخالفه الاحكام المتعلقه بالمركبات غير مزودة بالتجهيزات التى تسمح للسائق بان يكون له مجال رؤيه كاف
                    </td>
                    <td>ثلاث نقاط</td>
                </tr>


                <tr>
                    <td>الدرجة الثالثة </td>
                    <td>مخالفه الاحكام المتعلقه بوضع شريط بلاستيكي او ايه ماده معتمه اخرى على زجاج المركبه</td>
                    <td>ثلاث نقاط</td>
                </tr>


                <tr>
                    <td>الدرجة الثالثة </td>
                    <td>محالفه الاحكام المتعلقه بعدم التصريح بالتغييرات التى اجريت على المركبه </td>
                    <td>ثلاث نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الثالثة </td>
                    <td>مخالفه الاحكام المتعلقه بالزام حائزي رخص السياقه في الفتره الاختباريه للتكوين وعلى نفقتهم </td>
                    <td>ثلاث نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الثالثة </td>
                    <td>محالفه الاحكام المتعلقه بطبيعه الاطر المطاطيه للمركبات ذات محرك غير المطابقة للمعااايير المقبوله
                        وشكلها وحالتها </td>
                    <td>ثلاث نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الثالثة </td>
                    <td>مخالفه الاحكام المتعلقه بالزاميه المراقبه التقنيه وشكلها وحالتها </td>
                    <td>ثلاث نقاط</td>
                </tr>

                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفه الاحكام المتعلقه باتجاه المرور المفروض </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخافه الاحكام المتعلقه بتقاطع الطرقات واولويه المرور </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفه الاحكام المتعلقه بتقاظع والتجاوز</td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفة الاحكام المتعلقه باشرات الامر بالتوقف التام </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td> الاحكام المتعلقه بالمناورات الممنوعه على الطرق السيارات والطرق السريعه </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفه الاحكام المتعلقه بزيادة السرعة من طرف سائق المركبة اثناء محاوله تجاوزه من قب سائق اخر </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفة الاحكام المتعلقة بسير مركبه بدون اناره او اشاره او وقوفها في وسط الطريق ليلا او انتشار الضباب
                    </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفة الاحكام المتعلقة بسير مركبه بدون اناره او اشاره او وقوفها في وسط الطريق ليلا او انتشار الضباب
                    </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفه الاحكام المتعلقه بمنع المرور على مسلك يقع مباشره على يسار طريق يتضمن ثلاث مسالك او اكثر ذات
                        اتجاه واحد للمرور بالنسبه لمركبات او البضائع </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفه الاحكام المتعلقه بمنع الوقوف او التوقف على اجزاء الطريق التى تعبر سطحها سكه حديدية او سير
                        مركبات غير مرخص لها </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفة الاحكام المتعلقه بعبور بعض مقاطع الطرق للسير او بعض الجسور ذات الحمولة المحدوده </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفه الاحكام المتعلقه بوزن المركبات ذات محرك غير المطابقه للمعايير المقبولة </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفة الاحكام المتعلقه بمكابح المركبات ذات محرك وربط المقطورات ونصف المقطورات </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفه الاحكام المتعلقه بالحمولة القصوى لكل محور مخالفة الاحكام المتعلقه بتركيب جهاز تسجيل وقت
                        السرعه بالمقيت </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفه الاحكام المتعلقه بالتغيير الهام لاتجاه دون تاكد السائق من ان المناوره لا تشكل خطرا على
                        المستعملين </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>محالفه الاحكام المتعلقه باجتياز خط متواصل </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفه الااحكام المتعلقه بتشغيل الاجهزه السمعيه البصريه في مقدمة المركبه اثناء السياقه </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>خالفه الاحكام المتعلقه بالمكوث على الشريط الوسطي الذي يفصل اوساط الطرق في طريق السيار والطريق السريع
                    </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفة الاحكام المتعلقه بحجم المركبات وتركيب اجهزه انارة واشاره المركبات </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفه الاحكام المتعلقة بتعليم سياقة المركبات ذات محرك بمقابل او بدون مقابل </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفه الاحكام المتعلقه بعدم احترام مدة السياقه ومده الراحة من قبل سائقي مركبات نقل البضايع </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفه الاحكام المتعلقه بحالات الالزام او المنع الخاصه بعبور السكك الحديدية الواقعة على الطريق </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخافة الاحكام المتعلقة باستعمال اليدوي للهاتف النقال او التنصت بكلتا الاذنين بوضع خوذة التنصت
                        الاذاعي والسمعي اثناء السياقة </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفه الاحكام المتعلقه بتجاوز حدود السرعه المنصوص عليها بالنسبة لصنف السائقين الحائيزين رخصه
                        السياقة في الفترة الاختبارية </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفة الاحكام المتعلقه باولوية مرور الراجلين على مستوى الممرات المحمية </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفة الاحكام المتعلقه باولوية مرور الراجلين على مستوى الممرات المحمية </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفه الاحكام المتعلقه بتصاعد الدخان والغازات السامة واصدار الضجيج عند تجاوز المستويات المحددة
                    </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الدرجة الرابعة </td>
                    <td>مخالفه الاحكام المتعلقه بتجاوز حد السرعه المرخص بها </td>
                    <td>اربع نقاط</td>
                </tr>
                <tr>
                    <td>الجنح </td>
                    <td> الخطا والجرح الحطا نتيجة خطا من السائق او تهاونه او تغافله او عدم احترامه لقواعد حركة المرور </td>
                    <td>عشرة نقاط</td>
                </tr>
                <tr>
                    <td>الجنح </td>
                    <td> القتل الخطا والجرح الخطا في حالة سكر او تحت تاثير مواد مخدرة او اعشاب</td>
                    <td>عشرة نقاط</td>
                </tr>
                <tr>
                    <td>الجنح </td>
                    <td>القتل الخطا او الجرح الخطا نتيجة ارتكاب احدى المخالفات الاتيه </td>
                    <td>عشرة نقاط</td>
                </tr>
                <tr>
                    <td>الجنح </td>
                    <td>الافراط في السرعة </td>
                    <td>عشرة نقاط</td>
                </tr>
                <tr>
                    <td>الجنح </td>
                    <td>التجاوز الخطير </td>
                    <td>عشرة نقاط</td>
                </tr>
                <tr>
                    <td>الجنح </td>
                    <td> احترام الاولوية القانونية </td>
                    <td>عشرة نقاط</td>
                </tr>
                <tr>
                    <td>الجنح </td>
                    <td> الامتثال لاشارات الامر بالتوقف التام </td>
                    <td>عشرة نقاط</td>
                </tr>
                <tr>
                    <td>الجنح </td>
                    <td>المناورات الخطيرة </td>
                    <td>عشرة نقاط</td>
                </tr>
                <tr>
                    <td>الجنح </td>
                    <td>السير في الاتجاه الممنوع</td>
                    <td>عشرة نقاط</td>
                </tr>
                <tr>
                    <td>الجنح </td>
                    <td>سير مركبة بدون انارة او اشارة او وقوفها في وسط الطريق ليلا </td>
                    <td>عشرة نقاط</td>
                </tr>
                <tr>
                    <td>الجنح </td>
                    <td>الاستعمال اليدوي للهاتف المحمول او التصنت بكلتا الاذنين بوضع خوذة التصنت الاذاعي السمعي اثناء
                        السياقة </td>
                    <td>عشرة نقاط</td>
                </tr>
                <tr>
                    <td>الجنح </td>
                    <td>تشغيل الاجهزة السمعية البصرية اثناء السياقة </td>
                    <td>عشرة نقاط</td>
                </tr>
                <tr>
                    <td>الجنح </td>
                    <td>القتل الخطا والجرح الخطا مع محاولة الافلات من المسؤوليه </td>
                    <td>عشرة نقاط</td>
                </tr>
            </tbody>
        </table>
        <!-- end table  -->
    </div>
@endsection