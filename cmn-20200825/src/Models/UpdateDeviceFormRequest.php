<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\SDK\Cmn\V20200825\Models\UpdateDeviceFormRequest\attributeList;
use AlibabaCloud\Tea\Model;

class UpdateDeviceFormRequest extends Model
{
    /**
     * @description 是否需要账号配置
     *
     * @example true
     *
     * @var bool
     */
    public $accountConfig;

    /**
     * @description 设备形态属性列表
     *
     * @example true
     *
     * @var attributeList[]
     */
    public $attributeList;

    /**
     * @description 是否支持配置生成
     *
     * @example true
     *
     * @var bool
     */
    public $configCompare;

    /**
     * @example true
     *
     * @var bool
     */
    public $detailDisplay;

    /**
     * @description 设备形态ID
     *
     * @example form-u4ilnhu64h026lrf
     *
     * @var string
     */
    public $deviceFormId;

    /**
     * @example cmn-cn-xxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example form-4gnk12c2pdp4qu42
     *
     * @var string
     */
    public $relatedDeviceFormId;

    /**
     * @example @login_device\r\ndef config_backup():\r\n    exec_cli(\"show license\", timeout=120)\r\n    return exec_cli(\"show config\", timeout=180)
     *
     * @var string
     */
    public $script;
    protected $_name = [
        'accountConfig'       => 'AccountConfig',
        'attributeList'       => 'AttributeList',
        'configCompare'       => 'ConfigCompare',
        'detailDisplay'       => 'DetailDisplay',
        'deviceFormId'        => 'DeviceFormId',
        'instanceId'          => 'InstanceId',
        'relatedDeviceFormId' => 'RelatedDeviceFormId',
        'script'              => 'Script',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountConfig) {
            $res['AccountConfig'] = $this->accountConfig;
        }
        if (null !== $this->attributeList) {
            $res['AttributeList'] = [];
            if (null !== $this->attributeList && \is_array($this->attributeList)) {
                $n = 0;
                foreach ($this->attributeList as $item) {
                    $res['AttributeList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->configCompare) {
            $res['ConfigCompare'] = $this->configCompare;
        }
        if (null !== $this->detailDisplay) {
            $res['DetailDisplay'] = $this->detailDisplay;
        }
        if (null !== $this->deviceFormId) {
            $res['DeviceFormId'] = $this->deviceFormId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->relatedDeviceFormId) {
            $res['RelatedDeviceFormId'] = $this->relatedDeviceFormId;
        }
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateDeviceFormRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountConfig'])) {
            $model->accountConfig = $map['AccountConfig'];
        }
        if (isset($map['AttributeList'])) {
            if (!empty($map['AttributeList'])) {
                $model->attributeList = [];
                $n                    = 0;
                foreach ($map['AttributeList'] as $item) {
                    $model->attributeList[$n++] = null !== $item ? attributeList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ConfigCompare'])) {
            $model->configCompare = $map['ConfigCompare'];
        }
        if (isset($map['DetailDisplay'])) {
            $model->detailDisplay = $map['DetailDisplay'];
        }
        if (isset($map['DeviceFormId'])) {
            $model->deviceFormId = $map['DeviceFormId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RelatedDeviceFormId'])) {
            $model->relatedDeviceFormId = $map['RelatedDeviceFormId'];
        }
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }

        return $model;
    }
}
