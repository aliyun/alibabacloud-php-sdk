<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiFeatureStore\V20230621\Models;

use AlibabaCloud\Tea\Model;

class ListDatasourceFeatureViewsRequest extends Model
{
    /**
     * @var bool
     */
    public $all;

    /**
     * @example 2025-03-19
     *
     * @var string
     */
    public $endDate;

    /**
     * @example fv
     *
     * @var string
     */
    public $name;

    /**
     * @example Desc
     *
     * @var string
     */
    public $order;

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
     * @example 3
     *
     * @var string
     */
    public $projectId;

    /**
     * @example fs_project
     *
     * @var string
     */
    public $projectName;

    /**
     * @var bool
     */
    public $showStorageUsage;

    /**
     * @example GmtCreateTime
     *
     * @var string
     */
    public $sortBy;

    /**
     * @example 2025-03-14
     *
     * @var string
     */
    public $startDate;

    /**
     * @example Stream
     *
     * @var string
     */
    public $type;

    /**
     * @var bool
     */
    public $verbose;
    protected $_name = [
        'all' => 'All',
        'endDate' => 'EndDate',
        'name' => 'Name',
        'order' => 'Order',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'showStorageUsage' => 'ShowStorageUsage',
        'sortBy' => 'SortBy',
        'startDate' => 'StartDate',
        'type' => 'Type',
        'verbose' => 'Verbose',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->all) {
            $res['All'] = $this->all;
        }
        if (null !== $this->endDate) {
            $res['EndDate'] = $this->endDate;
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
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->showStorageUsage) {
            $res['ShowStorageUsage'] = $this->showStorageUsage;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->startDate) {
            $res['StartDate'] = $this->startDate;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->verbose) {
            $res['Verbose'] = $this->verbose;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDatasourceFeatureViewsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['All'])) {
            $model->all = $map['All'];
        }
        if (isset($map['EndDate'])) {
            $model->endDate = $map['EndDate'];
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ShowStorageUsage'])) {
            $model->showStorageUsage = $map['ShowStorageUsage'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['StartDate'])) {
            $model->startDate = $map['StartDate'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Verbose'])) {
            $model->verbose = $map['Verbose'];
        }

        return $model;
    }
}
