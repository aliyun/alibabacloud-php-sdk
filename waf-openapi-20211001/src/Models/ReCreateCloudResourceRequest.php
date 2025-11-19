<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class ReCreateCloudResourceRequest extends Model
{
    /**
     * @var string
     */
    public $cloudResourceId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $port;

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
    public $resourceManagerResourceGroupId;

    /**
     * @var string
     */
    public $resourceProduct;
    protected $_name = [
        'cloudResourceId' => 'CloudResourceId',
        'instanceId' => 'InstanceId',
        'port' => 'Port',
        'regionId' => 'RegionId',
        'resourceInstanceId' => 'ResourceInstanceId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'resourceProduct' => 'ResourceProduct',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloudResourceId) {
            $res['CloudResourceId'] = $this->cloudResourceId;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceInstanceId) {
            $res['ResourceInstanceId'] = $this->resourceInstanceId;
        }

        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        if (null !== $this->resourceProduct) {
            $res['ResourceProduct'] = $this->resourceProduct;
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
        if (isset($map['CloudResourceId'])) {
            $model->cloudResourceId = $map['CloudResourceId'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceInstanceId'])) {
            $model->resourceInstanceId = $map['ResourceInstanceId'];
        }

        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        if (isset($map['ResourceProduct'])) {
            $model->resourceProduct = $map['ResourceProduct'];
        }

        return $model;
    }
}
