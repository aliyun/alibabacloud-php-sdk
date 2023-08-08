<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\workerDataDisks;
use AlibabaCloud\Tea\Model;

class CreateClusterRequest extends Model
{
    /**
     * @var Addon[]
     */
    public $addons;

    /**
     * @example kubernetes.default.svc
     *
     * @var string
     */
    public $apiAudiences;

    /**
     * @example 1
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example false
     *
     * @var bool
     */
    public $cisEnabled;

    /**
     * @example true
     *
     * @var bool
     */
    public $cloudMonitorFlags;

    /**
     * @example cluster.local
     *
     * @var string
     */
    public $clusterDomain;

    /**
     * @example ack.pro.small
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @example Kubernetes
     *
     * @var string
     */
    public $clusterType;

    /**
     * @example 172.20.0.0/16
     *
     * @var string
     */
    public $containerCidr;

    /**
     * @var string[]
     */
    public $controlplaneLogComponents;

    /**
     * @example k8s-log-xxx
     *
     * @var string
     */
    public $controlplaneLogProject;

    /**
     * @example 30
     *
     * @var string
     */
    public $controlplaneLogTtl;

    /**
     * @example none
     *
     * @var string
     */
    public $cpuPolicy;

    /**
     * @example cs.aliyun.com
     *
     * @var string
     */
    public $customSan;

    /**
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @example true
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @example true
     *
     * @var bool
     */
    public $enableRrsa;

    /**
     * @example 0fe64791-55eb-4fc7-84c5-c6c7cdca****
     *
     * @var string
     */
    public $encryptionProviderKey;

    /**
     * @example true
     *
     * @var bool
     */
    public $endpointPublicAccess;

    /**
     * @example false
     *
     * @var bool
     */
    public $formatDisk;

    /**
     * @example m-bp16z7xko3vvv8gt****
     *
     * @var string
     */
    public $imageId;

    /**
     * @example AliyunLinux
     *
     * @var string
     */
    public $imageType;

    /**
     * @var string[]
     */
    public $instances;

    /**
     * @example 可选值：ipv4(单栈)/dual(双栈) ，默认值为IPv4。
     *
     * @var string
     */
    public $ipStack;

    /**
     * @example true
     *
     * @var bool
     */
    public $isEnterpriseSecurityGroup;

    /**
     * @example true
     *
     * @var bool
     */
    public $keepInstanceName;

    /**
     * @example secrity-key
     *
     * @var string
     */
    public $keyPair;

    /**
     * @example 1.16.9-aliyun.1
     *
     * @var string
     */
    public $kubernetesVersion;

    /**
     * @example slb.s2.small
     *
     * @var string
     */
    public $loadBalancerSpec;

    /**
     * @example SLS
     *
     * @var string
     */
    public $loggingType;

    /**
     * @example Hello@1234
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @example true
     *
     * @var bool
     */
    public $masterAutoRenew;

    /**
     * @example 1
     *
     * @var int
     */
    public $masterAutoRenewPeriod;

    /**
     * @example 3
     *
     * @var int
     */
    public $masterCount;

    /**
     * @example PrePaid
     *
     * @var string
     */
    public $masterInstanceChargeType;

    /**
     * @var string[]
     */
    public $masterInstanceTypes;

    /**
     * @example 1
     *
     * @var int
     */
    public $masterPeriod;

    /**
     * @example Month
     *
     * @var string
     */
    public $masterPeriodUnit;

    /**
     * @example cloud_ssd
     *
     * @var string
     */
    public $masterSystemDiskCategory;

    /**
     * @example PL1
     *
     * @var string
     */
    public $masterSystemDiskPerformanceLevel;

    /**
     * @example 120
     *
     * @var int
     */
    public $masterSystemDiskSize;

    /**
     * @example sp-2zej1nogjvovnz4z****
     *
     * @var string
     */
    public $masterSystemDiskSnapshotPolicyId;

    /**
     * @var string[]
     */
    public $masterVswitchIds;

    /**
     * @example cluster-demo
     *
     * @var string
     */
    public $name;

    /**
     * @example true
     *
     * @var bool
     */
    public $natGateway;

    /**
     * @example 25
     *
     * @var string
     */
    public $nodeCidrMask;

    /**
     * @example aliyun.com00055test
     *
     * @var string
     */
    public $nodeNameMode;

    /**
     * @example 30000~32767
     *
     * @var string
     */
    public $nodePortRange;

    /**
     * @example 3
     *
     * @var int
     */
    public $numOfNodes;

    /**
     * @example Linux
     *
     * @var string
     */
    public $osType;

    /**
     * @example FY2023
     *
     * @var int
     */
    public $period;

    /**
     * @example Month
     *
     * @var string
     */
    public $periodUnit;

    /**
     * @example CentOS
     *
     * @var string
     */
    public $platform;

    /**
     * @var string[]
     */
    public $podVswitchIds;

    /**
     * @example Default
     *
     * @var string
     */
    public $profile;

    /**
     * @example ipvs
     *
     * @var string
     */
    public $proxyMode;

    /**
     * @var string[]
     */
    public $rdsInstances;

    /**
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfm3mkrure****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var Runtime
     */
    public $runtime;

    /**
     * @example sg-bp1bdue0qc1g7k****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @example kubernetes.default.svc
     *
     * @var string
     */
    public $serviceAccountIssuer;

    /**
     * @example 172.21.0.0/20
     *
     * @var string
     */
    public $serviceCidr;

    /**
     * @var string[]
     */
    public $serviceDiscoveryTypes;

    /**
     * @example true
     *
     * @var bool
     */
    public $snatEntry;

    /**
     * @example false
     *
     * @var bool
     */
    public $socEnabled;

    /**
     * @example true
     *
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
     * @example 60
     *
     * @var int
     */
    public $timeoutMins;

    /**
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timezone;

    /**
     * @example -----BEGIN CERTIFICATE-----****
     *
     * @var string
     */
    public $userCa;

    /**
     * @example IyEvdXNyL2Jpbi9iYXNoCmVjaG8gIkhlbGxvIEFD****
     *
     * @var string
     */
    public $userData;

    /**
     * @example vpc-2zeik9h3ahvv2zz95****
     *
     * @var string
     */
    public $vpcid;

    /**
     * @var string[]
     */
    public $vswitchIds;

    /**
     * @example true
     *
     * @var bool
     */
    public $workerAutoRenew;

    /**
     * @example 1
     *
     * @var int
     */
    public $workerAutoRenewPeriod;

    /**
     * @var workerDataDisks[]
     */
    public $workerDataDisks;

    /**
     * @example PrePaid
     *
     * @var string
     */
    public $workerInstanceChargeType;

    /**
     * @var string[]
     */
    public $workerInstanceTypes;

    /**
     * @example 1
     *
     * @var int
     */
    public $workerPeriod;

    /**
     * @example Month
     *
     * @var string
     */
    public $workerPeriodUnit;

    /**
     * @example cloud_efficiency
     *
     * @var string
     */
    public $workerSystemDiskCategory;

    /**
     * @example PL1
     *
     * @var string
     */
    public $workerSystemDiskPerformanceLevel;

    /**
     * @example 120
     *
     * @var int
     */
    public $workerSystemDiskSize;

    /**
     * @example sp-2zej1nogjvovnz4z****
     *
     * @var string
     */
    public $workerSystemDiskSnapshotPolicyId;

    /**
     * @var string[]
     */
    public $workerVswitchIds;

    /**
     * @example cn-beiji****
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'addons'                           => 'addons',
        'apiAudiences'                     => 'api_audiences',
        'chargeType'                       => 'charge_type',
        'cisEnabled'                       => 'cis_enabled',
        'cloudMonitorFlags'                => 'cloud_monitor_flags',
        'clusterDomain'                    => 'cluster_domain',
        'clusterSpec'                      => 'cluster_spec',
        'clusterType'                      => 'cluster_type',
        'containerCidr'                    => 'container_cidr',
        'controlplaneLogComponents'        => 'controlplane_log_components',
        'controlplaneLogProject'           => 'controlplane_log_project',
        'controlplaneLogTtl'               => 'controlplane_log_ttl',
        'cpuPolicy'                        => 'cpu_policy',
        'customSan'                        => 'custom_san',
        'deletionProtection'               => 'deletion_protection',
        'disableRollback'                  => 'disable_rollback',
        'enableRrsa'                       => 'enable_rrsa',
        'encryptionProviderKey'            => 'encryption_provider_key',
        'endpointPublicAccess'             => 'endpoint_public_access',
        'formatDisk'                       => 'format_disk',
        'imageId'                          => 'image_id',
        'imageType'                        => 'image_type',
        'instances'                        => 'instances',
        'ipStack'                          => 'ip_stack',
        'isEnterpriseSecurityGroup'        => 'is_enterprise_security_group',
        'keepInstanceName'                 => 'keep_instance_name',
        'keyPair'                          => 'key_pair',
        'kubernetesVersion'                => 'kubernetes_version',
        'loadBalancerSpec'                 => 'load_balancer_spec',
        'loggingType'                      => 'logging_type',
        'loginPassword'                    => 'login_password',
        'masterAutoRenew'                  => 'master_auto_renew',
        'masterAutoRenewPeriod'            => 'master_auto_renew_period',
        'masterCount'                      => 'master_count',
        'masterInstanceChargeType'         => 'master_instance_charge_type',
        'masterInstanceTypes'              => 'master_instance_types',
        'masterPeriod'                     => 'master_period',
        'masterPeriodUnit'                 => 'master_period_unit',
        'masterSystemDiskCategory'         => 'master_system_disk_category',
        'masterSystemDiskPerformanceLevel' => 'master_system_disk_performance_level',
        'masterSystemDiskSize'             => 'master_system_disk_size',
        'masterSystemDiskSnapshotPolicyId' => 'master_system_disk_snapshot_policy_id',
        'masterVswitchIds'                 => 'master_vswitch_ids',
        'name'                             => 'name',
        'natGateway'                       => 'nat_gateway',
        'nodeCidrMask'                     => 'node_cidr_mask',
        'nodeNameMode'                     => 'node_name_mode',
        'nodePortRange'                    => 'node_port_range',
        'numOfNodes'                       => 'num_of_nodes',
        'osType'                           => 'os_type',
        'period'                           => 'period',
        'periodUnit'                       => 'period_unit',
        'platform'                         => 'platform',
        'podVswitchIds'                    => 'pod_vswitch_ids',
        'profile'                          => 'profile',
        'proxyMode'                        => 'proxy_mode',
        'rdsInstances'                     => 'rds_instances',
        'regionId'                         => 'region_id',
        'resourceGroupId'                  => 'resource_group_id',
        'runtime'                          => 'runtime',
        'securityGroupId'                  => 'security_group_id',
        'serviceAccountIssuer'             => 'service_account_issuer',
        'serviceCidr'                      => 'service_cidr',
        'serviceDiscoveryTypes'            => 'service_discovery_types',
        'snatEntry'                        => 'snat_entry',
        'socEnabled'                       => 'soc_enabled',
        'sshFlags'                         => 'ssh_flags',
        'tags'                             => 'tags',
        'taints'                           => 'taints',
        'timeoutMins'                      => 'timeout_mins',
        'timezone'                         => 'timezone',
        'userCa'                           => 'user_ca',
        'userData'                         => 'user_data',
        'vpcid'                            => 'vpcid',
        'vswitchIds'                       => 'vswitch_ids',
        'workerAutoRenew'                  => 'worker_auto_renew',
        'workerAutoRenewPeriod'            => 'worker_auto_renew_period',
        'workerDataDisks'                  => 'worker_data_disks',
        'workerInstanceChargeType'         => 'worker_instance_charge_type',
        'workerInstanceTypes'              => 'worker_instance_types',
        'workerPeriod'                     => 'worker_period',
        'workerPeriodUnit'                 => 'worker_period_unit',
        'workerSystemDiskCategory'         => 'worker_system_disk_category',
        'workerSystemDiskPerformanceLevel' => 'worker_system_disk_performance_level',
        'workerSystemDiskSize'             => 'worker_system_disk_size',
        'workerSystemDiskSnapshotPolicyId' => 'worker_system_disk_snapshot_policy_id',
        'workerVswitchIds'                 => 'worker_vswitch_ids',
        'zoneId'                           => 'zone_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addons) {
            $res['addons'] = [];
            if (null !== $this->addons && \is_array($this->addons)) {
                $n = 0;
                foreach ($this->addons as $item) {
                    $res['addons'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->apiAudiences) {
            $res['api_audiences'] = $this->apiAudiences;
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
        if (null !== $this->controlplaneLogComponents) {
            $res['controlplane_log_components'] = $this->controlplaneLogComponents;
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
            $res['instances'] = $this->instances;
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
        if (null !== $this->loadBalancerSpec) {
            $res['load_balancer_spec'] = $this->loadBalancerSpec;
        }
        if (null !== $this->loggingType) {
            $res['logging_type'] = $this->loggingType;
        }
        if (null !== $this->loginPassword) {
            $res['login_password'] = $this->loginPassword;
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
            $res['master_instance_types'] = $this->masterInstanceTypes;
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
            $res['master_vswitch_ids'] = $this->masterVswitchIds;
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
        if (null !== $this->numOfNodes) {
            $res['num_of_nodes'] = $this->numOfNodes;
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
            $res['pod_vswitch_ids'] = $this->podVswitchIds;
        }
        if (null !== $this->profile) {
            $res['profile'] = $this->profile;
        }
        if (null !== $this->proxyMode) {
            $res['proxy_mode'] = $this->proxyMode;
        }
        if (null !== $this->rdsInstances) {
            $res['rds_instances'] = $this->rdsInstances;
        }
        if (null !== $this->regionId) {
            $res['region_id'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['resource_group_id'] = $this->resourceGroupId;
        }
        if (null !== $this->runtime) {
            $res['runtime'] = null !== $this->runtime ? $this->runtime->toMap() : null;
        }
        if (null !== $this->securityGroupId) {
            $res['security_group_id'] = $this->securityGroupId;
        }
        if (null !== $this->serviceAccountIssuer) {
            $res['service_account_issuer'] = $this->serviceAccountIssuer;
        }
        if (null !== $this->serviceCidr) {
            $res['service_cidr'] = $this->serviceCidr;
        }
        if (null !== $this->serviceDiscoveryTypes) {
            $res['service_discovery_types'] = $this->serviceDiscoveryTypes;
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
            $res['tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taints) {
            $res['taints'] = [];
            if (null !== $this->taints && \is_array($this->taints)) {
                $n = 0;
                foreach ($this->taints as $item) {
                    $res['taints'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['vswitch_ids'] = $this->vswitchIds;
        }
        if (null !== $this->workerAutoRenew) {
            $res['worker_auto_renew'] = $this->workerAutoRenew;
        }
        if (null !== $this->workerAutoRenewPeriod) {
            $res['worker_auto_renew_period'] = $this->workerAutoRenewPeriod;
        }
        if (null !== $this->workerDataDisks) {
            $res['worker_data_disks'] = [];
            if (null !== $this->workerDataDisks && \is_array($this->workerDataDisks)) {
                $n = 0;
                foreach ($this->workerDataDisks as $item) {
                    $res['worker_data_disks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workerInstanceChargeType) {
            $res['worker_instance_charge_type'] = $this->workerInstanceChargeType;
        }
        if (null !== $this->workerInstanceTypes) {
            $res['worker_instance_types'] = $this->workerInstanceTypes;
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
            $res['worker_vswitch_ids'] = $this->workerVswitchIds;
        }
        if (null !== $this->zoneId) {
            $res['zone_id'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['addons'])) {
            if (!empty($map['addons'])) {
                $model->addons = [];
                $n             = 0;
                foreach ($map['addons'] as $item) {
                    $model->addons[$n++] = null !== $item ? Addon::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['api_audiences'])) {
            $model->apiAudiences = $map['api_audiences'];
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
        if (isset($map['controlplane_log_components'])) {
            if (!empty($map['controlplane_log_components'])) {
                $model->controlplaneLogComponents = $map['controlplane_log_components'];
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
                $model->instances = $map['instances'];
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
        if (isset($map['load_balancer_spec'])) {
            $model->loadBalancerSpec = $map['load_balancer_spec'];
        }
        if (isset($map['logging_type'])) {
            $model->loggingType = $map['logging_type'];
        }
        if (isset($map['login_password'])) {
            $model->loginPassword = $map['login_password'];
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
                $model->masterInstanceTypes = $map['master_instance_types'];
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
                $model->masterVswitchIds = $map['master_vswitch_ids'];
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
        if (isset($map['num_of_nodes'])) {
            $model->numOfNodes = $map['num_of_nodes'];
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
                $model->podVswitchIds = $map['pod_vswitch_ids'];
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
                $model->rdsInstances = $map['rds_instances'];
            }
        }
        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }
        if (isset($map['resource_group_id'])) {
            $model->resourceGroupId = $map['resource_group_id'];
        }
        if (isset($map['runtime'])) {
            $model->runtime = Runtime::fromMap($map['runtime']);
        }
        if (isset($map['security_group_id'])) {
            $model->securityGroupId = $map['security_group_id'];
        }
        if (isset($map['service_account_issuer'])) {
            $model->serviceAccountIssuer = $map['service_account_issuer'];
        }
        if (isset($map['service_cidr'])) {
            $model->serviceCidr = $map['service_cidr'];
        }
        if (isset($map['service_discovery_types'])) {
            if (!empty($map['service_discovery_types'])) {
                $model->serviceDiscoveryTypes = $map['service_discovery_types'];
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
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['taints'])) {
            if (!empty($map['taints'])) {
                $model->taints = [];
                $n             = 0;
                foreach ($map['taints'] as $item) {
                    $model->taints[$n++] = null !== $item ? Taint::fromMap($item) : $item;
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
                $model->vswitchIds = $map['vswitch_ids'];
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
                $n                      = 0;
                foreach ($map['worker_data_disks'] as $item) {
                    $model->workerDataDisks[$n++] = null !== $item ? workerDataDisks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['worker_instance_charge_type'])) {
            $model->workerInstanceChargeType = $map['worker_instance_charge_type'];
        }
        if (isset($map['worker_instance_types'])) {
            if (!empty($map['worker_instance_types'])) {
                $model->workerInstanceTypes = $map['worker_instance_types'];
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
                $model->workerVswitchIds = $map['worker_vswitch_ids'];
            }
        }
        if (isset($map['zone_id'])) {
            $model->zoneId = $map['zone_id'];
        }

        return $model;
    }
}
