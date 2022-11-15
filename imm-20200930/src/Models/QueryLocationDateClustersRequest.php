<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class QueryLocationDateClustersRequest extends Model
{
    /**
     * @var Address
     */
    public $address;

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
     * @var TimeRange
     */
    public $locationDateClusterEndTimeRange;

    /**
     * @var string[]
     */
    public $locationDateClusterLevels;

    /**
     * @var TimeRange
     */
    public $locationDateClusterStartTimeRange;

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
     * @var TimeRange
     */
    public $updateTimeRange;
    protected $_name = [
        'address'                           => 'Address',
        'createTimeRange'                   => 'CreateTimeRange',
        'customLabels'                      => 'CustomLabels',
        'datasetName'                       => 'DatasetName',
        'locationDateClusterEndTimeRange'   => 'LocationDateClusterEndTimeRange',
        'locationDateClusterLevels'         => 'LocationDateClusterLevels',
        'locationDateClusterStartTimeRange' => 'LocationDateClusterStartTimeRange',
        'maxResults'                        => 'MaxResults',
        'nextToken'                         => 'NextToken',
        'objectId'                          => 'ObjectId',
        'order'                             => 'Order',
        'projectName'                       => 'ProjectName',
        'sort'                              => 'Sort',
        'title'                             => 'Title',
        'updateTimeRange'                   => 'UpdateTimeRange',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = null !== $this->address ? $this->address->toMap() : null;
        }
        if (null !== $this->createTimeRange) {
            $res['CreateTimeRange'] = null !== $this->createTimeRange ? $this->createTimeRange->toMap() : null;
        }
        if (null !== $this->customLabels) {
            $res['CustomLabels'] = $this->customLabels;
        }
        if (null !== $this->datasetName) {
            $res['DatasetName'] = $this->datasetName;
        }
        if (null !== $this->locationDateClusterEndTimeRange) {
            $res['LocationDateClusterEndTimeRange'] = null !== $this->locationDateClusterEndTimeRange ? $this->locationDateClusterEndTimeRange->toMap() : null;
        }
        if (null !== $this->locationDateClusterLevels) {
            $res['LocationDateClusterLevels'] = $this->locationDateClusterLevels;
        }
        if (null !== $this->locationDateClusterStartTimeRange) {
            $res['LocationDateClusterStartTimeRange'] = null !== $this->locationDateClusterStartTimeRange ? $this->locationDateClusterStartTimeRange->toMap() : null;
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
        if (null !== $this->updateTimeRange) {
            $res['UpdateTimeRange'] = null !== $this->updateTimeRange ? $this->updateTimeRange->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryLocationDateClustersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = Address::fromMap($map['Address']);
        }
        if (isset($map['CreateTimeRange'])) {
            $model->createTimeRange = TimeRange::fromMap($map['CreateTimeRange']);
        }
        if (isset($map['CustomLabels'])) {
            $model->customLabels = $map['CustomLabels'];
        }
        if (isset($map['DatasetName'])) {
            $model->datasetName = $map['DatasetName'];
        }
        if (isset($map['LocationDateClusterEndTimeRange'])) {
            $model->locationDateClusterEndTimeRange = TimeRange::fromMap($map['LocationDateClusterEndTimeRange']);
        }
        if (isset($map['LocationDateClusterLevels'])) {
            if (!empty($map['LocationDateClusterLevels'])) {
                $model->locationDateClusterLevels = $map['LocationDateClusterLevels'];
            }
        }
        if (isset($map['LocationDateClusterStartTimeRange'])) {
            $model->locationDateClusterStartTimeRange = TimeRange::fromMap($map['LocationDateClusterStartTimeRange']);
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
            $model->updateTimeRange = TimeRange::fromMap($map['UpdateTimeRange']);
        }

        return $model;
    }
}
