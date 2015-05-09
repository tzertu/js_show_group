<?php
    /**
     * @copyright (C) 2015 Rodolfo Ungheri - All rights reserved.
     * @license GNU General Public License, version 2 (http://www.gnu.org/licenses/gpl-2.0.html)
     * @author Rodolfo Ungheri <r.ungheri@katamail.com>
     * @url http://devel.tzertu.net
     * The PHP code portions are distributed under the GPL license.
     */
    defined('_JEXEC') or die('Restricted access');

    include_once(JPATH_BASE . '/components/com_community/defines.community.php');
    require_once(JPATH_BASE . '/components/com_community/libraries/core.php');

    //add style css
    JFactory::getLanguage()->isRTL() ? CTemplate::addStylesheet('style.rtl') : CTemplate::addStylesheet('style');

    $groupModel = CFactory::getModel('groups');
    $wallModel     = CFactory::getModel('wall');
    $userModel     = CFactory::getModel('user');
    $discussModel  = CFactory::getModel('discussions');
    $bulletinModel = CFactory::getModel('bulletins');
    $photosModel   = CFactory::getModel('photos');
    $activityModel = CFactory::getModel('activities');
    $fileModel     = CFactory::getModel('files');
    //$view = CFactory::getView('groups','html');
    $groupid = $params->get('groupid');

    $group = $groupModel->getGroup($groupid);
    $groupDiscussion = $groupModel->getGroupLatestDiscussion($groupid);
 
    
    require(JModuleHelper::getLayoutPath('mod_community_showgroup', $params->get('layout', 'default')));
