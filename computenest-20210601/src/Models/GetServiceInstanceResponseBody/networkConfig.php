<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceResponseBody;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceResponseBody\networkConfig\privateVpcConnections;
use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceResponseBody\networkConfig\reversePrivateVpcConnections;
use AlibabaCloud\Tea\Model;

class networkConfig extends Model
{
    /**
     * @example ep-m5ei37240541816b****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @var privateVpcConnections[]
     */
    public $privateVpcConnections;

    /**
     * @example cb7f214f80ac348d87daaeac1f35****
     *
     * @var string
     */
    public $privateZoneId;

    /**
     * @var reversePrivateVpcConnections[]
     */
    public $reversePrivateVpcConnections;
    protected $_name = [
        'endpointId'                   => 'EndpointId',
        'privateVpcConnections'        => 'PrivateVpcConnections',
        'privateZoneId'                => 'PrivateZoneId',
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
        if (null !== $this->privateVpcConnections) {
            $res['PrivateVpcConnections'] = [];
            if (null !== $this->privateVpcConnections && \is_array($this->privateVpcConnections)) {
                $n = 0;
                foreach ($this->privateVpcConnections as $item) {
                    $res['PrivateVpcConnections'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->privateZoneId) {
            $res['PrivateZoneId'] = $this->privateZoneId;
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
        if (isset($map['PrivateVpcConnections'])) {
            if (!empty($map['PrivateVpcConnections'])) {
                $model->privateVpcConnections = [];
                $n                            = 0;
                foreach ($map['PrivateVpcConnections'] as $item) {
                    $model->privateVpcConnections[$n++] = null !== $item ? privateVpcConnections::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['PrivateZoneId'])) {
            $model->privateZoneId = $map['PrivateZoneId'];
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
