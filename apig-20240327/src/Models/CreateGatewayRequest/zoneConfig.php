<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRequest\zoneConfig\zones;

class zoneConfig extends Model
{
    /**
     * @var string
     */
    public $selectOption;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var zones[]
     */
    public $zones;
    protected $_name = [
        'selectOption' => 'selectOption',
        'vSwitchId' => 'vSwitchId',
        'zones' => 'zones',
    ];

    public function validate()
    {
        if (\is_array($this->zones)) {
            Model::validateArray($this->zones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->selectOption) {
            $res['selectOption'] = $this->selectOption;
        }

        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
        }

        if (null !== $this->zones) {
            if (\is_array($this->zones)) {
                $res['zones'] = [];
                $n1 = 0;
                foreach ($this->zones as $item1) {
                    $res['zones'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['selectOption'])) {
            $model->selectOption = $map['selectOption'];
        }

        if (isset($map['vSwitchId'])) {
            $model->vSwitchId = $map['vSwitchId'];
        }

        if (isset($map['zones'])) {
            if (!empty($map['zones'])) {
                $model->zones = [];
                $n1 = 0;
                foreach ($map['zones'] as $item1) {
                    $model->zones[$n1] = zones::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
