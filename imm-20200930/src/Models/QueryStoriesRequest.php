<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class QueryStoriesRequest extends Model
{
    /**
     * @var TimeRange
     */
    public $createTimeRange;

    /**
     * @var string
     */
    public $customLabels;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string[]
     */
    public $figureClusterIds;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $objectId;

    /**
     * @var string
     */
    public $order;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $sort;

    /**
     * @var TimeRange
     */
    public $storyEndTimeRange;

    /**
     * @var string
     */
    public $storyName;

    /**
     * @var TimeRange
     */
    public $storyStartTimeRange;

    /**
     * @var string
     */
    public $storySubType;

    /**
     * @var string
     */
    public $storyType;

    /**
     * @var bool
     */
    public $withEmptyStories;
    protected $_name = [
        'createTimeRange' => 'CreateTimeRange',
        'customLabels' => 'CustomLabels',
        'datasetName' => 'DatasetName',
        'figureClusterIds' => 'FigureClusterIds',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'objectId' => 'ObjectId',
        'order' => 'Order',
        'projectName' => 'ProjectName',
        'sort' => 'Sort',
        'storyEndTimeRange' => 'StoryEndTimeRange',
        'storyName' => 'StoryName',
        'storyStartTimeRange' => 'StoryStartTimeRange',
        'storySubType' => 'StorySubType',
        'storyType' => 'StoryType',
        'withEmptyStories' => 'WithEmptyStories',
    ];

    public function validate()
    {
        if (null !== $this->createTimeRange) {
            $this->createTimeRange->validate();
        }
        if (\is_array($this->figureClusterIds)) {
            Model::validateArray($this->figureClusterIds);
        }
        if (null !== $this->storyEndTimeRange) {
            $this->storyEndTimeRange->validate();
        }
        if (null !== $this->storyStartTimeRange) {
            $this->storyStartTimeRange->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTimeRange) {
            $res['CreateTimeRange'] = null !== $this->createTimeRange ? $this->createTimeRange->toArray($noStream) : $this->createTimeRange;
        }

        if (null !== $this->customLabels) {
            $res['CustomLabels'] = $this->customLabels;
        }

        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->figureClusterIds) {
            if (\is_array($this->figureClusterIds)) {
                $res['FigureClusterIds'] = [];
                $n1 = 0;
                foreach ($this->figureClusterIds as $item1) {
                    $res['FigureClusterIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }

        if (null !== $this->objectId) {
            $res['ObjectId'] = $this->objectId;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        if (null !== $this->sort) {
            $res['Sort'] = $this->sort;
        }

        if (null !== $this->storyEndTimeRange) {
            $res['StoryEndTimeRange'] = null !== $this->storyEndTimeRange ? $this->storyEndTimeRange->toArray($noStream) : $this->storyEndTimeRange;
        }

        if (null !== $this->storyName) {
            $res['StoryName'] = $this->storyName;
        }

        if (null !== $this->storyStartTimeRange) {
            $res['StoryStartTimeRange'] = null !== $this->storyStartTimeRange ? $this->storyStartTimeRange->toArray($noStream) : $this->storyStartTimeRange;
        }

        if (null !== $this->storySubType) {
            $res['StorySubType'] = $this->storySubType;
        }

        if (null !== $this->storyType) {
            $res['StoryType'] = $this->storyType;
        }

        if (null !== $this->withEmptyStories) {
            $res['WithEmptyStories'] = $this->withEmptyStories;
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
        if (isset($map['CreateTimeRange'])) {
            $model->createTimeRange = TimeRange::fromMap($map['CreateTimeRange']);
        }

        if (isset($map['CustomLabels'])) {
            $model->customLabels = $map['CustomLabels'];
        }

        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['FigureClusterIds'])) {
            if (!empty($map['FigureClusterIds'])) {
                $model->figureClusterIds = [];
                $n1 = 0;
                foreach ($map['FigureClusterIds'] as $item1) {
                    $model->figureClusterIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }

        if (isset($map['ObjectId'])) {
            $model->objectId = $map['ObjectId'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        if (isset($map['Sort'])) {
            $model->sort = $map['Sort'];
        }

        if (isset($map['StoryEndTimeRange'])) {
            $model->storyEndTimeRange = TimeRange::fromMap($map['StoryEndTimeRange']);
        }

        if (isset($map['StoryName'])) {
            $model->storyName = $map['StoryName'];
        }

        if (isset($map['StoryStartTimeRange'])) {
            $model->storyStartTimeRange = TimeRange::fromMap($map['StoryStartTimeRange']);
        }

        if (isset($map['StorySubType'])) {
            $model->storySubType = $map['StorySubType'];
        }

        if (isset($map['StoryType'])) {
            $model->storyType = $map['StoryType'];
        }

        if (isset($map['WithEmptyStories'])) {
            $model->withEmptyStories = $map['WithEmptyStories'];
        }

        return $model;
    }
}
