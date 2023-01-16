<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class QueryStoriesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $createTimeRangeShrink;

    /**
     * @example {"key": "val"}
     *
     * @var string
     */
    public $customLabels;

    /**
     * @example test-dataset
     *
     * @var string
     */
    public $datasetName;

    /**
     * @var string
     */
    public $figureClusterIdsShrink;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpw****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @example id1
     *
     * @var string
     */
    public $objectId;

    /**
     * @example asc
     *
     * @var string
     */
    public $order;

    /**
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @example CreateTime
     *
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $storyEndTimeRangeShrink;

    /**
     * @example name1
     *
     * @var string
     */
    public $storyName;

    /**
     * @var string
     */
    public $storyStartTimeRangeShrink;

    /**
     * @example SeasonHighlights
     *
     * @var string
     */
    public $storySubType;

    /**
     * @example TimeMemory
     *
     * @var string
     */
    public $storyType;

    /**
     * @example true
     *
     * @var bool
     */
    public $withEmptyStories;
    protected $_name = [
        'createTimeRangeShrink'     => 'CreateTimeRange',
        'customLabels'              => 'CustomLabels',
        'datasetName'               => 'DatasetName',
        'figureClusterIdsShrink'    => 'FigureClusterIds',
        'maxResults'                => 'MaxResults',
        'nextToken'                 => 'NextToken',
        'objectId'                  => 'ObjectId',
        'order'                     => 'Order',
        'projectName'               => 'ProjectName',
        'sort'                      => 'Sort',
        'storyEndTimeRangeShrink'   => 'StoryEndTimeRange',
        'storyName'                 => 'StoryName',
        'storyStartTimeRangeShrink' => 'StoryStartTimeRange',
        'storySubType'              => 'StorySubType',
        'storyType'                 => 'StoryType',
        'withEmptyStories'          => 'WithEmptyStories',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return QueryStoriesShrinkRequest
     */
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
