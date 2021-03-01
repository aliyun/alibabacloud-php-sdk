<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ScaleoutApplicationWithNewInstancesRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $scalingNum;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateVersion;

    /**
     * @var string
     */
    public $scalingPolicy;

    /**
     * @var string
     */
    public $templateInstanceId;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $instanceChargePeriodUnit;

    /**
     * @var int
     */
    public $instanceChargePeriod;

    /**
     * @var bool
     */
    public $autoRenew;

    /**
     * @var int
     */
    public $autoRenewPeriod;
    protected $_name = [
        'appId'                    => 'AppId',
        'groupId'                  => 'GroupId',
        'scalingNum'               => 'ScalingNum',
        'templateId'               => 'TemplateId',
        'templateVersion'          => 'TemplateVersion',
        'scalingPolicy'            => 'ScalingPolicy',
        'templateInstanceId'       => 'TemplateInstanceId',
        'clusterId'                => 'ClusterId',
        'instanceChargeType'       => 'InstanceChargeType',
        'instanceChargePeriodUnit' => 'InstanceChargePeriodUnit',
        'instanceChargePeriod'     => 'InstanceChargePeriod',
        'autoRenew'                => 'AutoRenew',
        'autoRenewPeriod'          => 'AutoRenewPeriod',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->scalingNum) {
            $res['ScalingNum'] = $this->scalingNum;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->scalingPolicy) {
            $res['ScalingPolicy'] = $this->scalingPolicy;
        }
        if (null !== $this->templateInstanceId) {
            $res['TemplateInstanceId'] = $this->templateInstanceId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceChargePeriodUnit) {
            $res['InstanceChargePeriodUnit'] = $this->instanceChargePeriodUnit;
        }
        if (null !== $this->instanceChargePeriod) {
            $res['InstanceChargePeriod'] = $this->instanceChargePeriod;
        }
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ScaleoutApplicationWithNewInstancesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ScalingNum'])) {
            $model->scalingNum = $map['ScalingNum'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['ScalingPolicy'])) {
            $model->scalingPolicy = $map['ScalingPolicy'];
        }
        if (isset($map['TemplateInstanceId'])) {
            $model->templateInstanceId = $map['TemplateInstanceId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceChargePeriodUnit'])) {
            $model->instanceChargePeriodUnit = $map['InstanceChargePeriodUnit'];
        }
        if (isset($map['InstanceChargePeriod'])) {
            $model->instanceChargePeriod = $map['InstanceChargePeriod'];
        }
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }

        return $model;
    }
}
