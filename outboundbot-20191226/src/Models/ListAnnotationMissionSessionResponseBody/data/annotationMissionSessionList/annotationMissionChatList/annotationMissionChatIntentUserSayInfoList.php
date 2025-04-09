<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionSessionResponseBody\data\annotationMissionSessionList\annotationMissionChatList;

use AlibabaCloud\Dara\Model;

class annotationMissionChatIntentUserSayInfoList extends Model
{
    /**
     * @var string
     */
    public $annotationMissionChatId;

    /**
     * @var string
     */
    public $annotationMissionChatIntentUserSayInfoId;

    /**
     * @var string
     */
    public $annotationMissionId;

    /**
     * @var string
     */
    public $annotationMissionSessionId;

    /**
     * @var string
     */
    public $botId;

    /**
     * @var string
     */
    public $content;

    /**
     * @var bool
     */
    public $create;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var bool
     */
    public $delete;

    /**
     * @var int
     */
    public $dialogId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $intentId;

    /**
     * @var int
     */
    public $modifiedTime;
    protected $_name = [
        'annotationMissionChatId' => 'AnnotationMissionChatId',
        'annotationMissionChatIntentUserSayInfoId' => 'AnnotationMissionChatIntentUserSayInfoId',
        'annotationMissionId' => 'AnnotationMissionId',
        'annotationMissionSessionId' => 'AnnotationMissionSessionId',
        'botId' => 'BotId',
        'content' => 'Content',
        'create' => 'Create',
        'createTime' => 'CreateTime',
        'delete' => 'Delete',
        'dialogId' => 'DialogId',
        'instanceId' => 'InstanceId',
        'intentId' => 'IntentId',
        'modifiedTime' => 'ModifiedTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->annotationMissionChatId) {
            $res['AnnotationMissionChatId'] = $this->annotationMissionChatId;
        }

        if (null !== $this->annotationMissionChatIntentUserSayInfoId) {
            $res['AnnotationMissionChatIntentUserSayInfoId'] = $this->annotationMissionChatIntentUserSayInfoId;
        }

        if (null !== $this->annotationMissionId) {
            $res['AnnotationMissionId'] = $this->annotationMissionId;
        }

        if (null !== $this->annotationMissionSessionId) {
            $res['AnnotationMissionSessionId'] = $this->annotationMissionSessionId;
        }

        if (null !== $this->botId) {
            $res['BotId'] = $this->botId;
        }

        if (null !== $this->content) {
            $res['Content'] = $this->content;
        }

        if (null !== $this->create) {
            $res['Create'] = $this->create;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->delete) {
            $res['Delete'] = $this->delete;
        }

        if (null !== $this->dialogId) {
            $res['DialogId'] = $this->dialogId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->intentId) {
            $res['IntentId'] = $this->intentId;
        }

        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
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
        if (isset($map['AnnotationMissionChatId'])) {
            $model->annotationMissionChatId = $map['AnnotationMissionChatId'];
        }

        if (isset($map['AnnotationMissionChatIntentUserSayInfoId'])) {
            $model->annotationMissionChatIntentUserSayInfoId = $map['AnnotationMissionChatIntentUserSayInfoId'];
        }

        if (isset($map['AnnotationMissionId'])) {
            $model->annotationMissionId = $map['AnnotationMissionId'];
        }

        if (isset($map['AnnotationMissionSessionId'])) {
            $model->annotationMissionSessionId = $map['AnnotationMissionSessionId'];
        }

        if (isset($map['BotId'])) {
            $model->botId = $map['BotId'];
        }

        if (isset($map['Content'])) {
            $model->content = $map['Content'];
        }

        if (isset($map['Create'])) {
            $model->create = $map['Create'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Delete'])) {
            $model->delete = $map['Delete'];
        }

        if (isset($map['DialogId'])) {
            $model->dialogId = $map['DialogId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IntentId'])) {
            $model->intentId = $map['IntentId'];
        }

        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        return $model;
    }
}
