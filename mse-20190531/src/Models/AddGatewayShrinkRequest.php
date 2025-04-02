<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mse\V20190531\Models\AddGatewayShrinkRequest\tag;

class AddGatewayShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $chargeType;

    /**
     * @var string
     */
    public $clbNetworkType;

    /**
     * @var bool
     */
    public $enableHardwareAcceleration;

    /**
     * @var bool
     */
    public $enableSls;

    /**
     * @var bool
     */
    public $enableXtrace;

    /**
     * @var bool
     */
    public $enterpriseSecurityGroup;

    /**
     * @var string
     */
    public $internetSlbSpec;

    /**
     * @var string
     */
    public $mserVersion;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nlbNetworkType;

    /**
     * @var string
     */
    public $region;

    /**
     * @var int
     */
    public $replica;

    /**
     * @var string
     */
    public $requestPars;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $slbSpec;

    /**
     * @var string
     */
    public $spec;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vSwitchId2;

    /**
     * @var string
     */
    public $vpc;

    /**
     * @var string
     */
    public $xtraceRatio;

    /**
     * @var string
     */
    public $zoneInfoShrink;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'chargeType' => 'ChargeType',
        'clbNetworkType' => 'ClbNetworkType',
        'enableHardwareAcceleration' => 'EnableHardwareAcceleration',
        'enableSls' => 'EnableSls',
        'enableXtrace' => 'EnableXtrace',
        'enterpriseSecurityGroup' => 'EnterpriseSecurityGroup',
        'internetSlbSpec' => 'InternetSlbSpec',
        'mserVersion' => 'MserVersion',
        'name' => 'Name',
        'nlbNetworkType' => 'NlbNetworkType',
        'region' => 'Region',
        'replica' => 'Replica',
        'requestPars' => 'RequestPars',
        'resourceGroupId' => 'ResourceGroupId',
        'slbSpec' => 'SlbSpec',
        'spec' => 'Spec',
        'tag' => 'Tag',
        'vSwitchId' => 'VSwitchId',
        'vSwitchId2' => 'VSwitchId2',
        'vpc' => 'Vpc',
        'xtraceRatio' => 'XtraceRatio',
        'zoneInfoShrink' => 'ZoneInfo',
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
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }

        if (null !== $this->clbNetworkType) {
            $res['ClbNetworkType'] = $this->clbNetworkType;
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
            if (\is_array($this->tag)) {
                $res['Tag'] = [];
                $n1 = 0;
                foreach ($this->tag as $item1) {
                    $res['Tag'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->zoneInfoShrink) {
            $res['ZoneInfo'] = $this->zoneInfoShrink;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }

        if (isset($map['ClbNetworkType'])) {
            $model->clbNetworkType = $map['ClbNetworkType'];
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
                $n1 = 0;
                foreach ($map['Tag'] as $item1) {
                    $model->tag[$n1++] = tag::fromMap($item1);
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
            $model->zoneInfoShrink = $map['ZoneInfo'];
        }

        return $model;
    }
}
