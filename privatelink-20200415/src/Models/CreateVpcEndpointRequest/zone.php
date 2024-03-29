<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\CreateVpcEndpointRequest;

use AlibabaCloud\Tea\Model;

class zone extends Model
{
    /**
     * @description The ID of the vSwitch where you want to create the endpoint ENI in the zone. You can specify up to 10 vSwitch IDs.
     *
     * @example vsw-hp3uf6045ljdhd5zr****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the zone in which the endpoint is deployed.
     *
     * You can specify up to 10 zone IDs.
     * @example cn-huhehaote-b
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The IP address of the zone in which the endpoint is deployed.
     *
     * You can specify up to 10 IP addresses.
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $ip;
    protected $_name = [
        'vSwitchId' => 'VSwitchId',
        'zoneId'    => 'ZoneId',
        'ip'        => 'ip',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->ip) {
            $res['ip'] = $this->ip;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ip'])) {
            $model->ip = $map['ip'];
        }

        return $model;
    }
}
