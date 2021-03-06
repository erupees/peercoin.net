<?php
$lang['ar'] = array();
$lang['ar'] += array(
	//Developers
	'developers.rapid_pace' => 'تطويرُ بِيركُيِن يمضي قُدُمًا بوتيرةٍ متسارعة.',
	'developers.core_protocol' => 'البروتوكول الجوهري',
	'developers.core_protocol_desc' => 'الإصدارة القادمة من المحفظة الأصلية، إصدارة 0.5، ستحتوي على الخصائص التالية:',
	'developers.cold_wallet_minting' => 'السَك عبر المحافظ الخاملة',
	'developers.cold_wallet_minting_desc' => 'حاليًا، لسَك عملات جديدة، على المستخدم إبقاء محفظته متصلةٌ بالشبكة، فيما يسمى <strong>بالمحفظة النشطة</strong>. المحافظ النشطة معرضة لخطر السرقة عبر البرمجيات الخبيثة، لأنها يجب أن تبقى متصلة بالشبكة الإلكترونية خلال عملية السَك. في الإصدارة القادمة من بِيركُيِن، ستسمح <strong>مفاتيحُ سَكٍ</strong> خاصة للمستخدمين بالسَك بينما تبقى مفاتيح الصرف السرية غير متصلة بإنترنت إطلاقًا.',
	'developers.optional_checkpointing' => 'فحصٌ إختياري',
	'developers.optional_checkpointing_desc' => 'حاليًا، تستخدم الشبكة نقاط فحصٍ مركزية للحماية من الهجمات. الحاجة لهذا التأمين تتضاءل مع نمو الشبكة، لذا ستغدو نقاط الفحص هذه إختياريةٌ بالإصدارة القادمة. وستكون مغلقةً تلقائيًا بالإصدارات التالية.',
	'developers.peercoin_ecosystem' => 'بيئة بِيركُيِن',
	'developers.peer4commit' => 'أتود المشاركة بتطوير بِيركُيِن وأن <strong>تُجزى</strong> لقاء ذلك؟ ها هي فرصتك! <a href="http://peer4commit.com/">"بِير فور كومّيت"</a> يوفّر ملتقىً مركزيًا للتطوير، يُمكنك فيه :',
	'developers.peer4commit.1' => 'اختيار مشروع والعمل عليه وأن تُجزى لقاء ذلك بعملات من بِيركُيِن.',
	'developers.peer4commit.2' => 'اختيار مشروع تود دعمه، والتبرع بعملات بِيركُيِن للعاملين عليه.',
	'developers.peer4commit.3' => 'ابتكار مشروعٍ جديد وعرضه على الموقع وتلقي التبرعات والمساهمات لتطويره.',
	'developers.what_are_you_waiting_for' => 'ماذا تنتظر؟',
	'developers.get_started' => 'ابدأ مع "بِير فور كومّيت"',
	'developers.notable_community_projects' => 'مشاريع حالية من مجتمع بِيركُيِن',
	'developers.peershares_desc' => '<b>بِيرشيرز</b> هو سجل أسهم رقمي رخيص الكلفةو لامركزي يتيح لروّاد الأعمال جمع التمويل لمشاريعهم ومراقبة ملكية الحصص وتوزيع العوائد بطريقة آلية، كل عملٍ يستخدم بِيرشيرز له سلسلة كُتَل مستقلة عن سواه من الأعمال، يتم تأمينها بسهولة وبتكلفة متدنية بإثبات الرهن كما ببِيركُيِن.',
	'developers.peerbox_desc' => '<b>بِيربُكس</b> هو نظام تشغيل آمن للسَك وإدارة عُقد بِيركُيِن، وهو حاليًا تحت التطوير. يستهدف بِيربُكس العتاد الرخيص الكفء باستهلاك الطاقة كرَسبِري باي، والذي يتسق مع غاية بِيركُيِن وهو توفير عملة معمّاة تستهلك الطاقة بكفاءة. إن كان مصطلح ASIC يشير إلى التنقيب المكرّس والكفء باستهلاك الطاقة، فبِيربُكس هو ال ASIC لإثبات الرهن.',
	'developers.nubits_desc' => '<b>نيوبِتس</b> هو مشروعٌ يكشف عنه صانع البِيرشيرز، "جوردان لِي". نيوبيتس سيكون أول تطبيقات البِيرشيرز، ويهدف إلى حل مشكلة التقلّب بأسعار العملات المعمّاة.',
);
$lang['ar'] += array(
	//Exchanges
	'exchanges.what_are' => 'ما هي البُرصة؟',
	'exchanges.what_are_desc' => '<b>البورصات</b> عادة ما تتيح لك تداول العملات الحكومية كالدولار واليورو، كذلك لتشتري أو تبيع بِيركُيِن هناك بُرصات مماثلة لتسهِّل التداول بين بِيركُيِن والعملات الأخرى مثل بِتكُيِن.',
	'exchanges.buy_sell' => 'إصدار أمرٍ بالبيع أو الشراء',
	'exchanges.buy_sell_desc' => 'التداول يبدأ بإصدار أمرٍ بالبيع أو الشراء. أصدر <b>أمرًا بالشراء</b> لطلب كمية معينة من بِيركُيِن بسعرٍ محدد. أصدر <b>أمرًا بالبيع</b> لعرض عملات بِيركُيِن للبيع. عندما يتطابق السعر المحدد بأمرين أحدهما للبيع والآخر للشراء، يتم التداول تلقائيًا، وتحوّل العملات المتداولة لحسابي طرفي التداول. <b>أمر السوق</b> هو أمرٌ فوري بالبيع أو الشراء بالسعر المتاح بالسوق.',
	'exchanges.fees' => 'الرسوم',
	'exchanges.fees_desc' => 'مع كل تداول، تتقاضى البورصة نسبة صغيرة من العملات المتداولة لقاء تسهيل المعاملات. فيما يعرف <b>برسم التداول</b>. بعض البورصات تفرض أيضًا <b>رَسْمُ سحبٍ</b> حينما تسحب عملاتك الجديدة من البورصة لمحفظتك الخاصة.',
	'exchanges.choosing' => 'اختر بُرصةً',
	'exchanges.disclaimer' => 'تذكير: احرص على سحب عملاتك من البورصة بعد شرائها. حفظهم في محفظتك الخاصة أكثر أمانًا ويسمح لك بالحصول على أجر السَك المقدر ب 1&#37; من عملاتك المرهونة.',
	'exchanges.location' => 'المكان',
	'exchanges.notes' => 'ملاحظات',
	'exchanges.visit' => 'زُر',
);

$lang['ar'] += array(
	'footer.links' => 'روابط',
	'footer.tools' => 'أدوات',
	'footer.exchanges' => 'بورصات',
	'footer.mining' => 'تنقيب',
);
$lang['ar'] += array(
	// FAQ
	'faq.yes' => 'نعم',
	'faq.no' => 'لا',
	'faq.sources' => 'مصادر',
	'faq.q1' => 'هل كان إطلاق بِيركُيِن نزيهًا؟',
	'faq.q1_ans' => 'أعلن "صَني كِنج" عن الإصدار المخطط لبِيركُيِن قبل تسعة أيامٍ من الإصدار الفعليّ. لم تكن هناك أي كُتلٍ منقّب عنها مسبقًا. عضوٌ بأحد المنتديات كتب، "[صَني كِنج]، نشر رابطًا للمصدر المفتوح بالوقت الموعود (خمسُ دقائق قبل السادسة مساءًا حسب التوقيت العالمي). لم يكن هناك تنقيبٌ مسبق. حين أنهيت الإعداد وبدأت التشغيل، لم يكن هناك سوى خمسُ كُتلٍ قد نُقّب عنها."',
	'faq.q2' => 'ما الغرض من نقاط الفحص؟',
	'faq.q2_ans' => 'اعتبارًا من النسخة 0.2، نقاط الفحص المركزية لم تعد جزءًا حاسمًا من البروتوكول بعد. الغرض منها كان تأمين الشبكة في مرحلة النمو الأولية، وضمان تحسنٌ سلسل. الآن تستحيل هذه النقاط أضعف مع الوقت، وستزال بالنهاية، للوصول إلى قدر من اللامركزية مماثلٌ للحال ببِتكُيِن. نقاط الفحص ليست إلا معيارًا أمنيًا للشبكة: إن وقع مكروه ما ستبقى نقاط الفحص هذه كنسخة احتياطية لسجل سلسلة الكُتل.',
	'faq.q3' => 'هل بِيركُيِن نسخة من بِتكُيِن؟',
	'faq.q3_ans' => 'بِيركُيِن واحدة من البدائل الفريدة حقًا رغم أنها مبنية على برمجية بِتكُيِن، فبِيركُيِن هي أولى العملات التي تستخدم إثبات الرهن لتأمين الشبكة. إثبات العمل مستخدمٌ أيضًا ببِيركٌيِن، لتوزيع العملات توزيعًا عادلًا، لكنه ليس ضروريًا لتأمين الشبكة.',
	'faq.q4' => 'هل بِيركُيِن احتيال؟',
	'faq.q4_ans' => 'بِيركُيِن تجمع خصائص مبتكرة ومطوّرين ناشطين ومجتمع مؤثر. اعتبارًا من الأول من شهر أغسطس، عام 2014 الميلادي، بلغت رسملة سوق بِيركُيِن بعد عامين من إطلاقها عشرين مليونًا من الدولارات الأمريكية.',
	'faq.q5' => 'هل أجر السَك 1&#37; عادلٌ للجميع؟',
	'faq.q5_ans' => 'حينما ينمو العرض النقدي الكلي نتيجةً لأجر السَك, يحافظ كل حاملي بِيركُيِن المشاركين بالسَك على حصتهم النسبية من الشبكة، بالرغم من أن أصحاب الحصص الأكبر يحصلون على عدد أكبر من بِيركُيِن أجرًا لرهنهم عملاتهم للسَك، فلا يمكنهم أن يتجاوزوا غيرهم من المشاركين بالسَك من حيث الحصة النسبية.',
	'faq.q6' => 'هل بِيركُيِن عملة تضخمية؟',
	'faq.q6_ans' => 'يتحدد العرض النقدي لبِيركُيِن بكلٍ من:',
	'faq.q6_l1' => 'التنقيب بإثبات العمل (يزيد العرض)',
	'faq.q6_l2' => 'عدد المعاملات (تنقص العرض بمقدار 0.01 بِيركُيِن لكل معاملة)',
	'faq.q6_l3' => 'السَك بإثبات الرهن (يزيد العرض حتى نسبة 1&#37; بالعام)',
	'faq.q6_ans2' => 'بفضل المشاركة المتزايدة بالسَك، معدل التضخم بالبِيركُيِن ظل دون 5&#37; للنصف الأول من عام 2014. وبمعدل الإقبال الحالي على البِيركُيِن ستنخفض هذه النسبة أكثر فأكثر مع الوقت جاعلةً من بِيركٌيِن أقل تضخمًا وأكثر استدامةً من أغلب العملات المعماة الأخرى. ',
);
$lang['ar'] += array(
	// Global
	'homepage_title' => 'بِيركُيِن عُملةٌ معمّاة آمنة ومستدامة',

	'second_ago' => 'منذ ثانية',
	'seconds_ago' => 'ثوانٍ مضت',

	'website' => 'موقع',
	'forum' => 'منتدى',
);
$lang['ar'] += array(
	// Header
	'header.get_started' => 'ابدأ',
	'header.newcomers' => 'القادمين الجدد',
	'header.investors' => 'المستثمرون',
	'header.merchants' => 'التجار',
	'header.miners' => 'المنقبون',
	'header.developers' => 'المُطوّرون',
	'header.resources' => 'اموارد',
	'header.learn' => 'تعلّم',
	'header.frequently_asked_questions' => 'أسئلة شائعة',
	'header.peercoin_whitepaper' => 'ورقة عمل بِيركُيِن',
	'header.exchanges' => 'البورصات',
	'header.mint_peercoins' => 'سَكّ بِيركُيِن',

	'header.wallet' => 'المحافظ',

	'header.community' => 'المجتمع',

	'header.languages' => 'لغات',
);
$lang['ar'] += array(
	// Index page
	'index.why_peercoin' => 'لماذا بِيركُيِن',
	'index.download_wallet' => 'حمّل المحفظة',
	'index.price' => 'السعر',
	'index.market_cap' => 'رسملة السوق',
	'index.total_supply' => 'العرض النقدي الكلي',
	'index.last_updated' => 'آخر تحديث:',
	'index.last_updated_never' => 'لا تحديث بعد',
	'index.why_peercoin_q' => 'لماذا <strong>بِيركُيِن</strong> ؟',
	'index.why_peercoin_desc' => 'بِيركُيِن تسعى لأن تكون العملة المعمّاة الأكثر أمنًا بأقل كُلفة، عبر  مكافأة كل مستخدمي الشبكة على دعمها وتقويتها.',
	'index.built_to_last' => 'صنعت <b>لتبقى</b>',
	'index.built_to_last_desc' => 'عملة إثبات الرهن الأولى في العالم.',
	'index.fair_distribution' => 'توزيعٌ <b>عادل</b>',
	'index.fair_distribution_desc' => 'لا بيعٌ مُسبق ولا تنقيبٌ فوري.',
	'index.transparent_protocol' => 'بروتوكول <b>شفّاف</b>',
	'index.transparent_protocol_desc' => 'الشبكة مفتوحة المصدر تمامًا.',
	'index.energy_efficient' => '<b>استهلاك كُفءٌ</b> للطاقة',
	'index.energy_efficient_desc' => 'باشر سَكَّ بِيركُيِن على أي جهاز.',
	'index.learn_more' => 'تعلّم المزيد',
	'index.get_started' => 'ابدأ',
	'index.newcomers' => 'القادمين الجدد',
	'index.newcomers_desc' => 'تعلم كيف تشتري وتبيع وتنفق وتحفظ عملات بِيركُيِن.',
	'index.investors' => 'المستثمرون',
	'index.investors_desc' => 'السَكُّ يُثمر أجرًا مضمونًا بقيمة 1&#37; من العملات المرهونة.',
	'index.merchants' => 'التجار',
	'index.merchants_desc' => 'حان الوقت لتوفير رسوم المعاملات الباهظة.',
	'index.miners' => 'المنقبون',
	'index.miners_desc' => 'استخدم عتادك في التنقيب المثمر.',
	'index.developers' => 'المطوّرون',
	'index.developers_desc' => 'ألق نظرةً على بعض الابتكارات في المعالجة التتابعية.',
	'index.newsletter' => 'النشرة الإخبارية',
	'index.newsletter_placeholder' => 'أدخل بريدك الإلكتروني...',
	'index.newsletter_submit' => 'سجّلني',
);
$lang['ar'] += array(
	//Investors
	'investors.established_network' => 'شبكةٌ راسخة',
	'investors.established_network_desc' => 'أطلقت بِيركُيِن عام 2012 الميلادي، مما يجعلها واحدةً من أقدم شبكات العملات المعمّاة وأوثقها.',
	'investors.limited_supply' => 'عرضٌ نقديٌ محدود',
	'investors.limited_supply_desc' => 'معدّل نسبة التضخم ببِيركُيِن خلال العام 2014 الميلادي 5&#37; ، وهي مستمرة بالانخفاض. راجع <a href="http://peerchain.net/charts.html">peerchain.net</a> لبياناتٍ تاريخية مفصلة.',
	'investors.efficient_security' => 'تأمينٌ كُفء',
	'investors.efficient_security_desc' => 'بِيركُيِن هي عملة إثبات الرهن الأولى، مما يعني أنها لا تتطلب قوة حاسوبية مفرطة لتأمين الشبكة. تعرف على التفاصيل التقنية الدقيقة في <a href="whitepaper">ورقة عمل بِيركُيِن</a>.',
	'investors.guaranteed_returns' => 'عائداتٌ مضمونة',
	'investors.guaranteed_returns_desc' => 'بعد ثلاثين يومًا من بداية رهن بِيركُيِن، ستبدأ بكسب ربحٍ سنوي قدره 1&#37; .
 <a href="minting">تعلّم المزيد عن السَك</a>.',

);
$lang['ar'] += array(
	//Merchants
	'merchants.instant' => 'تلق الثمن فورًا',
	'merchants.instant_desc' => 'معالجة المعاملات عبر بِيركُيِن فوريةٌ تقريبًا، سيتحقق متصفح سلسلة الكتل من المبالغ المسددة إليك فورًا.',
	'merchants.no_chargebacks' => 'سدادٌ نهائي',
	'merchants.no_chargebacks_desc' => 'فور أن تؤكد الشبكة سداد المبلغ إليك، فهو مؤمنٌ بتقنيات التعمية الفضلى، مما يجعل من المحال استرداد المبلغ منك مرة أخرى.',
	'merchants.no_transaction_fees' => 'تخلص من رسوم المعاملات الباهظة.',
	'merchants.no_transaction_fees_desc' => 'للسداد على زبائنك أن يدفعوا رسمًا قيمته 0.01 بِيركُيِن. أما أنت كتاجر فلا تتحمل أي نفقات.',

);
$lang['ar'] += array(
	// Mining
	'mining.compatible_with_bitcoin' => 'متوافق مع بِتكُيِن',
	'mining.compatible_with_bitcoin_desc' => 'بِيركُيِن يستخدم خوارزمية التنقيب المستخدمة ببِتكُيِن، أو SHA-256. أي عتادٍ يعمل على شبكة بِتكُيِن يمكن أن يستخدم أيضًا للتنقيب عن بِيركُيِن.',
	'mining.fair_distribution' => 'توزيعٌ عادل',
	'mining.fair_distribution_desc' => 'يستخدم التنقيب بإثبات العمل لتوزيع العملات الجديدة، في حين أن تأمين الشبكة يعتمد كليًا على إثبات الرهن. هذا يعني أن ثغرات التنقيب ببِتكُيِن لا تؤثر على أمان شبكة بِيركُيِن.',
	'mining.sustainable_reward' => 'أجرٌ مستدام',
	'mining.sustainable_reward_desc' => 'أجر التنقيب عن الكتلة الواحدة يتناقص تدريجيًا كلما زادت القوة الحاسوبية للشبكة. بذلك يتناقص تأثير التنقيب على نمو العرض النقدي لبيِركُيِن',
);
$lang['ar'] += array(
	'mintguide.title' => 'اتبع إرشادات الدليل المقابل للمحفظة التي تستخدمها لتبدأ السَك!',
	'mintguide.qt_step1' => 'تأكد من تعمية محفظتك بعبارة سرية مناسبة. اكتبها على ورقة واحفظها بمكانٍ آمن؛ إن فقدت هذه العبارة أو نسيتها ستخسر عملاتك. ستجد أمر التعمية بالمحفظة الأصلية بقائمة الإعدادات.',
	'mintguide.qt_step2' => 'لبدء السَك, اذهب إلى قائمة المساعدة، ثم نافذة التنقيح، ثم الملقِّن وأدخل: <br><kbd>walletpassphrase abc 999999 true</kbd><br> واستبدل "abc" بعبارتك السرية و "999999" بالمدة الذي تود أن تباشر خلاله السَك مقاسةً بالثواني. يمكنك تحديد أي مدة زمنية تشاء لكنه من الأسهل أن تختار رقمًا كبيرًا ليستمر السَك أطول ما يمكن، إن كانت عبارتك السرية تحتوي مسافات فأحطها بعلامتي تنصيص.',
	'mintguide.qt_step3' => 'امح عبارتك السرية عبر كبس Ctrl-L.',
	'mintguide.qt_step4' => 'يمكنك التحقق من مباشرة عملاتك للسَك بملاحظة رمز القُفل بالزاوية اليمنى أسفل النافذة، تأكد من استحالته مفتوحًا. إن حُمت فوق الرمز يجب أن يفيد بأن "المحفظة معمّاة ولا تجيز سوى سَك الكتل".',

);
$lang['ar'] += array(
	'mineguide.title' => 'اتبع هذه الخطوات لتبدأ التنقيب عن بِيركُيِن!',
	'mineguide.step1' => 'ثبّت برمجية المحفظة',
	'mineguide.step1_desc' => 'إن لم تكن قد نزلت <a href="wallet">محفظة بِيركُيِن</a> بعد، فافعل.',
	'mineguide.step2' => 'اختر تجمّعًا للتنقيب',
	'mineguide.step2_poollist' => 'تجمّعات مخصصة لبِيركُيِن:',
	'mineguide.step2_multipoollist' => 'تجمّات متعددة العملات:',
	'mineguide.step3' => 'سجّل بالتجمَع',
	'mineguide.step3_desc' => 'اتبع التعليمات بموقع التجمّع.',
);
$lang['ar'] += array(
	// minting
	'minting.mint_anywhere' => 'باشر السَكّ بأي عتاد',
	'minting.mint_anywhere_desc' => 'يستلزم التنقيب عن أغلب العُملات المعمّاة عتادًا خاصًا وحواسيبًا متخصصة، لكنّ سَكّ عُملاتِ بِيركُيِن ممكنٌ على أي حاسوب أو هاتف ذكي. السَك يستهلك الطاقة بكفاءة، حيثُ أنه يعتمد على العملات التي تحوزها، بدلًا من القوة الحاسوبية التي تمتلكها.',
	'minting.secure_the_network' => 'أمِّن الشبكة ',
	'minting.secure_the_network_desc' => 'كلما سَكّت عملاتك كُتلةً، تسهم في حماية الشبكة. ليهاجم مستخدمٌ خبيثٌ شبكة البِيركُيِن، عليه أن يمتلك الأغلبية المطلقة من العملات المرهونة للسَك، مما سيؤدي إلى الضرر المباشر على استثماره الخاص إن ألحق الضرر بالشبكة.',
	'minting.earn_reward' => 'اكسب أجرًا',
	'minting.earn_reward_desc' => 'السَكُّ يمنحك 1&#37; سنويًا، سيتاح السَك لعملاتك بعد مضي ثلاثين يومًا من تاريخ المعاملة، وخلال تسعين يومًا، ستتعاظم فرصهم لسك الُكتل. كلما طال رهنك عملاتك للسَك كلما تراكبت أرباحك.',

);
$lang['ar'] += array(
	//Newcomers
	'newcomers.getting_started' => 'ابدأ مع بِيركُيِن',
	'newcomers.downlaod_wallet' => 'حمِّل محفظة',
	'newcomers.download_wallet_desc' => 'توجَّه إلى <a href="wallet">صفحة التحميل</a>، حيث يمكنك تحميل البرمجية التي تحتاجها للتحكم بعملاتك.',
	'newcomers.buy_from_exchange' => 'اشتر بِيركُيِن',
	'newcomers.buy_from_exchange_desc' => 'توجّه إلى إحدى <a href="exchanges">البورصات</a> حيث يمكنك الشراء عبر السوق الحر.',
	'newcomers.withdraw_coins' => 'اسحب عملاتك',
	'newcomers.withdraw_coins_desc' => 'حُز عملاتك عبر سحبها من البورصة إلى محفظتك. بهذا تحافظ على عملاتك من احتمال إغلاق البورصة.',
	'newcomers.learn_more' => 'تعلّم المزيد',
	'newcomers.learn_more_desc' => 'الآن بعد حيازتك لعملاتك، تعلم كيف تنمّي استثمارك عبر <a href="minting"> سَكّ بِيركُيِن</a>.',

);
$lang['ar'] += array(
	'pig.title' => 'اتبع الخطوات التالية لتُمكّن عملائك من الدفع عبر بِيركُيِن على موقعك الإلكتروني:',
	'pig.step1' => 'استخدم لسانَ توليد المحافظ بالجملة "Bulk Wallet" في <a href="http://wallet.peercointalk.org">wallet.peercointalk.org</a> لتولّد عددًا كبيرًا من عناوين البِيركُيِن. انسخ جدول القيم المجزأة بالفواصل (CSV) إلى ملفٍ نصيٍ مؤمّن على حاسوبك واصنع نسخةً احتياطية واحفظها بمحلٍ آمن.',
	'pig.step2' => 'استورد عناوين بِيركُيِن العامة إلى جدول بقاعدة بيانات على خادوم وِب الخاص بموقعك. لا تستورد أيًا من المفاتيح السرية، بل أبقهم غير متصلين بالشبكة لحمايتهم من الهَكْر.',
	'pig.step3' => 'أتح لعملائك خيار الدفع على موقعك الإلكتروني عبِر بِيركُيِن، إذا اختار أحد العملاء الدفع عبر بِيركُيِن أظهر لهم أحد العناوين العامة من قاعدة بياناتك وسجّله مع أمر الشراء.',
	'pig.step4' => 'استخدم كشَافَ كُتَلٍ لكشف المعاملة الواردة إلى العنوان المسجّل مع أمر الدفع. يمكنك إيجاد كشّافٍ في <a href="http://ppc.blockr.io">ppc.blockr.io</a>.',
	'pig.step5' => 'العملات المدفوعة إلى العناوين العامة مؤمّنة بمفاتيحك السرية، لإنفاقها استخدم الملف الذي حفظته بالخطوة الأولى.',
	'pig.step6' => 'إن واجهتك أي صعوبةٍ فلا تتردد بطرحها على <a href="https://talk.peercoin.net">منتديات مجتمع البِيركُيِن</a>. ',
	
);
$lang['ar'] += array(
	'waldownload.download' => 'حمِّل',
	'waldownload.source' => 'الكود الأصلي',
	'waldownload.license' => 'الرخصة',
	'waldownload.other_platforms' => ' أنظمة تشغيل أخرى',
	'waldownload.signatures' => 'التوقيعات',
	'waldownload.qt_title' => 'محفظة بِيركُيِن الأصلية',
);
$lang['ar'] += array(
	//Whitepaper
	'whitepaper.download_pdf' => 'حمّل ورقة العمل بصيغة بي.دي.إف',
	'whitepaper.software' => 'أوراق العمل متوفرة بصيغة المستندات المتنقلة (بي.دي.إف). فضلًا استخدم <a href="http://pdfreaders.org/">برمجيتك المفضلة لقراءتها</a>.',

);
$lang['ar'] += array(
	// Wallet
	'wallet.title' => 'المحافظ',
	'wallet.desc' => 'محفظة بِيركُيِن هي تطبيقٌ يُتسخدم لإدارة عملاتك وتبادلها مع الأخرين. هناك محفظتان لبِيركُين للحاسوب: بِيريُنِتِي والمحفظة الأصلية. ننصح عادة باستخدام بِيريُنِتِي. للمزيد من المعلومات حول استخدام برمجية محفظتك، زر صفحة <a href="newcomers">القادمين الجدد</a>.',
	'wallet.peercoinqt' => 'بيِركُيِن - كيو.تي (البروتوكول الجوهري)',
	'wallet.peercoinqt_desc' => 'بِيركُيِن-كيو.تي هو البروتوكول الجوهري لبِيركُيِن، طوّره ويُصونه صَني كِنج. ولا يُحدّث إلا للضرورة.',
	'wallet.paper_wallet' => 'محفظة ورقية',
	'wallet.paper_wallet_desc' => 'المحفظة الورقية لا تتصل بالشبكة أبدًا، تُطبع على الورق لتحفظ بمكانٍ آمن. استخدم محفظةً ورقية إن كنت تريد تأمين عملاتك وتنوي كنزَهم لفترة طويلة دون إنفاق.',
	'wallet.android_wallet' => 'محفظة أندرُيد',
	'wallet.android_wallet_desc' => 'تطبيق يمَكِّنُك من إدارة عملاتك بدون تحميل سلسلة الكتل بأكملها على هاتفك الذكي. يوفر هذا المساحة التخزينية لأجهزة أندرُيد ويتيح لك حمل عملاتك معك حيثما كنت. ',
	'wallet.download' => 'حمِّل',
	'wallet.visit_site' => 'Visit',
);
