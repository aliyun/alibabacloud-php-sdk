<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\DescribeClientsResponseBody\data;

use AlibabaCloud\Dara\Model;

class hardwareInfo extends Model
{
    /**
     * @var string
     */
    public $bluetooth;

    /**
     * @var string
     */
    public $chipId;

    /**
     * @var string
     */
    public $cpu;

    /**
     * @var string
     */
    public $mac;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var string
     */
    public $storage;

    /**
     * @var string
     */
    public $wlan;
    protected $_name = [
        'bluetooth' => 'Bluetooth',
        'chipId' => 'ChipId',
        'cpu' => 'Cpu',
        'mac' => 'Mac',
        'memory' => 'Memory',
        'storage' => 'Storage',
        'wlan' => 'Wlan',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bluetooth) {
            $res['Bluetooth'] = $this->bluetooth;
        }

        if (null !== $this->chipId) {
            $res['ChipId'] = $this->chipId;
        }

        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->mac) {
            $res['Mac'] = $this->mac;
        }

        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }

        if (null !== $this->wlan) {
            $res['Wlan'] = $this->wlan;
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
        if (isset($map['Bluetooth'])) {
            $model->bluetooth = $map['Bluetooth'];
        }

        if (isset($map['ChipId'])) {
            $model->chipId = $map['ChipId'];
        }

        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['Mac'])) {
            $model->mac = $map['Mac'];
        }

        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }

        if (isset($map['Wlan'])) {
            $model->wlan = $map['Wlan'];
        }

        return $model;
    }
}
