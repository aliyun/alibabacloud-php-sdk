<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineNetworkInfoRequest;

use AlibabaCloud\Dara\Model;

class machineHpnInfo extends Model
{
    /**
     * @var string
     */
    public $hpnZone;
    /**
     * @var string
     */
    public $machineType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
