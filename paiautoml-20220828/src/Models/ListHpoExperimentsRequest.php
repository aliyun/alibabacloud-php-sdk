<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\Tea\Model;

class ListHpoExperimentsRequest extends Model
{
    /**
     * @description The accessibility of the experiments to be listed.
     *
     * @example PRIVATE
     *
     * @var string
     */
    public $accessibility;

    /**
     * @description Who created the expriment.
     *
     * @example 266977839132045194
     *
     * @var string
     */
    public $creator;

    /**
     * @description Return experiment detailed configuration or not.
     *
     * @example True, False
     *
     * @var string
     */
    public $includeConfigData;

    /**
     * @description The maximum create time of the experiment.
     *
     * @example yyyy-mm-dd hh:mm:ss或着yyyy-mm-dd，比如2023-03-31 10:29:30
     *
     * @var string
     */
    public $maxCreateTime;

    /**
     * @description The minimum create time of the experiment.
     *
     * @example yyyy-mm-dd hh:mm:ss或着yyyy-mm-dd，比如2023-03-31 10:29:30
     *
     * @var string
     */
    public $minCreateTime;

    /**
     * @description Experiment name filter.
     *
     * @example my_hpo_exp_1
     *
     * @var string
     */
    public $name;

    /**
     * @description ASC, DESC.
     *
     * @example ASC, DESC.
     *
     * @var string
     */
    public $order;

    /**
     * @description The page number.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description Record number on each page
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The returned experiments to be sorted by this column.
     *
     * @example GmtCreateTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @description Experiment status to be listed.
     *
     * @example CREATED, RUNNING, FINISHED, FAILED, EARLY_STOPPED, USER_CANCELED, SYS_CANCELED, WAITING, NO_MORE_TRIAL, UNKNOWN
     *
     * @var string
     */
    public $status;

    /**
     * @description The AI workspace ID the experiments belongs to.
     *
     * @example default
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility'     => 'Accessibility',
        'creator'           => 'Creator',
        'includeConfigData' => 'IncludeConfigData',
        'maxCreateTime'     => 'MaxCreateTime',
        'minCreateTime'     => 'MinCreateTime',
        'name'              => 'Name',
        'order'             => 'Order',
        'pageNumber'        => 'PageNumber',
        'pageSize'          => 'PageSize',
        'sortBy'            => 'SortBy',
        'status'            => 'Status',
        'workspaceId'       => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->includeConfigData) {
            $res['IncludeConfigData'] = $this->includeConfigData;
        }
        if (null !== $this->maxCreateTime) {
            $res['MaxCreateTime'] = $this->maxCreateTime;
        }
        if (null !== $this->minCreateTime) {
            $res['MinCreateTime'] = $this->minCreateTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListHpoExperimentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['IncludeConfigData'])) {
            $model->includeConfigData = $map['IncludeConfigData'];
        }
        if (isset($map['MaxCreateTime'])) {
            $model->maxCreateTime = $map['MaxCreateTime'];
        }
        if (isset($map['MinCreateTime'])) {
            $model->minCreateTime = $map['MinCreateTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
