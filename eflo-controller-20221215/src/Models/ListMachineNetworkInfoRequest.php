<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineNetworkInfoRequest\machineHpnInfo;

class ListMachineNetworkInfoRequest extends Model
{
    /**
     * @var machineHpnInfo[]
     */
    public $machineHpnInfo;
    protected $_name = [
        'machineHpnInfo' => 'MachineHpnInfo',
    ];

    public function validate()
    {
        if (\is_array($this->machineHpnInfo)) {
            Model::validateArray($this->machineHpnInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->machineHpnInfo) {
            if (\is_array($this->machineHpnInfo)) {
                $res['MachineHpnInfo'] = [];
                $n1                    = 0;
                foreach ($this->machineHpnInfo as $item1) {
                    $res['MachineHpnInfo'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['MachineHpnInfo'])) {
            if (!empty($map['MachineHpnInfo'])) {
                $model->machineHpnInfo = [];
                $n1                    = 0;
                foreach ($map['MachineHpnInfo'] as $item1) {
                    $model->machineHpnInfo[$n1++] = machineHpnInfo::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
