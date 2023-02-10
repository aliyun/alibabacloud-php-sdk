<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAModuleVersionsByDeviceResponseBody\data;

use AlibabaCloud\Tea\Model;

class simpleOTAModuleInfo extends Model
{
    /**
     * @example newDevice
     *
     * @var string
     */
    public $deviceName;

    /**
     * @example QjIFT***000101
     *
     * @var string
     */
    public $iotId;

    /**
     * @example barcodeScanner
     *
     * @var string
     */
    public $moduleName;

    /**
     * @example 1.0
     *
     * @var string
     */
    public $moduleVersion;

    /**
     * @example aluctKe****
     *
     * @var string
     */
    public $productKey;
    protected $_name = [
        'deviceName'    => 'DeviceName',
        'iotId'         => 'IotId',
        'moduleName'    => 'ModuleName',
        'moduleVersion' => 'ModuleVersion',
        'productKey'    => 'ProductKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->moduleName) {
            $res['ModuleName'] = $this->moduleName;
        }
        if (null !== $this->moduleVersion) {
            $res['ModuleVersion'] = $this->moduleVersion;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return simpleOTAModuleInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['ModuleName'])) {
            $model->moduleName = $map['ModuleName'];
        }
        if (isset($map['ModuleVersion'])) {
            $model->moduleVersion = $map['ModuleVersion'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }

        return $model;
    }
}
