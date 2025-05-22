<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeProductInstancesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeProductInstancesResponseBody\productInstances\accessPortAndProtocols;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeProductInstancesResponseBody\productInstances\resourcePorts;

class productInstances extends Model
{
    /**
     * @var string
     */
    public $accessInstanceId;

    /**
     * @var accessPortAndProtocols[]
     */
    public $accessPortAndProtocols;

    /**
     * @var int[]
     */
    public $accessPorts;

    /**
     * @var string
     */
    public $ownerUserId;

    /**
     * @var string
     */
    public $resourceInstanceAccessStatus;

    /**
     * @var string
     */
    public $resourceInstanceEdition;

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
        'accessInstanceId' => 'AccessInstanceId',
        'accessPortAndProtocols' => 'AccessPortAndProtocols',
        'accessPorts' => 'AccessPorts',
        'ownerUserId' => 'OwnerUserId',
        'resourceInstanceAccessStatus' => 'ResourceInstanceAccessStatus',
        'resourceInstanceEdition' => 'ResourceInstanceEdition',
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
        if (\is_array($this->accessPortAndProtocols)) {
            Model::validateArray($this->accessPortAndProtocols);
        }
        if (\is_array($this->accessPorts)) {
            Model::validateArray($this->accessPorts);
        }
        if (\is_array($this->resourcePorts)) {
            Model::validateArray($this->resourcePorts);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessInstanceId) {
            $res['AccessInstanceId'] = $this->accessInstanceId;
        }

        if (null !== $this->accessPortAndProtocols) {
            if (\is_array($this->accessPortAndProtocols)) {
                $res['AccessPortAndProtocols'] = [];
                $n1 = 0;
                foreach ($this->accessPortAndProtocols as $item1) {
                    $res['AccessPortAndProtocols'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->accessPorts) {
            if (\is_array($this->accessPorts)) {
                $res['AccessPorts'] = [];
                $n1 = 0;
                foreach ($this->accessPorts as $item1) {
                    $res['AccessPorts'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }

        if (null !== $this->resourceInstanceAccessStatus) {
            $res['ResourceInstanceAccessStatus'] = $this->resourceInstanceAccessStatus;
        }

        if (null !== $this->resourceInstanceEdition) {
            $res['ResourceInstanceEdition'] = $this->resourceInstanceEdition;
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
        if (isset($map['AccessInstanceId'])) {
            $model->accessInstanceId = $map['AccessInstanceId'];
        }

        if (isset($map['AccessPortAndProtocols'])) {
            if (!empty($map['AccessPortAndProtocols'])) {
                $model->accessPortAndProtocols = [];
                $n1 = 0;
                foreach ($map['AccessPortAndProtocols'] as $item1) {
                    $model->accessPortAndProtocols[$n1++] = accessPortAndProtocols::fromMap($item1);
                }
            }
        }

        if (isset($map['AccessPorts'])) {
            if (!empty($map['AccessPorts'])) {
                $model->accessPorts = [];
                $n1 = 0;
                foreach ($map['AccessPorts'] as $item1) {
                    $model->accessPorts[$n1++] = $item1;
                }
            }
        }

        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }

        if (isset($map['ResourceInstanceAccessStatus'])) {
            $model->resourceInstanceAccessStatus = $map['ResourceInstanceAccessStatus'];
        }

        if (isset($map['ResourceInstanceEdition'])) {
            $model->resourceInstanceEdition = $map['ResourceInstanceEdition'];
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
