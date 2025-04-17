<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Dara\Model;

class QueryStoriesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $createTimeRangeShrink;

    /**
     * @var string
     */
    public $customLabels;

    /**
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $figureClusterIdsShrink;

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
     * @var string
     */
    public $storyEndTimeRangeShrink;

    /**
     * @var string
     */
    public $storyName;

    /**
     * @var string
     */
    public $storyStartTimeRangeShrink;

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
        'createTimeRangeShrink' => 'CreateTimeRange',
        'customLabels' => 'CustomLabels',
        'datasetName' => 'DatasetName',
        'figureClusterIdsShrink' => 'FigureClusterIds',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'objectId' => 'ObjectId',
        'order' => 'Order',
        'projectName' => 'ProjectName',
        'sort' => 'Sort',
        'storyEndTimeRangeShrink' => 'StoryEndTimeRange',
        'storyName' => 'StoryName',
        'storyStartTimeRangeShrink' => 'StoryStartTimeRange',
        'storySubType' => 'StorySubType',
        'storyType' => 'StoryType',
        'withEmptyStories' => 'WithEmptyStories',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTimeRangeShrink) {
            $res['CreateTimeRange'] = $this->createTimeRangeShrink;
        }

        if (null !== $this->customLabels) {
            $res['CustomLabels'] = $this->customLabels;
        }

        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }

        if (null !== $this->figureClusterIdsShrink) {
            $res['FigureClusterIds'] = $this->figureClusterIdsShrink;
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

        if (null !== $this->storyEndTimeRangeShrink) {
            $res['StoryEndTimeRange'] = $this->storyEndTimeRangeShrink;
        }

        if (null !== $this->storyName) {
            $res['StoryName'] = $this->storyName;
        }

        if (null !== $this->storyStartTimeRangeShrink) {
            $res['StoryStartTimeRange'] = $this->storyStartTimeRangeShrink;
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
            $model->createTimeRangeShrink = $map['CreateTimeRange'];
        }

        if (isset($map['CustomLabels'])) {
            $model->customLabels = $map['CustomLabels'];
        }

        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }

        if (isset($map['FigureClusterIds'])) {
            $model->figureClusterIdsShrink = $map['FigureClusterIds'];
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
            $model->storyEndTimeRangeShrink = $map['StoryEndTimeRange'];
        }

        if (isset($map['StoryName'])) {
            $model->storyName = $map['StoryName'];
        }

        if (isset($map['StoryStartTimeRange'])) {
            $model->storyStartTimeRangeShrink = $map['StoryStartTimeRange'];
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
