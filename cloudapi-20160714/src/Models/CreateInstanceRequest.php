<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateInstanceRequest\tag;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\CreateInstanceRequest\zoneVSwitchSecurityGroup;
use AlibabaCloud\Tea\Model;

class CreateInstanceRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $autoPay;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @example 1
     *
     * @var int
     */
    public $duration;

    /**
     * @example HTTPS2_TLS1_2
     *
     * @var string
     */
    public $httpsPolicy;

    /**
     * @var string
     */
    public $instanceCidr;

    /**
     * @example ApigatewayInstance
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example api.s1.small
     *
     * @var string
     */
    public $instanceSpec;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @example Month
     *
     * @var string
     */
    public $pricingCycle;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @example c20d86c4-1eb3-4d0b-afe9-c586df1e2136
     *
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $userVpcId;

    /**
     * @example cn-beijing-MAZ3(c,e)
     *
     * @var string
     */
    public $zoneId;

    /**
     * @var zoneVSwitchSecurityGroup[]
     */
    public $zoneVSwitchSecurityGroup;
    protected $_name = [
        'autoPay'                  => 'AutoPay',
        'chargeType'               => 'ChargeType',
        'duration'                 => 'Duration',
        'httpsPolicy'              => 'HttpsPolicy',
        'instanceCidr'             => 'InstanceCidr',
        'instanceName'             => 'InstanceName',
        'instanceSpec'             => 'InstanceSpec',
        'instanceType'             => 'InstanceType',
        'pricingCycle'             => 'PricingCycle',
        'tag'                      => 'Tag',
        'token'                    => 'Token',
        'userVpcId'                => 'UserVpcId',
        'zoneId'                   => 'ZoneId',
        'zoneVSwitchSecurityGroup' => 'ZoneVSwitchSecurityGroup',
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
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['ZoneVSwitchSecurityGroup'] = [];
            if (null !== $this->zoneVSwitchSecurityGroup && \is_array($this->zoneVSwitchSecurityGroup)) {
                $n = 0;
                foreach ($this->zoneVSwitchSecurityGroup as $item) {
                    $res['ZoneVSwitchSecurityGroup'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInstanceRequest
     */
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
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
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
                $n                               = 0;
                foreach ($map['ZoneVSwitchSecurityGroup'] as $item) {
                    $model->zoneVSwitchSecurityGroup[$n++] = null !== $item ? zoneVSwitchSecurityGroup::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
