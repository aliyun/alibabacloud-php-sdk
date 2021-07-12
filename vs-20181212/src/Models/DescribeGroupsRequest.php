<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeGroupsRequest extends Model
{
    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $region;

    /**
     * @var string
     */
    public $inProtocol;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $sortBy;

    /**
     * @var string
     */
    public $sortDirection;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var int
     */
    public $pageNum;

    /**
     * @var bool
     */
    public $includeStats;
    protected $_name = [
        'ownerId'       => 'OwnerId',
        'id'            => 'Id',
        'name'          => 'Name',
        'region'        => 'Region',
        'inProtocol'    => 'InProtocol',
        'status'        => 'Status',
        'sortBy'        => 'SortBy',
        'sortDirection' => 'SortDirection',
        'pageSize'      => 'PageSize',
        'pageNum'       => 'PageNum',
        'includeStats'  => 'IncludeStats',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->inProtocol) {
            $res['InProtocol'] = $this->inProtocol;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->sortBy) {
            $res['SortBy'] = $this->sortBy;
        }
        if (null !== $this->sortDirection) {
            $res['SortDirection'] = $this->sortDirection;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->pageNum) {
            $res['PageNum'] = $this->pageNum;
        }
        if (null !== $this->includeStats) {
            $res['IncludeStats'] = $this->includeStats;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['InProtocol'])) {
            $model->inProtocol = $map['InProtocol'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SortBy'])) {
            $model->sortBy = $map['SortBy'];
        }
        if (isset($map['SortDirection'])) {
            $model->sortDirection = $map['SortDirection'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PageNum'])) {
            $model->pageNum = $map['PageNum'];
        }
        if (isset($map['IncludeStats'])) {
            $model->includeStats = $map['IncludeStats'];
        }

        return $model;
    }
}
