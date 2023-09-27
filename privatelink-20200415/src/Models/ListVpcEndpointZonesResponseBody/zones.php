<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointZonesResponseBody;

use AlibabaCloud\Tea\Model;

class zones extends Model
{
    /**
     * @description The endpoint ENI ID.
     *
     * @example eni-hp3c8qj1tyct8aqy****
     *
     * @var string
     */
    public $eniId;

    /**
     * @description The IP address of the endpoint ENI.
     *
     * @example 192.168.2.23
     *
     * @var string
     */
    public $eniIp;

    /**
     * @description The region ID of the endpoint.
     *
     * @example cn-huhehaote
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the vSwitch in the zone. The system automatically creates an endpoint elastic network interface (ENI) in the vSwitch.
     *
     * @example vsw-hjkshjvdkdvd****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The domain name of the zone.
     *
     * After the endpoint is connected to the endpoint service, you can access the service resources in the endpoint service by using the domain name of the zone.
     * @example ep-hp3f033dp24c5yc9****-cn-huhehaote.epsrv-hp3itcpowf37m3d5****.cn-huhehaote-a.privatelink.aliyuncs.com
     *
     * @var string
     */
    public $zoneDomain;

    /**
     * @description The zone ID.
     *
     * @example cn-huhehaote-a
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description Indicates whether IPv6 is enabled for the endpoint service. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * @example false
     *
     * @var string
     */
    public $zoneIpv6Address;

    /**
     * @description The state of the zone. Valid values:
     *
     *   **Creating**: The zone is being created.
     *   **Wait**: The zone is to be connected.
     *   **Connected**: The zone is connected.
     *   **Deleting**: The zone is being deleted.
     *   **Disconnecting**: The zone is being disconnected.
     *   **Disconnected**: The zone is disconnected.
     *   **Connecting**: The zone is being connected.
     *
     * @example Wait
     *
     * @var string
     */
    public $zoneStatus;
    protected $_name = [
        'eniId'           => 'EniId',
        'eniIp'           => 'EniIp',
        'regionId'        => 'RegionId',
        'vSwitchId'       => 'VSwitchId',
        'zoneDomain'      => 'ZoneDomain',
        'zoneId'          => 'ZoneId',
        'zoneIpv6Address' => 'ZoneIpv6Address',
        'zoneStatus'      => 'ZoneStatus',
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
