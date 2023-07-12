<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListOTAModuleVersionsByDeviceResponse\data;

use AlibabaCloud\Tea\Model;

class simpleOTAModuleInfo extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $moduleName;

    /**
     * @var string
     */
    public $moduleVersion;

    /**
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
        Model::validateRequired('deviceName', $this->deviceName, true);
        Model::validateRequired('iotId', $this->iotId, true);
        Model::validateRequired('moduleName', $this->moduleName, true);
        Model::validateRequired('moduleVersion', $this->moduleVersion, true);
        Model::validateRequired('productKey', $this->productKey, true);
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
