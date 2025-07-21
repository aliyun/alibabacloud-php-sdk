<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRequest;

use AlibabaCloud\SDK\APIG\V20240327\Models\CreateGatewayRequest\zoneConfig\zones;
use AlibabaCloud\Tea\Model;

class zoneConfig extends Model
{
    /**
     * @example Manual
     *
     * @var string
     */
    public $selectOption;

    /**
     * @example vsw-xxx
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->selectOption) {
            $res['selectOption'] = $this->selectOption;
        }
        if (null !== $this->vSwitchId) {
            $res['vSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->zones) {
            $res['zones'] = [];
            if (null !== $this->zones && \is_array($this->zones)) {
                $n = 0;
                foreach ($this->zones as $item) {
                    $res['zones'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return zoneConfig
     */
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
                $n = 0;
                foreach ($map['zones'] as $item) {
                    $model->zones[$n++] = null !== $item ? zones::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
