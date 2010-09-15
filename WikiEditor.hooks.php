<?php
/**
 * Hooks for Vector extension
 * 
 * @file
 * @ingroup Extensions
 */

class WikiEditorHooks {
	
	/* Static Members */
	
	static $resources = array(
		
		/* WikiEditor jQuery plugin Resources */
		
		'jquery.wikiEditor' => array(
			'scripts' => 'extensions/WikiEditor/modules/jquery.wikiEditor.js',
			'styles' => 'extensions/WikiEditor/modules/jquery.wikiEditor.css',
			'dependencies' => array(
				'jquery.client',
			),
		),
		'jquery.wikiEditor.dialogs' => array(
			'scripts' => 'extensions/WikiEditor/modules/jquery.wikiEditor.dialogs.js',
			'styles' => 'extensions/WikiEditor/modules/jquery.wikiEditor.dialogs.css',
			'dependencies' => array(
				'jquery.wikiEditor',
				'jquery.wikiEditor.toolbar',
				'jquery.ui.dialog',
				'jquery.ui.draggable',
				'jquery.ui.resizable',
				'jquery.tabIndex',
			),
		),
		'jquery.wikiEditor.highlight' => array(
			'scripts' => 'extensions/WikiEditor/modules/jquery.wikiEditor.highlight.js',
			'dependencies' => array(
				'jquery.wikiEditor',
			),
		),
		'jquery.wikiEditor.preview' => array(
			'scripts' => 'extensions/WikiEditor/modules/jquery.wikiEditor.preview.js',
			'styles' => 'extensions/WikiEditor/modules/jquery.wikiEditor.preview.css',
			'dependencies' => array(
				'jquery.wikiEditor',
			),
		),
		'jquery.wikiEditor.previewDialog' => array(
			'scripts' => 'extensions/WikiEditor/modules/jquery.wikiEditor.previewDialog.js',
			'styles' => 'extensions/WikiEditor/modules/jquery.wikiEditor.previewDialog.css',
			'dependencies' => array(
				'jquery.wikiEditor', 'jquery.wikiEditor.dialogs',
			),
		),
		'jquery.wikiEditor.publish' => array(
			'scripts' => 'extensions/WikiEditor/modules/jquery.wikiEditor.publish.js',
			'dependencies' => array(
				'jquery.wikiEditor', 'jquery.wikiEditor.dialogs',
			),
		),
		'jquery.wikiEditor.templateEditor' => array(
			'scripts' => 'extensions/WikiEditor/modules/jquery.wikiEditor.templateEditor.js',
			'dependencies' => array(
				'jquery.wikiEditor', 'jquery.wikiEditor.dialogs', 
			),
		),
		'jquery.wikiEditor.templates' => array(
			'scripts' => 'extensions/WikiEditor/modules/jquery.wikiEditor.templates.js',
			'dependencies' => array(
				'jquery.wikiEditor',
			),
		),
		'jquery.wikiEditor.toc' => array(
			'scripts' => 'extensions/WikiEditor/modules/jquery.wikiEditor.toc.js',
			'styles' => 'extensions/WikiEditor/modules/jquery.wikiEditor.toc.css',
			'dependencies' => array(
				'jquery.wikiEditor', 'jquery.ui.draggable', 'jquery.ui.resizable'
			),
		),
		'jquery.wikiEditor.toolbar' => array(
			'scripts' => 'extensions/WikiEditor/modules/jquery.wikiEditor.toolbar.js',
			'styles' => 'extensions/WikiEditor/modules/jquery.wikiEditor.toolbar.css',
			'dependencies' => array(
				'jquery.wikiEditor',
			),
		),
		
		/* WikiEditor Resources */
		
		'wikiEditor' => array(
			'scripts' => 'extensions/WikiEditor/modules/wikiEditor.js',
			'styles' => 'extensions/WikiEditor/modules/wikiEditor.css',
			'dependencies' => array(
				'jquery.wikiEditor',
			),
		),
		'wikiEditor.dialogs' => array(
			'scripts' => 'extensions/WikiEditor/modules/wikiEditor.dialogs.js',
			'styles' => 'extensions/WikiEditor/modules/wikiEditor.dialogs.css',
			'dependencies' => array(
				'jquery.wikiEditor.dialogs',
			),
		),
		'wikiEditor.highlight' => array(
			'scripts' => 'extensions/WikiEditor/modules/wikiEditor.highlight.js',
			'dependencies' => array(
				'jquery.wikiEditor.highlight',
			),
		),
		'wikiEditor.preview' => array(
			'scripts' => 'extensions/WikiEditor/modules/wikiEditor.preview.js',
			'messages' => array(
				'wikieditor-preview-tab',
				'wikieditor-preview-changes-tab',
				'wikieditor-preview-loading',
			),
			'dependencies' => array(
				'jquery.wikiEditor.preview',
			),
		),
		'wikiEditor.previewDialog' => array(
			'scripts' => 'extensions/WikiEditor/modules/wikiEditor.previewDialog.js',
			'messages' => array(
				'wikieditor-previewDialog-preference',
				'wikieditor-previewDialog-tab',
				'wikieditor-previewDialog-loading',
			),
			'dependencies' => array(
				'jquery.wikiEditor.preivewDialog',
			),
		),
		'wikiEditor.publish' => array(
			'scripts' => 'extensions/WikiEditor/modules/wikiEditor.publish.js',
			'messages' => array(
				'wikieditor-publish-button-publish',
				'wikieditor-publish-button-cancel',
				'wikieditor-publish-dialog-title',
				'wikieditor-publish-dialog-summary',
				'wikieditor-publish-dialog-minor',
				'wikieditor-publish-dialog-watch',
				'wikieditor-publish-dialog-publish',
				'wikieditor-publish-dialog-goback',
			),
			'dependencies' => array(
				'jquery.wikiEditor.publish',
			),
		),
		'wikiEditor.templateEditor' => array(
			'scripts' => 'extensions/WikiEditor/modules/wikiEditor.templateEditor.js',
			'messages' => array(
				'wikieditor-template-editor-dialog-title',
				'wikieditor-template-editor-dialog-submit',
				'wikieditor-template-editor-dialog-cancel',
			),
			'dependencies' => array(
				'jquery.wikiEditor.templateEditor',
			),
		),
		'wikiEditor.templates' => array(
			'scripts' => 'extensions/WikiEditor/modules/wikiEditor.templates.js',
			'dependencies' => array(
				'jquery.wikiEditor.templates',
			),
		),
		'wikiEditor.toc' => array(
			'scripts' => 'extensions/WikiEditor/modules/wikiEditor.toc.js',
			'messages' => array(
				'wikieditor-toc-show',
				'wikieditor-toc-hide',
			),
			'dependencies' => array(
				'jquery.wikiEditor.toc',
			),
		),
		'wikiEditor.toolbar' => array(
			'scripts' => 'extensions/WikiEditor/modules/wikiEditor.toolbar.js',
			'messages' => array(
				// This is a mixed bunch that needs to be separated between dialog and toolbar messages, but since the
				// dialog module depends on the toolbar module, it's not an urgent matter
				'wikieditor-toolbar-loading',
				/* Main Section */
				'wikieditor-toolbar-tool-bold',
				'wikieditor-toolbar-tool-bold-example',
				'wikieditor-toolbar-tool-italic',
				'wikieditor-toolbar-tool-italic-example',
				'wikieditor-toolbar-tool-ilink',
				'wikieditor-toolbar-tool-ilink-example',
				'wikieditor-toolbar-tool-xlink',
				'wikieditor-toolbar-tool-xlink-example',
				'wikieditor-toolbar-tool-link',
				'wikieditor-toolbar-tool-link-title',
				'wikieditor-toolbar-tool-link-int',
				'wikieditor-toolbar-tool-link-int-target',
				'wikieditor-toolbar-tool-link-int-target-tooltip',
				'wikieditor-toolbar-tool-link-int-text',
				'wikieditor-toolbar-tool-link-int-text-tooltip',
				'wikieditor-toolbar-tool-link-ext',
				'wikieditor-toolbar-tool-link-ext-target',
				'wikieditor-toolbar-tool-link-ext-text',
				'wikieditor-toolbar-tool-link-insert',
				'wikieditor-toolbar-tool-link-cancel',
				'wikieditor-toolbar-tool-link-int-target-status-exists',
				'wikieditor-toolbar-tool-link-int-target-status-notexists',
				'wikieditor-toolbar-tool-link-int-target-status-invalid',
				'wikieditor-toolbar-tool-link-int-target-status-external',
				'wikieditor-toolbar-tool-link-int-target-status-loading',
				'wikieditor-toolbar-tool-link-int-invalid',
				'wikieditor-toolbar-tool-link-lookslikeinternal',
				'wikieditor-toolbar-tool-link-lookslikeinternal-int',
				'wikieditor-toolbar-tool-link-lookslikeinternal-ext',
				'wikieditor-toolbar-tool-link-empty',
				'wikieditor-toolbar-tool-file',
				'wikieditor-toolbar-tool-file-pre',
				'wikieditor-toolbar-tool-file-example',
				'wikieditor-toolbar-tool-reference',
				'wikieditor-toolbar-tool-reference-title',
				'wikieditor-toolbar-tool-reference-cancel',
				'wikieditor-toolbar-tool-reference-text',
				'wikieditor-toolbar-tool-reference-insert',
				'wikieditor-toolbar-tool-reference-example',
				'wikieditor-toolbar-tool-signature',
				/* Formatting Section */
				'wikieditor-toolbar-section-advanced',
				'wikieditor-toolbar-tool-heading',
				'wikieditor-toolbar-tool-heading-1',
				'wikieditor-toolbar-tool-heading-2',
				'wikieditor-toolbar-tool-heading-3',
				'wikieditor-toolbar-tool-heading-4',
				'wikieditor-toolbar-tool-heading-5',
				'wikieditor-toolbar-tool-heading-example',
				'wikieditor-toolbar-group-format',
				'wikieditor-toolbar-tool-ulist',
				'wikieditor-toolbar-tool-ulist-example',
				'wikieditor-toolbar-tool-olist',
				'wikieditor-toolbar-tool-olist-example',
				'wikieditor-toolbar-tool-indent',
				'wikieditor-toolbar-tool-indent-example',
				'wikieditor-toolbar-tool-nowiki',
				'wikieditor-toolbar-tool-nowiki-example',
				'wikieditor-toolbar-tool-redirect',
				'wikieditor-toolbar-tool-redirect-example',
				'wikieditor-toolbar-tool-big',
				'wikieditor-toolbar-tool-big-example',
				'wikieditor-toolbar-tool-small',
				'wikieditor-toolbar-tool-small-example',
				'wikieditor-toolbar-tool-superscript',
				'wikieditor-toolbar-tool-superscript-example',
				'wikieditor-toolbar-tool-subscript',
				'wikieditor-toolbar-tool-subscript-example',
				'wikieditor-toolbar-group-insert',
				'wikieditor-toolbar-tool-gallery',
				'wikieditor-toolbar-tool-gallery-example',
				'wikieditor-toolbar-tool-newline',
				'wikieditor-toolbar-tool-table',
				'wikieditor-toolbar-tool-table-example-old',
				'wikieditor-toolbar-tool-table-example-cell-text',
				'wikieditor-toolbar-tool-table-example',
				'wikieditor-toolbar-tool-table-example-header',
				'wikieditor-toolbar-tool-table-title',
				'wikieditor-toolbar-tool-table-dimensions-rows',
				'wikieditor-toolbar-tool-table-dimensions-columns',
				'wikieditor-toolbar-tool-table-dimensions-header',
				'wikieditor-toolbar-tool-table-wikitable',
				'wikieditor-toolbar-tool-table-sortable',
				'wikieditor-toolbar-tool-table-insert',
				'wikieditor-toolbar-tool-table-cancel',
				'wikieditor-toolbar-tool-table-example-text',
				'wikieditor-toolbar-tool-table-toomany',
				'wikieditor-toolbar-tool-table-invalidnumber',
				'wikieditor-toolbar-tool-table-zero',
				'wikieditor-toolbar-tool-replace',
				'wikieditor-toolbar-tool-replace-title',
				'wikieditor-toolbar-tool-replace-search',
				'wikieditor-toolbar-tool-replace-replace',
				'wikieditor-toolbar-tool-replace-case',
				'wikieditor-toolbar-tool-replace-regex',
				'wikieditor-toolbar-tool-replace-button-findnext',
				'wikieditor-toolbar-tool-replace-button-replacenext',
				'wikieditor-toolbar-tool-replace-button-replaceall',
				'wikieditor-toolbar-tool-replace-close',
				'wikieditor-toolbar-tool-replace-nomatch',
				'wikieditor-toolbar-tool-replace-success',
				'wikieditor-toolbar-tool-replace-emptysearch',
				'wikieditor-toolbar-tool-replace-invalidregex',
				/* Special Characters Section */
				'wikieditor-toolbar-section-characters',
				'wikieditor-toolbar-characters-page-latin',
				'wikieditor-toolbar-characters-page-latinextended',
				'wikieditor-toolbar-characters-page-ipa',
				'wikieditor-toolbar-characters-page-symbols',
				'wikieditor-toolbar-characters-page-greek',
				'wikieditor-toolbar-characters-page-cyrillic',
				'wikieditor-toolbar-characters-page-arabic',
				'wikieditor-toolbar-characters-page-persian',
				'wikieditor-toolbar-characters-page-hebrew',
				'wikieditor-toolbar-characters-page-bangla',
				'wikieditor-toolbar-characters-page-telugu',
				'wikieditor-toolbar-characters-page-sinhala',
				'wikieditor-toolbar-characters-page-gujarati',
				'wikieditor-toolbar-characters-page-thai',
				'wikieditor-toolbar-characters-page-lao',
				'wikieditor-toolbar-characters-page-khmer',
				/* Help Section */
				'wikieditor-toolbar-section-help',
				'wikieditor-toolbar-help-heading-description',
				'wikieditor-toolbar-help-heading-syntax',
				'wikieditor-toolbar-help-heading-result',
				'wikieditor-toolbar-help-page-format',
				'wikieditor-toolbar-help-page-link',
				'wikieditor-toolbar-help-page-heading',
				'wikieditor-toolbar-help-page-list',
				'wikieditor-toolbar-help-page-file',
				'wikieditor-toolbar-help-page-reference',
				'wikieditor-toolbar-help-page-discussion',
				'wikieditor-toolbar-help-content-bold-description',
				'wikieditor-toolbar-help-content-bold-syntax',
				'wikieditor-toolbar-help-content-bold-result',
				'wikieditor-toolbar-help-content-italic-description',
				'wikieditor-toolbar-help-content-italic-syntax',
				'wikieditor-toolbar-help-content-italic-result',
				'wikieditor-toolbar-help-content-bolditalic-description',
				'wikieditor-toolbar-help-content-bolditalic-syntax',
				'wikieditor-toolbar-help-content-bolditalic-result',
				'wikieditor-toolbar-help-content-ilink-description',
				'wikieditor-toolbar-help-content-ilink-syntax',
				'wikieditor-toolbar-help-content-ilink-result',
				'wikieditor-toolbar-help-content-xlink-description',
				'wikieditor-toolbar-help-content-xlink-syntax',
				'wikieditor-toolbar-help-content-xlink-result',
				'wikieditor-toolbar-help-content-heading1-description',
				'wikieditor-toolbar-help-content-heading1-syntax',
				'wikieditor-toolbar-help-content-heading1-result',
				'wikieditor-toolbar-help-content-heading2-description',
				'wikieditor-toolbar-help-content-heading2-syntax',
				'wikieditor-toolbar-help-content-heading2-result',
				'wikieditor-toolbar-help-content-heading3-description',
				'wikieditor-toolbar-help-content-heading3-syntax',
				'wikieditor-toolbar-help-content-heading3-result',
				'wikieditor-toolbar-help-content-heading4-description',
				'wikieditor-toolbar-help-content-heading4-syntax',
				'wikieditor-toolbar-help-content-heading4-result',
				'wikieditor-toolbar-help-content-heading5-description',
				'wikieditor-toolbar-help-content-heading5-syntax',
				'wikieditor-toolbar-help-content-heading5-result',
				'wikieditor-toolbar-help-content-ulist-description',
				'wikieditor-toolbar-help-content-ulist-syntax',
				'wikieditor-toolbar-help-content-ulist-result',
				'wikieditor-toolbar-help-content-olist-description',
				'wikieditor-toolbar-help-content-olist-syntax',
				'wikieditor-toolbar-help-content-olist-result',
				'wikieditor-toolbar-help-content-file-description',
				'wikieditor-toolbar-help-content-file-syntax',
				'wikieditor-toolbar-help-content-file-result',
				'wikieditor-toolbar-help-content-reference-description',
				'wikieditor-toolbar-help-content-reference-syntax',
				'wikieditor-toolbar-help-content-reference-result',
				'wikieditor-toolbar-help-content-rereference-description',
				'wikieditor-toolbar-help-content-rereference-syntax',
				'wikieditor-toolbar-help-content-rereference-result',
				'wikieditor-toolbar-help-content-showreferences-description',
				'wikieditor-toolbar-help-content-showreferences-syntax',
				'wikieditor-toolbar-help-content-showreferences-result',
				'wikieditor-toolbar-help-content-signaturetimestamp-description',
				'wikieditor-toolbar-help-content-signaturetimestamp-syntax',
				'wikieditor-toolbar-help-content-signaturetimestamp-result',
				'wikieditor-toolbar-help-content-signature-description',
				'wikieditor-toolbar-help-content-signature-syntax',
				'wikieditor-toolbar-help-content-signature-result',
				'wikieditor-toolbar-help-content-indent-description',
				'wikieditor-toolbar-help-content-indent-syntax',
				'wikieditor-toolbar-help-content-indent-result',
			),
			'dependencies' => array(
				'jquery.wikiEditor.toolbar',
			),
		),
	);
	
	static $modules = array(
		'global' => array(
			'variables' => array(
  				'wgWikiEditorIconVersion',
			),
		),
		'highlight' => array(
			'preference' => array(
				'key' => 'wikieditor-highlight',
				'ui' => array(
					'type' => 'toggle',
					'label-message' => 'wikieditor-highlight-preference',
					'section' => 'editing/labs',
				),
			),
		),
		'templateEditor' => array(
			'preference' => array(
				'key' => 'wikieditor-template-editor',
				'ui' => array(
					'type' => 'toggle',
					'label-message' => 'wikieditor-template-editor-preference',
					'section' => 'editing/labs',
				),
			),
		),
		'templates' => array(
			'preference' => array(
				'key' => 'wikieditor-templates',
				'ui' => array(
					'type' => 'toggle',
					'label-message' => 'wikieditor-templates-preference',
					'section' => 'editing/labs',
				),
			),
		),
		'addMediaWizard' => array(
			'preference' => array(
			 	'key' => 'addmediawizard-gadget',
				'ui' => array(
					'type' => 'toggle',
					'label-message' => 'wikieditor-addMediaWizard-preference',
					'section' => 'editing/labs',
				),
			),
		),
		'preview' => array(
			'preference' => array(
				'key' => 'wikieditor-preview',
				'ui' => array(
					'type' => 'toggle',
					'label-message' => 'wikieditor-preview-preference',
					'section' => 'editing/labs',
				),
			),
			'messages' => array(
				'wikieditor-preview-tab',
				'wikieditor-preview-changes-tab',
				'wikieditor-preview-loading',
			),
		),
		'previewDialog' => array(
			'preference' => array(
				'key' => 'wikieditor-previewDialog',
				'ui' => array(
					'type' => 'toggle',
					'label-message' => 'wikieditor-previewDialog-preference',
					'section' => 'editing/labs',
				),
			),
		),
		'publish' => array(
			'preference' => array(
				'key' => 'wikieditor-publish',
				'ui' => array(
					'type' => 'toggle',
					'label-message' => 'wikieditor-publish-preference',
					'section' => 'editing/labs',
				),
			),
		),
		'toc' => array(
			'preference' => array(
				// Ideally this key would be 'wikieditor-toc'
			 	'key' => 'usenavigabletoc',
				'ui' => array(
					'type' => 'toggle',
					'label-message' => 'wikieditor-toc-preference',
					'section' => 'editing/labs',
				),
			),
			'variables' => array(
				// These are probably only for testing purposes?
  				'wgNavigableTOCCollapseEnable',
				'wgNavigableTOCResizable'
			),
		),
		'toolbar' => array(
			'preference' => array(
				// Ideally this key would be 'wikieditor-toolbar'
				'key' => 'usebetatoolbar',
				'ui' => array(
					'type' => 'toggle',
					'label-message' => 'wikieditor-toolbar-preference',
					'section' => 'editing/beta',
				),
			),
		),
		'dialogs' => array(
			'preference' => array(
				// Ideally this key would be 'wikieditor-toolbar-dialogs'
				'key' => 'usebetatoolbar-cgd',
				'ui' => array(
					'type' => 'toggle',
					'label-message' => 'wikieditor-toolbar-dialogs-preference',
					'section' => 'editing/beta',
				),
			),
		),
	);
	
	/* Protected Static Methods */
	
	protected static function isEnabled( $module ) {
		global $wgVectorModules, $wgUser;
		
		$enabled =
			$wgVectorModules[$module]['global'] ||
			(
				$wgVectorModules[$module]['user'] &&
				isset( self::$modules[$module]['preferences']['key'] ) &&
				$wgUser->getOption( self::$modules[$module]['preferences']['key'] )
			);
		if ( !$enabled ) {
			return false;
		}
		if ( isset( self::$modules[$module]['preferences']['requirements'] ) ) {
			foreach ( self::$modules[$module]['preferences']['requirements'] as $requirement => $value ) {
				// Important! We really do want fuzzy evaluation here
				if ( $wgUser->getOption( $requirement ) != $value ) {
					return false;
				}
			}
		}
		return true;
	}
	
	/* Static Methods */
	
	/**
	 * BeforePageDisplay hook
	 * 
	 * Adds the modules to the edit form
	 * 
	 * @param $out OutputPage output page
	 * @param $skin Skin current skin
	 */
	public static function beforePageDisplay( $out, $skin ) {
		global $wgVectorModules;
		
		// Don't load Vector modules for non-Vector skins
		if ( !( $skin instanceof SkinVector ) ) {
			return true;
		}
		
		// Add enabled modules
		foreach ( $wgVectorModules as $module => $enable ) {
			if ( self::isEnabled( $module ) ) {
				$out->addModules( self::$modules[$module]['name'] );
			}
		}
		return true;
	}
	
	/**
	 * GetPreferences hook
	 * 
	 * Adds Vector-releated items to the preferences
	 * 
	 * @param $out User current user
	 * @param $skin array list of default user preference controls
	 */
	public static function getPreferences( $user, &$defaultPreferences ) {
		global $wgVectorModules;
		
		foreach ( $wgVectorModules as $module => $enable ) {
			if ( $enable['user'] && isset( self::$modules['preferences'][$module]['ui'] ) ) {
				$defaultPreferences[self::$modules['preferences'][$module]['key']] =
					self::$modules['preferences'][$module]['ui'];
			}
		}
		return true;
	}
	
	/**
	 * MakeGlobalVariablesScript hook
	 * 
	 * Adds enabled/disabled switches for Vector modules
	 */
	public static function makeGlobalVariablesScript( &$vars ) {
		global $wgVectorModules;
		
		$configurations = array();
		foreach ( $wgVectorModules as $module => $enable ) {
			if (
				isset( self::$modules[$module]['configurations'] ) &&
				is_array( self::$modules[$module]['configurations'] )
			) {
				foreach ( self::$modules[$module]['configurations'] as $configuration ) {
					global $$configuration;
					$configurations[$configuration] = $$configuration;
				}
			}
		}
		if ( count( $configurations ) ) {
			$vars = array_merge( $vars, $configurations );
		}
		return true;
	}
	
	/*
	 * ResourceLoaderRegisterModules hook
	 * 
	 * Adds modules to ResourceLoader
	 */
	public static function resourceLoaderRegisterModules() {
		foreach ( self::$modules as $module ) {
			ResourceLoader::register( $module['name'], new ResourceLoaderFileModule( $module['resources'] ) );
		}
		return true;
	}
}