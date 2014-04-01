<?php
/**
 * Snippet's properties English Lexicon Entries for Tagger
 *
 * @package tagger
 * @subpackage lexicon
 */

$_lang['tagger.getresourceswhere.tags_desc'] = 'Comma separated list of Tags for which will be generated a Resource query. By default Tags from GET param will be loaded';
$_lang['tagger.getresourceswhere.groups_desc'] = 'Comma separated list of Tagger Groups. Only from those groups will Tags be allowed';
$_lang['tagger.getresourceswhere.where_desc'] = 'Original getResources where property. If you used where property in your current getResources call, move it here';

$_lang['tagger.gettags.resources_desc'] = 'Comma separated list of resources for which will be listed Tags';
$_lang['tagger.gettags.groups_desc'] = 'Comma separated list of Tagger Groups for which will be listed Tags';
$_lang['tagger.gettags.rowTpl_desc'] = 'Name of a chunk that will be used for each Tag. If no chunk is given, array with available placeholders will be rendered';
$_lang['tagger.gettags.outTpl_desc'] = 'Name of a chunk that will be used for wrapping all tags. If no chunk is given, tags will be rendered without a wrapper';
$_lang['tagger.gettags.separator_desc'] = 'String separator, that will be used for separating Tags';
$_lang['tagger.gettags.target_desc'] = 'An ID of a resource that will be used for generating URI for a Tag. If no ID is given, current Resource ID will be used';
$_lang['tagger.gettags.showUnused_desc'] = 'If 1 is set, Tags that are not assigned to any Resource will be included to the output as well';