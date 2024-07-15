<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponseBody\networkConfig;

use AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models\GetServiceInstanceResponseBody\networkConfig\privateVpcConnections\connectionConfigs;
use AlibabaCloud\Tea\Model;

class privateVpcConnections extends Model
{
    /**
     * @description The network configurations, which are mainly used for the private connection.
     *
     * @var connectionConfigs[]
     */
    public $connectionConfigs;

    /**
     * @description The ID of the endpoint for the private connection.
     *
     * @example ep-m5ei37240541816b****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The ID of the endpoint service for the private connection.
     *
     * @example epsrv-5ei07324541816bxxxx
     *
     * @var string
     */
    public $endpointServiceId;

    /**
     * @description The custom domain name.
     *
     * @example test.computenest.aliyuncs.com
     *
     * @var string
     */
    public $privateZoneName;
    protected $_name = [
        'connectionConfigs' => 'ConnectionConfigs',
        'endpointId'        => 'EndpointId',
        'endpointServiceId' => 'EndpointServiceId',
        'privateZoneName'   => 'PrivateZoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionConfigs) {
            $res['ConnectionConfigs'] = [];
            if (null !== $this->connectionConfigs && \is_array($this->connectionConfigs)) {
                $n = 0;
                foreach ($this->connectionConfigs as $item) {
                    $res['ConnectionConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->endpointServiceId) {
            $res['EndpointServiceId'] = $this->endpointServiceId;
        }
        if (null !== $this->privateZoneName) {
            $res['PrivateZoneName'] = $this->privateZoneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return privateVpcConnections
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionConfigs'])) {
            if (!empty($map['ConnectionConfigs'])) {
                $model->connectionConfigs = [];
                $n                        = 0;
                foreach ($map['ConnectionConfigs'] as $item) {
                    $model->connectionConfigs[$n++] = null !== $item ? connectionConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['EndpointServiceId'])) {
            $model->endpointServiceId = $map['EndpointServiceId'];
        }
        if (isset($map['PrivateZoneName'])) {
            $model->privateZoneName = $map['PrivateZoneName'];
        }

        return $model;
    }
}
