<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeProductInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $ownerUserId;

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
    public $resourceInstanceId;

    /**
     * @var string
     */
    public $resourceInstanceIp;

    /**
     * @var string
     */
    public $resourceInstanceName;

    /**
     * @var string
     */
    public $resourceIp;

    /**
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @var string
     */
    public $resourceName;

    /**
     * @var string
     */
    public $resourceProduct;

    /**
     * @var string
     */
    public $resourceRegionId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'ownerUserId' => 'OwnerUserId',
        'pageNumber' => 'PageNumber',
        'pageSize' => 'PageSize',
        'regionId' => 'RegionId',
        'resourceInstanceId' => 'ResourceInstanceId',
        'resourceInstanceIp' => 'ResourceInstanceIp',
        'resourceInstanceName' => 'ResourceInstanceName',
        'resourceIp' => 'ResourceIp',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'resourceName' => 'ResourceName',
        'resourceProduct' => 'ResourceProduct',
        'resourceRegionId' => 'ResourceRegionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
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

        if (null !== $this->resourceInstanceId) {
            $res['ResourceInstanceId'] = $this->resourceInstanceId;
        }

        if (null !== $this->resourceInstanceIp) {
            $res['ResourceInstanceIp'] = $this->resourceInstanceIp;
        }

        if (null !== $this->resourceInstanceName) {
            $res['ResourceInstanceName'] = $this->resourceInstanceName;
        }

        if (null !== $this->resourceIp) {
            $res['ResourceIp'] = $this->resourceIp;
        }

        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->resourceProduct) {
            $res['ResourceProduct'] = $this->resourceProduct;
        }

        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
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

        if (isset($map['ResourceInstanceId'])) {
            $model->resourceInstanceId = $map['ResourceInstanceId'];
        }

        if (isset($map['ResourceInstanceIp'])) {
            $model->resourceInstanceIp = $map['ResourceInstanceIp'];
        }

        if (isset($map['ResourceInstanceName'])) {
            $model->resourceInstanceName = $map['ResourceInstanceName'];
        }

        if (isset($map['ResourceIp'])) {
            $model->resourceIp = $map['ResourceIp'];
        }

        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['ResourceProduct'])) {
            $model->resourceProduct = $map['ResourceProduct'];
        }

        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }

        return $model;
    }
}
