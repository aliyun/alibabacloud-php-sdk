<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRequest\tag;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayRequest\zoneInfo;
use AlibabaCloud\Tea\Model;

class AddGatewayRequest extends Model
{
    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example zh
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description The billing method.
     *
     * Valid values:
     *
     *   PREPAY
     *
     * <!-- -->
     *
     *   POSTPAY
     *
     * <!-- -->
     * @example POSTPAY
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description Specifies whether to activate Tracing Analysis.
     *
     * @example false
     *
     * @var bool
     */
    public $enableHardwareAcceleration;

    /**
     * @description The tag of the gateway.
     *
     * @example false
     *
     * @var bool
     */
    public $enableSls;

    /**
     * @description The sampling rate of Tracing Analysis. Valid values: [1,100].
     *
     * @example false
     *
     * @var bool
     */
    public $enableXtrace;

    /**
     * @description Specifies whether to enable hardware acceleration.
     *
     * @example false
     *
     * @var bool
     */
    public $enterpriseSecurityGroup;

    /**
     * @description The ID of the secondary vSwitch.
     *
     * @example slb.s2.small
     *
     * @var string
     */
    public $internetSlbSpec;

    /**
     * @description The MSE instance type. Valid values:
     *
     *   mse_pro: ordinary instance.
     *   mse_serverless: serverless instance.
     *
     * @example mse_pro
     *
     * @var string
     */
    public $mserVersion;

    /**
     * @description The ID of the region.
     *
     * @example test-ceshi
     *
     * @var string
     */
    public $name;

    /**
     * @description The network type of the Network Load Balancer (NLB) instance when the serverless NLB instance is purchased. Valid values:
     *
     *   pubnet
     *   privatenet
     *   privatepubnet
     *
     * @example pubnet
     *
     * @var string
     */
    public $nlbNetworkType;

    /**
     * @description The specifications of the internal-facing Server Load Balancer (SLB) instance. Valid values:
     *
     *   slb.s1.small
     *   slb.s2.small
     *   slb.s2.medium
     *   slb.s3.small
     *   slb.s3.medium
     *   slb.s3.large
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The number of nodes.
     *
     * @example 2
     *
     * @var int
     */
    public $replica;

    /**
     * @description The extended field.
     *
     * @example {}
     *
     * @var string
     */
    public $requestPars;

    /**
     * @description The language of the response. Valid values:
     *
     *   zh: Chinese
     *   en: English
     *
     * @example rg-acfm34x43l*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The specifications of the internal-facing Server Load Balancer (SLB) instance. Valid values:
     *
     *   slb.s1.small
     *   slb.s2.small
     *   slb.s2.medium
     *   slb.s3.small
     *   slb.s3.medium
     *   slb.s3.large
     *
     * @example slb.s2.small
     *
     * @var string
     */
    public $slbSpec;

    /**
     * @description The node specifications. Valid values:
     *
     *   MSE_GTW_16_32_200_c(16C32G)
     *   MSE_GTW_2_4_200_c(2C4G)
     *   MSE_GTW_4_8_200_c(4C8G)
     *   MSE_GTW_8_16_200_c(8C16G)
     *
     * @example MSE_GTW_2_4_200_c
     *
     * @var string
     */
    public $spec;

    /**
     * @description The tag object.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The ID of the primary vSwitch.
     *
     * @example vsw-bp1q8th57frl5khj2li43
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description Specifies whether to use an advanced security group.
     *
     * @example vsw-wz9bu6o5vsvitt5mrxo6s
     *
     * @var string
     */
    public $vSwitchId2;

    /**
     * @description The ID of the primary vSwitch.
     *
     * This parameter is required.
     * @example vpc-bp15mncnrtm83uauxd1xb
     *
     * @var string
     */
    public $vpc;

    /**
     * @description Specifies whether to activate Log Service.
     *
     * @example 10
     *
     * @var string
     */
    public $xtraceRatio;

    /**
     * @description The details of the zone.
     *
     * @var zoneInfo[]
     */
    public $zoneInfo;
    protected $_name = [
        'acceptLanguage'             => 'AcceptLanguage',
        'chargeType'                 => 'ChargeType',
        'enableHardwareAcceleration' => 'EnableHardwareAcceleration',
        'enableSls'                  => 'EnableSls',
        'enableXtrace'               => 'EnableXtrace',
        'enterpriseSecurityGroup'    => 'EnterpriseSecurityGroup',
        'internetSlbSpec'            => 'InternetSlbSpec',
        'mserVersion'                => 'MserVersion',
        'name'                       => 'Name',
        'nlbNetworkType'             => 'NlbNetworkType',
        'region'                     => 'Region',
        'replica'                    => 'Replica',
        'requestPars'                => 'RequestPars',
        'resourceGroupId'            => 'ResourceGroupId',
        'slbSpec'                    => 'SlbSpec',
        'spec'                       => 'Spec',
        'tag'                        => 'Tag',
        'vSwitchId'                  => 'VSwitchId',
        'vSwitchId2'                 => 'VSwitchId2',
        'vpc'                        => 'Vpc',
        'xtraceRatio'                => 'XtraceRatio',
        'zoneInfo'                   => 'ZoneInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->enableHardwareAcceleration) {
            $res['EnableHardwareAcceleration'] = $this->enableHardwareAcceleration;
        }
        if (null !== $this->enableSls) {
            $res['EnableSls'] = $this->enableSls;
        }
        if (null !== $this->enableXtrace) {
            $res['EnableXtrace'] = $this->enableXtrace;
        }
        if (null !== $this->enterpriseSecurityGroup) {
            $res['EnterpriseSecurityGroup'] = $this->enterpriseSecurityGroup;
        }
        if (null !== $this->internetSlbSpec) {
            $res['InternetSlbSpec'] = $this->internetSlbSpec;
        }
        if (null !== $this->mserVersion) {
            $res['MserVersion'] = $this->mserVersion;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nlbNetworkType) {
            $res['NlbNetworkType'] = $this->nlbNetworkType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->replica) {
            $res['Replica'] = $this->replica;
        }
        if (null !== $this->requestPars) {
            $res['RequestPars'] = $this->requestPars;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->slbSpec) {
            $res['SlbSpec'] = $this->slbSpec;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
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
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vSwitchId2) {
            $res['VSwitchId2'] = $this->vSwitchId2;
        }
        if (null !== $this->vpc) {
            $res['Vpc'] = $this->vpc;
        }
        if (null !== $this->xtraceRatio) {
            $res['XtraceRatio'] = $this->xtraceRatio;
        }
        if (null !== $this->zoneInfo) {
            $res['ZoneInfo'] = [];
            if (null !== $this->zoneInfo && \is_array($this->zoneInfo)) {
                $n = 0;
                foreach ($this->zoneInfo as $item) {
                    $res['ZoneInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['EnableHardwareAcceleration'])) {
            $model->enableHardwareAcceleration = $map['EnableHardwareAcceleration'];
        }
        if (isset($map['EnableSls'])) {
            $model->enableSls = $map['EnableSls'];
        }
        if (isset($map['EnableXtrace'])) {
            $model->enableXtrace = $map['EnableXtrace'];
        }
        if (isset($map['EnterpriseSecurityGroup'])) {
            $model->enterpriseSecurityGroup = $map['EnterpriseSecurityGroup'];
        }
        if (isset($map['InternetSlbSpec'])) {
            $model->internetSlbSpec = $map['InternetSlbSpec'];
        }
        if (isset($map['MserVersion'])) {
            $model->mserVersion = $map['MserVersion'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NlbNetworkType'])) {
            $model->nlbNetworkType = $map['NlbNetworkType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Replica'])) {
            $model->replica = $map['Replica'];
        }
        if (isset($map['RequestPars'])) {
            $model->requestPars = $map['RequestPars'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SlbSpec'])) {
            $model->slbSpec = $map['SlbSpec'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
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
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VSwitchId2'])) {
            $model->vSwitchId2 = $map['VSwitchId2'];
        }
        if (isset($map['Vpc'])) {
            $model->vpc = $map['Vpc'];
        }
        if (isset($map['XtraceRatio'])) {
            $model->xtraceRatio = $map['XtraceRatio'];
        }
        if (isset($map['ZoneInfo'])) {
            if (!empty($map['ZoneInfo'])) {
                $model->zoneInfo = [];
                $n               = 0;
                foreach ($map['ZoneInfo'] as $item) {
                    $model->zoneInfo[$n++] = null !== $item ? zoneInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
