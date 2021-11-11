<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class ServiceInvokeRequest extends Model
{
    /**
     * @var string
     */
    public $applicationExternalId;

    /**
     * @var string
     */
    public $doraemonAction;

    /**
     * @var string
     */
    public $mobileExtendParamsJson;

    /**
     * @var string
     */
    public $mobileExtendParamsJsonSign;

    /**
     * @var string
     */
    public $serverExtendParamsJson;

    /**
     * @var string
     */
    public $serviceCode;

    /**
     * @var bool
     */
    public $testModel;

    /**
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
