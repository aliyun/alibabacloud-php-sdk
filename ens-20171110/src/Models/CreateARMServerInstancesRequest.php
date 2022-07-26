<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateARMServerInstancesRequest extends Model
{
    /**
     * @var int
     */
    public $amount;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var int
     */
    public $frequency;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $payType;

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
    public $resolution;

    /**
     * @var string
     */
    public $serverType;
    protected $_name = [
        'amount'       => 'Amount',
        'autoRenew'    => 'AutoRenew',
        'ensRegionId'  => 'EnsRegionId',
        'frequency'    => 'Frequency',
        'imageId'      => 'ImageId',
        'instanceType' => 'InstanceType',
        'keyPairName'  => 'KeyPairName',
        'payType'      => 'PayType',
        'period'       => 'Period',
        'periodUnit'   => 'PeriodUnit',
        'resolution'   => 'Resolution',
        'serverType'   => 'ServerType',
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
        if (isset($map['ServerType'])) {
            $model->serverType = $map['ServerType'];
        }

        return $model;
    }
}
