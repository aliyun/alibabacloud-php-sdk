<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wyota\V20210420\Models\ListDevicesResponseBody\data;

use AlibabaCloud\Tea\Model;

class peripheralConfig extends Model
{
    /**
     * @var int
     */
    public $defaultPolicy;

    /**
     * @var int
     */
    public $policyStrategy;

    /**
     * @var int
     */
    public $usbAndInternalCamera;

    /**
     * @var int
     */
    public $usbPrinter;

    /**
     * @var int
     */
    public $usbStorage;
    protected $_name = [
        'defaultPolicy'        => 'DefaultPolicy',
        'policyStrategy'       => 'PolicyStrategy',
        'usbAndInternalCamera' => 'UsbAndInternalCamera',
        'usbPrinter'           => 'UsbPrinter',
        'usbStorage'           => 'UsbStorage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultPolicy) {
            $res['DefaultPolicy'] = $this->defaultPolicy;
        }
        if (null !== $this->policyStrategy) {
            $res['PolicyStrategy'] = $this->policyStrategy;
        }
        if (null !== $this->usbAndInternalCamera) {
            $res['UsbAndInternalCamera'] = $this->usbAndInternalCamera;
        }
        if (null !== $this->usbPrinter) {
            $res['UsbPrinter'] = $this->usbPrinter;
        }
        if (null !== $this->usbStorage) {
            $res['UsbStorage'] = $this->usbStorage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return peripheralConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DefaultPolicy'])) {
            $model->defaultPolicy = $map['DefaultPolicy'];
        }
        if (isset($map['PolicyStrategy'])) {
            $model->policyStrategy = $map['PolicyStrategy'];
        }
        if (isset($map['UsbAndInternalCamera'])) {
            $model->usbAndInternalCamera = $map['UsbAndInternalCamera'];
        }
        if (isset($map['UsbPrinter'])) {
            $model->usbPrinter = $map['UsbPrinter'];
        }
        if (isset($map['UsbStorage'])) {
            $model->usbStorage = $map['UsbStorage'];
        }

        return $model;
    }
}
