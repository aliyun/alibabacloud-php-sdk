<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateInstanceRequest\tag;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateInstanceRequest\zoneVSwitchSecurityGroup;

class CreateInstanceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $httpsPolicy;

    /**
     * @var string
     */
    public $instanceCidr;

    /**
     * @var string
     */
    public $instanceName;

    /**
     * @var string
     */
    public $instanceSpec;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $pricingCycle;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $userVpcId;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var zoneVSwitchSecurityGroup[]
     */
    public $zoneVSwitchSecurityGroup;
    protected $_name = [
        'autoPay' => 'AutoPay',
        'chargeType' => 'ChargeType',
        'duration' => 'Duration',
        'httpsPolicy' => 'HttpsPolicy',
        'instanceCidr' => 'InstanceCidr',
        'instanceName' => 'InstanceName',
        'instanceSpec' => 'InstanceSpec',
        'instanceType' => 'InstanceType',
        'pricingCycle' => 'PricingCycle',
        'tag' => 'Tag',
        'token' => 'Token',
        'userVpcId' => 'UserVpcId',
        'zoneId' => 'ZoneId',
        'zoneVSwitchSecurityGroup' => 'ZoneVSwitchSecurityGroup',
    ];

    public function validate()
    {
        if (\is_array($this->tag)) {
            Model::validateArray($this->tag);
        }
        if (\is_array($this->zoneVSwitchSecurityGroup)) {
            Model::validateArray($this->zoneVSwitchSecurityGroup);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->autoPay) {
            $res['AutoPay'] = $this->autoPay;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->httpsPolicy) {
            $res['HttpsPolicy'] = $this->httpsPolicy;
        }

        if (null !== $this->instanceCidr) {
            $res['InstanceCidr'] = $this->instanceCidr;
        }

        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }

        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = $this->instanceSpec;
        }

        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        if (null !== $this->pricingCycle) {
            $res['PricingCycle'] = $this->pricingCycle;
        }

        if (null !== $this->tag) {
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        if (null !== $this->userVpcId) {
            $res['UserVpcId'] = $this->userVpcId;
        }

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        if (null !== $this->zoneVSwitchSecurityGroup) {
            if (\is_array($this->zoneVSwitchSecurityGroup)) {
                $res['ZoneVSwitchSecurityGroup'] = [];
                $n1 = 0;
                foreach ($this->zoneVSwitchSecurityGroup as $item1) {
                    $res['ZoneVSwitchSecurityGroup'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AutoPay'])) {
            $model->autoPay = $map['AutoPay'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['HttpsPolicy'])) {
            $model->httpsPolicy = $map['HttpsPolicy'];
        }

        if (isset($map['InstanceCidr'])) {
            $model->instanceCidr = $map['InstanceCidr'];
        }

        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }

        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = $map['InstanceSpec'];
        }

        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        if (isset($map['PricingCycle'])) {
            $model->pricingCycle = $map['PricingCycle'];
        }

        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
                }
            }
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        if (isset($map['UserVpcId'])) {
            $model->userVpcId = $map['UserVpcId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        if (isset($map['ZoneVSwitchSecurityGroup'])) {
            if (!empty($map['ZoneVSwitchSecurityGroup'])) {
                $model->zoneVSwitchSecurityGroup = [];
                $n1 = 0;
                foreach ($map['ZoneVSwitchSecurityGroup'] as $item1) {
                    $model->zoneVSwitchSecurityGroup[$n1++] = zoneVSwitchSecurityGroup::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
