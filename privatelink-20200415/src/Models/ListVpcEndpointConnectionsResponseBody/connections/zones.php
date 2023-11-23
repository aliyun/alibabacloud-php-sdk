<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Privatelink\V20200415\Models\ListVpcEndpointConnectionsResponseBody\connections;

use AlibabaCloud\Tea\Model;

class zones extends Model
{
    /**
     * @description The ID of the endpoint elastic network interface (ENI).
     *
     * @example eni-hp32lk0pyv6o94hs****
     *
     * @var string
     */
    public $eniId;

    /**
     * @description The ID of the endpoint ENI replaced in smooth migration scenarios.
     *
     * @example eni-hp32lk0pyv6o94hs****
     *
     * @var string
     */
    public $replacedEniId;

    /**
     * @description The ID of the service resource replaced in smooth migration scenarios.
     *
     * @example lb-hp32z1wp5peaoox2q****
     *
     * @var string
     */
    public $replacedResourceId;

    /**
     * @description The service resource ID.
     *
     * @example lb-hp32z1wp5peaoox2q****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The ID of the vSwitch to which the endpoint belongs.
     *
     * @example vsw-hp3uf6045ljdhd5zr****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The domain name of the zone.
     *
     * @example ep-hp34jaz8ykl0exwt****-cn-huhehaote.epsrv-hp3vpx8yqxblby3i****.cn-huhehaote-b.privatelink.aliyuncs.com
     *
     * @var string
     */
    public $zoneDomain;

    /**
     * @description The zone ID.
     *
     * @example cn-huhehaote-b
     *
     * @var string
     */
    public $zoneId;

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
     *   **Migrating**: The zone is being migrated.
     *   **Migrated**: The zone is migrated.
     *
     * @example Connected
     *
     * @var string
     */
    public $zoneStatus;
    protected $_name = [
        'eniId'              => 'EniId',
        'replacedEniId'      => 'ReplacedEniId',
        'replacedResourceId' => 'ReplacedResourceId',
        'resourceId'         => 'ResourceId',
        'vSwitchId'          => 'VSwitchId',
        'zoneDomain'         => 'ZoneDomain',
        'zoneId'             => 'ZoneId',
        'zoneStatus'         => 'ZoneStatus',
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
        if (null !== $this->replacedEniId) {
            $res['ReplacedEniId'] = $this->replacedEniId;
        }
        if (null !== $this->replacedResourceId) {
            $res['ReplacedResourceId'] = $this->replacedResourceId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
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
        if (isset($map['ReplacedEniId'])) {
            $model->replacedEniId = $map['ReplacedEniId'];
        }
        if (isset($map['ReplacedResourceId'])) {
            $model->replacedResourceId = $map['ReplacedResourceId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
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
