<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20191226\Models\ListAnnotationMissionSessionResponseBody\data\annotationMissionSessionList\annotationMissionChatList;

use AlibabaCloud\Tea\Model;

class annotationMissionChatCustomizationDataInfoList extends Model
{
    /**
     * @description id
     *
     * @var string
     */
    public $annotationMissionChatCustomizationDataInfoId;

    /**
     * @description chat id
     *
     * @var string
     */
    public $annotationMissionChatId;

    /**
     * @example 2f03b24a-fda2-4501-90ba-0a9a59f8dd9d
     *
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
    public $content;

    /**
     * @example true
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
     * @var string
     */
    public $customizationDataDescription;

    /**
     * @description id
     *
     * @var string
     */
    public $customizationDataId;

    /**
     * @var string
     */
    public $customizationDataName;

    /**
     * @var int
     */
    public $customizationDataWeight;

    /**
     * @example true
     *
     * @var bool
     */
    public $delete;

    /**
     * @example d3fbfca8-4208-4d4b-a53a-c4dba5e43a66
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1679552585384
     *
     * @var int
     */
    public $modifiedTime;
    protected $_name = [
        'annotationMissionChatCustomizationDataInfoId' => 'AnnotationMissionChatCustomizationDataInfoId',
        'annotationMissionChatId' => 'AnnotationMissionChatId',
        'annotationMissionId' => 'AnnotationMissionId',
        'annotationMissionSessionId' => 'AnnotationMissionSessionId',
        'content' => 'Content',
        'create' => 'Create',
        'createTime' => 'CreateTime',
        'customizationDataDescription' => 'CustomizationDataDescription',
        'customizationDataId' => 'CustomizationDataId',
        'customizationDataName' => 'CustomizationDataName',
        'customizationDataWeight' => 'CustomizationDataWeight',
        'delete' => 'Delete',
        'instanceId' => 'InstanceId',
        'modifiedTime' => 'ModifiedTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->annotationMissionChatCustomizationDataInfoId) {
            $res['AnnotationMissionChatCustomizationDataInfoId'] = $this->annotationMissionChatCustomizationDataInfoId;
        }
        if (null !== $this->annotationMissionChatId) {
            $res['AnnotationMissionChatId'] = $this->annotationMissionChatId;
        }
        if (null !== $this->annotationMissionId) {
            $res['AnnotationMissionId'] = $this->annotationMissionId;
        }
        if (null !== $this->annotationMissionSessionId) {
            $res['AnnotationMissionSessionId'] = $this->annotationMissionSessionId;
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
        if (null !== $this->customizationDataDescription) {
            $res['CustomizationDataDescription'] = $this->customizationDataDescription;
        }
        if (null !== $this->customizationDataId) {
            $res['CustomizationDataId'] = $this->customizationDataId;
        }
        if (null !== $this->customizationDataName) {
            $res['CustomizationDataName'] = $this->customizationDataName;
        }
        if (null !== $this->customizationDataWeight) {
            $res['CustomizationDataWeight'] = $this->customizationDataWeight;
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
     * @return annotationMissionChatCustomizationDataInfoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AnnotationMissionChatCustomizationDataInfoId'])) {
            $model->annotationMissionChatCustomizationDataInfoId = $map['AnnotationMissionChatCustomizationDataInfoId'];
        }
        if (isset($map['AnnotationMissionChatId'])) {
            $model->annotationMissionChatId = $map['AnnotationMissionChatId'];
        }
        if (isset($map['AnnotationMissionId'])) {
            $model->annotationMissionId = $map['AnnotationMissionId'];
        }
        if (isset($map['AnnotationMissionSessionId'])) {
            $model->annotationMissionSessionId = $map['AnnotationMissionSessionId'];
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
        if (isset($map['CustomizationDataDescription'])) {
            $model->customizationDataDescription = $map['CustomizationDataDescription'];
        }
        if (isset($map['CustomizationDataId'])) {
            $model->customizationDataId = $map['CustomizationDataId'];
        }
        if (isset($map['CustomizationDataName'])) {
            $model->customizationDataName = $map['CustomizationDataName'];
        }
        if (isset($map['CustomizationDataWeight'])) {
            $model->customizationDataWeight = $map['CustomizationDataWeight'];
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
