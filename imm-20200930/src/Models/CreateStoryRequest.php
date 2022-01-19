<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CreateStoryRequest extends Model
{
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
    public $notifyEndpoint;

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
    protected $_name = [
        'datasetName'     => 'DatasetName',
        'maxFileCount'    => 'MaxFileCount',
        'minFileCount'    => 'MinFileCount',
        'notifyEndpoint'  => 'NotifyEndpoint',
        'notifyTopicName' => 'NotifyTopicName',
        'objectId'        => 'ObjectId',
        'projectName'     => 'ProjectName',
        'storyEndTime'    => 'StoryEndTime',
        'storyName'       => 'StoryName',
        'storyStartTime'  => 'StoryStartTime',
        'storySubType'    => 'StorySubType',
        'storyType'       => 'StoryType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->maxFileCount) {
            $res['MaxFileCount'] = $this->maxFileCount;
        }
        if (null !== $this->minFileCount) {
            $res['MinFileCount'] = $this->minFileCount;
        }
        if (null !== $this->notifyEndpoint) {
            $res['NotifyEndpoint'] = $this->notifyEndpoint;
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
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['MaxFileCount'])) {
            $model->maxFileCount = $map['MaxFileCount'];
        }
        if (isset($map['MinFileCount'])) {
            $model->minFileCount = $map['MinFileCount'];
        }
        if (isset($map['NotifyEndpoint'])) {
            $model->notifyEndpoint = $map['NotifyEndpoint'];
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

        return $model;
    }
}
