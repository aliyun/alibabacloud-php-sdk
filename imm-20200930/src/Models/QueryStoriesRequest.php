<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class QueryStoriesRequest extends Model
{
    /**
     * @description The time range in which stories were created.
     *
     * @var TimeRange
     */
    public $createTimeRange;

    /**
     * @description The custom labels in key-value pairs.
     *
     * @example key=value
     *
     * @var string
     */
    public $customLabels;

    /**
     * @description The name of the dataset.[](~~478160~~)
     *
     * This parameter is required.
     * @example test-dataset
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description The IDs of the face clusters.
     *
     * @var string[]
     */
    public $figureClusterIds;

    /**
     * @description The maximum number of entries to return. Valid values: 1 to 100. Default value: 100.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. If you do not specify this token in the next request, results are returned from the beginning.
     *
     * @example MTIzNDU2Nzg6aW1tdGVzdDpleGFtcGxlYnVja2V0OmRhdGFzZXQwMDE6b3NzOi8vZXhhbXBsZWJ1Y2tldC9zYW1wbGVvYmplY3QxLmpw****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the story.
     *
     * @example id1
     *
     * @var string
     */
    public $objectId;

    /**
     * @description The sort order. Valid values:
     *
     *   asc: in ascending order.
     *   desc: in descending order.
     *
     * @example asc
     *
     * @var string
     */
    public $order;

    /**
     * @description The name of the project.[](~~478153~~)
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The sort field. Valid values:
     *
     *   CreateTime: sorts by story creation time.
     *   StoryName: sorts by story name.
     *   StoryStartTime: sorts by story start time.
     *   StoryEndTime: sorts by story end time.
     *
     * @example CreateTime
     *
     * @var string
     */
    public $sort;

    /**
     * @description The time range for the creation time of the last photo or video in the story.
     *
     * @var TimeRange
     */
    public $storyEndTimeRange;

    /**
     * @description The name of the story.
     *
     * @example name1
     *
     * @var string
     */
    public $storyName;

    /**
     * @description The time range for the creation time of the first photo or video in the story.
     *
     * @var TimeRange
     */
    public $storyStartTimeRange;

    /**
     * @description The subtype of the story. For a list of valid values, see [Story types and subtypes](https://help.aliyun.com/document_detail/2743998.html).
     *
     * @example SeasonHighlights
     *
     * @var string
     */
    public $storySubType;

    /**
     * @description The type of the story. For a list of valid values, see [Story types and subtypes](https://help.aliyun.com/document_detail/2743998.html).
     *
     * @example TimeMemory
     *
     * @var string
     */
    public $storyType;

    /**
     * @description Specifies whether to return empty stories. Valid values:
     *
     *   true (The default value)
     *   false
     *
     * @example true
     *
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
        'order'               => 'Order',
        'projectName'         => 'ProjectName',
        'sort'                => 'Sort',
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
