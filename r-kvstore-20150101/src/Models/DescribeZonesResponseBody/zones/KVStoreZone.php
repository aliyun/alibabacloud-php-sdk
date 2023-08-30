<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeZonesResponseBody\zones;

use AlibabaCloud\Tea\Model;

class KVStoreZone extends Model
{
    /**
     * @description Indicates whether ApsaraDB for Redis instances can be created in the current zone. Valid values:
     *
     *   **true**: ApsaraDB for Redis instances cannot be created in the current zone.
     *   **false**: ApsaraDB for Redis instances can be created in the current zone.
     *
     * @example true
     *
     * @var bool
     */
    public $disabled;

    /**
     * @description Indicates whether the zone is managed by ApsaraDB RDS. The return value of this parameter is **true** in ApsaraDB for Redis.
     *
     * @example true
     *
     * @var bool
     */
    public $isRds;

    /**
     * @description The ID of the region.
     *
     * @example cn-huhehaote
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Indicates whether the network type of the instance can be changed from the classic network to Virtual Private Cloud (VPC). Valid values:
     *
     *   **true**: The network type of the instance can be changed from the classic network to VPC.
     *   **false**: The network type of the instance cannot be changed from the classic network to VPC.
     *
     * @example true
     *
     * @var bool
     */
    public $switchNetwork;

    /**
     * @description The ID of the zone within the specified region.
     *
     * @example cn-huhehaote-b
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description The name of the zone within the specified region.
     *
     * @var string
     */
    public $zoneName;
    protected $_name = [
        'disabled'      => 'Disabled',
        'isRds'         => 'IsRds',
        'regionId'      => 'RegionId',
        'switchNetwork' => 'SwitchNetwork',
        'zoneId'        => 'ZoneId',
        'zoneName'      => 'ZoneName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->isRds) {
            $res['IsRds'] = $this->isRds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->switchNetwork) {
            $res['SwitchNetwork'] = $this->switchNetwork;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return KVStoreZone
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['IsRds'])) {
            $model->isRds = $map['IsRds'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SwitchNetwork'])) {
            $model->switchNetwork = $map['SwitchNetwork'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }

        return $model;
    }
}
