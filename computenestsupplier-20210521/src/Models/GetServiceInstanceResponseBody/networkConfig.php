<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponseBody;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponseBody\networkConfig\privateVpcConnections;
use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponseBody\networkConfig\reversePrivateVpcConnections;
use AlibabaCloud\Tea\Model;

class networkConfig extends Model
{
    /**
     * @description The ID of the endpoint for the private connection.
     *
     * >  This parameter is discontinued.
     * @example ep-m5ei37240541816b****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The ID of the endpoint service for the private connection.
     *
     * >  This parameter is discontinued.
     * @example epsrv-5ei07324541816bxxxx
     *
     * @var string
     */
    public $endpointServiceId;

    /**
     * @description The information about private connections.
     *
     * @var privateVpcConnections[]
     */
    public $privateVpcConnections;

    /**
     * @description The information about the reverse private connection.
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->endpointServiceId) {
            $res['EndpointServiceId'] = $this->endpointServiceId;
        }
        if (null !== $this->privateVpcConnections) {
            $res['PrivateVpcConnections'] = [];
            if (null !== $this->privateVpcConnections && \is_array($this->privateVpcConnections)) {
                $n = 0;
                foreach ($this->privateVpcConnections as $item) {
                    $res['PrivateVpcConnections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->reversePrivateVpcConnections) {
            $res['ReversePrivateVpcConnections'] = [];
            if (null !== $this->reversePrivateVpcConnections && \is_array($this->reversePrivateVpcConnections)) {
                $n = 0;
                foreach ($this->reversePrivateVpcConnections as $item) {
                    $res['ReversePrivateVpcConnections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return networkConfig
     */
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
                $n                            = 0;
                foreach ($map['PrivateVpcConnections'] as $item) {
                    $model->privateVpcConnections[$n++] = null !== $item ? privateVpcConnections::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ReversePrivateVpcConnections'])) {
            if (!empty($map['ReversePrivateVpcConnections'])) {
                $model->reversePrivateVpcConnections = [];
                $n                                   = 0;
                foreach ($map['ReversePrivateVpcConnections'] as $item) {
                    $model->reversePrivateVpcConnections[$n++] = null !== $item ? reversePrivateVpcConnections::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
