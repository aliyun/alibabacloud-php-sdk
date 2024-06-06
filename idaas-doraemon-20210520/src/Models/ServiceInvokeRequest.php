<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class ServiceInvokeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example A0000003
     *
     * @var string
     */
    public $applicationExternalId;

    /**
     * @description This parameter is required.
     *
     * @example SimpleAuthInit
     *
     * @var string
     */
    public $doraemonAction;

    /**
     * @example eyJhdHRhY2htZW50IjoicGxhdGZvcm0iLCJ1c2VyVmVyaWZpY2F0aW9uIjoicmVxdWlyZWQifQ==
     *
     * @var string
     */
    public $mobileExtendParamsJson;

    /**
     * @example ba6f5596f00102cb1a7d971f8390b7ccb28e6bc4e8694d051f9299ccc69e1186
     *
     * @var string
     */
    public $mobileExtendParamsJsonSign;

    /**
     * @example eyJhdHRhY2htZW50IjoicGxhdGZvcm0iLCJ1c2VyVmVyaWZpY2F0aW9uIjoicmVxdWlyZWQifQ==
     *
     * @var string
     */
    public $serverExtendParamsJson;

    /**
     * @description This parameter is required.
     *
     * @example IFAA
     *
     * @var string
     */
    public $serviceCode;

    /**
     * @example false
     *
     * @var bool
     */
    public $testModel;

    /**
     * @example 127.0.0.1
     *
     * @var string
     */
    public $XClientIp;
    protected $_name = [
        'applicationExternalId'      => 'ApplicationExternalId',
        'doraemonAction'             => 'DoraemonAction',
        'mobileExtendParamsJson'     => 'MobileExtendParamsJson',
        'mobileExtendParamsJsonSign' => 'MobileExtendParamsJsonSign',
        'serverExtendParamsJson'     => 'ServerExtendParamsJson',
        'serviceCode'                => 'ServiceCode',
        'testModel'                  => 'TestModel',
        'XClientIp'                  => 'XClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationExternalId) {
            $res['ApplicationExternalId'] = $this->applicationExternalId;
        }
        if (null !== $this->doraemonAction) {
            $res['DoraemonAction'] = $this->doraemonAction;
        }
        if (null !== $this->mobileExtendParamsJson) {
            $res['MobileExtendParamsJson'] = $this->mobileExtendParamsJson;
        }
        if (null !== $this->mobileExtendParamsJsonSign) {
            $res['MobileExtendParamsJsonSign'] = $this->mobileExtendParamsJsonSign;
        }
        if (null !== $this->serverExtendParamsJson) {
            $res['ServerExtendParamsJson'] = $this->serverExtendParamsJson;
        }
        if (null !== $this->serviceCode) {
            $res['ServiceCode'] = $this->serviceCode;
        }
        if (null !== $this->testModel) {
            $res['TestModel'] = $this->testModel;
        }
        if (null !== $this->XClientIp) {
            $res['XClientIp'] = $this->XClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ServiceInvokeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationExternalId'])) {
            $model->applicationExternalId = $map['ApplicationExternalId'];
        }
        if (isset($map['DoraemonAction'])) {
            $model->doraemonAction = $map['DoraemonAction'];
        }
        if (isset($map['MobileExtendParamsJson'])) {
            $model->mobileExtendParamsJson = $map['MobileExtendParamsJson'];
        }
        if (isset($map['MobileExtendParamsJsonSign'])) {
            $model->mobileExtendParamsJsonSign = $map['MobileExtendParamsJsonSign'];
        }
        if (isset($map['ServerExtendParamsJson'])) {
            $model->serverExtendParamsJson = $map['ServerExtendParamsJson'];
        }
        if (isset($map['ServiceCode'])) {
            $model->serviceCode = $map['ServiceCode'];
        }
        if (isset($map['TestModel'])) {
            $model->testModel = $map['TestModel'];
        }
        if (isset($map['XClientIp'])) {
            $model->XClientIp = $map['XClientIp'];
        }

        return $model;
    }
}
