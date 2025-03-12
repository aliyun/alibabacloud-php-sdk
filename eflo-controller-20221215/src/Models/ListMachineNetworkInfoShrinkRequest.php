<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class ListMachineNetworkInfoShrinkRequest extends Model
{
    /**
     * @description Array
     *
     * @var string
     */
    public $machineHpnInfoShrink;
    protected $_name = [
        'machineHpnInfoShrink' => 'MachineHpnInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->machineHpnInfoShrink) {
            $res['MachineHpnInfo'] = $this->machineHpnInfoShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMachineNetworkInfoShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MachineHpnInfo'])) {
            $model->machineHpnInfoShrink = $map['MachineHpnInfo'];
        }

        return $model;
    }
}
