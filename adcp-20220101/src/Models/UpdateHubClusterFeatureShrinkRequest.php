<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class UpdateHubClusterFeatureShrinkRequest extends Model
{
    /**
     * @description The Internet access control list (ACL). This parameter takes effect only if PublicAccessEnabled is set to true.
     *
     * @var string
     */
    public $accessControlListShrink;

    /**
     * @description The ID of the EIP.
     *
     * @example eip-xxx
     *
     * @var string
     */
    public $apiServerEipId;

    /**
     * @description Specifies whether to enable Argo CD. This parameter takes effect only if Profile is set to XFlow. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $argoCDEnabled;

    /**
     * @description Specifies whether to enable high availability for Argo CD. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $argoCDHAEnabled;

    /**
     * @description Specifies whether to enable ArgoEvents. Valid values:
     *
     * - false
     * @example true
     *
     * @var bool
     */
    public $argoEventsEnabled;

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
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example c46979b1075f04d99b5f2b710393e5****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Specifies whether to enable the deletion protection feature for the cluster. After you enable the deletion protection feature for the cluster, you cannot delete the cluster in the console or by calling the DeleteHubCluster operation. Valid values:
     *
     *   true
     *   false
     *
     * Default value: false.
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description Specifies whether to enable Service Mesh (ASM). Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $enableMesh;

    /**
     * @description Specifies whether to enable Gateway. Valid values:
     * - false
     * @example true
     *
     * @var bool
     */
    public $gatewayEnabled;

    /**
     * @description Specifies whether to enable the monitoring dashboard feature for the workflow instance. This parameter takes effect only if Profile is set to XFlow. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $monitorEnabled;

    /**
     * @description The name of the master instance. The name must be 1 to 63 characters in length. It must start with a letter, and can contain letters, digits, underscores (_), and hyphens (-).
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
     * @description Specifies whether to enable public domain name resolution in the Argo CD or Argo Workflow console. Valid values:
     *
     *   true
     *   false
     *
     * @example true
     *
     * @var bool
     */
    public $publicAccessEnabled;

    /**
     * @description Specifies whether to associate an elastic IP address (EIP) with the API server. Valid values:
     *
     *   true: associates an EIP with the API server. You can specify ApiServerEipId. If you do not specify ApiServerEipId, the system automatically creates an EIP.
     *   false: disassociates an EIP from the API server.
     *
     * @example true
     *
     * @var bool
     */
    public $publicApiServerEnabled;

    /**
     * @description The vSwitches.
     *
     * @var string
     */
    public $vSwitchesShrink;

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
        'accessControlListShrink' => 'AccessControlList',
        'apiServerEipId'          => 'ApiServerEipId',
        'argoCDEnabled'           => 'ArgoCDEnabled',
        'argoCDHAEnabled'         => 'ArgoCDHAEnabled',
        'argoEventsEnabled'       => 'ArgoEventsEnabled',
        'argoServerEnabled'       => 'ArgoServerEnabled',
        'auditLogEnabled'         => 'AuditLogEnabled',
        'clusterId'               => 'ClusterId',
        'deletionProtection'      => 'DeletionProtection',
        'enableMesh'              => 'EnableMesh',
        'gatewayEnabled'          => 'GatewayEnabled',
        'monitorEnabled'          => 'MonitorEnabled',
        'name'                    => 'Name',
        'priceLimit'              => 'PriceLimit',
        'publicAccessEnabled'     => 'PublicAccessEnabled',
        'publicApiServerEnabled'  => 'PublicApiServerEnabled',
        'vSwitchesShrink'         => 'VSwitches',
        'workflowScheduleMode'    => 'WorkflowScheduleMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessControlListShrink) {
            $res['AccessControlList'] = $this->accessControlListShrink;
        }
        if (null !== $this->apiServerEipId) {
            $res['ApiServerEipId'] = $this->apiServerEipId;
        }
        if (null !== $this->argoCDEnabled) {
            $res['ArgoCDEnabled'] = $this->argoCDEnabled;
        }
        if (null !== $this->argoCDHAEnabled) {
            $res['ArgoCDHAEnabled'] = $this->argoCDHAEnabled;
        }
        if (null !== $this->argoEventsEnabled) {
            $res['ArgoEventsEnabled'] = $this->argoEventsEnabled;
        }
        if (null !== $this->argoServerEnabled) {
            $res['ArgoServerEnabled'] = $this->argoServerEnabled;
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
        if (null !== $this->gatewayEnabled) {
            $res['GatewayEnabled'] = $this->gatewayEnabled;
        }
        if (null !== $this->monitorEnabled) {
            $res['MonitorEnabled'] = $this->monitorEnabled;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->priceLimit) {
            $res['PriceLimit'] = $this->priceLimit;
        }
        if (null !== $this->publicAccessEnabled) {
            $res['PublicAccessEnabled'] = $this->publicAccessEnabled;
        }
        if (null !== $this->publicApiServerEnabled) {
            $res['PublicApiServerEnabled'] = $this->publicApiServerEnabled;
        }
        if (null !== $this->vSwitchesShrink) {
            $res['VSwitches'] = $this->vSwitchesShrink;
        }
        if (null !== $this->workflowScheduleMode) {
            $res['WorkflowScheduleMode'] = $this->workflowScheduleMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateHubClusterFeatureShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessControlList'])) {
            $model->accessControlListShrink = $map['AccessControlList'];
        }
        if (isset($map['ApiServerEipId'])) {
            $model->apiServerEipId = $map['ApiServerEipId'];
        }
        if (isset($map['ArgoCDEnabled'])) {
            $model->argoCDEnabled = $map['ArgoCDEnabled'];
        }
        if (isset($map['ArgoCDHAEnabled'])) {
            $model->argoCDHAEnabled = $map['ArgoCDHAEnabled'];
        }
        if (isset($map['ArgoEventsEnabled'])) {
            $model->argoEventsEnabled = $map['ArgoEventsEnabled'];
        }
        if (isset($map['ArgoServerEnabled'])) {
            $model->argoServerEnabled = $map['ArgoServerEnabled'];
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
        if (isset($map['GatewayEnabled'])) {
            $model->gatewayEnabled = $map['GatewayEnabled'];
        }
        if (isset($map['MonitorEnabled'])) {
            $model->monitorEnabled = $map['MonitorEnabled'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PriceLimit'])) {
            $model->priceLimit = $map['PriceLimit'];
        }
        if (isset($map['PublicAccessEnabled'])) {
            $model->publicAccessEnabled = $map['PublicAccessEnabled'];
        }
        if (isset($map['PublicApiServerEnabled'])) {
            $model->publicApiServerEnabled = $map['PublicApiServerEnabled'];
        }
        if (isset($map['VSwitches'])) {
            $model->vSwitchesShrink = $map['VSwitches'];
        }
        if (isset($map['WorkflowScheduleMode'])) {
            $model->workflowScheduleMode = $map['WorkflowScheduleMode'];
        }

        return $model;
    }
}
