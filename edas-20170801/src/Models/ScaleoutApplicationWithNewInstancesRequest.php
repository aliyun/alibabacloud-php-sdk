<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ScaleoutApplicationWithNewInstancesRequest extends Model
{
    /**
     * @description The ID of the application that you want to scale out. You can call the ListApplication operation to query the application ID. For more information, see [ListApplication](~~149390~~).
     *
     * @example e370c17f-*****-3df0721a327
     *
     * @var string
     */
    public $appId;

    /**
     * @description Specifies whether to enable auto-renewal. This parameter takes effect only when the InstanceChargeType parameter is set to PrePaid. Valid values:
     *
     *   true: enables auto-renewal.
     *   false: does not enable auto-renewal. This is the default value.
     *
     * @example true
     *
     * @var bool
     */
    public $autoRenew;

    /**
     * @description The auto-renewal period. Valid values:
     *
     *   If the InstanceChargePeriodUnit parameter is set to Week, the valid values of the AutoRenewPeriod parameter are 1, 2, and 3.
     *   If the InstanceChargePeriodUnit parameter is set to Month, the valid values of the AutoRenewPeriod parameter are 1, 2, 3, 6, 12, 24, 36, 48, and 60.
     *
     * Default value: 1.
     * @example 1
     *
     * @var int
     */
    public $autoRenewPeriod;

    /**
     * @description The ID of the cluster to which you want to add ECS instances. If the application and application instance group for the scale-out are specified, this parameter is ignored.
     *
     * @example e37**********-33df0721a327
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The ID of the instance group that you want to scale out. You can call the ListDeployGroup operation to query the group ID. For more information, see [ListDeployGroup](~~62077~~).
     *
     * @example e37**********-33df0721a327
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The duration of the subscription. The unit of the subscription duration is specified by the InstanceChargePeriodUnit parameter. This parameter takes effect only when the InstanceChargeType parameter is set to PrePaid.
     *
     *   If the InstanceChargePeriodUnit parameter is set to Week, the valid values of the InstanceChargePeriod parameter are 1, 2, 3, and 4.
     *   If the InstanceChargePeriodUnit parameter is set to Month, the valid values of the InstanceChargePeriod parameter are 1, 2, 3, 4, 5, 6, 7, 8, 9, 12, 24, 36, 48, and 60.
     *
     * @example 1
     *
     * @var int
     */
    public $instanceChargePeriod;

    /**
     * @description The unit of the subscription period. Valid values:
     *
     *   Week: billed on a weekly basis.
     *   Month: billed on a monthly basis. This is the default value.
     *
     * @example Month
     *
     * @var string
     */
    public $instanceChargePeriodUnit;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   PrePaid: subscription.
     *   PostPaid: pay-as-you-go. This is the default value.
     *
     * @example PrePaid
     *
     * @var string
     */
    public $instanceChargeType;

    /**
     * @description The number of instances to be added for the scale-out.
     *
     * @example 2
     *
     * @var int
     */
    public $scalingNum;

    /**
     * @description The instance reclaim mode of the scaling group. Valid values:
     *
     *   recycle: economical mode
     *   release: release mode
     *
     * For more information about how to remove instances from a specified scaling group, see [RemoveInstances](~~25955~~).
     * @example release
     *
     * @var string
     */
    public $scalingPolicy;

    /**
     * @description The ID of the ECS instance launch template. You can call the DescribeLaunchTemplates operation to query the launch template ID. For more information, see [DescribeLaunchTemplates](~~73759~~).
     *
     * @example lt-****hy9s2
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The ID of the existing ECS instance used for the scale-out. If this parameter is specified, the specifications and configurations of the specified ECS instance are used as a template to purchase new instances.
     *
     * @example i-28wt4****
     *
     * @var string
     */
    public $templateInstanceId;

    /**
     * @description The version of the ECS instance launch template. You can call the DescribeLaunchTemplateVersions operation to query the launch template version. For more information, see [DescribeLaunchTemplateVersions](~~73761~~).
     *
     * > If you set this parameter to `-1`, the default launch template version is used.
     * @example -1
     *
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
