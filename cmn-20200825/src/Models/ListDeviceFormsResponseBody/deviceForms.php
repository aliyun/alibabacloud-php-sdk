<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models\ListDeviceFormsResponseBody;

use AlibabaCloud\SDK\Cmn\V20200825\Models\ListDeviceFormsResponseBody\deviceForms\attributeList;
use AlibabaCloud\Tea\Model;

class deviceForms extends Model
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
     * @example form-u4ilnhu64h026lrf
     *
     * @var string
     */
    public $deviceFormId;

    /**
     * @example 网络设备
     *
     * @var string
     */
    public $deviceFormName;

    /**
     * @description 内置形态不可修改和删除
     *
     * @example true
     *
     * @var bool
     */
    public $formBuiltIn;

    /**
     * @example form-4gnk12c2pdp4qu42
     *
     * @var string
     */
    public $relatedDeviceFormId;

    /**
     * @example DEV_OPS
     *
     * @var string
     */
    public $resourceUse;

    /**
     * @example @login_device\r\ndef config_backup():\r\n    exec_cli(\"show license\", timeout=120)\r\n    return exec_cli(\"show config\", timeout=180)
     *
     * @var string
     */
    public $script;

    /**
     * @example SN
     *
     * @var string
     */
    public $uniqueKey;
    protected $_name = [
        'accountConfig'       => 'AccountConfig',
        'attributeList'       => 'AttributeList',
        'configCompare'       => 'ConfigCompare',
        'detailDisplay'       => 'DetailDisplay',
        'deviceFormId'        => 'DeviceFormId',
        'deviceFormName'      => 'DeviceFormName',
        'formBuiltIn'         => 'FormBuiltIn',
        'relatedDeviceFormId' => 'RelatedDeviceFormId',
        'resourceUse'         => 'ResourceUse',
        'script'              => 'Script',
        'uniqueKey'           => 'UniqueKey',
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
        if (null !== $this->deviceFormName) {
            $res['DeviceFormName'] = $this->deviceFormName;
        }
        if (null !== $this->formBuiltIn) {
            $res['FormBuiltIn'] = $this->formBuiltIn;
        }
        if (null !== $this->relatedDeviceFormId) {
            $res['RelatedDeviceFormId'] = $this->relatedDeviceFormId;
        }
        if (null !== $this->resourceUse) {
            $res['ResourceUse'] = $this->resourceUse;
        }
        if (null !== $this->script) {
            $res['Script'] = $this->script;
        }
        if (null !== $this->uniqueKey) {
            $res['UniqueKey'] = $this->uniqueKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deviceForms
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
        if (isset($map['DeviceFormName'])) {
            $model->deviceFormName = $map['DeviceFormName'];
        }
        if (isset($map['FormBuiltIn'])) {
            $model->formBuiltIn = $map['FormBuiltIn'];
        }
        if (isset($map['RelatedDeviceFormId'])) {
            $model->relatedDeviceFormId = $map['RelatedDeviceFormId'];
        }
        if (isset($map['ResourceUse'])) {
            $model->resourceUse = $map['ResourceUse'];
        }
        if (isset($map['Script'])) {
            $model->script = $map['Script'];
        }
        if (isset($map['UniqueKey'])) {
            $model->uniqueKey = $map['UniqueKey'];
        }

        return $model;
    }
}
