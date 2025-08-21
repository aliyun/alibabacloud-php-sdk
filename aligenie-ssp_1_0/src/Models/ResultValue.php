<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ResultValue\deviceUnionIds;

class ResultValue extends Model
{
    /**
     * @var string
     */
    public $deviceOpenId;

    /**
     * @var deviceUnionIds[]
     */
    public $deviceUnionIds;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $firmwareVersion;

    /**
     * @var string
     */
    public $mac;

    /**
     * @var string
     */
    public $sn;
    protected $_name = [
        'deviceOpenId' => 'DeviceOpenId',
        'deviceUnionIds' => 'DeviceUnionIds',
        'name' => 'Name',
        'firmwareVersion' => 'FirmwareVersion',
        'mac' => 'Mac',
        'sn' => 'Sn',
    ];

    public function validate()
    {
        if (\is_array($this->deviceUnionIds)) {
            Model::validateArray($this->deviceUnionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->deviceOpenId) {
            $res['DeviceOpenId'] = $this->deviceOpenId;
        }

        if (null !== $this->deviceUnionIds) {
            if (\is_array($this->deviceUnionIds)) {
                $res['DeviceUnionIds'] = [];
                $n1 = 0;
                foreach ($this->deviceUnionIds as $item1) {
                    $res['DeviceUnionIds'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->firmwareVersion) {
            $res['FirmwareVersion'] = $this->firmwareVersion;
        }

        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }

        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
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
        if (isset($map['DeviceOpenId'])) {
            $model->deviceOpenId = $map['DeviceOpenId'];
        }

        if (isset($map['DeviceUnionIds'])) {
            if (!empty($map['DeviceUnionIds'])) {
                $model->deviceUnionIds = [];
                $n1 = 0;
                foreach ($map['DeviceUnionIds'] as $item1) {
                    $model->deviceUnionIds[$n1] = deviceUnionIds::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['FirmwareVersion'])) {
            $model->firmwareVersion = $map['FirmwareVersion'];
        }

        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }

        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }

        return $model;
    }
}
