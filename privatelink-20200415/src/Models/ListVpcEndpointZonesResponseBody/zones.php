<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointZonesResponseBody;

use AlibabaCloud\Tea\Model;

class zones extends Model
{
    /**
     * @var string
     */
    public $eniId;

    /**
     * @var string
     */
    public $eniIp;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $serviceStatus;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneDomain;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string
     */
    public $zoneStatus;
    protected $_name = [
        'eniId'         => 'EniId',
        'eniIp'         => 'EniIp',
        'regionId'      => 'RegionId',
        'serviceStatus' => 'ServiceStatus',
        'vSwitchId'     => 'VSwitchId',
        'zoneDomain'    => 'ZoneDomain',
        'zoneId'        => 'ZoneId',
        'zoneStatus'    => 'ZoneStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eniId) {
            $res['EniId'] = $this->eniId;
        }
        if (null !== $this->eniIp) {
            $res['EniIp'] = $this->eniIp;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->serviceStatus) {
            $res['ServiceStatus'] = $this->serviceStatus;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zoneDomain) {
            $res['ZoneDomain'] = $this->zoneDomain;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->zoneStatus) {
            $res['ZoneStatus'] = $this->zoneStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zones
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EniId'])) {
            $model->eniId = $map['EniId'];
        }
        if (isset($map['EniIp'])) {
            $model->eniIp = $map['EniIp'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ServiceStatus'])) {
            $model->serviceStatus = $map['ServiceStatus'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['ZoneDomain'])) {
            $model->zoneDomain = $map['ZoneDomain'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ZoneStatus'])) {
            $model->zoneStatus = $map['ZoneStatus'];
        }

        return $model;
    }
}
