<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\auditLogConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\autoMode;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\controlPlaneConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\operationPolicy;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\rrsaConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\workerDataDisks;

class CreateClusterRequest extends Model
{
    /**
     * @var string[]
     */
    public $accessControlList;

    /**
     * @var Addon[]
     */
    public $addons;

    /**
     * @var string
     */
    public $apiAudiences;

    /**
     * @var auditLogConfig
     */
    public $auditLogConfig;

    /**
     * @var autoMode
     */
    public $autoMode;

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
    public $chargeType;

    /**
     * @var bool
     */
    public $cisEnabled;

    /**
     * @var bool
     */
    public $cloudMonitorFlags;

    /**
     * @var string
     */
    public $clusterDomain;

    /**
     * @var string
     */
    public $clusterSpec;

    /**
     * @var string
     */
    public $clusterType;

    /**
     * @var string
     */
    public $containerCidr;

    /**
     * @var controlPlaneConfig
     */
    public $controlPlaneConfig;

    /**
     * @var string[]
     */
    public $controlplaneLogComponents;

    /**
     * @var string
     */
    public $controlplaneLogProject;

    /**
     * @var string
     */
    public $controlplaneLogTtl;

    /**
     * @var string
     */
    public $cpuPolicy;

    /**
     * @var string
     */
    public $customSan;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var bool
     */
    public $disableRollback;

    /**
     * @var bool
     */
    public $enableRrsa;

    /**
     * @var string
     */
    public $encryptionProviderKey;

    /**
     * @var bool
     */
    public $endpointPublicAccess;

    /**
     * @var string[]
     */
    public $extraSans;

    /**
     * @var bool
     */
    public $formatDisk;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $imageType;

    /**
     * @var string[]
     */
    public $instances;

    /**
     * @var string
     */
    public $ipStack;

    /**
     * @var bool
     */
    public $isEnterpriseSecurityGroup;

    /**
     * @var bool
     */
    public $keepInstanceName;

    /**
     * @var string
     */
    public $keyPair;

    /**
     * @var string
     */
    public $kubernetesVersion;

    /**
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $loadBalancerSpec;

    /**
     * @var string
     */
    public $loggingType;

    /**
     * @var string
     */
    public $loginPassword;

    /**
     * @var MaintenanceWindow
     */
    public $maintenanceWindow;

    /**
     * @var bool
     */
    public $masterAutoRenew;

    /**
     * @var int
     */
    public $masterAutoRenewPeriod;

    /**
     * @var int
     */
    public $masterCount;

    /**
     * @var string
     */
    public $masterInstanceChargeType;

    /**
     * @var string[]
     */
    public $masterInstanceTypes;

    /**
     * @var int
     */
    public $masterPeriod;

    /**
     * @var string
     */
    public $masterPeriodUnit;

    /**
     * @var string
     */
    public $masterSystemDiskCategory;

    /**
     * @var string
     */
    public $masterSystemDiskPerformanceLevel;

    /**
     * @var int
     */
    public $masterSystemDiskSize;

    /**
     * @var string
     */
    public $masterSystemDiskSnapshotPolicyId;

    /**
     * @var string[]
     */
    public $masterVswitchIds;

    /**
     * @var string
     */
    public $name;

    /**
     * @var bool
     */
    public $natGateway;

    /**
     * @var string
     */
    public $nodeCidrMask;

    /**
     * @var string
     */
    public $nodeNameMode;

    /**
     * @var string
     */
    public $nodePortRange;

    /**
     * @var Nodepool[]
     */
    public $nodepools;

    /**
     * @var int
     */
    public $numOfNodes;

    /**
     * @var operationPolicy
     */
    public $operationPolicy;

    /**
     * @var string
     */
    public $osType;

    /**
     * @var int
     */
    public $period;

    /**
     * @var string
     */
    public $periodUnit;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string[]
     */
    public $podVswitchIds;

    /**
     * @var string
     */
    public $profile;

    /**
     * @var string
     */
    public $proxyMode;

    /**
     * @var string[]
     */
    public $rdsInstances;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var rrsaConfig
     */
    public $rrsaConfig;

    /**
     * @var Runtime
     */
    public $runtime;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var bool
     */
    public $securityHardeningOs;

    /**
     * @var string
     */
    public $serviceAccountIssuer;

    /**
     * @var string
     */
    public $serviceCidr;

    /**
     * @var string[]
     */
    public $serviceDiscoveryTypes;

    /**
     * @var bool
     */
    public $snatEntry;

    /**
     * @var bool
     */
    public $socEnabled;

    /**
     * @var bool
     */
    public $sshFlags;

    /**
     * @var Tag[]
     */
    public $tags;

    /**
     * @var Taint[]
     */
    public $taints;

    /**
     * @var int
     */
    public $timeoutMins;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $userCa;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $vpcid;

    /**
     * @var string[]
     */
    public $vswitchIds;

    /**
     * @var bool
     */
    public $workerAutoRenew;

    /**
     * @var int
     */
    public $workerAutoRenewPeriod;

    /**
     * @var workerDataDisks[]
     */
    public $workerDataDisks;

    /**
     * @var string
     */
    public $workerInstanceChargeType;

    /**
     * @var string[]
     */
    public $workerInstanceTypes;

    /**
     * @var int
     */
    public $workerPeriod;

    /**
     * @var string
     */
    public $workerPeriodUnit;

    /**
     * @var string
     */
    public $workerSystemDiskCategory;

    /**
     * @var string
     */
    public $workerSystemDiskPerformanceLevel;

    /**
     * @var int
     */
    public $workerSystemDiskSize;

    /**
     * @var string
     */
    public $workerSystemDiskSnapshotPolicyId;

    /**
     * @var string[]
     */
    public $workerVswitchIds;

    /**
     * @var string
     */
    public $zoneId;

    /**
     * @var string[]
     */
    public $zoneIds;
    protected $_name = [
        'accessControlList' => 'access_control_list',
        'addons' => 'addons',
        'apiAudiences' => 'api_audiences',
        'auditLogConfig' => 'audit_log_config',
        'autoMode' => 'auto_mode',
        'autoRenew' => 'auto_renew',
        'autoRenewPeriod' => 'auto_renew_period',
        'chargeType' => 'charge_type',
        'cisEnabled' => 'cis_enabled',
        'cloudMonitorFlags' => 'cloud_monitor_flags',
        'clusterDomain' => 'cluster_domain',
        'clusterSpec' => 'cluster_spec',
        'clusterType' => 'cluster_type',
        'containerCidr' => 'container_cidr',
        'controlPlaneConfig' => 'control_plane_config',
        'controlplaneLogComponents' => 'controlplane_log_components',
        'controlplaneLogProject' => 'controlplane_log_project',
        'controlplaneLogTtl' => 'controlplane_log_ttl',
        'cpuPolicy' => 'cpu_policy',
        'customSan' => 'custom_san',
        'deletionProtection' => 'deletion_protection',
        'disableRollback' => 'disable_rollback',
        'enableRrsa' => 'enable_rrsa',
        'encryptionProviderKey' => 'encryption_provider_key',
        'endpointPublicAccess' => 'endpoint_public_access',
        'extraSans' => 'extra_sans',
        'formatDisk' => 'format_disk',
        'imageId' => 'image_id',
        'imageType' => 'image_type',
        'instances' => 'instances',
        'ipStack' => 'ip_stack',
        'isEnterpriseSecurityGroup' => 'is_enterprise_security_group',
        'keepInstanceName' => 'keep_instance_name',
        'keyPair' => 'key_pair',
        'kubernetesVersion' => 'kubernetes_version',
        'loadBalancerId' => 'load_balancer_id',
        'loadBalancerSpec' => 'load_balancer_spec',
        'loggingType' => 'logging_type',
        'loginPassword' => 'login_password',
        'maintenanceWindow' => 'maintenance_window',
        'masterAutoRenew' => 'master_auto_renew',
        'masterAutoRenewPeriod' => 'master_auto_renew_period',
        'masterCount' => 'master_count',
        'masterInstanceChargeType' => 'master_instance_charge_type',
        'masterInstanceTypes' => 'master_instance_types',
        'masterPeriod' => 'master_period',
        'masterPeriodUnit' => 'master_period_unit',
        'masterSystemDiskCategory' => 'master_system_disk_category',
        'masterSystemDiskPerformanceLevel' => 'master_system_disk_performance_level',
        'masterSystemDiskSize' => 'master_system_disk_size',
        'masterSystemDiskSnapshotPolicyId' => 'master_system_disk_snapshot_policy_id',
        'masterVswitchIds' => 'master_vswitch_ids',
        'name' => 'name',
        'natGateway' => 'nat_gateway',
        'nodeCidrMask' => 'node_cidr_mask',
        'nodeNameMode' => 'node_name_mode',
        'nodePortRange' => 'node_port_range',
        'nodepools' => 'nodepools',
        'numOfNodes' => 'num_of_nodes',
        'operationPolicy' => 'operation_policy',
        'osType' => 'os_type',
        'period' => 'period',
        'periodUnit' => 'period_unit',
        'platform' => 'platform',
        'podVswitchIds' => 'pod_vswitch_ids',
        'profile' => 'profile',
        'proxyMode' => 'proxy_mode',
        'rdsInstances' => 'rds_instances',
        'regionId' => 'region_id',
        'resourceGroupId' => 'resource_group_id',
        'rrsaConfig' => 'rrsa_config',
        'runtime' => 'runtime',
        'securityGroupId' => 'security_group_id',
        'securityHardeningOs' => 'security_hardening_os',
        'serviceAccountIssuer' => 'service_account_issuer',
        'serviceCidr' => 'service_cidr',
        'serviceDiscoveryTypes' => 'service_discovery_types',
        'snatEntry' => 'snat_entry',
        'socEnabled' => 'soc_enabled',
        'sshFlags' => 'ssh_flags',
        'tags' => 'tags',
        'taints' => 'taints',
        'timeoutMins' => 'timeout_mins',
        'timezone' => 'timezone',
        'userCa' => 'user_ca',
        'userData' => 'user_data',
        'vpcid' => 'vpcid',
        'vswitchIds' => 'vswitch_ids',
        'workerAutoRenew' => 'worker_auto_renew',
        'workerAutoRenewPeriod' => 'worker_auto_renew_period',
        'workerDataDisks' => 'worker_data_disks',
        'workerInstanceChargeType' => 'worker_instance_charge_type',
        'workerInstanceTypes' => 'worker_instance_types',
        'workerPeriod' => 'worker_period',
        'workerPeriodUnit' => 'worker_period_unit',
        'workerSystemDiskCategory' => 'worker_system_disk_category',
        'workerSystemDiskPerformanceLevel' => 'worker_system_disk_performance_level',
        'workerSystemDiskSize' => 'worker_system_disk_size',
        'workerSystemDiskSnapshotPolicyId' => 'worker_system_disk_snapshot_policy_id',
        'workerVswitchIds' => 'worker_vswitch_ids',
        'zoneId' => 'zone_id',
        'zoneIds' => 'zone_ids',
    ];

    public function validate()
    {
        if (\is_array($this->accessControlList)) {
            Model::validateArray($this->accessControlList);
        }
        if (\is_array($this->addons)) {
            Model::validateArray($this->addons);
        }
        if (null !== $this->auditLogConfig) {
            $this->auditLogConfig->validate();
        }
        if (null !== $this->autoMode) {
            $this->autoMode->validate();
        }
        if (null !== $this->controlPlaneConfig) {
            $this->controlPlaneConfig->validate();
        }
        if (\is_array($this->controlplaneLogComponents)) {
            Model::validateArray($this->controlplaneLogComponents);
        }
        if (\is_array($this->extraSans)) {
            Model::validateArray($this->extraSans);
        }
        if (\is_array($this->instances)) {
            Model::validateArray($this->instances);
        }
        if (null !== $this->maintenanceWindow) {
            $this->maintenanceWindow->validate();
        }
        if (\is_array($this->masterInstanceTypes)) {
            Model::validateArray($this->masterInstanceTypes);
        }
        if (\is_array($this->masterVswitchIds)) {
            Model::validateArray($this->masterVswitchIds);
        }
        if (\is_array($this->nodepools)) {
            Model::validateArray($this->nodepools);
        }
        if (null !== $this->operationPolicy) {
            $this->operationPolicy->validate();
        }
        if (\is_array($this->podVswitchIds)) {
            Model::validateArray($this->podVswitchIds);
        }
        if (\is_array($this->rdsInstances)) {
            Model::validateArray($this->rdsInstances);
        }
        if (null !== $this->rrsaConfig) {
            $this->rrsaConfig->validate();
        }
        if (null !== $this->runtime) {
            $this->runtime->validate();
        }
        if (\is_array($this->serviceDiscoveryTypes)) {
            Model::validateArray($this->serviceDiscoveryTypes);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->taints)) {
            Model::validateArray($this->taints);
        }
        if (\is_array($this->vswitchIds)) {
            Model::validateArray($this->vswitchIds);
        }
        if (\is_array($this->workerDataDisks)) {
            Model::validateArray($this->workerDataDisks);
        }
        if (\is_array($this->workerInstanceTypes)) {
            Model::validateArray($this->workerInstanceTypes);
        }
        if (\is_array($this->workerVswitchIds)) {
            Model::validateArray($this->workerVswitchIds);
        }
        if (\is_array($this->zoneIds)) {
            Model::validateArray($this->zoneIds);
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

        if (null !== $this->addons) {
            if (\is_array($this->addons)) {
                $res['addons'] = [];
                $n1 = 0;
                foreach ($this->addons as $item1) {
                    $res['addons'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->apiAudiences) {
            $res['api_audiences'] = $this->apiAudiences;
        }

        if (null !== $this->auditLogConfig) {
            $res['audit_log_config'] = null !== $this->auditLogConfig ? $this->auditLogConfig->toArray($noStream) : $this->auditLogConfig;
        }

        if (null !== $this->autoMode) {
            $res['auto_mode'] = null !== $this->autoMode ? $this->autoMode->toArray($noStream) : $this->autoMode;
        }

        if (null !== $this->autoRenew) {
            $res['auto_renew'] = $this->autoRenew;
        }

        if (null !== $this->autoRenewPeriod) {
            $res['auto_renew_period'] = $this->autoRenewPeriod;
        }

        if (null !== $this->chargeType) {
            $res['charge_type'] = $this->chargeType;
        }

        if (null !== $this->cisEnabled) {
            $res['cis_enabled'] = $this->cisEnabled;
        }

        if (null !== $this->cloudMonitorFlags) {
            $res['cloud_monitor_flags'] = $this->cloudMonitorFlags;
        }

        if (null !== $this->clusterDomain) {
            $res['cluster_domain'] = $this->clusterDomain;
        }

        if (null !== $this->clusterSpec) {
            $res['cluster_spec'] = $this->clusterSpec;
        }

        if (null !== $this->clusterType) {
            $res['cluster_type'] = $this->clusterType;
        }

        if (null !== $this->containerCidr) {
            $res['container_cidr'] = $this->containerCidr;
        }

        if (null !== $this->controlPlaneConfig) {
            $res['control_plane_config'] = null !== $this->controlPlaneConfig ? $this->controlPlaneConfig->toArray($noStream) : $this->controlPlaneConfig;
        }

        if (null !== $this->controlplaneLogComponents) {
            if (\is_array($this->controlplaneLogComponents)) {
                $res['controlplane_log_components'] = [];
                $n1 = 0;
                foreach ($this->controlplaneLogComponents as $item1) {
                    $res['controlplane_log_components'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->controlplaneLogProject) {
            $res['controlplane_log_project'] = $this->controlplaneLogProject;
        }

        if (null !== $this->controlplaneLogTtl) {
            $res['controlplane_log_ttl'] = $this->controlplaneLogTtl;
        }

        if (null !== $this->cpuPolicy) {
            $res['cpu_policy'] = $this->cpuPolicy;
        }

        if (null !== $this->customSan) {
            $res['custom_san'] = $this->customSan;
        }

        if (null !== $this->deletionProtection) {
            $res['deletion_protection'] = $this->deletionProtection;
        }

        if (null !== $this->disableRollback) {
            $res['disable_rollback'] = $this->disableRollback;
        }

        if (null !== $this->enableRrsa) {
            $res['enable_rrsa'] = $this->enableRrsa;
        }

        if (null !== $this->encryptionProviderKey) {
            $res['encryption_provider_key'] = $this->encryptionProviderKey;
        }

        if (null !== $this->endpointPublicAccess) {
            $res['endpoint_public_access'] = $this->endpointPublicAccess;
        }

        if (null !== $this->extraSans) {
            if (\is_array($this->extraSans)) {
                $res['extra_sans'] = [];
                $n1 = 0;
                foreach ($this->extraSans as $item1) {
                    $res['extra_sans'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->formatDisk) {
            $res['format_disk'] = $this->formatDisk;
        }

        if (null !== $this->imageId) {
            $res['image_id'] = $this->imageId;
        }

        if (null !== $this->imageType) {
            $res['image_type'] = $this->imageType;
        }

        if (null !== $this->instances) {
            if (\is_array($this->instances)) {
                $res['instances'] = [];
                $n1 = 0;
                foreach ($this->instances as $item1) {
                    $res['instances'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->ipStack) {
            $res['ip_stack'] = $this->ipStack;
        }

        if (null !== $this->isEnterpriseSecurityGroup) {
            $res['is_enterprise_security_group'] = $this->isEnterpriseSecurityGroup;
        }

        if (null !== $this->keepInstanceName) {
            $res['keep_instance_name'] = $this->keepInstanceName;
        }

        if (null !== $this->keyPair) {
            $res['key_pair'] = $this->keyPair;
        }

        if (null !== $this->kubernetesVersion) {
            $res['kubernetes_version'] = $this->kubernetesVersion;
        }

        if (null !== $this->loadBalancerId) {
            $res['load_balancer_id'] = $this->loadBalancerId;
        }

        if (null !== $this->loadBalancerSpec) {
            $res['load_balancer_spec'] = $this->loadBalancerSpec;
        }

        if (null !== $this->loggingType) {
            $res['logging_type'] = $this->loggingType;
        }

        if (null !== $this->loginPassword) {
            $res['login_password'] = $this->loginPassword;
        }

        if (null !== $this->maintenanceWindow) {
            $res['maintenance_window'] = null !== $this->maintenanceWindow ? $this->maintenanceWindow->toArray($noStream) : $this->maintenanceWindow;
        }

        if (null !== $this->masterAutoRenew) {
            $res['master_auto_renew'] = $this->masterAutoRenew;
        }

        if (null !== $this->masterAutoRenewPeriod) {
            $res['master_auto_renew_period'] = $this->masterAutoRenewPeriod;
        }

        if (null !== $this->masterCount) {
            $res['master_count'] = $this->masterCount;
        }

        if (null !== $this->masterInstanceChargeType) {
            $res['master_instance_charge_type'] = $this->masterInstanceChargeType;
        }

        if (null !== $this->masterInstanceTypes) {
            if (\is_array($this->masterInstanceTypes)) {
                $res['master_instance_types'] = [];
                $n1 = 0;
                foreach ($this->masterInstanceTypes as $item1) {
                    $res['master_instance_types'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->masterPeriod) {
            $res['master_period'] = $this->masterPeriod;
        }

        if (null !== $this->masterPeriodUnit) {
            $res['master_period_unit'] = $this->masterPeriodUnit;
        }

        if (null !== $this->masterSystemDiskCategory) {
            $res['master_system_disk_category'] = $this->masterSystemDiskCategory;
        }

        if (null !== $this->masterSystemDiskPerformanceLevel) {
            $res['master_system_disk_performance_level'] = $this->masterSystemDiskPerformanceLevel;
        }

        if (null !== $this->masterSystemDiskSize) {
            $res['master_system_disk_size'] = $this->masterSystemDiskSize;
        }

        if (null !== $this->masterSystemDiskSnapshotPolicyId) {
            $res['master_system_disk_snapshot_policy_id'] = $this->masterSystemDiskSnapshotPolicyId;
        }

        if (null !== $this->masterVswitchIds) {
            if (\is_array($this->masterVswitchIds)) {
                $res['master_vswitch_ids'] = [];
                $n1 = 0;
                foreach ($this->masterVswitchIds as $item1) {
                    $res['master_vswitch_ids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->natGateway) {
            $res['nat_gateway'] = $this->natGateway;
        }

        if (null !== $this->nodeCidrMask) {
            $res['node_cidr_mask'] = $this->nodeCidrMask;
        }

        if (null !== $this->nodeNameMode) {
            $res['node_name_mode'] = $this->nodeNameMode;
        }

        if (null !== $this->nodePortRange) {
            $res['node_port_range'] = $this->nodePortRange;
        }

        if (null !== $this->nodepools) {
            if (\is_array($this->nodepools)) {
                $res['nodepools'] = [];
                $n1 = 0;
                foreach ($this->nodepools as $item1) {
                    $res['nodepools'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->numOfNodes) {
            $res['num_of_nodes'] = $this->numOfNodes;
        }

        if (null !== $this->operationPolicy) {
            $res['operation_policy'] = null !== $this->operationPolicy ? $this->operationPolicy->toArray($noStream) : $this->operationPolicy;
        }

        if (null !== $this->osType) {
            $res['os_type'] = $this->osType;
        }

        if (null !== $this->period) {
            $res['period'] = $this->period;
        }

        if (null !== $this->periodUnit) {
            $res['period_unit'] = $this->periodUnit;
        }

        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }

        if (null !== $this->podVswitchIds) {
            if (\is_array($this->podVswitchIds)) {
                $res['pod_vswitch_ids'] = [];
                $n1 = 0;
                foreach ($this->podVswitchIds as $item1) {
                    $res['pod_vswitch_ids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->profile) {
            $res['profile'] = $this->profile;
        }

        if (null !== $this->proxyMode) {
            $res['proxy_mode'] = $this->proxyMode;
        }

        if (null !== $this->rdsInstances) {
            if (\is_array($this->rdsInstances)) {
                $res['rds_instances'] = [];
                $n1 = 0;
                foreach ($this->rdsInstances as $item1) {
                    $res['rds_instances'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['region_id'] = $this->regionId;
        }

        if (null !== $this->resourceGroupId) {
            $res['resource_group_id'] = $this->resourceGroupId;
        }

        if (null !== $this->rrsaConfig) {
            $res['rrsa_config'] = null !== $this->rrsaConfig ? $this->rrsaConfig->toArray($noStream) : $this->rrsaConfig;
        }

        if (null !== $this->runtime) {
            $res['runtime'] = null !== $this->runtime ? $this->runtime->toArray($noStream) : $this->runtime;
        }

        if (null !== $this->securityGroupId) {
            $res['security_group_id'] = $this->securityGroupId;
        }

        if (null !== $this->securityHardeningOs) {
            $res['security_hardening_os'] = $this->securityHardeningOs;
        }

        if (null !== $this->serviceAccountIssuer) {
            $res['service_account_issuer'] = $this->serviceAccountIssuer;
        }

        if (null !== $this->serviceCidr) {
            $res['service_cidr'] = $this->serviceCidr;
        }

        if (null !== $this->serviceDiscoveryTypes) {
            if (\is_array($this->serviceDiscoveryTypes)) {
                $res['service_discovery_types'] = [];
                $n1 = 0;
                foreach ($this->serviceDiscoveryTypes as $item1) {
                    $res['service_discovery_types'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->snatEntry) {
            $res['snat_entry'] = $this->snatEntry;
        }

        if (null !== $this->socEnabled) {
            $res['soc_enabled'] = $this->socEnabled;
        }

        if (null !== $this->sshFlags) {
            $res['ssh_flags'] = $this->sshFlags;
        }

        if (null !== $this->tags) {
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->taints) {
            if (\is_array($this->taints)) {
                $res['taints'] = [];
                $n1 = 0;
                foreach ($this->taints as $item1) {
                    $res['taints'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->timeoutMins) {
            $res['timeout_mins'] = $this->timeoutMins;
        }

        if (null !== $this->timezone) {
            $res['timezone'] = $this->timezone;
        }

        if (null !== $this->userCa) {
            $res['user_ca'] = $this->userCa;
        }

        if (null !== $this->userData) {
            $res['user_data'] = $this->userData;
        }

        if (null !== $this->vpcid) {
            $res['vpcid'] = $this->vpcid;
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

        if (null !== $this->workerAutoRenew) {
            $res['worker_auto_renew'] = $this->workerAutoRenew;
        }

        if (null !== $this->workerAutoRenewPeriod) {
            $res['worker_auto_renew_period'] = $this->workerAutoRenewPeriod;
        }

        if (null !== $this->workerDataDisks) {
            if (\is_array($this->workerDataDisks)) {
                $res['worker_data_disks'] = [];
                $n1 = 0;
                foreach ($this->workerDataDisks as $item1) {
                    $res['worker_data_disks'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workerInstanceChargeType) {
            $res['worker_instance_charge_type'] = $this->workerInstanceChargeType;
        }

        if (null !== $this->workerInstanceTypes) {
            if (\is_array($this->workerInstanceTypes)) {
                $res['worker_instance_types'] = [];
                $n1 = 0;
                foreach ($this->workerInstanceTypes as $item1) {
                    $res['worker_instance_types'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workerPeriod) {
            $res['worker_period'] = $this->workerPeriod;
        }

        if (null !== $this->workerPeriodUnit) {
            $res['worker_period_unit'] = $this->workerPeriodUnit;
        }

        if (null !== $this->workerSystemDiskCategory) {
            $res['worker_system_disk_category'] = $this->workerSystemDiskCategory;
        }

        if (null !== $this->workerSystemDiskPerformanceLevel) {
            $res['worker_system_disk_performance_level'] = $this->workerSystemDiskPerformanceLevel;
        }

        if (null !== $this->workerSystemDiskSize) {
            $res['worker_system_disk_size'] = $this->workerSystemDiskSize;
        }

        if (null !== $this->workerSystemDiskSnapshotPolicyId) {
            $res['worker_system_disk_snapshot_policy_id'] = $this->workerSystemDiskSnapshotPolicyId;
        }

        if (null !== $this->workerVswitchIds) {
            if (\is_array($this->workerVswitchIds)) {
                $res['worker_vswitch_ids'] = [];
                $n1 = 0;
                foreach ($this->workerVswitchIds as $item1) {
                    $res['worker_vswitch_ids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->zoneId) {
            $res['zone_id'] = $this->zoneId;
        }

        if (null !== $this->zoneIds) {
            if (\is_array($this->zoneIds)) {
                $res['zone_ids'] = [];
                $n1 = 0;
                foreach ($this->zoneIds as $item1) {
                    $res['zone_ids'][$n1] = $item1;
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

        if (isset($map['addons'])) {
            if (!empty($map['addons'])) {
                $model->addons = [];
                $n1 = 0;
                foreach ($map['addons'] as $item1) {
                    $model->addons[$n1] = Addon::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['api_audiences'])) {
            $model->apiAudiences = $map['api_audiences'];
        }

        if (isset($map['audit_log_config'])) {
            $model->auditLogConfig = auditLogConfig::fromMap($map['audit_log_config']);
        }

        if (isset($map['auto_mode'])) {
            $model->autoMode = autoMode::fromMap($map['auto_mode']);
        }

        if (isset($map['auto_renew'])) {
            $model->autoRenew = $map['auto_renew'];
        }

        if (isset($map['auto_renew_period'])) {
            $model->autoRenewPeriod = $map['auto_renew_period'];
        }

        if (isset($map['charge_type'])) {
            $model->chargeType = $map['charge_type'];
        }

        if (isset($map['cis_enabled'])) {
            $model->cisEnabled = $map['cis_enabled'];
        }

        if (isset($map['cloud_monitor_flags'])) {
            $model->cloudMonitorFlags = $map['cloud_monitor_flags'];
        }

        if (isset($map['cluster_domain'])) {
            $model->clusterDomain = $map['cluster_domain'];
        }

        if (isset($map['cluster_spec'])) {
            $model->clusterSpec = $map['cluster_spec'];
        }

        if (isset($map['cluster_type'])) {
            $model->clusterType = $map['cluster_type'];
        }

        if (isset($map['container_cidr'])) {
            $model->containerCidr = $map['container_cidr'];
        }

        if (isset($map['control_plane_config'])) {
            $model->controlPlaneConfig = controlPlaneConfig::fromMap($map['control_plane_config']);
        }

        if (isset($map['controlplane_log_components'])) {
            if (!empty($map['controlplane_log_components'])) {
                $model->controlplaneLogComponents = [];
                $n1 = 0;
                foreach ($map['controlplane_log_components'] as $item1) {
                    $model->controlplaneLogComponents[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['controlplane_log_project'])) {
            $model->controlplaneLogProject = $map['controlplane_log_project'];
        }

        if (isset($map['controlplane_log_ttl'])) {
            $model->controlplaneLogTtl = $map['controlplane_log_ttl'];
        }

        if (isset($map['cpu_policy'])) {
            $model->cpuPolicy = $map['cpu_policy'];
        }

        if (isset($map['custom_san'])) {
            $model->customSan = $map['custom_san'];
        }

        if (isset($map['deletion_protection'])) {
            $model->deletionProtection = $map['deletion_protection'];
        }

        if (isset($map['disable_rollback'])) {
            $model->disableRollback = $map['disable_rollback'];
        }

        if (isset($map['enable_rrsa'])) {
            $model->enableRrsa = $map['enable_rrsa'];
        }

        if (isset($map['encryption_provider_key'])) {
            $model->encryptionProviderKey = $map['encryption_provider_key'];
        }

        if (isset($map['endpoint_public_access'])) {
            $model->endpointPublicAccess = $map['endpoint_public_access'];
        }

        if (isset($map['extra_sans'])) {
            if (!empty($map['extra_sans'])) {
                $model->extraSans = [];
                $n1 = 0;
                foreach ($map['extra_sans'] as $item1) {
                    $model->extraSans[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['format_disk'])) {
            $model->formatDisk = $map['format_disk'];
        }

        if (isset($map['image_id'])) {
            $model->imageId = $map['image_id'];
        }

        if (isset($map['image_type'])) {
            $model->imageType = $map['image_type'];
        }

        if (isset($map['instances'])) {
            if (!empty($map['instances'])) {
                $model->instances = [];
                $n1 = 0;
                foreach ($map['instances'] as $item1) {
                    $model->instances[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ip_stack'])) {
            $model->ipStack = $map['ip_stack'];
        }

        if (isset($map['is_enterprise_security_group'])) {
            $model->isEnterpriseSecurityGroup = $map['is_enterprise_security_group'];
        }

        if (isset($map['keep_instance_name'])) {
            $model->keepInstanceName = $map['keep_instance_name'];
        }

        if (isset($map['key_pair'])) {
            $model->keyPair = $map['key_pair'];
        }

        if (isset($map['kubernetes_version'])) {
            $model->kubernetesVersion = $map['kubernetes_version'];
        }

        if (isset($map['load_balancer_id'])) {
            $model->loadBalancerId = $map['load_balancer_id'];
        }

        if (isset($map['load_balancer_spec'])) {
            $model->loadBalancerSpec = $map['load_balancer_spec'];
        }

        if (isset($map['logging_type'])) {
            $model->loggingType = $map['logging_type'];
        }

        if (isset($map['login_password'])) {
            $model->loginPassword = $map['login_password'];
        }

        if (isset($map['maintenance_window'])) {
            $model->maintenanceWindow = MaintenanceWindow::fromMap($map['maintenance_window']);
        }

        if (isset($map['master_auto_renew'])) {
            $model->masterAutoRenew = $map['master_auto_renew'];
        }

        if (isset($map['master_auto_renew_period'])) {
            $model->masterAutoRenewPeriod = $map['master_auto_renew_period'];
        }

        if (isset($map['master_count'])) {
            $model->masterCount = $map['master_count'];
        }

        if (isset($map['master_instance_charge_type'])) {
            $model->masterInstanceChargeType = $map['master_instance_charge_type'];
        }

        if (isset($map['master_instance_types'])) {
            if (!empty($map['master_instance_types'])) {
                $model->masterInstanceTypes = [];
                $n1 = 0;
                foreach ($map['master_instance_types'] as $item1) {
                    $model->masterInstanceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['master_period'])) {
            $model->masterPeriod = $map['master_period'];
        }

        if (isset($map['master_period_unit'])) {
            $model->masterPeriodUnit = $map['master_period_unit'];
        }

        if (isset($map['master_system_disk_category'])) {
            $model->masterSystemDiskCategory = $map['master_system_disk_category'];
        }

        if (isset($map['master_system_disk_performance_level'])) {
            $model->masterSystemDiskPerformanceLevel = $map['master_system_disk_performance_level'];
        }

        if (isset($map['master_system_disk_size'])) {
            $model->masterSystemDiskSize = $map['master_system_disk_size'];
        }

        if (isset($map['master_system_disk_snapshot_policy_id'])) {
            $model->masterSystemDiskSnapshotPolicyId = $map['master_system_disk_snapshot_policy_id'];
        }

        if (isset($map['master_vswitch_ids'])) {
            if (!empty($map['master_vswitch_ids'])) {
                $model->masterVswitchIds = [];
                $n1 = 0;
                foreach ($map['master_vswitch_ids'] as $item1) {
                    $model->masterVswitchIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['nat_gateway'])) {
            $model->natGateway = $map['nat_gateway'];
        }

        if (isset($map['node_cidr_mask'])) {
            $model->nodeCidrMask = $map['node_cidr_mask'];
        }

        if (isset($map['node_name_mode'])) {
            $model->nodeNameMode = $map['node_name_mode'];
        }

        if (isset($map['node_port_range'])) {
            $model->nodePortRange = $map['node_port_range'];
        }

        if (isset($map['nodepools'])) {
            if (!empty($map['nodepools'])) {
                $model->nodepools = [];
                $n1 = 0;
                foreach ($map['nodepools'] as $item1) {
                    $model->nodepools[$n1] = Nodepool::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['num_of_nodes'])) {
            $model->numOfNodes = $map['num_of_nodes'];
        }

        if (isset($map['operation_policy'])) {
            $model->operationPolicy = operationPolicy::fromMap($map['operation_policy']);
        }

        if (isset($map['os_type'])) {
            $model->osType = $map['os_type'];
        }

        if (isset($map['period'])) {
            $model->period = $map['period'];
        }

        if (isset($map['period_unit'])) {
            $model->periodUnit = $map['period_unit'];
        }

        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }

        if (isset($map['pod_vswitch_ids'])) {
            if (!empty($map['pod_vswitch_ids'])) {
                $model->podVswitchIds = [];
                $n1 = 0;
                foreach ($map['pod_vswitch_ids'] as $item1) {
                    $model->podVswitchIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['profile'])) {
            $model->profile = $map['profile'];
        }

        if (isset($map['proxy_mode'])) {
            $model->proxyMode = $map['proxy_mode'];
        }

        if (isset($map['rds_instances'])) {
            if (!empty($map['rds_instances'])) {
                $model->rdsInstances = [];
                $n1 = 0;
                foreach ($map['rds_instances'] as $item1) {
                    $model->rdsInstances[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }

        if (isset($map['resource_group_id'])) {
            $model->resourceGroupId = $map['resource_group_id'];
        }

        if (isset($map['rrsa_config'])) {
            $model->rrsaConfig = rrsaConfig::fromMap($map['rrsa_config']);
        }

        if (isset($map['runtime'])) {
            $model->runtime = Runtime::fromMap($map['runtime']);
        }

        if (isset($map['security_group_id'])) {
            $model->securityGroupId = $map['security_group_id'];
        }

        if (isset($map['security_hardening_os'])) {
            $model->securityHardeningOs = $map['security_hardening_os'];
        }

        if (isset($map['service_account_issuer'])) {
            $model->serviceAccountIssuer = $map['service_account_issuer'];
        }

        if (isset($map['service_cidr'])) {
            $model->serviceCidr = $map['service_cidr'];
        }

        if (isset($map['service_discovery_types'])) {
            if (!empty($map['service_discovery_types'])) {
                $model->serviceDiscoveryTypes = [];
                $n1 = 0;
                foreach ($map['service_discovery_types'] as $item1) {
                    $model->serviceDiscoveryTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['snat_entry'])) {
            $model->snatEntry = $map['snat_entry'];
        }

        if (isset($map['soc_enabled'])) {
            $model->socEnabled = $map['soc_enabled'];
        }

        if (isset($map['ssh_flags'])) {
            $model->sshFlags = $map['ssh_flags'];
        }

        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = Tag::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['taints'])) {
            if (!empty($map['taints'])) {
                $model->taints = [];
                $n1 = 0;
                foreach ($map['taints'] as $item1) {
                    $model->taints[$n1] = Taint::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['timeout_mins'])) {
            $model->timeoutMins = $map['timeout_mins'];
        }

        if (isset($map['timezone'])) {
            $model->timezone = $map['timezone'];
        }

        if (isset($map['user_ca'])) {
            $model->userCa = $map['user_ca'];
        }

        if (isset($map['user_data'])) {
            $model->userData = $map['user_data'];
        }

        if (isset($map['vpcid'])) {
            $model->vpcid = $map['vpcid'];
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

        if (isset($map['worker_auto_renew'])) {
            $model->workerAutoRenew = $map['worker_auto_renew'];
        }

        if (isset($map['worker_auto_renew_period'])) {
            $model->workerAutoRenewPeriod = $map['worker_auto_renew_period'];
        }

        if (isset($map['worker_data_disks'])) {
            if (!empty($map['worker_data_disks'])) {
                $model->workerDataDisks = [];
                $n1 = 0;
                foreach ($map['worker_data_disks'] as $item1) {
                    $model->workerDataDisks[$n1] = workerDataDisks::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['worker_instance_charge_type'])) {
            $model->workerInstanceChargeType = $map['worker_instance_charge_type'];
        }

        if (isset($map['worker_instance_types'])) {
            if (!empty($map['worker_instance_types'])) {
                $model->workerInstanceTypes = [];
                $n1 = 0;
                foreach ($map['worker_instance_types'] as $item1) {
                    $model->workerInstanceTypes[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['worker_period'])) {
            $model->workerPeriod = $map['worker_period'];
        }

        if (isset($map['worker_period_unit'])) {
            $model->workerPeriodUnit = $map['worker_period_unit'];
        }

        if (isset($map['worker_system_disk_category'])) {
            $model->workerSystemDiskCategory = $map['worker_system_disk_category'];
        }

        if (isset($map['worker_system_disk_performance_level'])) {
            $model->workerSystemDiskPerformanceLevel = $map['worker_system_disk_performance_level'];
        }

        if (isset($map['worker_system_disk_size'])) {
            $model->workerSystemDiskSize = $map['worker_system_disk_size'];
        }

        if (isset($map['worker_system_disk_snapshot_policy_id'])) {
            $model->workerSystemDiskSnapshotPolicyId = $map['worker_system_disk_snapshot_policy_id'];
        }

        if (isset($map['worker_vswitch_ids'])) {
            if (!empty($map['worker_vswitch_ids'])) {
                $model->workerVswitchIds = [];
                $n1 = 0;
                foreach ($map['worker_vswitch_ids'] as $item1) {
                    $model->workerVswitchIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['zone_id'])) {
            $model->zoneId = $map['zone_id'];
        }

        if (isset($map['zone_ids'])) {
            if (!empty($map['zone_ids'])) {
                $model->zoneIds = [];
                $n1 = 0;
                foreach ($map['zone_ids'] as $item1) {
                    $model->zoneIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
