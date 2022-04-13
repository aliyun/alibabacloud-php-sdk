<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

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
    public $projectName;

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
        'createTimeRange'     => 'CreateTimeRange',
        'customLabels'        => 'CustomLabels',
        'datasetName'         => 'DatasetName',
        'figureClusterIds'    => 'FigureClusterIds',
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'objectId'            => 'ObjectId',
        'projectName'         => 'ProjectName',
        'storyEndTimeRange'   => 'StoryEndTimeRange',
        'storyName'           => 'StoryName',
        'storyStartTimeRange' => 'StoryStartTimeRange',
        'storySubType'        => 'StorySubType',
        'storyType'           => 'StoryType',
        'withEmptyStories'    => 'WithEmptyStories',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTimeRange) {
            $res['CreateTimeRange'] = null !== $this->createTimeRange ? $this->createTimeRange->toMap() : null;
        }
        if (null !== $this->customLabels) {
            $res['CustomLabels'] = $this->customLabels;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->figureClusterIds) {
            $res['FigureClusterIds'] = $this->figureClusterIds;
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
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->storyEndTimeRange) {
            $res['StoryEndTimeRange'] = null !== $this->storyEndTimeRange ? $this->storyEndTimeRange->toMap() : null;
        }
        if (null !== $this->storyName) {
            $res['StoryName'] = $this->storyName;
        }
        if (null !== $this->storyStartTimeRange) {
            $res['StoryStartTimeRange'] = null !== $this->storyStartTimeRange ? $this->storyStartTimeRange->toMap() : null;
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
     * @return QueryStoriesRequest
     */
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
                $model->figureClusterIds = $map['FigureClusterIds'];
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
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
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
