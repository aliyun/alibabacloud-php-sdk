<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class QueryLocationDateClustersShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $addressShrink;

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
    public $locationDateClusterEndTimeRangeShrink;

    /**
     * @var string
     */
    public $locationDateClusterLevelsShrink;

    /**
     * @var string
     */
    public $locationDateClusterStartTimeRangeShrink;

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
    public $title;

    /**
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
