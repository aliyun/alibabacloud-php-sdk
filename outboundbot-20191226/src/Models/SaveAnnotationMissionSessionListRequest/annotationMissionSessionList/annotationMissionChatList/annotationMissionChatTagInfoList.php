<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\SaveAnnotationMissionSessionListRequest\annotationMissionSessionList\annotationMissionChatList;

use AlibabaCloud\Dara\Model;

class annotationMissionChatTagInfoList extends Model
{
    /**
     * @var string
     */
    public $annotationMissionChatId;

    /**
     * @var string
     */
    public $annotationMissionChatTagInfoId;

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
    public $annotationMissionTagInfoId;

    /**
     * @var string
     */
    public $annotationMissionTagInfoName;

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
     * @var string
     */
    public $instanceId;

    /**
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
