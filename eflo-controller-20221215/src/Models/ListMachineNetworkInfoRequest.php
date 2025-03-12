<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineNetworkInfoRequest\machineHpnInfo;
use AlibabaCloud\Tea\Model;

class ListMachineNetworkInfoRequest extends Model
{
    /**
     * @description Array
     *
     * @var machineHpnInfo[]
     */
    public $machineHpnInfo;
    protected $_name = [
        'machineHpnInfo' => 'MachineHpnInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->machineHpnInfo) {
            $res['MachineHpnInfo'] = [];
            if (null !== $this->machineHpnInfo && \is_array($this->machineHpnInfo)) {
                $n = 0;
                foreach ($this->machineHpnInfo as $item) {
                    $res['MachineHpnInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMachineNetworkInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MachineHpnInfo'])) {
            if (!empty($map['MachineHpnInfo'])) {
                $model->machineHpnInfo = [];
                $n                     = 0;
                foreach ($map['MachineHpnInfo'] as $item) {
                    $model->machineHpnInfo[$n++] = null !== $item ? machineHpnInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
