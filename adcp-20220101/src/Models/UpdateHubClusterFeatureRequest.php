<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class UpdateHubClusterFeatureRequest extends Model
{
    /**
     * @description The ID of the EIP.
     *
     * @example eip-xxx
     *
     * @var string
     */
    public $apiServerEipId;

    /**
     * @example true
     *
     * @var bool
     */
    public $argoCDEnabled;

    /**
     * @example true
     *
     * @var bool
     */
    public $argoServerEnabled;

    /**
     * @var bool
     */
    public $armsEnabled;

    /**
     * @description Specifies whether to enable the audit logging feature. Valid values:
     *
     *   true: enables the audit logging feature.
     *   false: disables the audit logging feature.
     *
     * @example true
     *
     * @var bool
     */
    public $auditLogEnabled;

    /**
     * @description The ID of the cluster.
     *
     * @example c46979b1075f04d99b5f2b710393e5****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Specifies whether to enable deletion protection for the cluster. After you enable deletion protection, you cannot delete the master instance in the console or by calling the DeleteHubCluster operation. Valid values:
     *
     *   true: enables deletion protection for the cluster.
     *   false: disables deletion protection for the cluster. This is the default value.
     *
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description Specifies whether to enable Alibaba Cloud Service Mesh (ASM). Valid values:
     *
     * true: enables ASM. false: disables ASM.
     * @example true
     *
     * @var bool
     */
    public $enableMesh;

    /**
     * @description The name of the cluster. The name must be 1 to 63 characters in length. It must start with a letter, and can contain letters, digits, underscores (\_), and hyphens (-).
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
     * @description Specifies whether to associate an elastic IP address (EIP) with the API server. Valid values:
     *
     *   true: associates an EIP with the API server. You can specify the ApiServerEipId parameter. If you do not specify the ApiServerEipId parameter, the system automatically creates an EIP.
     *   false: disassociates an EIP from the API server.
     *
     * @example true
     *
     * @var bool
     */
    public $publicApiServerEnabled;

    /**
     * @var string[]
     */
    public $vSwitches;

    /**
     * @example cost-optimized
     *
     * @var string
     */
    public $workflowScheduleMode;
    protected $_name = [
        'apiServerEipId'         => 'ApiServerEipId',
        'argoCDEnabled'          => 'ArgoCDEnabled',
        'argoServerEnabled'      => 'ArgoServerEnabled',
        'armsEnabled'            => 'ArmsEnabled',
        'auditLogEnabled'        => 'AuditLogEnabled',
        'clusterId'              => 'ClusterId',
        'deletionProtection'     => 'DeletionProtection',
        'enableMesh'             => 'EnableMesh',
        'name'                   => 'Name',
        'priceLimit'             => 'PriceLimit',
        'publicApiServerEnabled' => 'PublicApiServerEnabled',
        'vSwitches'              => 'VSwitches',
        'workflowScheduleMode'   => 'WorkflowScheduleMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiServerEipId) {
            $res['ApiServerEipId'] = $this->apiServerEipId;
        }
        if (null !== $this->argoCDEnabled) {
            $res['ArgoCDEnabled'] = $this->argoCDEnabled;
        }
        if (null !== $this->argoServerEnabled) {
            $res['ArgoServerEnabled'] = $this->argoServerEnabled;
        }
        if (null !== $this->armsEnabled) {
            $res['ArmsEnabled'] = $this->armsEnabled;
        }
        if (null !== $this->auditLogEnabled) {
            $res['AuditLogEnabled'] = $this->auditLogEnabled;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->enableMesh) {
            $res['EnableMesh'] = $this->enableMesh;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->priceLimit) {
            $res['PriceLimit'] = $this->priceLimit;
        }
        if (null !== $this->publicApiServerEnabled) {
            $res['PublicApiServerEnabled'] = $this->publicApiServerEnabled;
        }
        if (null !== $this->vSwitches) {
            $res['VSwitches'] = $this->vSwitches;
        }
        if (null !== $this->workflowScheduleMode) {
            $res['WorkflowScheduleMode'] = $this->workflowScheduleMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHubClusterFeatureRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiServerEipId'])) {
            $model->apiServerEipId = $map['ApiServerEipId'];
        }
        if (isset($map['ArgoCDEnabled'])) {
            $model->argoCDEnabled = $map['ArgoCDEnabled'];
        }
        if (isset($map['ArgoServerEnabled'])) {
            $model->argoServerEnabled = $map['ArgoServerEnabled'];
        }
        if (isset($map['ArmsEnabled'])) {
            $model->armsEnabled = $map['ArmsEnabled'];
        }
        if (isset($map['AuditLogEnabled'])) {
            $model->auditLogEnabled = $map['AuditLogEnabled'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['EnableMesh'])) {
            $model->enableMesh = $map['EnableMesh'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PriceLimit'])) {
            $model->priceLimit = $map['PriceLimit'];
        }
        if (isset($map['PublicApiServerEnabled'])) {
            $model->publicApiServerEnabled = $map['PublicApiServerEnabled'];
        }
        if (isset($map['VSwitches'])) {
            if (!empty($map['VSwitches'])) {
                $model->vSwitches = $map['VSwitches'];
            }
        }
        if (isset($map['WorkflowScheduleMode'])) {
            $model->workflowScheduleMode = $map['WorkflowScheduleMode'];
        }

        return $model;
    }
}
