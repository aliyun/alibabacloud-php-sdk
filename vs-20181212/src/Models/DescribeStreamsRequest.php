<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Tea\Model;

class DescribeStreamsRequest extends Model
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
    public $groupId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $parentId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $app;

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
    protected $_name = [
        'ownerId'       => 'OwnerId',
        'id'            => 'Id',
        'groupId'       => 'GroupId',
        'deviceId'      => 'DeviceId',
        'parentId'      => 'ParentId',
        'name'          => 'Name',
        'domain'        => 'Domain',
        'app'           => 'App',
        'sortBy'        => 'SortBy',
        'sortDirection' => 'SortDirection',
        'pageSize'      => 'PageSize',
        'pageNum'       => 'PageNum',
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->parentId) {
            $res['ParentId'] = $this->parentId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->app) {
            $res['App'] = $this->app;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStreamsRequest
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
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['ParentId'])) {
            $model->parentId = $map['ParentId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['App'])) {
            $model->app = $map['App'];
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

        return $model;
    }
}
