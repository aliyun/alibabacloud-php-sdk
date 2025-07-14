<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionSessionResponseBody\data\annotationMissionSessionList\annotationMissionChatList;

use AlibabaCloud\Tea\Model;

class annotationMissionChatTagInfoList extends Model
{
    /**
     * @description chat id
     *
     * @var string
     */
    public $annotationMissionChatId;

    /**
     * @description id
     *
     * @var string
     */
    public $annotationMissionChatTagInfoId;

    /**
     * @example e7272cbb-a60d-4b41-b5c4-8863edc0b8f7
     *
     * @var string
     */
    public $annotationMissionId;

    /**
     * @var string
     */
    public $annotationMissionSessionId;

    /**
     * @description tag id
     *
     * @var string
     */
    public $annotationMissionTagInfoId;

    /**
     * @var string
     */
    public $annotationMissionTagInfoName;

    /**
     * @example true
     *
     * @var bool
     */
    public $create;

    /**
     * @example 1686797050000
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
     * @example 32be9d94-1346-4c4a-a4d0-ccd379f87013
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1679019660000
     *
     * @var int
     */
    public $modifiedTime;
    protected $_name = [
        'annotationMissionChatId' => 'AnnotationMissionChatId',
        'annotationMissionChatTagInfoId' => 'AnnotationMissionChatTagInfoId',
        'annotationMissionId' => 'AnnotationMissionId',
        'annotationMissionSessionId' => 'AnnotationMissionSessionId',
        'annotationMissionTagInfoId' => 'AnnotationMissionTagInfoId',
        'annotationMissionTagInfoName' => 'AnnotationMissionTagInfoName',
        'create' => 'Create',
        'createTime' => 'CreateTime',
        'delete' => 'Delete',
        'instanceId' => 'InstanceId',
        'modifiedTime' => 'ModifiedTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotationMissionChatId) {
            $res['AnnotationMissionChatId'] = $this->annotationMissionChatId;
        }
        if (null !== $this->annotationMissionChatTagInfoId) {
            $res['AnnotationMissionChatTagInfoId'] = $this->annotationMissionChatTagInfoId;
        }
        if (null !== $this->annotationMissionId) {
            $res['AnnotationMissionId'] = $this->annotationMissionId;
        }
        if (null !== $this->annotationMissionSessionId) {
            $res['AnnotationMissionSessionId'] = $this->annotationMissionSessionId;
        }
        if (null !== $this->annotationMissionTagInfoId) {
            $res['AnnotationMissionTagInfoId'] = $this->annotationMissionTagInfoId;
        }
        if (null !== $this->annotationMissionTagInfoName) {
            $res['AnnotationMissionTagInfoName'] = $this->annotationMissionTagInfoName;
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return annotationMissionChatTagInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnnotationMissionChatId'])) {
            $model->annotationMissionChatId = $map['AnnotationMissionChatId'];
        }
        if (isset($map['AnnotationMissionChatTagInfoId'])) {
            $model->annotationMissionChatTagInfoId = $map['AnnotationMissionChatTagInfoId'];
        }
        if (isset($map['AnnotationMissionId'])) {
            $model->annotationMissionId = $map['AnnotationMissionId'];
        }
        if (isset($map['AnnotationMissionSessionId'])) {
            $model->annotationMissionSessionId = $map['AnnotationMissionSessionId'];
        }
        if (isset($map['AnnotationMissionTagInfoId'])) {
            $model->annotationMissionTagInfoId = $map['AnnotationMissionTagInfoId'];
        }
        if (isset($map['AnnotationMissionTagInfoName'])) {
            $model->annotationMissionTagInfoName = $map['AnnotationMissionTagInfoName'];
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }

        return $model;
    }
}
