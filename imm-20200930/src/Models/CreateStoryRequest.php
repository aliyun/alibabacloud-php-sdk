<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateStoryRequest extends Model
{
    /**
     * @var AddressForStory
     */
    public $address;

    /**
     * @example test
     *
     * @var string
     */
    public $customId;

    /**
     * @example {"Bucket": "examplebucket"}
     *
     * @var mixed[]
     */
    public $customLabels;

    /**
     * @description This parameter is required.
     *
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
     * @var Notification
     */
    public $notification;

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
     * @description This parameter is required.
     *
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
     * @description This parameter is required.
     *
     * @example PeopleMemory
     *
     * @var string
     */
    public $storyType;

    /**
     * @example {"key":"val"}
     *
     * @var mixed[]
     */
    public $tags;

    /**
     * @example {"ID": "testuid","Name": "test-user","Avatar": "http://test.com/testuid"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'address'         => 'Address',
        'customId'        => 'CustomId',
        'customLabels'    => 'CustomLabels',
        'datasetName'     => 'DatasetName',
        'maxFileCount'    => 'MaxFileCount',
        'minFileCount'    => 'MinFileCount',
        'notification'    => 'Notification',
        'notifyTopicName' => 'NotifyTopicName',
        'objectId'        => 'ObjectId',
        'projectName'     => 'ProjectName',
        'storyEndTime'    => 'StoryEndTime',
        'storyName'       => 'StoryName',
        'storyStartTime'  => 'StoryStartTime',
        'storySubType'    => 'StorySubType',
        'storyType'       => 'StoryType',
        'tags'            => 'Tags',
        'userData'        => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = null !== $this->address ? $this->address->toMap() : null;
        }
        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }
        if (null !== $this->customLabels) {
            $res['CustomLabels'] = $this->customLabels;
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
        if (null !== $this->notification) {
            $res['Notification'] = null !== $this->notification ? $this->notification->toMap() : null;
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
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateStoryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = AddressForStory::fromMap($map['Address']);
        }
        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }
        if (isset($map['CustomLabels'])) {
            $model->customLabels = $map['CustomLabels'];
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
            $model->notification = Notification::fromMap($map['Notification']);
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
            $model->tags = $map['Tags'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
