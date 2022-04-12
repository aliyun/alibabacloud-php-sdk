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
     * @var bool
     */
    public $autoRenew;

    /**
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $instanceChargePeriod;

    /**
     * @var string
     */
    public $instanceChargePeriodUnit;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var int
     */
    public $scalingNum;

    /**
     * @var string
     */
    public $scalingPolicy;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateInstanceId;

    /**
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'appId'                    => 'AppId',
        'autoRenew'                => 'AutoRenew',
        'autoRenewPeriod'          => 'AutoRenewPeriod',
        'clusterId'                => 'ClusterId',
        'groupId'                  => 'GroupId',
        'instanceChargePeriod'     => 'InstanceChargePeriod',
        'instanceChargePeriodUnit' => 'InstanceChargePeriodUnit',
        'instanceChargeType'       => 'InstanceChargeType',
        'scalingNum'               => 'ScalingNum',
        'scalingPolicy'            => 'ScalingPolicy',
        'templateId'               => 'TemplateId',
        'templateInstanceId'       => 'TemplateInstanceId',
        'templateVersion'          => 'TemplateVersion',
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
        if (null !== $this->autoRenew) {
            $res['AutoRenew'] = $this->autoRenew;
        }
        if (null !== $this->autoRenewPeriod) {
            $res['AutoRenewPeriod'] = $this->autoRenewPeriod;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instanceChargePeriod) {
            $res['InstanceChargePeriod'] = $this->instanceChargePeriod;
        }
        if (null !== $this->instanceChargePeriodUnit) {
            $res['InstanceChargePeriodUnit'] = $this->instanceChargePeriodUnit;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->scalingNum) {
            $res['ScalingNum'] = $this->scalingNum;
        }
        if (null !== $this->scalingPolicy) {
            $res['ScalingPolicy'] = $this->scalingPolicy;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateInstanceId) {
            $res['TemplateInstanceId'] = $this->templateInstanceId;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
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
        if (isset($map['AutoRenew'])) {
            $model->autoRenew = $map['AutoRenew'];
        }
        if (isset($map['AutoRenewPeriod'])) {
            $model->autoRenewPeriod = $map['AutoRenewPeriod'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstanceChargePeriod'])) {
            $model->instanceChargePeriod = $map['InstanceChargePeriod'];
        }
        if (isset($map['InstanceChargePeriodUnit'])) {
            $model->instanceChargePeriodUnit = $map['InstanceChargePeriodUnit'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['ScalingNum'])) {
            $model->scalingNum = $map['ScalingNum'];
        }
        if (isset($map['ScalingPolicy'])) {
            $model->scalingPolicy = $map['ScalingPolicy'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateInstanceId'])) {
            $model->templateInstanceId = $map['TemplateInstanceId'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        return $model;
    }
}
