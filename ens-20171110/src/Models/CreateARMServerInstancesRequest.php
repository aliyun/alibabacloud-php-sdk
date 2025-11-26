<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateARMServerInstancesRequest\tag;

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
     * @var bool
     */
    public $autoUseCoupon;

    /**
     * @var string
     */
    public $cidr;

    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $environmentVar;

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
    public $instanceBillingCycle;

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
    public $nameSpace;

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
    public $serverName;

    /**
     * @var string
     */
    public $serverType;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'amount' => 'Amount',
        'autoRenew' => 'AutoRenew',
        'autoUseCoupon' => 'AutoUseCoupon',
        'cidr' => 'Cidr',
        'ensRegionId' => 'EnsRegionId',
        'environmentVar' => 'EnvironmentVar',
        'frequency' => 'Frequency',
        'imageId' => 'ImageId',
        'instanceBillingCycle' => 'InstanceBillingCycle',
        'instanceType' => 'InstanceType',
        'keyPairName' => 'KeyPairName',
        'nameSpace' => 'NameSpace',
        'payType' => 'PayType',
        'period' => 'Period',
        'periodUnit' => 'PeriodUnit',
        'resolution' => 'Resolution',
        'serverName' => 'ServerName',
        'serverType' => 'ServerType',
        'tag' => 'Tag',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }

        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->environmentVar) {
            $res['EnvironmentVar'] = $this->environmentVar;
        }

        if (null !== $this->frequency) {
            $res['Frequency'] = $this->frequency;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->instanceBillingCycle) {
            $res['InstanceBillingCycle'] = $this->instanceBillingCycle;
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

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }

        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['EnvironmentVar'])) {
            $model->environmentVar = $map['EnvironmentVar'];
        }

        if (isset($map['Frequency'])) {
            $model->frequency = $map['Frequency'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['InstanceBillingCycle'])) {
            $model->instanceBillingCycle = $map['InstanceBillingCycle'];
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

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1] = tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
