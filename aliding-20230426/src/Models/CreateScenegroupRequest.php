<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;

class CreateScenegroupRequest extends Model
{
    /**
     * @var int
     */
    public $addFriendForbidden;
    /**
     * @var int
     */
    public $allMembersCanCreateCalendar;
    /**
     * @var int
     */
    public $allMembersCanCreateMcsConf;
    /**
     * @var int
     */
    public $chatBannedType;
    /**
     * @var int
     */
    public $groupEmailDisabled;
    /**
     * @var int
     */
    public $groupLiveSwitch;
    /**
     * @var string
     */
    public $icon;
    /**
     * @var int
     */
    public $managementType;
    /**
     * @var int
     */
    public $membersToAdminChat;
    /**
     * @var int
     */
    public $mentionAllAuthority;
    /**
     * @var int
     */
    public $onlyAdminCanDing;
    /**
     * @var int
     */
    public $onlyAdminCanSetMsgTop;
    /**
     * @var int
     */
    public $searchable;
    /**
     * @var int
     */
    public $showHistoryType;
    /**
     * @var string
     */
    public $subadminIds;
    /**
     * @var string
     */
    public $templateId;
    /**
     * @var string
     */
    public $title;
    /**
     * @var string
     */
    public $userIds;
    /**
     * @var string
     */
    public $uuid;
    /**
     * @var int
     */
    public $validationType;
    protected $_name = [
        'addFriendForbidden'          => 'AddFriendForbidden',
        'allMembersCanCreateCalendar' => 'AllMembersCanCreateCalendar',
        'allMembersCanCreateMcsConf'  => 'AllMembersCanCreateMcsConf',
        'chatBannedType'              => 'ChatBannedType',
        'groupEmailDisabled'          => 'GroupEmailDisabled',
        'groupLiveSwitch'             => 'GroupLiveSwitch',
        'icon'                        => 'Icon',
        'managementType'              => 'ManagementType',
        'membersToAdminChat'          => 'MembersToAdminChat',
        'mentionAllAuthority'         => 'MentionAllAuthority',
        'onlyAdminCanDing'            => 'OnlyAdminCanDing',
        'onlyAdminCanSetMsgTop'       => 'OnlyAdminCanSetMsgTop',
        'searchable'                  => 'Searchable',
        'showHistoryType'             => 'ShowHistoryType',
        'subadminIds'                 => 'SubadminIds',
        'templateId'                  => 'TemplateId',
        'title'                       => 'Title',
        'userIds'                     => 'UserIds',
        'uuid'                        => 'Uuid',
        'validationType'              => 'ValidationType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addFriendForbidden) {
            $res['AddFriendForbidden'] = $this->addFriendForbidden;
        }

        if (null !== $this->allMembersCanCreateCalendar) {
            $res['AllMembersCanCreateCalendar'] = $this->allMembersCanCreateCalendar;
        }

        if (null !== $this->allMembersCanCreateMcsConf) {
            $res['AllMembersCanCreateMcsConf'] = $this->allMembersCanCreateMcsConf;
        }

        if (null !== $this->chatBannedType) {
            $res['ChatBannedType'] = $this->chatBannedType;
        }

        if (null !== $this->groupEmailDisabled) {
            $res['GroupEmailDisabled'] = $this->groupEmailDisabled;
        }

        if (null !== $this->groupLiveSwitch) {
            $res['GroupLiveSwitch'] = $this->groupLiveSwitch;
        }

        if (null !== $this->icon) {
            $res['Icon'] = $this->icon;
        }

        if (null !== $this->managementType) {
            $res['ManagementType'] = $this->managementType;
        }

        if (null !== $this->membersToAdminChat) {
            $res['MembersToAdminChat'] = $this->membersToAdminChat;
        }

        if (null !== $this->mentionAllAuthority) {
            $res['MentionAllAuthority'] = $this->mentionAllAuthority;
        }

        if (null !== $this->onlyAdminCanDing) {
            $res['OnlyAdminCanDing'] = $this->onlyAdminCanDing;
        }

        if (null !== $this->onlyAdminCanSetMsgTop) {
            $res['OnlyAdminCanSetMsgTop'] = $this->onlyAdminCanSetMsgTop;
        }

        if (null !== $this->searchable) {
            $res['Searchable'] = $this->searchable;
        }

        if (null !== $this->showHistoryType) {
            $res['ShowHistoryType'] = $this->showHistoryType;
        }

        if (null !== $this->subadminIds) {
            $res['SubadminIds'] = $this->subadminIds;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        if (null !== $this->userIds) {
            $res['UserIds'] = $this->userIds;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        if (null !== $this->validationType) {
            $res['ValidationType'] = $this->validationType;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddFriendForbidden'])) {
            $model->addFriendForbidden = $map['AddFriendForbidden'];
        }

        if (isset($map['AllMembersCanCreateCalendar'])) {
            $model->allMembersCanCreateCalendar = $map['AllMembersCanCreateCalendar'];
        }

        if (isset($map['AllMembersCanCreateMcsConf'])) {
            $model->allMembersCanCreateMcsConf = $map['AllMembersCanCreateMcsConf'];
        }

        if (isset($map['ChatBannedType'])) {
            $model->chatBannedType = $map['ChatBannedType'];
        }

        if (isset($map['GroupEmailDisabled'])) {
            $model->groupEmailDisabled = $map['GroupEmailDisabled'];
        }

        if (isset($map['GroupLiveSwitch'])) {
            $model->groupLiveSwitch = $map['GroupLiveSwitch'];
        }

        if (isset($map['Icon'])) {
            $model->icon = $map['Icon'];
        }

        if (isset($map['ManagementType'])) {
            $model->managementType = $map['ManagementType'];
        }

        if (isset($map['MembersToAdminChat'])) {
            $model->membersToAdminChat = $map['MembersToAdminChat'];
        }

        if (isset($map['MentionAllAuthority'])) {
            $model->mentionAllAuthority = $map['MentionAllAuthority'];
        }

        if (isset($map['OnlyAdminCanDing'])) {
            $model->onlyAdminCanDing = $map['OnlyAdminCanDing'];
        }

        if (isset($map['OnlyAdminCanSetMsgTop'])) {
            $model->onlyAdminCanSetMsgTop = $map['OnlyAdminCanSetMsgTop'];
        }

        if (isset($map['Searchable'])) {
            $model->searchable = $map['Searchable'];
        }

        if (isset($map['ShowHistoryType'])) {
            $model->showHistoryType = $map['ShowHistoryType'];
        }

        if (isset($map['SubadminIds'])) {
            $model->subadminIds = $map['SubadminIds'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        if (isset($map['UserIds'])) {
            $model->userIds = $map['UserIds'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        if (isset($map['ValidationType'])) {
            $model->validationType = $map['ValidationType'];
        }

        return $model;
    }
}
