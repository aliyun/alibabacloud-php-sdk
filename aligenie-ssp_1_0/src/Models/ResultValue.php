<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ResultValue\deviceUnionIds;
use AlibabaCloud\Tea\Model;

class ResultValue extends Model
{
    /**
     * @example A963*0158
     *
     * @var string
     */
    public $deviceOpenId;

    /**
     * @var deviceUnionIds[]
     */
    public $deviceUnionIds;

    /**
     * @example 我的设备
     *
     * @var string
     */
    public $name;

    /**
     * @example 2.0.3
     *
     * @var string
     */
    public $firmwareVersion;

    /**
     * @example b4:xx:xx:xx:65:2b
     *
     * @var string
     */
    public $mac;

    /**
     * @example 1200xx048
     *
     * @var string
     */
    public $sn;
    protected $_name = [
        'deviceOpenId'    => 'DeviceOpenId',
        'deviceUnionIds'  => 'DeviceUnionIds',
        'name'            => 'Name',
        'firmwareVersion' => 'FirmwareVersion',
        'mac'             => 'Mac',
        'sn'              => 'Sn',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceOpenId) {
            $res['DeviceOpenId'] = $this->deviceOpenId;
        }
        if (null !== $this->deviceUnionIds) {
            $res['DeviceUnionIds'] = [];
            if (null !== $this->deviceUnionIds && \is_array($this->deviceUnionIds)) {
                $n = 0;
                foreach ($this->deviceUnionIds as $item) {
                    $res['DeviceUnionIds'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ResultValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceOpenId'])) {
            $model->deviceOpenId = $map['DeviceOpenId'];
        }
        if (isset($map['DeviceUnionIds'])) {
            if (!empty($map['DeviceUnionIds'])) {
                $model->deviceUnionIds = [];
                $n                     = 0;
                foreach ($map['DeviceUnionIds'] as $item) {
                    $model->deviceUnionIds[$n++] = null !== $item ? deviceUnionIds::fromMap($item) : $item;
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
