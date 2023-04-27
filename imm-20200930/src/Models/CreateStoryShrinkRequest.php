<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateStoryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $addressShrink;

    /**
     * @example test
     *
     * @var string
     */
    public $customId;

    /**
     * @example {"Bucket": "examplebucket"}
     *
     * @var string
     */
    public $customLabelsShrink;

    /**
     * @example test-dataset
     *
     * @var string
     */
    public $datasetName;

    /**
     * @example 3
     *
     * @var int
     */
    public $maxFileCount;

    /**
     * @example 1
     *
     * @var int
     */
    public $minFileCount;

    /**
     * @description 消息通知配置，支持使用MNS、RocketMQ接收异步消息通知。
     *
     * @var string
     */
    public $notificationShrink;

    /**
     * @example test-topic
     *
     * @var string
     */
    public $notifyTopicName;

    /**
     * @example id1
     *
     * @var string
     */
    public $objectId;

    /**
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @example 2021-12-30T16:00:00Z
     *
     * @var string
     */
    public $storyEndTime;

    /**
     * @example name1
     *
     * @var string
     */
    public $storyName;

    /**
     * @example 2016-12-30T16:00:00Z
     *
     * @var string
     */
    public $storyStartTime;

    /**
     * @example Solo
     *
     * @var string
     */
    public $storySubType;

    /**
     * @example PeopleMemory
     *
     * @var string
     */
    public $storyType;

    /**
     * @example {"key":"val"}
     *
     * @var string
     */
    public $tagsShrink;

    /**
     * @example {"ID": "testuid","Name": "test-user","Avatar": "http://test.com/testuid"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'addressShrink'      => 'Address',
        'customId'           => 'CustomId',
        'customLabelsShrink' => 'CustomLabels',
        'datasetName'        => 'DatasetName',
        'maxFileCount'       => 'MaxFileCount',
        'minFileCount'       => 'MinFileCount',
        'notificationShrink' => 'Notification',
        'notifyTopicName'    => 'NotifyTopicName',
        'objectId'           => 'ObjectId',
        'projectName'        => 'ProjectName',
        'storyEndTime'       => 'StoryEndTime',
        'storyName'          => 'StoryName',
        'storyStartTime'     => 'StoryStartTime',
        'storySubType'       => 'StorySubType',
        'storyType'          => 'StoryType',
        'tagsShrink'         => 'Tags',
        'userData'           => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressShrink) {
            $res['Address'] = $this->addressShrink;
        }
        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }
        if (null !== $this->customLabelsShrink) {
            $res['CustomLabels'] = $this->customLabelsShrink;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->maxFileCount) {
            $res['MaxFileCount'] = $this->maxFileCount;
        }
        if (null !== $this->minFileCount) {
            $res['MinFileCount'] = $this->minFileCount;
        }
        if (null !== $this->notificationShrink) {
            $res['Notification'] = $this->notificationShrink;
        }
        if (null !== $this->notifyTopicName) {
            $res['NotifyTopicName'] = $this->notifyTopicName;
        }
        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->storyEndTime) {
            $res['StoryEndTime'] = $this->storyEndTime;
        }
        if (null !== $this->storyName) {
            $res['StoryName'] = $this->storyName;
        }
        if (null !== $this->storyStartTime) {
            $res['StoryStartTime'] = $this->storyStartTime;
        }
        if (null !== $this->storySubType) {
            $res['StorySubType'] = $this->storySubType;
        }
        if (null !== $this->storyType) {
            $res['StoryType'] = $this->storyType;
        }
        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStoryShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->addressShrink = $map['Address'];
        }
        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }
        if (isset($map['CustomLabels'])) {
            $model->customLabelsShrink = $map['CustomLabels'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['MaxFileCount'])) {
            $model->maxFileCount = $map['MaxFileCount'];
        }
        if (isset($map['MinFileCount'])) {
            $model->minFileCount = $map['MinFileCount'];
        }
        if (isset($map['Notification'])) {
            $model->notificationShrink = $map['Notification'];
        }
        if (isset($map['NotifyTopicName'])) {
            $model->notifyTopicName = $map['NotifyTopicName'];
        }
        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['StoryEndTime'])) {
            $model->storyEndTime = $map['StoryEndTime'];
        }
        if (isset($map['StoryName'])) {
            $model->storyName = $map['StoryName'];
        }
        if (isset($map['StoryStartTime'])) {
            $model->storyStartTime = $map['StoryStartTime'];
        }
        if (isset($map['StorySubType'])) {
            $model->storySubType = $map['StorySubType'];
        }
        if (isset($map['StoryType'])) {
            $model->storyType = $map['StoryType'];
        }
        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
