<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeDBInstancesShrinkRequest\tag;

class DescribeDBInstancesShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $DBInstanceCategoriesShrink;

    /**
     * @var string
     */
    public $DBInstanceDescription;

    /**
     * @var string
     */
    public $DBInstanceIds;

    /**
     * @var string
     */
    public $DBInstanceModesShrink;

    /**
     * @var string
     */
    public $DBInstanceStatusesShrink;

    /**
     * @var string
     */
    public $instanceDeployTypesShrink;

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
        'DBInstanceCategoriesShrink' => 'DBInstanceCategories',
        'DBInstanceDescription' => 'DBInstanceDescription',
        'DBInstanceIds' => 'DBInstanceIds',
        'DBInstanceModesShrink' => 'DBInstanceModes',
        'DBInstanceStatusesShrink' => 'DBInstanceStatuses',
        'instanceDeployTypesShrink' => 'InstanceDeployTypes',
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
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->DBInstanceCategoriesShrink) {
            $res['DBInstanceCategories'] = $this->DBInstanceCategoriesShrink;
        }

        if (null !== $this->DBInstanceDescription) {
            $res['DBInstanceDescription'] = $this->DBInstanceDescription;
        }

        if (null !== $this->DBInstanceIds) {
            $res['DBInstanceIds'] = $this->DBInstanceIds;
        }

        if (null !== $this->DBInstanceModesShrink) {
            $res['DBInstanceModes'] = $this->DBInstanceModesShrink;
        }

        if (null !== $this->DBInstanceStatusesShrink) {
            $res['DBInstanceStatuses'] = $this->DBInstanceStatusesShrink;
        }

        if (null !== $this->instanceDeployTypesShrink) {
            $res['InstanceDeployTypes'] = $this->instanceDeployTypesShrink;
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
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            $model->DBInstanceCategoriesShrink = $map['DBInstanceCategories'];
        }

        if (isset($map['DBInstanceDescription'])) {
            $model->DBInstanceDescription = $map['DBInstanceDescription'];
        }

        if (isset($map['DBInstanceIds'])) {
            $model->DBInstanceIds = $map['DBInstanceIds'];
        }

        if (isset($map['DBInstanceModes'])) {
            $model->DBInstanceModesShrink = $map['DBInstanceModes'];
        }

        if (isset($map['DBInstanceStatuses'])) {
            $model->DBInstanceStatusesShrink = $map['DBInstanceStatuses'];
        }

        if (isset($map['InstanceDeployTypes'])) {
            $model->instanceDeployTypesShrink = $map['InstanceDeployTypes'];
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
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
