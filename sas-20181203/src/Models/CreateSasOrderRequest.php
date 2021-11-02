<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class CreateSasOrderRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @var string
     */
    public $containerImageScan;

    /**
     * @var string
     */
    public $instanceCount;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $sasAntiRansomware;

    /**
     * @var string
     */
    public $sasProductService;

    /**
     * @var string
     */
    public $sasSc;

    /**
     * @var string
     */
    public $sasSlsStorage;

    /**
     * @var string
     */
    public $sasWebguardBoolean;

    /**
     * @var string
     */
    public $sasWebguardOrderNum;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var string
     */
    public $vcore;
    protected $_name = [
        'autoPay'             => 'AutoPay',
        'autoRenewPeriod'     => 'AutoRenewPeriod',
        'autoUseCoupon'       => 'AutoUseCoupon',
        'containerImageScan'  => 'ContainerImageScan',
        'instanceCount'       => 'InstanceCount',
        'period'              => 'Period',
        'periodUnit'          => 'PeriodUnit',
        'sasAntiRansomware'   => 'SasAntiRansomware',
        'sasProductService'   => 'SasProductService',
        'sasSc'               => 'SasSc',
        'sasSlsStorage'       => 'SasSlsStorage',
        'sasWebguardBoolean'  => 'SasWebguardBoolean',
        'sasWebguardOrderNum' => 'SasWebguardOrderNum',
        'spec'                => 'Spec',
        'vcore'               => 'Vcore',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }
        if (null !== $this->containerImageScan) {
            $res['ContainerImageScan'] = $this->containerImageScan;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->sasAntiRansomware) {
            $res['SasAntiRansomware'] = $this->sasAntiRansomware;
        }
        if (null !== $this->sasProductService) {
            $res['SasProductService'] = $this->sasProductService;
        }
        if (null !== $this->sasSc) {
            $res['SasSc'] = $this->sasSc;
        }
        if (null !== $this->sasSlsStorage) {
            $res['SasSlsStorage'] = $this->sasSlsStorage;
        }
        if (null !== $this->sasWebguardBoolean) {
            $res['SasWebguardBoolean'] = $this->sasWebguardBoolean;
        }
        if (null !== $this->sasWebguardOrderNum) {
            $res['SasWebguardOrderNum'] = $this->sasWebguardOrderNum;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->vcore) {
            $res['Vcore'] = $this->vcore;
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
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }
        if (isset($map['ContainerImageScan'])) {
            $model->containerImageScan = $map['ContainerImageScan'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['SasAntiRansomware'])) {
            $model->sasAntiRansomware = $map['SasAntiRansomware'];
        }
        if (isset($map['SasProductService'])) {
            $model->sasProductService = $map['SasProductService'];
        }
        if (isset($map['SasSc'])) {
            $model->sasSc = $map['SasSc'];
        }
        if (isset($map['SasSlsStorage'])) {
            $model->sasSlsStorage = $map['SasSlsStorage'];
        }
        if (isset($map['SasWebguardBoolean'])) {
            $model->sasWebguardBoolean = $map['SasWebguardBoolean'];
        }
        if (isset($map['SasWebguardOrderNum'])) {
            $model->sasWebguardOrderNum = $map['SasWebguardOrderNum'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Vcore'])) {
            $model->vcore = $map['Vcore'];
        }

        return $model;
    }
}
