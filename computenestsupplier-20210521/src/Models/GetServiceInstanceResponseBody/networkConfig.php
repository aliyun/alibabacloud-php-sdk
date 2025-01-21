<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponseBody\networkConfig\privateVpcConnections;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponseBody\networkConfig\reversePrivateVpcConnections;

class networkConfig extends Model
{
    /**
     * @var string
     */
    public $endpointId;
    /**
     * @var string
     */
    public $endpointServiceId;
    /**
     * @var privateVpcConnections[]
     */
    public $privateVpcConnections;
    /**
     * @var reversePrivateVpcConnections[]
     */
    public $reversePrivateVpcConnections;
    protected $_name = [
        'endpointId'                   => 'EndpointId',
        'endpointServiceId'            => 'EndpointServiceId',
        'privateVpcConnections'        => 'PrivateVpcConnections',
        'reversePrivateVpcConnections' => 'ReversePrivateVpcConnections',
    ];

    public function validate()
    {
        if (\is_array($this->privateVpcConnections)) {
            Model::validateArray($this->privateVpcConnections);
        }
        if (\is_array($this->reversePrivateVpcConnections)) {
            Model::validateArray($this->reversePrivateVpcConnections);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }

        if (null !== $this->endpointServiceId) {
            $res['EndpointServiceId'] = $this->endpointServiceId;
        }

        if (null !== $this->privateVpcConnections) {
            if (\is_array($this->privateVpcConnections)) {
                $res['PrivateVpcConnections'] = [];
                $n1                           = 0;
                foreach ($this->privateVpcConnections as $item1) {
                    $res['PrivateVpcConnections'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->reversePrivateVpcConnections) {
            if (\is_array($this->reversePrivateVpcConnections)) {
                $res['ReversePrivateVpcConnections'] = [];
                $n1                                  = 0;
                foreach ($this->reversePrivateVpcConnections as $item1) {
                    $res['ReversePrivateVpcConnections'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }

        if (isset($map['EndpointServiceId'])) {
            $model->endpointServiceId = $map['EndpointServiceId'];
        }

        if (isset($map['PrivateVpcConnections'])) {
            if (!empty($map['PrivateVpcConnections'])) {
                $model->privateVpcConnections = [];
                $n1                           = 0;
                foreach ($map['PrivateVpcConnections'] as $item1) {
                    $model->privateVpcConnections[$n1++] = privateVpcConnections::fromMap($item1);
                }
            }
        }

        if (isset($map['ReversePrivateVpcConnections'])) {
            if (!empty($map['ReversePrivateVpcConnections'])) {
                $model->reversePrivateVpcConnections = [];
                $n1                                  = 0;
                foreach ($map['ReversePrivateVpcConnections'] as $item1) {
                    $model->reversePrivateVpcConnections[$n1++] = reversePrivateVpcConnections::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
