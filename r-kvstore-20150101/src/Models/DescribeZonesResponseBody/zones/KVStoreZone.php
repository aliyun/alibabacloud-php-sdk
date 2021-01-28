<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribeZonesResponseBody\zones;

use AlibabaCloud\Tea\Model;

class KVStoreZone extends Model
{
    /**
     * @var bool
     */
    public $isRds;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var bool
     */
    public $disabled;

    /**
     * @var bool
     */
    public $switchNetwork;

    /**
     * @var string
     */
    public $zoneName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'isRds'         => 'IsRds',
        'zoneId'        => 'ZoneId',
        'disabled'      => 'Disabled',
        'switchNetwork' => 'SwitchNetwork',
        'zoneName'      => 'ZoneName',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isRds) {
            $res['IsRds'] = $this->isRds;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }
        if (null !== $this->disabled) {
            $res['Disabled'] = $this->disabled;
        }
        if (null !== $this->switchNetwork) {
            $res['SwitchNetwork'] = $this->switchNetwork;
        }
        if (null !== $this->zoneName) {
            $res['ZoneName'] = $this->zoneName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['IsRds'])) {
            $model->isRds = $map['IsRds'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }
        if (isset($map['Disabled'])) {
            $model->disabled = $map['Disabled'];
        }
        if (isset($map['SwitchNetwork'])) {
            $model->switchNetwork = $map['SwitchNetwork'];
        }
        if (isset($map['ZoneName'])) {
            $model->zoneName = $map['ZoneName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
