<?php
$lang['set_cachable'] = 'Установить кэширование этого шаблона';
$lang['help_nocache'] = 'Отключить кэширование этого шаблона меню. Этот параметр перекрывает любые настройки кэширования отдельных страниц или шаблонов.';
$lang['cachable'] = 'Кэшируется';
$lang['help_childrenof'] = 'Этот параметр позволяет показывать только дочерние страницы выбранной по ID или алиасу страницы. Пример <code>{menu childrenof=$page_alias}</code> отобразит только детей текущей страницы.';
$lang['usage'] = 'Использование';
$lang['help_loadprops'] = 'Используйте этот параметр при использовании расширенных свойств в меню менеджера шаблонов. Этот параметр разрешает подгружать все свойства для каждого узла (например, дополнительные параметры, изображение, эскиз и т. д.). При этом резко увеличится количество запросов, необходимых для создания меню, а также повысятся требования к объему памяти. С другой стороны с помощью этого параметра можно создавать очень сложные меню.';
$lang['readonly'] = 'только для чтения';
$lang['error_templatename'] = 'Вы не можете указать имя шаблона оканчивающееся на .tpl';
$lang['this_is_default'] = 'Шаблон меню по-умолчанию';
$lang['set_as_default'] = 'Установить в качестве шаблона меню по-умолчанию';
$lang['default'] = 'По-умолчанию';
$lang['templates'] = 'Шаблоны';
$lang['addtemplate'] = 'Добавить шаблон ';
$lang['areyousure'] = 'Вы уверены, что хотите это удалить?';
$lang['changelog'] = '	<ul>
        <li>1.5.3 - Поддержка подсветки синтаксиса.</li>
        <li>1.5.2 - Добавлено больше полей в каждом ноде в шаблоне.</li>
        <li>1.5 - Bump version to be compatible with 1.1 only, and add the SetParameterTypes calls</li>
	<li>1.4.1 -- Fix a problem where menus would not show if includeprefix was not specified.
	<li>1.4 -- Accept a comma separated list of includeprefixes or excludeprefixes</li>
	<li>1.3 -- Added includeprefix and excludeprefix params</li>
	<li>1.1 -- Added handling of target parameter, mainly for the Link content type</li>
	<li>1.0 -- Initial Release</li>
	</ul>';
$lang['dbtemplates'] = 'Шаблоны в базе данных';
$lang['description'] = 'Управление всеми мыслимыми способами показа меню.';
$lang['deletetemplate'] = 'Удалить шаблон';
$lang['edittemplate'] = 'Редактировать шаблон';
$lang['filename'] = 'Имя файла';
$lang['filetemplates'] = 'Шаблоны в файлах';
$lang['help_includeprefix'] = 'Показывать лишь страницы, чей alias совпадает с одним из указанных префиксов (разделяются запятыми). Эту опцию нельзя использовать одновременно с "excludeprefix".';
$lang['help_excludeprefix'] = 'Не показывать все страницы (и их "детей"), alias которых совпадает с одним из указанных префиксов (разделяются запятыми). Эту опцию нельзя использовать одновременно с "includeprefix".';
$lang['help_collapse'] = 'Включите эту опцию, чтобы скрыть пункты меню, не относящиеся к текущей (выбранной) странице.';
$lang['help_items'] = 'Используйте эту опцию, чтобы выбрать страницы, которые должно отображать данное меню.  Значение должно быть списком псевдонимов страниц, разделенных запятыми.';
$lang['help_number_of_levels'] = 'Эта настройка позволит показывать в меню только заданное число уровней вложенности.';
$lang['help_show_all'] = 'Включение этой опции приведет к тому, что в меню будут показаны все существующие страницы, даже если в их настройках явно отключен показ в меню. Не активных страниц, однако, это не касается.';
$lang['help_show_root_siblings'] = 'Эту опцию полезно использовать, только если используются start_element или start_page. Она отобразит элементы, находящиеся на одном уровне иерархии (по сторонам) заданного start_page/element.';
$lang['help_start_level'] = 'Если используется эта опция, меню будет отображать только те элементы, которые находятся на заданном уровне. Простой пример: одно меню у Вас находится на странице первого уровня (number_ of_ levels=\'1\' ). Создавая меню второго уроня, вам следует выбрать start_level=\'2\'. Теперь наполнение второго меню будет зависеть от того, какие элементы отображаются в первом.';
$lang['help_start_element'] = 'Начинает показ меню с заданного start_element и показывает только этот элемент и дочерние элементы. В качестве параметра получает позицию в иерархиеской структуре (например 5.1.2).';
$lang['help_start_page'] = 'Начинает показ меню с заданного start_element и показывает только этот элемент и дочерние элементы. В качестве параметра передаётся альтернативное имя страницы (alias).';
$lang['help_template'] = 'Шаблон меню. Шаблоны будут браться из базы данных, если только название шаблона не заканчивается .tpl, т.к. в этом случае он будет браться из файла в каталоге шаблонов Менеджера меню (если параметр не задан, будет использован шаблон simple_navigation.tpl).';
$lang['help'] = '<h3>Каково назначение данного элемента?</h3>
	<p>Menu Manager является легким в использовании и настройке модулем, предназначенным для интегрирования различных меню в систему. Данный модуль выделяет отображаемую часть меню и преобразовывает ее в шаблоны smarty, которые пользователь может легко настроить по своему желанию. Таким образом, сам Menu Manager является просто движком, обеспечивающим работу шаблона. Модифицируя установленные, или создавая свои собственные шаблоны, вы сможете создать практически любое, какое вам только захочется меню.</p>
	<h3>Как мне использовать это?</h3>
	<p>Просто вставьте в свой шаблон или страницу этот тег: <code>{menu}</code>.  Список допустимых параметров приведен ниже.</p>
	<h3>Что мне за дело до шаблонов?</h3>
	<p>Menu Manager Менеждер меню хранит логику отображения в шаблонах Smarty. Изначально он имеет три шаблона: cssmenu.tpl, minimal_menu.tpl, simple_navigation.tpl. Данные шаблоны создают простой неупорядоченный список страниц, используя различные классы и идентификаторы для того, чтобы задействовать в данном процессе каскадные таблицы стилей</p>
	<p>Обратите внимание, что вы задаёте стили меню при помощи CSS. Таблицы стилей не поставляются с Menu Manager, и должны быть присоединены к шаблону страницы отдельно. Для шаблона cssmenu.tpl , чтобы он работал в IE вы должны  вставить ссылку на  JavaScript в секцию head. Он необходим для функционирования эффекта hover в IE.</p>  
	<p>Для создания специального шаблона следует занести обычный шаблон в базу данных, а затем отредактировать его с помощью CMSMS admin.  Порядок действий таков:
		<ol>
			<li>Щелкните мышью по кнопке "Menu Manager admin".</li>
			<li>Щелкните по вкладке "File Templates", а затем нажмите на соседнюю кнопку - "Import Template to Database" (шаблон simple_navigation.tpl).</li>
			<li>Дайте название копии шаблона. Назовем его "Test Template".</li>
			<li>Теперь вы можете увидеть шаблон"Test Template" в списке шаблонов, находящихся в вашей базе данных.</li>
		</ol>
	</p>
	<p>Теперь вы можете легко изменить шаблон по своему желанию. Вставьте в шаблон классы, идентификаторы и другие теги так, чтобы задать нужный формат. С помощью команды {menu template=\'Test Template\'} вы сможете вставить готовый шаблон в свой сайт. Помните о том, что если вы используете шаблон файла, следует добавить расширение .tpl.</p>
	<p>Ниже указаны параметры узлового объекта, используемого в шаблоне:
		<ul>
			<li>$node->id -- ID контента </li>
			<li>$node->url -- URL контента</li>
			<li>$node->accesskey -- Код доступа, если задано</li>
			<li>$node->tabindex -- Индекс ярлыка, если задано</li>
			<li>$node->titleattribute -- Описание, или заголовок атрибута (наименование), если задано</li>
			<li>$node->hierarchy -- Позиция иерархии, (e.g. 1.3.3)</li>
			<li>$node->depth -- Глубина (уровень) данного узла в текущем меню</li>
			<li>$node->prevdepth -- Глубина (уровень) данного узла, который стоит прямо перед текущим</li>
			<li>$node->haschildren --  Возвращает true  если у данного узла есть дочерние узлы для отображения. </li>
			<li>$node->menutext -- Текст меню</li>
			<li>$node->alias -- Алиасы страницы</li>
			<li>$node->target -- Флажок для ссылки. Будет пустым, если контент не установит его.</li>
			<li>$node->index -- Номер этого узла в едином меню.</li>
			<li>$node->parent -- True, если данный узел является родителем выбранной в данный момент страницы</li>
		</ul>
	</p>';
$lang['importtemplate'] = 'Импортировать шаблон в базу данных ';
$lang['menumanager'] = 'Менеджер меню';
$lang['newtemplate'] = 'Имя нового шаблона';
$lang['nocontent'] = 'Не задан контент';
$lang['notemplatefiles'] = 'Нет файловых шаблонов в %s';
$lang['notemplatename'] = 'Не задано имя шаблона.';
$lang['templatecontent'] = 'Содержание шаблона';
$lang['templatenameexists'] = 'Шаблон с таким именем уже существует';
$lang['qca'] = 'P0-636611758-1290773054030';
$lang['utmz'] = '156861353.1293142579.12.7.utmcsr=cmsmadesimple.ru|utmccn=(referral)|utmcmd=referral|utmcct=/';
$lang['utma'] = '156861353.581103809.1290773047.1293142579.1293212562.13';
$lang['utmc'] = '156861353';
$lang['utmb'] = '156861353';
?>