<?php

// emconf
$TYPO3_CONF_VARS ['EXTCONF'] ['synthesis'] ['sections'] ['emconf'] = array (
		'classname' => 'tx_synthesis_section_emconf',
		'filepath' => 'EXT:synthesis/sections/class.tx_synthesis_section_emconf.php',
		'title' => 'General info',
		'description' => 'Enter general information about the extension here: Title, description, category, author...',
		'singleItem' => true 
);

// languages
$TYPO3_CONF_VARS ['EXTCONF'] ['synthesis'] ['sections'] ['languages'] = array (
		'classname' => 'tx_synthesis_section_languages',
		'filepath' => 'EXT:synthesis/sections/class.tx_synthesis_section_languages.php',
		'title' => 'Setup languages',
		'description' => 'Select the system languages you want to use in your extension. English is TYPO3\'s default language, therefore you don\'t need to select it anymore.',
		'singleItem' => true 
);

// tables
$TYPO3_CONF_VARS ['EXTCONF'] ['synthesis'] ['sections'] ['tables'] = array (
		'classname' => 'tx_synthesis_section_tables',
		'filepath' => 'EXT:synthesis/sections/class.tx_synthesis_section_tables.php',
		'title' => 'New Database Tables',
		'description' => 'Add database tables which can be edited inside the backend. These tables will be added to the global TCA array in TYPO3.',
		'image' => 'EXT:synthesis/icons/cm.png' 
);

// model
$TYPO3_CONF_VARS ['EXTCONF'] ['synthesis'] ['sections'] ['model'] = array (
		'classname' => 'tx_synthesis_section_model',
		'filepath' => 'EXT:synthesis/sections/class.tx_synthesis_section_model.php',
		'title' => 'New Object Model',
		'description' => 'Add object model.',
);

// fields
$TYPO3_CONF_VARS ['EXTCONF'] ['synthesis'] ['sections'] ['fields'] = array (
		'classname' => 'tx_synthesis_section_fields',
		'filepath' => 'EXT:synthesis/sections/class.tx_synthesis_section_fields.php',
		'title' => 'Extend existing Tables',
		'description' => 'Add custom fields to existing tables, such as the "pages", "tt_content", "fe_users" or "be_users" table.' 
);

// pi
$TYPO3_CONF_VARS ['EXTCONF'] ['synthesis'] ['sections'] ['pi'] = array (
		'classname' => 'tx_synthesis_section_pi',
		'filepath' => 'EXT:synthesis/sections/class.tx_synthesis_section_pi.php',
		'title' => 'Frontend Plugins',
		'description' => 'Create frontend plugins. Plugins are web applications running on the website itself (not in the backend of TYPO3). The default guestbook, message board, shop, rating feature etc. are examples of plugins.' 
);

// module
$TYPO3_CONF_VARS ['EXTCONF'] ['synthesis'] ['sections'] ['module'] = array (
		'classname' => 'tx_synthesis_section_module',
		'filepath' => 'EXT:synthesis/sections/class.tx_synthesis_section_module.php',
		'title' => 'Backend Modules',
		'description' => 'Create backend modules. A module is normally recognized as the application behind one of the TYPO3 backend menuitems. Examples are the Web>Page, Web>List, User>Setup, Doc module etc. In a more loose sense, all applications integrated with existing module (see below) also belongs to the "module" category.' 
);

// modulefunction
$TYPO3_CONF_VARS ['EXTCONF'] ['synthesis'] ['sections'] ['modulefunction'] = array (
		'classname' => 'tx_synthesis_section_modulefunction',
		'filepath' => 'EXT:synthesis/sections/class.tx_synthesis_section_modulefunction.php',
		'title' => 'Integrate in existing Modules',
		'description' => 'Extend existing modules with new function-menu items. Examples are extensions such as "User>Task Center, Messaging" which adds internal messaging to TYPO3. Or "Web>Info, Page TSconfig" which shows the Page TSconfiguration for a page. Or "Web>Func, Wizards, Sort pages" which is a wizard for re-ordering pages in a folder.' 
);

// cm
$TYPO3_CONF_VARS ['EXTCONF'] ['synthesis'] ['sections'] ['cm'] = array (
		'classname' => 'tx_synthesis_section_cm',
		'filepath' => 'EXT:synthesis/sections/class.tx_synthesis_section_cm.php',
		'title' => 'Clickmenu items',
		'description' => 'Adds a custom item to the clickmenus of database records. This is a very cool way to integrate small tools of your own in an elegant way!' 
);

// sv
$TYPO3_CONF_VARS ['EXTCONF'] ['synthesis'] ['sections'] ['sv'] = array (
		'classname' => 'tx_synthesis_section_sv',
		'filepath' => 'EXT:synthesis/sections/class.tx_synthesis_section_sv.php',
		'title' => 'Services',
		'description' => 'Create a Services class. With a Services extension you can extend TYPO3 (or an extension which use Services) with functionality, without any changes to the code which use that service.' 
);

// ts
$TYPO3_CONF_VARS ['EXTCONF'] ['synthesis'] ['sections'] ['ts'] = array (
		'classname' => 'tx_synthesis_section_ts',
		'filepath' => 'EXT:synthesis/sections/class.tx_synthesis_section_ts.php',
		'title' => 'Static TypoScript code',
		'description' => 'Adds static TypoScript Setup and Constants code - just like a static template would do.' 
);

// tsconfig
$TYPO3_CONF_VARS ['EXTCONF'] ['synthesis'] ['sections'] ['tsconfig'] = array (
		'classname' => 'tx_synthesis_section_tsconfig',
		'filepath' => 'EXT:synthesis/sections/class.tx_synthesis_section_tsconfig.php',
		'title' => 'TSconfig',
		'description' => 'Adds default Page-TSconfig or User-TSconfig. Can be used to preset options inside TYPO3.',
		'singleItem' => true 
);

unset($TYPO3_CONF_VARS ['EXTCONF'] ['synthesis'] ['sections'] ['tables']);
unset($TYPO3_CONF_VARS ['EXTCONF'] ['synthesis'] ['sections'] ['fields']);
unset($TYPO3_CONF_VARS ['EXTCONF'] ['synthesis'] ['sections'] ['pi']);
unset($TYPO3_CONF_VARS ['EXTCONF'] ['synthesis'] ['sections'] ['module']);
unset($TYPO3_CONF_VARS ['EXTCONF'] ['synthesis'] ['sections'] ['modulefunction']);
unset($TYPO3_CONF_VARS ['EXTCONF'] ['synthesis'] ['sections'] ['cm']);
unset($TYPO3_CONF_VARS ['EXTCONF'] ['synthesis'] ['sections'] ['sv']);
unset($TYPO3_CONF_VARS ['EXTCONF'] ['synthesis'] ['sections'] ['ts']);
unset($TYPO3_CONF_VARS ['EXTCONF'] ['synthesis'] ['sections'] ['tsconfig']);




?>