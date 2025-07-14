<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionSessionResponseBody\data\annotationMissionSessionList\annotationMissionChatList;

use AlibabaCloud\Tea\Model;

class annotationMissionChatIntentUserSayInfoList extends Model
{
    /**
     * @description chat id
     *
     * @example 77343553-cbc2-4487-a35c-869f1e86c573
     *
     * @var string
     */
    public $annotationMissionChatId;

    /**
     * @description id
     *
     * @var string
     */
    public $annotationMissionChatIntentUserSayInfoId;

    /**
     * @example 77343553-cbc2-4487-a35c-869f1e86c573
     *
     * @var string
     */
    public $annotationMissionId;

    /**
     * @example 77343553-cbc2-4487-a35c-869f1e86c573
     *
     * @var string
     */
    public $annotationMissionSessionId;

    /**
     * @example 77343553-cbc2-4487-a35c-869f1e86c573
     *
     * @var string
     */
    public $botId;

    /**
     * @var string
     */
    public $content;

    /**
     * @example false
     *
     * @var bool
     */
    public $create;

    /**
     * @example 1682216045619
     *
     * @var int
     */
    public $createTime;

    /**
     * @example true
     *
     * @var bool
     */
    public $delete;

    /**
     * @example 77343553-cbc2-4487-a35c-869f1e86c573
     *
     * @var int
     */
    public $dialogId;

    /**
     * @example 77343553-cbc2-4487-a35c-869f1e86c573
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 77343553-cbc2-4487-a35c-869f1e86c573
     *
     * @var int
     */
    public $intentId;

    /**
     * @example 1682216045619
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return annotationMissionChatIntentUserSayInfoList
     */
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
