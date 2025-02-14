<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponseBody\data\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\ListGatewaysResponseBody\data\items\zones\vSwitch;

class zones extends Model
{
    /**
     * @var vSwitch
     */
    public $vSwitch;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'vSwitch' => 'vSwitch',
        'zoneId'  => 'zoneId',
    ];

    public function validate()
    {
        if (null !== $this->vSwitch) {
            $this->vSwitch->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->vSwitch) {
            $res['vSwitch'] = null !== $this->vSwitch ? $this->vSwitch->toArray($noStream) : $this->vSwitch;
        }

        if (null !== $this->zoneId) {
            $res['zoneId'] = $this->zoneId;
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
        if (isset($map['vSwitch'])) {
            $model->vSwitch = vSwitch::fromMap($map['vSwitch']);
        }

        if (isset($map['zoneId'])) {
            $model->zoneId = $map['zoneId'];
        }

        return $model;
    }
}
