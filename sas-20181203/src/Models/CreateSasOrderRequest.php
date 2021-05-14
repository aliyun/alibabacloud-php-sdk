<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateSasOrderRequest extends Model
{
    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $instanceCount;

    /**
     * @var string
     */
    public $sasSlsStorage;

    /**
     * @var string
     */
    public $sasAntiRansomware;

    /**
     * @var string
     */
    public $sasWebguardBoolean;

    /**
     * @var string
     */
    public $sasSc;

    /**
     * @var string
     */
    public $sasProductService;

    /**
     * @var string
     */
    public $sasWebguardOrderNum;

    /**
     * @var string
     */
    public $vcore;

    /**
     * @var string
     */
    public $containerImageScan;
    protected $_name = [
        'period'              => 'Period',
        'periodUnit'          => 'PeriodUnit',
        'autoRenewPeriod'     => 'AutoRenewPeriod',
        'autoPay'             => 'AutoPay',
        'autoUseCoupon'       => 'AutoUseCoupon',
        'spec'                => 'Spec',
        'instanceCount'       => 'InstanceCount',
        'sasSlsStorage'       => 'SasSlsStorage',
        'sasAntiRansomware'   => 'SasAntiRansomware',
        'sasWebguardBoolean'  => 'SasWebguardBoolean',
        'sasSc'               => 'SasSc',
        'sasProductService'   => 'SasProductService',
        'sasWebguardOrderNum' => 'SasWebguardOrderNum',
        'vcore'               => 'Vcore',
        'containerImageScan'  => 'ContainerImageScan',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->sasSlsStorage) {
            $res['SasSlsStorage'] = $this->sasSlsStorage;
        }
        if (null !== $this->sasAntiRansomware) {
            $res['SasAntiRansomware'] = $this->sasAntiRansomware;
        }
        if (null !== $this->sasWebguardBoolean) {
            $res['SasWebguardBoolean'] = $this->sasWebguardBoolean;
        }
        if (null !== $this->sasSc) {
            $res['SasSc'] = $this->sasSc;
        }
        if (null !== $this->sasProductService) {
            $res['SasProductService'] = $this->sasProductService;
        }
        if (null !== $this->sasWebguardOrderNum) {
            $res['SasWebguardOrderNum'] = $this->sasWebguardOrderNum;
        }
        if (null !== $this->vcore) {
            $res['Vcore'] = $this->vcore;
        }
        if (null !== $this->containerImageScan) {
            $res['ContainerImageScan'] = $this->containerImageScan;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSasOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['SasSlsStorage'])) {
            $model->sasSlsStorage = $map['SasSlsStorage'];
        }
        if (isset($map['SasAntiRansomware'])) {
            $model->sasAntiRansomware = $map['SasAntiRansomware'];
        }
        if (isset($map['SasWebguardBoolean'])) {
            $model->sasWebguardBoolean = $map['SasWebguardBoolean'];
        }
        if (isset($map['SasSc'])) {
            $model->sasSc = $map['SasSc'];
        }
        if (isset($map['SasProductService'])) {
            $model->sasProductService = $map['SasProductService'];
        }
        if (isset($map['SasWebguardOrderNum'])) {
            $model->sasWebguardOrderNum = $map['SasWebguardOrderNum'];
        }
        if (isset($map['Vcore'])) {
            $model->vcore = $map['Vcore'];
        }
        if (isset($map['ContainerImageScan'])) {
            $model->containerImageScan = $map['ContainerImageScan'];
        }

        return $model;
    }
}
