<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cmn\V20200825\Models;

use AlibabaCloud\Tea\Model;

class CreateDeviceFormRequest extends Model
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
     * @example c6aaac41-8cfa-4952-bb1c-1ad9617ab23f
     *
     * @var string
     */
    public $clientToken;

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
     * @description 设备形态名称
     *
     * @example 网络设备
     *
     * @var string
     */
    public $deviceFormName;

    /**
     * @example cmn-cn-xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example form-u4ilnhu64h026lrf
     *
     * @var string
     */
    public $relatedDeviceFormId;

    /**
     * @example ASSET
     *
     * @var string
     */
    public $resourceUse;

    /**
     * @example def func(dev):\n    \n    return datetime.datetime.strptime(datetime.datetime.now(), \"%Y\")
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
        'clientToken'         => 'ClientToken',
        'configCompare'       => 'ConfigCompare',
        'detailDisplay'       => 'DetailDisplay',
        'deviceFormName'      => 'DeviceFormName',
        'instanceId'          => 'InstanceId',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->configCompare) {
            $res['ConfigCompare'] = $this->configCompare;
        }
        if (null !== $this->detailDisplay) {
            $res['DetailDisplay'] = $this->detailDisplay;
        }
        if (null !== $this->deviceFormName) {
            $res['DeviceFormName'] = $this->deviceFormName;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
     * @return CreateDeviceFormRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountConfig'])) {
            $model->accountConfig = $map['AccountConfig'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['ConfigCompare'])) {
            $model->configCompare = $map['ConfigCompare'];
        }
        if (isset($map['DetailDisplay'])) {
            $model->detailDisplay = $map['DetailDisplay'];
        }
        if (isset($map['DeviceFormName'])) {
            $model->deviceFormName = $map['DeviceFormName'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
