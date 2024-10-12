<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AIWorkSpace\V20210204\Models;

use AlibabaCloud\Tea\Model;

class ListRunsRequest extends Model
{
    /**
     * @example exp-1zpfthdx******
     *
     * @var string
     */
    public $experimentId;

    /**
     * @example 2021-01-30T12:51:33.028Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example is_evaluation:true
     *
     * @var string
     */
    public $labels;

    /**
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @example myName
     *
     * @var string
     */
    public $name;

    /**
     * @example DESC
     *
     * @var string
     */
    public $order;

    /**
     * @example GmtCreateTime DESC,Name ASC
     *
     * @var string
     */
    public $orderBy;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @example 0
     *
     * @var int
     */
    public $pageToken;

    /**
     * @example GmtCreateTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example job-rbvg5wzlj****
     *
     * @var string
     */
    public $sourceId;

    /**
     * @example TrainingService
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example true
     *
     * @var bool
     */
    public $verbose;

    /**
     * @example 22840
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'experimentId'  => 'ExperimentId',
        'gmtCreateTime' => 'GmtCreateTime',
        'labels'        => 'Labels',
        'maxResults'    => 'MaxResults',
        'name'          => 'Name',
        'order'         => 'Order',
        'orderBy'       => 'OrderBy',
        'pageNumber'    => 'PageNumber',
        'pageSize'      => 'PageSize',
        'pageToken'     => 'PageToken',
        'sortBy'        => 'SortBy',
        'sourceId'      => 'SourceId',
        'sourceType'    => 'SourceType',
        'verbose'       => 'Verbose',
        'workspaceId'   => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->experimentId) {
            $res['ExperimentId'] = $this->experimentId;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->orderBy) {
            $res['OrderBy'] = $this->orderBy;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageToken) {
            $res['PageToken'] = $this->pageToken;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->verbose) {
            $res['Verbose'] = $this->verbose;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListRunsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExperimentId'])) {
            $model->experimentId = $map['ExperimentId'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['OrderBy'])) {
            $model->orderBy = $map['OrderBy'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageToken'])) {
            $model->pageToken = $map['PageToken'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['Verbose'])) {
            $model->verbose = $map['Verbose'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
