<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesRequest\tag;

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

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'DBInstanceCategories' => 'DBInstanceCategories',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceIds' => 'DBInstanceIds',
        'DBInstanceModes' => 'DBInstanceModes',
        'DBInstanceStatuses' => 'DBInstanceStatuses',
        'instanceDeployTypes' => 'InstanceDeployTypes',
        'instanceNetworkType' => 'InstanceNetworkType',
        'ownerId' => 'OwnerId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tag' => 'Tag',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (\is_array($this->DBInstanceCategories)) {
            Model::validateArray($this->DBInstanceCategories);
        }
        if (\is_array($this->DBInstanceModes)) {
            Model::validateArray($this->DBInstanceModes);
        }
        if (\is_array($this->DBInstanceStatuses)) {
            Model::validateArray($this->DBInstanceStatuses);
        }
        if (\is_array($this->instanceDeployTypes)) {
            Model::validateArray($this->instanceDeployTypes);
        }
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceCategories) {
            if (\is_array($this->DBInstanceCategories)) {
                $res['DBInstanceCategories'] = [];
                $n1 = 0;
                foreach ($this->DBInstanceCategories as $item1) {
                    $res['DBInstanceCategories'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }

        if (null !== $this->DBInstanceIds) {
            $res['DBInstanceIds'] = $this->DBInstanceIds;
        }

        if (null !== $this->DBInstanceModes) {
            if (\is_array($this->DBInstanceModes)) {
                $res['DBInstanceModes'] = [];
                $n1 = 0;
                foreach ($this->DBInstanceModes as $item1) {
                    $res['DBInstanceModes'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->DBInstanceStatuses) {
            if (\is_array($this->DBInstanceStatuses)) {
                $res['DBInstanceStatuses'] = [];
                $n1 = 0;
                foreach ($this->DBInstanceStatuses as $item1) {
                    $res['DBInstanceStatuses'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->instanceDeployTypes) {
            if (\is_array($this->instanceDeployTypes)) {
                $res['InstanceDeployTypes'] = [];
                $n1 = 0;
                foreach ($this->instanceDeployTypes as $item1) {
                    $res['InstanceDeployTypes'][$n1++] = $item1;
                }
            }
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceCategories'])) {
            if (!empty($map['DBInstanceCategories'])) {
                $model->DBInstanceCategories = [];
                $n1 = 0;
                foreach ($map['DBInstanceCategories'] as $item1) {
                    $model->DBInstanceCategories[$n1++] = $item1;
                }
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
                $model->DBInstanceModes = [];
                $n1 = 0;
                foreach ($map['DBInstanceModes'] as $item1) {
                    $model->DBInstanceModes[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DBInstanceStatuses'])) {
            if (!empty($map['DBInstanceStatuses'])) {
                $model->DBInstanceStatuses = [];
                $n1 = 0;
                foreach ($map['DBInstanceStatuses'] as $item1) {
                    $model->DBInstanceStatuses[$n1++] = $item1;
                }
            }
        }

        if (isset($map['InstanceDeployTypes'])) {
            if (!empty($map['InstanceDeployTypes'])) {
                $model->instanceDeployTypes = [];
                $n1 = 0;
                foreach ($map['InstanceDeployTypes'] as $item1) {
                    $model->instanceDeployTypes[$n1++] = $item1;
                }
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
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
