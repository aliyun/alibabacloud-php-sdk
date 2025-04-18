<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\EnergyExpertExternal\V20220923\Models\PushDeviceDataRequest\devices;

class PushDeviceDataRequest extends Model
{
    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var devices[]
     */
    public $devices;
    protected $_name = [
        'deviceType' => 'deviceType',
        'devices' => 'devices',
    ];

    public function validate()
    {
        if (\is_array($this->devices)) {
            Model::validateArray($this->devices);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceType) {
            $res['deviceType'] = $this->deviceType;
        }

        if (null !== $this->devices) {
            if (\is_array($this->devices)) {
                $res['devices'] = [];
                $n1 = 0;
                foreach ($this->devices as $item1) {
                    $res['devices'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['deviceType'])) {
            $model->deviceType = $map['deviceType'];
        }

        if (isset($map['devices'])) {
            if (!empty($map['devices'])) {
                $model->devices = [];
                $n1 = 0;
                foreach ($map['devices'] as $item1) {
                    $model->devices[$n1++] = devices::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
