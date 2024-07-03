<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateARMServerInstancesRequest extends Model
{
    /**
     * @description The number of instances to create. Valid values: **1** to **100**.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $amount;

    /**
     * @description Specifies whether to enable auto-renewal for the subscription. Valid values:
     *
     *   true
     *   false (default)
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description Specifies whether to use coupons. Valid values:
     *
     *   true
     *   false (default)
     *
     * @example true
     *
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @description The ID of the Edge Node Service (ENS) node.
     *
     * This parameter is required.
     * @example cn-guiyang-12
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The refresh rate. Unit: Hz. Valid values: 30 and 60.
     *
     * @example 30
     *
     * @var int
     */
    public $frequency;

    /**
     * @description The ID of the image.
     *
     * This parameter is required.
     * @example yourImage ID
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The specification of the Android in Container (AIC) instance. Examples:
     *
     *   aic.cf52r.c1.np
     *   aic.cf52r.c2.np
     *   aic.cf53r.c2.np
     *   aic.cf52r.c4.np
     *   aic.cf53r.c3.np
     *   aic.cf52r.c3.np
     *   aic.cf53r.c1.np
     *   aic.cf53r.c5.np
     *   aic.cf53r.c6
     *   aic.cf53r.c4.np
     *   aic.cf53r.c6.np
     *   aic.cf53r.c7.np
     *   aic.cf52m1r.c5.np
     *   aic.cf53r.c8.np
     *   aic.cf53r.c7
     *   aic.cf52m1r.c2.np
     *   aic.cf52m1r.c1.np
     *   aic.cf52m1r.c3.np
     *   aic.cf52m1r.c4.np
     *   aic.cf52m1r.c6
     *   ens.a6c2
     *
     * This parameter is required.
     * @example aic.cf53r.c6.np
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The name of the key pair.
     *
     * @example TestKeyPairName
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The namespace.
     *
     * @example pre
     *
     * @var string
     */
    public $nameSpace;

    /**
     * @description The billing method. Set the value to **PrePaid**. PrePaid specifies the subscription billing method.
     *
     * This parameter is required.
     * @example PrePaid
     *
     * @var string
     */
    public $payType;

    /**
     * @description The subscription duration of the instance.
     *
     *   If you leave PeriodUnit empty, the instance is purchased on a monthly basis. Valid values: Day and Month.
     *   If you set PeriodUnit to Day, you can set Period only to 3.
     *   If you set PeriodUnit to Month, you can set Period to a value within the range of [1,9], or set the value to 12.
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $period;

    /**
     * @description The unit of the subscription duration.
     *
     *   If you leave PeriodUnit empty, the instance is purchased on a monthly basis. Valid values: Day and Month.
     *   If you set PeriodUnit to Day, you can set Period only to 3.
     *   If you set PeriodUnit to Month, you can set Period to a value within the range of [1,9], or set the value to 12.
     *
     * This parameter is required.
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @description The resolution. Examples:
     *
     *   1920\\*864
     *   1080\\*1920
     *   1920\\*1080
     *   720\\*1280
     *   2400\\*1080
     *   1080\\*2400
     *   1280\\*720
     *   864\\*1920
     *
     * This parameter is required.
     * @example 720*1280
     *
     * @var string
     */
    public $resolution;

    /**
     * @description The name of the service.
     *
     * @example AIC-Server
     *
     * @var string
     */
    public $serverName;

    /**
     * @description The specification of the ARM server. Examples:
     *
     *   cas.cf53r
     *   cas.cf52r
     *   cas.cf52m1r
     *   cas.tg52g2
     *   ens.afq-c2m3i.medium
     *
     * This parameter is required.
     * @example cas.cf53r
     *
     * @var string
     */
    public $serverType;
    protected $_name = [
        'amount'        => 'Amount',
        'autoRenew'     => 'AutoRenew',
        'autoUseCoupon' => 'AutoUseCoupon',
        'ensRegionId'   => 'EnsRegionId',
        'frequency'     => 'Frequency',
        'imageId'       => 'ImageId',
        'instanceType'  => 'InstanceType',
        'keyPairName'   => 'KeyPairName',
        'nameSpace'     => 'NameSpace',
        'payType'       => 'PayType',
        'period'        => 'Period',
        'periodUnit'    => 'PeriodUnit',
        'resolution'    => 'Resolution',
        'serverName'    => 'ServerName',
        'serverType'    => 'ServerType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->amount) {
            $res['Amount'] = $this->amount;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoUseCoupon) {
            $res['AutoUseCoupon'] = $this->autoUseCoupon;
        }
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->nameSpace) {
            $res['NameSpace'] = $this->nameSpace;
        }
        if (null !== $this->payType) {
            $res['PayType'] = $this->payType;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->periodUnit) {
            $res['PeriodUnit'] = $this->periodUnit;
        }
        if (null !== $this->resolution) {
            $res['Resolution'] = $this->resolution;
        }
        if (null !== $this->serverName) {
            $res['ServerName'] = $this->serverName;
        }
        if (null !== $this->serverType) {
            $res['ServerType'] = $this->serverType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateARMServerInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Amount'])) {
            $model->amount = $map['Amount'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoUseCoupon'])) {
            $model->autoUseCoupon = $map['AutoUseCoupon'];
        }
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['NameSpace'])) {
            $model->nameSpace = $map['NameSpace'];
        }
        if (isset($map['PayType'])) {
            $model->payType = $map['PayType'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['PeriodUnit'])) {
            $model->periodUnit = $map['PeriodUnit'];
        }
        if (isset($map['Resolution'])) {
            $model->resolution = $map['Resolution'];
        }
        if (isset($map['ServerName'])) {
            $model->serverName = $map['ServerName'];
        }
        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }

        return $model;
    }
}
