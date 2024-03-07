<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiAutoML\V20220828\Models;

use AlibabaCloud\Tea\Model;

class ListHpoExperimentsRequest extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $includeConfigData;

    /**
     * @var string
     */
    public $maxCreateTime;

    /**
     * @var string
     */
    public $minCreateTime;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $order;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $status;

    /**
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
