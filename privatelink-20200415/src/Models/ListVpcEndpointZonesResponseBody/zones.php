<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointZonesResponseBody;

use AlibabaCloud\Dara\Model;

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
    public $zoneIpv6Address;

    /**
     * @var string
     */
    public $zoneStatus;
    protected $_name = [
        'eniId' => 'EniId',
        'eniIp' => 'EniIp',
        'regionId' => 'RegionId',
        'vSwitchId' => 'VSwitchId',
        'zoneDomain' => 'ZoneDomain',
        'zoneId' => 'ZoneId',
        'zoneIpv6Address' => 'ZoneIpv6Address',
        'zoneStatus' => 'ZoneStatus',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->zoneDomain) {
            $res['ZoneDomain'] = $this->zoneDomain;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        if (null !== $this->zoneIpv6Address) {
            $res['ZoneIpv6Address'] = $this->zoneIpv6Address;
        }

        if (null !== $this->zoneStatus) {
            $res['ZoneStatus'] = $this->zoneStatus;
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
        if (isset($map['EniId'])) {
            $model->eniId = $map['EniId'];
        }

        if (isset($map['EniIp'])) {
            $model->eniIp = $map['EniIp'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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

        if (isset($map['ZoneIpv6Address'])) {
            $model->zoneIpv6Address = $map['ZoneIpv6Address'];
        }

        if (isset($map['ZoneStatus'])) {
            $model->zoneStatus = $map['ZoneStatus'];
        }

        return $model;
    }
}
