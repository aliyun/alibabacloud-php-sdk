<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class ListMachineNetworkInfoShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $machineHpnInfoShrink;
    protected $_name = [
        'machineHpnInfoShrink' => 'MachineHpnInfo',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->machineHpnInfoShrink) {
            $res['MachineHpnInfo'] = $this->machineHpnInfoShrink;
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
            $model->machineHpnInfoShrink = $map['MachineHpnInfo'];
        }

        return $model;
    }
}
