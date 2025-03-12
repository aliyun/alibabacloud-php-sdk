<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineNetworkInfoRequest;

use AlibabaCloud\Tea\Model;

class machineHpnInfo extends Model
{
    /**
     * @description Cluster ID
     *
     * @example C1
     *
     * @var string
     */
    public $hpnZone;

    /**
     * @description Machine type
     *
     * @example efg2.C48cNHmcn
     *
     * @var string
     */
    public $machineType;

    /**
     * @description Region ID
     *
     * @example cn-heyuan
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'hpnZone'     => 'HpnZone',
        'machineType' => 'MachineType',
        'regionId'    => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->hpnZone) {
            $res['HpnZone'] = $this->hpnZone;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return machineHpnInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['HpnZone'])) {
            $model->hpnZone = $map['HpnZone'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
