<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest\apiServerCustomCertSans;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest\controlPlaneConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest\controlPlaneEndpointsConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest\operationPolicy;
use AlibabaCloud\SDK\CS\V20151215\Models\ModifyClusterRequest\systemEventsLogging;

class ModifyClusterRequest extends Model
{
    /**
     * @var string[]
     */
    public $accessControlList;

    /**
     * @var apiServerCustomCertSans
     */
    public $apiServerCustomCertSans;

    /**
     * @var bool
     */
    public $apiServerEip;

    /**
     * @var string
     */
    public $apiServerEipId;

    /**
     * @var string
     */
    public $clusterName;

    /**
     * @var controlPlaneConfig
     */
    public $controlPlaneConfig;

    /**
     * @var controlPlaneEndpointsConfig
     */
    public $controlPlaneEndpointsConfig;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var bool
     */
    public $enableRrsa;

    /**
     * @var bool
     */
    public $ingressDomainRebinding;

    /**
     * @var string
     */
    public $ingressLoadbalancerId;

    /**
     * @var bool
     */
    public $instanceDeletionProtection;

    /**
     * @var MaintenanceWindow
     */
    public $maintenanceWindow;

    /**
     * @var operationPolicy
     */
    public $operationPolicy;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var systemEventsLogging
     */
    public $systemEventsLogging;

    /**
     * @var string
     */
    public $timezone;

    /**
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
        'controlPlaneEndpointsConfig' => 'control_plane_endpoints_config',
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

    public function validate()
    {
        if (\is_array($this->accessControlList)) {
            Model::validateArray($this->accessControlList);
        }
        if (null !== $this->apiServerCustomCertSans) {
            $this->apiServerCustomCertSans->validate();
        }
        if (null !== $this->controlPlaneConfig) {
            $this->controlPlaneConfig->validate();
        }
        if (null !== $this->controlPlaneEndpointsConfig) {
            $this->controlPlaneEndpointsConfig->validate();
        }
        if (null !== $this->maintenanceWindow) {
            $this->maintenanceWindow->validate();
        }
        if (null !== $this->operationPolicy) {
            $this->operationPolicy->validate();
        }
        if (null !== $this->systemEventsLogging) {
            $this->systemEventsLogging->validate();
        }
        if (\is_array($this->vswitchIds)) {
            Model::validateArray($this->vswitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessControlList) {
            if (\is_array($this->accessControlList)) {
                $res['access_control_list'] = [];
                $n1 = 0;
                foreach ($this->accessControlList as $item1) {
                    $res['access_control_list'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->apiServerCustomCertSans) {
            $res['api_server_custom_cert_sans'] = null !== $this->apiServerCustomCertSans ? $this->apiServerCustomCertSans->toArray($noStream) : $this->apiServerCustomCertSans;
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
            $res['control_plane_config'] = null !== $this->controlPlaneConfig ? $this->controlPlaneConfig->toArray($noStream) : $this->controlPlaneConfig;
        }

        if (null !== $this->controlPlaneEndpointsConfig) {
            $res['control_plane_endpoints_config'] = null !== $this->controlPlaneEndpointsConfig ? $this->controlPlaneEndpointsConfig->toArray($noStream) : $this->controlPlaneEndpointsConfig;
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
            $res['maintenance_window'] = null !== $this->maintenanceWindow ? $this->maintenanceWindow->toArray($noStream) : $this->maintenanceWindow;
        }

        if (null !== $this->operationPolicy) {
            $res['operation_policy'] = null !== $this->operationPolicy ? $this->operationPolicy->toArray($noStream) : $this->operationPolicy;
        }

        if (null !== $this->resourceGroupId) {
            $res['resource_group_id'] = $this->resourceGroupId;
        }

        if (null !== $this->securityGroupId) {
            $res['security_group_id'] = $this->securityGroupId;
        }

        if (null !== $this->systemEventsLogging) {
            $res['system_events_logging'] = null !== $this->systemEventsLogging ? $this->systemEventsLogging->toArray($noStream) : $this->systemEventsLogging;
        }

        if (null !== $this->timezone) {
            $res['timezone'] = $this->timezone;
        }

        if (null !== $this->vswitchIds) {
            if (\is_array($this->vswitchIds)) {
                $res['vswitch_ids'] = [];
                $n1 = 0;
                foreach ($this->vswitchIds as $item1) {
                    $res['vswitch_ids'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['access_control_list'])) {
            if (!empty($map['access_control_list'])) {
                $model->accessControlList = [];
                $n1 = 0;
                foreach ($map['access_control_list'] as $item1) {
                    $model->accessControlList[$n1] = $item1;
                    ++$n1;
                }
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

        if (isset($map['control_plane_endpoints_config'])) {
            $model->controlPlaneEndpointsConfig = controlPlaneEndpointsConfig::fromMap($map['control_plane_endpoints_config']);
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
                $model->vswitchIds = [];
                $n1 = 0;
                foreach ($map['vswitch_ids'] as $item1) {
                    $model->vswitchIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
