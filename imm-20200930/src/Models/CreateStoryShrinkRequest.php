<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CreateStoryShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $addressShrink;

    /**
     * @var string
     */
    public $customId;

    /**
     * @var string
     */
    public $customLabelsShrink;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var int
     */
    public $maxFileCount;

    /**
     * @var int
     */
    public $minFileCount;

    /**
     * @var string
     */
    public $notificationShrink;

    /**
     * @var string
     */
    public $notifyTopicName;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $storyEndTime;

    /**
     * @var string
     */
    public $storyName;

    /**
     * @var string
     */
    public $storyStartTime;

    /**
     * @var string
     */
    public $storySubType;

    /**
     * @var string
     */
    public $storyType;

    /**
     * @var string
     */
    public $tagsShrink;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'addressShrink' => 'Address',
        'customId' => 'CustomId',
        'customLabelsShrink' => 'CustomLabels',
        'datasetName' => 'DatasetName',
        'maxFileCount' => 'MaxFileCount',
        'minFileCount' => 'MinFileCount',
        'notificationShrink' => 'Notification',
        'notifyTopicName' => 'NotifyTopicName',
        'objectId' => 'ObjectId',
        'projectName' => 'ProjectName',
        'storyEndTime' => 'StoryEndTime',
        'storyName' => 'StoryName',
        'storyStartTime' => 'StoryStartTime',
        'storySubType' => 'StorySubType',
        'storyType' => 'StoryType',
        'tagsShrink' => 'Tags',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
