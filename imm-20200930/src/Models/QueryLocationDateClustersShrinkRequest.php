<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class QueryLocationDateClustersShrinkRequest extends Model
{
    /**
     * @description The address information.
     *
     * @var string
     */
    public $addressShrink;

    /**
     * @description The time range during which the spatiotemporal clustering groups are generated.
     *
     * @var string
     */
    public $createTimeRangeShrink;

    /**
     * @description The custom labels, which can be used as query conditions.
     *
     * @example key=value
     *
     * @var string
     */
    public $customLabels;

    /**
     * @description The name of the dataset. For more information, see [Create a dataset](https://help.aliyun.com/document_detail/478160.html).
     *
     * This parameter is required.
     * @example test-dataset
     *
     * @var string
     */
    public $datasetName;

    /**
     * @description The time range when the clustering groups are ended.
     *
     * @var string
     */
    public $locationDateClusterEndTimeRangeShrink;

    /**
     * @description The administrative level of the spatiotemporal clustering groups to be queried.
     *
     * @var string
     */
    public $locationDateClusterLevelsShrink;

    /**
     * @description The time range when the clustering groups are started.
     *
     * @var string
     */
    public $locationDateClusterStartTimeRangeShrink;

    /**
     * @description The number of entries per page. Valid values: [1,100]. Default value: 20.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token.
     *
     * @example MzQNjmY2MzYxNhNjk2ZNjEu****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the group that you want to query. Specify this parameter if you want to obtain the information about a specific spatiotemporal clustering group. Otherwise, leave this parameter empty and use other parameters to query the groups that meet the matching conditions.
     *
     * @example location-date-cluster-71dd4f32-9597-4085-a2ab-3a7b0fd0aff9
     *
     * @var string
     */
    public $objectId;

    /**
     * @description The sorting order.
     *
     * Default value: asc. Valid values:
     *
     *   asc: ascending order.
     *   desc: descending order.
     *
     * @example asc
     *
     * @var string
     */
    public $order;

    /**
     * @description The name of the project. For more information, see [CreateProject](https://help.aliyun.com/document_detail/478153.html).
     *
     * This parameter is required.
     * @example test-project
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The condition by which the results are sorted.
     *
     * Valid values:
     *
     *   LocationDateClusterEndTime: by the end time of the spatiotemporal clustering groups.
     *   CreateTime: by the creation time of the spatiotemporal clustering groups.
     *   UpdateTime: by the update time of the spatiotemporal clustering groups.
     *   LocationDateClusterStartTime: by the start time of the spatiotemporal clustering groups. This is the default value.
     *
     * @example LocationDateClusterStartTime
     *
     * @var string
     */
    public $sort;

    /**
     * @description The title of spatiotemporal clustering. Fuzzy matching is performed.
     *
     * @var string
     */
    public $title;

    /**
     * @description The time range during which the spatiotemporal clustering groups are updated.
     *
     * @var string
     */
    public $updateTimeRangeShrink;
    protected $_name = [
        'addressShrink'                           => 'Address',
        'createTimeRangeShrink'                   => 'CreateTimeRange',
        'customLabels'                            => 'CustomLabels',
        'datasetName'                             => 'DatasetName',
        'locationDateClusterEndTimeRangeShrink'   => 'LocationDateClusterEndTimeRange',
        'locationDateClusterLevelsShrink'         => 'LocationDateClusterLevels',
        'locationDateClusterStartTimeRangeShrink' => 'LocationDateClusterStartTimeRange',
        'maxResults'                              => 'MaxResults',
        'nextToken'                               => 'NextToken',
        'objectId'                                => 'ObjectId',
        'order'                                   => 'Order',
        'projectName'                             => 'ProjectName',
        'sort'                                    => 'Sort',
        'title'                                   => 'Title',
        'updateTimeRangeShrink'                   => 'UpdateTimeRange',
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
        if (null !== $this->createTimeRangeShrink) {
            $res['CreateTimeRange'] = $this->createTimeRangeShrink;
        }
        if (null !== $this->customLabels) {
            $res['CustomLabels'] = $this->customLabels;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->locationDateClusterEndTimeRangeShrink) {
            $res['LocationDateClusterEndTimeRange'] = $this->locationDateClusterEndTimeRangeShrink;
        }
        if (null !== $this->locationDateClusterLevelsShrink) {
            $res['LocationDateClusterLevels'] = $this->locationDateClusterLevelsShrink;
        }
        if (null !== $this->locationDateClusterStartTimeRangeShrink) {
            $res['LocationDateClusterStartTimeRange'] = $this->locationDateClusterStartTimeRangeShrink;
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
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->updateTimeRangeShrink) {
            $res['UpdateTimeRange'] = $this->updateTimeRangeShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryLocationDateClustersShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->addressShrink = $map['Address'];
        }
        if (isset($map['CreateTimeRange'])) {
            $model->createTimeRangeShrink = $map['CreateTimeRange'];
        }
        if (isset($map['CustomLabels'])) {
            $model->customLabels = $map['CustomLabels'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['LocationDateClusterEndTimeRange'])) {
            $model->locationDateClusterEndTimeRangeShrink = $map['LocationDateClusterEndTimeRange'];
        }
        if (isset($map['LocationDateClusterLevels'])) {
            $model->locationDateClusterLevelsShrink = $map['LocationDateClusterLevels'];
        }
        if (isset($map['LocationDateClusterStartTimeRange'])) {
            $model->locationDateClusterStartTimeRangeShrink = $map['LocationDateClusterStartTimeRange'];
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
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UpdateTimeRange'])) {
            $model->updateTimeRangeShrink = $map['UpdateTimeRange'];
        }

        return $model;
    }
}
