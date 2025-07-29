<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest\apiServerCustomCertSans;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest\controlPlaneConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest\operationPolicy;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest\systemEventsLogging;
use AlibabaCloud\Tea\Model;

class ModifyClusterRequest extends Model
{
    /**
     * @description The network access control list (ACL) of the SLB instance associated with the API server if the cluster is a registered cluster.
     *
     * @var string[]
     */
    public $accessControlList;

    /**
     * @description The custom subject alternative names (SANs) for the API server certificate to accept requests from specified IP addresses or domain names. This parameter is available only for ACK managed clusters.
     *
     * @var apiServerCustomCertSans
     */
    public $apiServerCustomCertSans;

    /**
     * @description Specifies whether to associate an elastic IP address (EIP) with the cluster. This EIP is used to enable access to the API server over the Internet. Valid values:
     *
     *   `true`: associates an EIP with the cluster.
     *   `false`: does not associate an EIP with the cluster.
     *
     * @example true
     *
     * @var bool
     */
    public $apiServerEip;

    /**
     * @description The ID of the EIP that you want to associate with the API server of the cluster. This parameter takes effect when `api_server_eip` is set to `true`.
     *
     * @example eip-wz9fnasl6dsfhmvci****
     *
     * @var string
     */
    public $apiServerEipId;

    /**
     * @description The cluster name.
     *
     * The cluster name must be 1 to 63 characters in length, and can contain digits, letters, and hyphens (-). The cluster name cannot start with a hyphen (-).
     *
     * @example cluster-new-name
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The control plane configurations of an ACK dedicated cluster.
     *
     * @var controlPlaneConfig
     */
    public $controlPlaneConfig;

    /**
     * @description Specifies whether to enable cluster deletion protection. If you enable this option, the cluster cannot be deleted in the console or by calling API operations. Valid values:
     *
     *   `true`: enables cluster deletion protection.
     *   `false`: disables cluster deletion protection.
     *
     * Default value: `false`
     *
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description Specifies whether to enable the RAM Roles for Service Accounts (RRSA) feature. This parameter is available only for ACK managed clusters. Valid values:
     *
     *   `true`: enables the RRSA feature.
     *   `false`: disables the RRSA feature.
     *
     * @example true
     *
     * @var bool
     */
    public $enableRrsa;

    /**
     * @description Specifies whether to remap the test domain name of the cluster. Valid values:
     *
     *   `true`: remaps the test domain name of the cluster.
     *   `false`: does not remap the test domain name of the cluster.
     *
     * Default value: `false`
     *
     * @example true
     *
     * @var bool
     */
    public $ingressDomainRebinding;

    /**
     * @description The ID of the Server Load Balancer (SLB) instance of the cluster to be modified.
     *
     * @example lb-wz97kes8tnndkpodw****
     *
     * @var string
     */
    public $ingressLoadbalancerId;

    /**
     * @description Specifies whether to enable instance deletion protection. If you enable this option, the instance cannot be deleted in the console or by calling API operations. Valid values:
     *
     *   `true`: enables instance deletion protection.
     *   `false`: disables instance deletion protection.
     *
     * Default value: `false`
     *
     * @example true
     *
     * @var bool
     */
    public $instanceDeletionProtection;

    /**
     * @description The cluster maintenance window. This feature takes effect only for ACK Pro clusters.
     *
     * @var MaintenanceWindow
     */
    public $maintenanceWindow;

    /**
     * @description The automatic O\\&M policy of the cluster.
     *
     * @var operationPolicy
     */
    public $operationPolicy;

    /**
     * @description The resource group ID of the cluster.
     *
     * @example rg-acfmyvw3wjm****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the security group for the control plane.
     *
     * - If block rules are configured in the security group, ensure the security group rules allow traffic for protocols and ports required by the cluster. For recommended security group rules, see [Configure and manage security groups for an ACK cluster](https://www.alibabacloud.com/help/en/ack/ack-managed-and-ack-dedicated/user-guide/configure-security-group-rules-to-enforce-access-control-on-ack-clusters?spm=a2c63.p38356.help-menu-85222.d_2_0_4_3.43e35d09s8oSlR).
     *
     * - For non-ACK dedicated clusters:
     * - During security group updates, the cluster control plane and managed components (e.g., terway-controlplane) will restart briefly. Perform this operation during off-peak hours.
     * - After updating the control plane security group, the Elastic Network Interfaces (ENIs) used by the control plane and managed components will automatically join the new security group.
     *
     * - For ACK dedicated clusters:
     * - After updating the control plane security group, newly scaled-out master nodes will automatically apply the new security group. Existing control plane nodes remain unaffected.
     *
     * @example sg-bp1h6rk3pgct2a08***
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The storage configurations of system events.
     *
     * @var systemEventsLogging
     */
    public $systemEventsLogging;

    /**
     * @description The time zone configuration for the cluster.
     *
     * - After modifying the time zone, cluster inspection configurations will adopt the new time zone.
     *
     * - For ACK managed clusters:
     * - During time zone updates, the cluster control plane and managed components (e.g., terway-controlplane) will restart briefly. Perform this operation during off-peak hours.
     * - After updating the time zone:
     * - Newly scaled-out nodes will automatically apply the new time zone.
     * - Existing nodes remain unaffected. Reset the node to apply changes to existing nodes.
     *
     * - For ACK dedicated clusters:
     * - After updating the time zone:
     * - Newly scaled-out nodes (including control plane nodes) automatically apply the new time zone.
     * - Existing nodes (including control plane nodes) remain unaffected. Reset the node to apply changes to existing nodes.
     * - For control plane nodes, perform a scale-out followed by a scale-in to apply the new time zone to all control plane nodes.
     *
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timezone;

    /**
     * @description The vSwitches of the control plane. This parameter can be used to change the vSwitches of the control plane in an ACK managed cluster. Take note of the following items:
     *
     *   This parameter overwrites the existing configuration. You must specify all vSwitches of the control plane.
     *   The control plane components restarts during the change process. Exercise caution when you perform this operation.
     *   Ensure that all security groups of the cluster, including the security groups of the control plane, all node pools, and container network, are allowed to access the CIDR blocks of the new vSwitches. This ensures that the nodes and containers can connect to the API server.
     *   If the new vSwitches of the control plane are configured with an ACL, ensure that the ACL allows communication between the new vSwitches and CIDR blocks such as those of the cluster nodes and the container network.
     *
     * @var string[]
     */
    public $vswitchIds;
    protected $_name = [
        'accessControlList' => 'access_control_list',
        'apiServerCustomCertSans' => 'api_server_custom_cert_sans',
        'apiServerEip' => 'api_server_eip',
        'apiServerEipId' => 'api_server_eip_id',
        'clusterName' => 'cluster_name',
        'controlPlaneConfig' => 'control_plane_config',
        'deletionProtection' => 'deletion_protection',
        'enableRrsa' => 'enable_rrsa',
        'ingressDomainRebinding' => 'ingress_domain_rebinding',
        'ingressLoadbalancerId' => 'ingress_loadbalancer_id',
        'instanceDeletionProtection' => 'instance_deletion_protection',
        'maintenanceWindow' => 'maintenance_window',
        'operationPolicy' => 'operation_policy',
        'resourceGroupId' => 'resource_group_id',
        'securityGroupId' => 'security_group_id',
        'systemEventsLogging' => 'system_events_logging',
        'timezone' => 'timezone',
        'vswitchIds' => 'vswitch_ids',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessControlList) {
            $res['access_control_list'] = $this->accessControlList;
        }
        if (null !== $this->apiServerCustomCertSans) {
            $res['api_server_custom_cert_sans'] = null !== $this->apiServerCustomCertSans ? $this->apiServerCustomCertSans->toMap() : null;
        }
        if (null !== $this->apiServerEip) {
            $res['api_server_eip'] = $this->apiServerEip;
        }
        if (null !== $this->apiServerEipId) {
            $res['api_server_eip_id'] = $this->apiServerEipId;
        }
        if (null !== $this->clusterName) {
            $res['cluster_name'] = $this->clusterName;
        }
        if (null !== $this->controlPlaneConfig) {
            $res['control_plane_config'] = null !== $this->controlPlaneConfig ? $this->controlPlaneConfig->toMap() : null;
        }
        if (null !== $this->deletionProtection) {
            $res['deletion_protection'] = $this->deletionProtection;
        }
        if (null !== $this->enableRrsa) {
            $res['enable_rrsa'] = $this->enableRrsa;
        }
        if (null !== $this->ingressDomainRebinding) {
            $res['ingress_domain_rebinding'] = $this->ingressDomainRebinding;
        }
        if (null !== $this->ingressLoadbalancerId) {
            $res['ingress_loadbalancer_id'] = $this->ingressLoadbalancerId;
        }
        if (null !== $this->instanceDeletionProtection) {
            $res['instance_deletion_protection'] = $this->instanceDeletionProtection;
        }
        if (null !== $this->maintenanceWindow) {
            $res['maintenance_window'] = null !== $this->maintenanceWindow ? $this->maintenanceWindow->toMap() : null;
        }
        if (null !== $this->operationPolicy) {
            $res['operation_policy'] = null !== $this->operationPolicy ? $this->operationPolicy->toMap() : null;
        }
        if (null !== $this->resourceGroupId) {
            $res['resource_group_id'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupId) {
            $res['security_group_id'] = $this->securityGroupId;
        }
        if (null !== $this->systemEventsLogging) {
            $res['system_events_logging'] = null !== $this->systemEventsLogging ? $this->systemEventsLogging->toMap() : null;
        }
        if (null !== $this->timezone) {
            $res['timezone'] = $this->timezone;
        }
        if (null !== $this->vswitchIds) {
            $res['vswitch_ids'] = $this->vswitchIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['access_control_list'])) {
            if (!empty($map['access_control_list'])) {
                $model->accessControlList = $map['access_control_list'];
            }
        }
        if (isset($map['api_server_custom_cert_sans'])) {
            $model->apiServerCustomCertSans = apiServerCustomCertSans::fromMap($map['api_server_custom_cert_sans']);
        }
        if (isset($map['api_server_eip'])) {
            $model->apiServerEip = $map['api_server_eip'];
        }
        if (isset($map['api_server_eip_id'])) {
            $model->apiServerEipId = $map['api_server_eip_id'];
        }
        if (isset($map['cluster_name'])) {
            $model->clusterName = $map['cluster_name'];
        }
        if (isset($map['control_plane_config'])) {
            $model->controlPlaneConfig = controlPlaneConfig::fromMap($map['control_plane_config']);
        }
        if (isset($map['deletion_protection'])) {
            $model->deletionProtection = $map['deletion_protection'];
        }
        if (isset($map['enable_rrsa'])) {
            $model->enableRrsa = $map['enable_rrsa'];
        }
        if (isset($map['ingress_domain_rebinding'])) {
            $model->ingressDomainRebinding = $map['ingress_domain_rebinding'];
        }
        if (isset($map['ingress_loadbalancer_id'])) {
            $model->ingressLoadbalancerId = $map['ingress_loadbalancer_id'];
        }
        if (isset($map['instance_deletion_protection'])) {
            $model->instanceDeletionProtection = $map['instance_deletion_protection'];
        }
        if (isset($map['maintenance_window'])) {
            $model->maintenanceWindow = MaintenanceWindow::fromMap($map['maintenance_window']);
        }
        if (isset($map['operation_policy'])) {
            $model->operationPolicy = operationPolicy::fromMap($map['operation_policy']);
        }
        if (isset($map['resource_group_id'])) {
            $model->resourceGroupId = $map['resource_group_id'];
        }
        if (isset($map['security_group_id'])) {
            $model->securityGroupId = $map['security_group_id'];
        }
        if (isset($map['system_events_logging'])) {
            $model->systemEventsLogging = systemEventsLogging::fromMap($map['system_events_logging']);
        }
        if (isset($map['timezone'])) {
            $model->timezone = $map['timezone'];
        }
        if (isset($map['vswitch_ids'])) {
            if (!empty($map['vswitch_ids'])) {
                $model->vswitchIds = $map['vswitch_ids'];
            }
        }

        return $model;
    }
}
