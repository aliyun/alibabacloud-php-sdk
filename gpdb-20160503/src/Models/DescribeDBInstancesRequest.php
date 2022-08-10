<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDBInstancesRequest extends Model
{
    /**
     * @var string[]
     */
    public $DBInstanceCategories;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $DBInstanceIds;

    /**
     * @var string[]
     */
    public $DBInstanceModes;

    /**
     * @var string[]
     */
    public $DBInstanceStatuses;

    /**
     * @var string[]
     */
    public $instanceDeployTypes;

    /**
     * @var string
     */
    public $instanceNetworkType;

    /**
     * @var int
     */
    public $ownerId;

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
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
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
