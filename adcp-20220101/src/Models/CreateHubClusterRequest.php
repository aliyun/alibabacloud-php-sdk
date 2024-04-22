<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CreateHubClusterRequest extends Model
{
    /**
     * @description Specifies whether to expose the API server to the Internet. Valid values:
     *
     *   true: exposes the API server to the Internet.
     *   false: exposes the API server to the internal network.
     *
     * @example true
     *
     * @var bool
     */
    public $apiServerPublicEip;

    /**
     * @description Specifies whether to enable the workflow instance UI. This parameter takes effect only if Profile is set to XFlow. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $argoServerEnabled;

    /**
     * @description Specifies whether to enable the audit log feature. Valid values:
     *
     *   true: enables the audit log feature.
     *   false: disables the audit log feature.
     *
     * @example false
     *
     * @var bool
     */
    public $auditLogEnabled;

    /**
     * @description Specifies whether to use an advanced security group.
     *
     * @example false
     *
     * @var bool
     */
    public $isEnterpriseSecurityGroup;

    /**
     * @description The name of the master instance.
     *
     * @example ack-demo
     *
     * @var string
     */
    public $name;

    /**
     * @description The limit on the prices of containers in the workflow. This parameter takes effect only if the WorkflowScheduleMode parameter is set to cost-optimized.
     *
     * @example 0.08
     *
     * @var string
     */
    public $priceLimit;

    /**
     * @description The type of scenario for which the master instance is suitable. Valid values:
     *
     *   `Default`: The master instance is suitable for standard scenarios.
     *   `XFlow`: The master instance is suitable for workflow scenarios.
     *
     * Default value: `Default`.
     * @example Default
     *
     * @var string
     */
    public $profile;

    /**
     * @description The ID of the region. You can call the DescribeRegions operation to query available regions.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The Resource Group ID.
     *
     * @example rg-1exm6tg2h48***
     *
     * @var string
     */
    public $resourceGroupID;

    /**
     * @description The ID of the vSwitch.
     *
     * @example ["vsw-2zeaijsas4zkzz81xm***"]
     *
     * @var string
     */
    public $vSwitches;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the master instance belongs. You can call the DescribeVpcs operation to query available VPCs.
     *
     * @example vpc-f8zin0jscsr84s96tg***
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The scheduling mode of the workflow. This parameter takes effect only if Profile is set to XFlow. Valid values:
     *
     *   cost-optimized: cost-prioritized scheduling mode.
     *   stock-optimized: inventory-prioritized scheduling mode.
     *
     * @example cost-optimized
     *
     * @var string
     */
    public $workflowScheduleMode;
    protected $_name = [
        'apiServerPublicEip'        => 'ApiServerPublicEip',
        'argoServerEnabled'         => 'ArgoServerEnabled',
        'auditLogEnabled'           => 'AuditLogEnabled',
        'isEnterpriseSecurityGroup' => 'IsEnterpriseSecurityGroup',
        'name'                      => 'Name',
        'priceLimit'                => 'PriceLimit',
        'profile'                   => 'Profile',
        'regionId'                  => 'RegionId',
        'resourceGroupID'           => 'ResourceGroupID',
        'vSwitches'                 => 'VSwitches',
        'vpcId'                     => 'VpcId',
        'workflowScheduleMode'      => 'WorkflowScheduleMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiServerPublicEip) {
            $res['ApiServerPublicEip'] = $this->apiServerPublicEip;
        }
        if (null !== $this->argoServerEnabled) {
            $res['ArgoServerEnabled'] = $this->argoServerEnabled;
        }
        if (null !== $this->auditLogEnabled) {
            $res['AuditLogEnabled'] = $this->auditLogEnabled;
        }
        if (null !== $this->isEnterpriseSecurityGroup) {
            $res['IsEnterpriseSecurityGroup'] = $this->isEnterpriseSecurityGroup;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->priceLimit) {
            $res['PriceLimit'] = $this->priceLimit;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupID) {
            $res['ResourceGroupID'] = $this->resourceGroupID;
        }
        if (null !== $this->vSwitches) {
            $res['VSwitches'] = $this->vSwitches;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->workflowScheduleMode) {
            $res['WorkflowScheduleMode'] = $this->workflowScheduleMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHubClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiServerPublicEip'])) {
            $model->apiServerPublicEip = $map['ApiServerPublicEip'];
        }
        if (isset($map['ArgoServerEnabled'])) {
            $model->argoServerEnabled = $map['ArgoServerEnabled'];
        }
        if (isset($map['AuditLogEnabled'])) {
            $model->auditLogEnabled = $map['AuditLogEnabled'];
        }
        if (isset($map['IsEnterpriseSecurityGroup'])) {
            $model->isEnterpriseSecurityGroup = $map['IsEnterpriseSecurityGroup'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PriceLimit'])) {
            $model->priceLimit = $map['PriceLimit'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupID'])) {
            $model->resourceGroupID = $map['ResourceGroupID'];
        }
        if (isset($map['VSwitches'])) {
            $model->vSwitches = $map['VSwitches'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['WorkflowScheduleMode'])) {
            $model->workflowScheduleMode = $map['WorkflowScheduleMode'];
        }

        return $model;
    }
}
