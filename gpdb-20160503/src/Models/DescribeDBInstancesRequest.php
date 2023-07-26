<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDBInstancesRequest extends Model
{
    /**
     * @description The edition of the instance. Separate multiple values with commas (,). Valid values:
     *
     *   **basic**: Basic Edition
     *   **highavailability**: High-availability Edition
     *   **finance**: Enterprise Edition
     *
     * @var string[]
     */
    public $DBInstanceCategories;

    /**
     * @description The description of the instance.
     *
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @description The ID of the instance. Separate multiple IDs with commas (,).
     *
     * @example gp-bp12ga6v69h86****
     *
     * @var string
     */
    public $DBInstanceIds;

    /**
     * @description The resource type of the instance. Separate multiple values with commas (,). Valid values:
     *
     *   **serverless**: Serverless mode
     *   **storageelastic**: elastic storage mode
     *   **classic**: reserved storage mode
     *
     * @var string[]
     */
    public $DBInstanceModes;

    /**
     * @description The state of the instance. Separate multiple values with commas (,). For more information, see [Instance statuses](~~86944~~).
     *
     * >  The value of this parameter must be in lowercase.
     * @var string[]
     */
    public $DBInstanceStatuses;

    /**
     * @description This parameter is no longer used.
     *
     * @var string[]
     */
    public $instanceDeployTypes;

    /**
     * @description The network type of the instance. Valid values:
     *
     *   **VPC**
     *   **Classic**
     *
     * >  If you do not specify this parameter, instances of both network types are returned.
     * @example VPC
     *
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of the page to return. The value must be an integer that is greater than 0. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page. Valid values:
     *
     *   **30**
     *   **50**
     *   **100**
     *
     * Default value: **30**.
     * @example 50
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the instance.
     *
     * >  You can call the [DescribeRegions](~~86912~~) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the instance belongs.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The list of tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'DBInstanceCategories'  => 'DBInstanceCategories',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceIds'         => 'DBInstanceIds',
        'DBInstanceModes'       => 'DBInstanceModes',
        'DBInstanceStatuses'    => 'DBInstanceStatuses',
        'instanceDeployTypes'   => 'InstanceDeployTypes',
        'instanceNetworkType'   => 'InstanceNetworkType',
        'ownerId'               => 'OwnerId',
        'pageNumber'            => 'PageNumber',
        'pageSize'              => 'PageSize',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
        'tag'                   => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceCategories) {
            $res['DBInstanceCategories'] = $this->DBInstanceCategories;
        }
        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }
        if (null !== $this->DBInstanceIds) {
            $res['DBInstanceIds'] = $this->DBInstanceIds;
        }
        if (null !== $this->DBInstanceModes) {
            $res['DBInstanceModes'] = $this->DBInstanceModes;
        }
        if (null !== $this->DBInstanceStatuses) {
            $res['DBInstanceStatuses'] = $this->DBInstanceStatuses;
        }
        if (null !== $this->instanceDeployTypes) {
            $res['InstanceDeployTypes'] = $this->instanceDeployTypes;
        }
        if (null !== $this->instanceNetworkType) {
            $res['InstanceNetworkType'] = $this->instanceNetworkType;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDBInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceCategories'])) {
            if (!empty($map['DBInstanceCategories'])) {
                $model->DBInstanceCategories = $map['DBInstanceCategories'];
            }
        }
        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }
        if (isset($map['DBInstanceIds'])) {
            $model->DBInstanceIds = $map['DBInstanceIds'];
        }
        if (isset($map['DBInstanceModes'])) {
            if (!empty($map['DBInstanceModes'])) {
                $model->DBInstanceModes = $map['DBInstanceModes'];
            }
        }
        if (isset($map['DBInstanceStatuses'])) {
            if (!empty($map['DBInstanceStatuses'])) {
                $model->DBInstanceStatuses = $map['DBInstanceStatuses'];
            }
        }
        if (isset($map['InstanceDeployTypes'])) {
            if (!empty($map['InstanceDeployTypes'])) {
                $model->instanceDeployTypes = $map['InstanceDeployTypes'];
            }
        }
        if (isset($map['InstanceNetworkType'])) {
            $model->instanceNetworkType = $map['InstanceNetworkType'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
