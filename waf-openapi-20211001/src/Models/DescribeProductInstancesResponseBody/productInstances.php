<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeProductInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeProductInstancesResponseBody\productInstances\resourcePorts;

class productInstances extends Model
{
    /**
     * @var string
     */
    public $ownerUserId;

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
    public $resourceName;

    /**
     * @var resourcePorts[]
     */
    public $resourcePorts;

    /**
     * @var string
     */
    public $resourceProduct;

    /**
     * @var string
     */
    public $resourceRegionId;
    protected $_name = [
        'ownerUserId' => 'OwnerUserId',
        'resourceInstanceId' => 'ResourceInstanceId',
        'resourceInstanceIp' => 'ResourceInstanceIp',
        'resourceInstanceName' => 'ResourceInstanceName',
        'resourceIp' => 'ResourceIp',
        'resourceName' => 'ResourceName',
        'resourcePorts' => 'ResourcePorts',
        'resourceProduct' => 'ResourceProduct',
        'resourceRegionId' => 'ResourceRegionId',
    ];

    public function validate()
    {
        if (\is_array($this->resourcePorts)) {
            Model::validateArray($this->resourcePorts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
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

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->resourcePorts) {
            if (\is_array($this->resourcePorts)) {
                $res['ResourcePorts'] = [];
                $n1 = 0;
                foreach ($this->resourcePorts as $item1) {
                    $res['ResourcePorts'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
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

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }

        if (isset($map['ResourcePorts'])) {
            if (!empty($map['ResourcePorts'])) {
                $model->resourcePorts = [];
                $n1 = 0;
                foreach ($map['ResourcePorts'] as $item1) {
                    $model->resourcePorts[$n1++] = resourcePorts::fromMap($item1);
                }
            }
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
