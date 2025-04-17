<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class CreateStoryRequest extends Model
{
    /**
     * @var AddressForStory
     */
    public $address;

    /**
     * @var string
     */
    public $customId;

    /**
     * @var mixed[]
     */
    public $customLabels;

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
     * @var Notification
     */
    public $notification;

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
     * @var mixed[]
     */
    public $tags;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'address' => 'Address',
        'customId' => 'CustomId',
        'customLabels' => 'CustomLabels',
        'datasetName' => 'DatasetName',
        'maxFileCount' => 'MaxFileCount',
        'minFileCount' => 'MinFileCount',
        'notification' => 'Notification',
        'notifyTopicName' => 'NotifyTopicName',
        'objectId' => 'ObjectId',
        'projectName' => 'ProjectName',
        'storyEndTime' => 'StoryEndTime',
        'storyName' => 'StoryName',
        'storyStartTime' => 'StoryStartTime',
        'storySubType' => 'StorySubType',
        'storyType' => 'StoryType',
        'tags' => 'Tags',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        if (null !== $this->address) {
            $this->address->validate();
        }
        if (\is_array($this->customLabels)) {
            Model::validateArray($this->customLabels);
        }
        if (null !== $this->notification) {
            $this->notification->validate();
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = null !== $this->address ? $this->address->toArray($noStream) : $this->address;
        }

        if (null !== $this->customId) {
            $res['CustomId'] = $this->customId;
        }

        if (null !== $this->customLabels) {
            if (\is_array($this->customLabels)) {
                $res['CustomLabels'] = [];
                foreach ($this->customLabels as $key1 => $value1) {
                    $res['CustomLabels'][$key1] = $value1;
                }
            }
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
            $res['Notification'] = null !== $this->notification ? $this->notification->toArray($noStream) : $this->notification;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['Tags'][$key1] = $value1;
                }
            }
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
            $model->address = AddressForStory::fromMap($map['Address']);
        }

        if (isset($map['CustomId'])) {
            $model->customId = $map['CustomId'];
        }

        if (isset($map['CustomLabels'])) {
            if (!empty($map['CustomLabels'])) {
                $model->customLabels = [];
                foreach ($map['CustomLabels'] as $key1 => $value1) {
                    $model->customLabels[$key1] = $value1;
                }
            }
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
            if (!empty($map['Tags'])) {
                $model->tags = [];
                foreach ($map['Tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
