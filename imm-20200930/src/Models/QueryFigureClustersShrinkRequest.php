<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models;

use AlibabaCloud\Tea\Model;

class QueryFigureClustersShrinkRequest extends Model
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
     * @example test-dataset
     *
     * @var string
     */
    public $datasetName;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @example 10
     *
     * @var string
     */
    public $nextToken;

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
     * @example ImageCount
     *
     * @var string
     */
    public $sort;

    /**
     * @var string
     */
    public $updateTimeRangeShrink;

    /**
     * @var bool
     */
    public $withTotalCount;
    protected $_name = [
        'createTimeRangeShrink' => 'CreateTimeRange',
        'customLabels'          => 'CustomLabels',
        'datasetName'           => 'DatasetName',
        'maxResults'            => 'MaxResults',
        'nextToken'             => 'NextToken',
        'order'                 => 'Order',
        'projectName'           => 'ProjectName',
        'sort'                  => 'Sort',
        'updateTimeRangeShrink' => 'UpdateTimeRange',
        'withTotalCount'        => 'WithTotalCount',
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (null !== $this->updateTimeRangeShrink) {
            $res['UpdateTimeRange'] = $this->updateTimeRangeShrink;
        }
        if (null !== $this->withTotalCount) {
            $res['WithTotalCount'] = $this->withTotalCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryFigureClustersShrinkRequest
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
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
        if (isset($map['UpdateTimeRange'])) {
            $model->updateTimeRangeShrink = $map['UpdateTimeRange'];
        }
        if (isset($map['WithTotalCount'])) {
            $model->withTotalCount = $map['WithTotalCount'];
        }

        return $model;
    }
}
