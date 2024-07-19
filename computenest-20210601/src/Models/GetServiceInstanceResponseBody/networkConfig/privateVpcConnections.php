<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceResponseBody\networkConfig;

use AlibabaCloud\SDK\ComputeNest\V20210601\Models\GetServiceInstanceResponseBody\networkConfig\privateVpcConnections\connectionConfigs;
use AlibabaCloud\Tea\Model;

class privateVpcConnections extends Model
{
    /**
     * @description The network configurations, which are mainly used for private connections.
     *
     * @var connectionConfigs[]
     */
    public $connectionConfigs;

    /**
     * @description The endpoint ID of the private connection.
     *
     * @example ep-m5ei37240541816b****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The ID of the private zone of the custom private domain name.
     *
     * @example cb7f214f80ac348d87daaeac1f35****
     *
     * @var string
     */
    public $privateZoneId;

    /**
     * @description The custom domain name.
     *
     * @example test.computenest.aliyuncs.com
     *
     * @var string
     */
    public $privateZoneName;

    /**
     * @description The region ID of the endpoint of the PrivateLink connection.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'connectionConfigs' => 'ConnectionConfigs',
        'endpointId'        => 'EndpointId',
        'privateZoneId'     => 'PrivateZoneId',
        'privateZoneName'   => 'PrivateZoneName',
        'regionId'          => 'RegionId',
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
        if (null !== $this->privateZoneId) {
            $res['PrivateZoneId'] = $this->privateZoneId;
        }
        if (null !== $this->privateZoneName) {
            $res['PrivateZoneName'] = $this->privateZoneName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['PrivateZoneId'])) {
            $model->privateZoneId = $map['PrivateZoneId'];
        }
        if (isset($map['PrivateZoneName'])) {
            $model->privateZoneName = $map['PrivateZoneName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
