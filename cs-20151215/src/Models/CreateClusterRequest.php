<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class CreateClusterRequest extends Model
{
    /**
     * @description 集群名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 地域ID
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 集群类型
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description 托管版集群类型
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @description 集群版本
     *
     * @var string
     */
    public $kubernetesVersion;

    /**
     * @var Runtime
     */
    public $runtime;

    /**
     * @description 集群专有网络ID。
     *
     * @var string
     */
    public $vpcid;

    /**
     * @description 创建Terway网络类型的集群时，需要为pod指定单独的虚拟交换机
     *
     * @var string[]
     */
    public $podVswitchIds;

    /**
     * @description POD网络网段
     *
     * @var string
     */
    public $containerCidr;

    /**
     * @description 服务网络网段
     *
     * @var string
     */
    public $serviceCidr;

    /**
     * @description 安全组ID，和is_enterprise_security_group二选一
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description 自动创建企业安全组
     *
     * @var bool
     */
    public $isEnterpriseSecurityGroup;

    /**
     * @description 若您集群内的节点、应用等需要访问公网，勾选该项后我们将为您创建 NAT 网关并自动配置 SNAT 规则
     *
     * @var bool
     */
    public $snatEntry;

    /**
     * @description 使用EIP暴露apiServer
     *
     * @var bool
     */
    public $endpointPublicAccess;

    /**
     * @description 允许公网ssh登录
     *
     * @var bool
     */
    public $sshFlags;

    /**
     * @description 时区
     *
     * @var string
     */
    public $timezone;

    /**
     * @description 节点IP数量
     *
     * @var string
     */
    public $nodeCidrMask;

    /**
     * @description 自定义集群CA
     *
     * @var string
     */
    public $userCa;

    /**
     * @description 节点自定义数据
     *
     * @var string
     */
    public $userData;

    /**
     * @description 集群本地域名
     *
     * @var string
     */
    public $clusterDomain;

    /**
     * @description 自定义节点名称
     *
     * @var string
     */
    public $nodeNameMode;

    /**
     * @description 自定义证书SAN
     *
     * @var string
     */
    public $customSan;

    /**
     * @description Secret落盘加密
     *
     * @var string
     */
    public $encryptionProviderKey;

    /**
     * @description serviceaccount token中的签发身份，即token payload中的iss字段。
     *
     * @var string
     */
    public $serviceAccountIssuer;

    /**
     * @description 合法的请求token身份，用于apiserver服务端认证请求token是否合法。
     *
     * @var string
     */
    public $apiAudiences;

    /**
     * @description 自定义镜像
     *
     * @var string
     */
    public $imageId;

    /**
     * @description RDS白名单
     *
     * @var string[]
     */
    public $rdsInstances;

    /**
     * @description 集群标签
     *
     * @var Tag[]
     */
    public $tags;

    /**
     * @description 集群组件配置
     *
     * @var Addon[]
     */
    public $addons;

    /**
     * @description 节点污点信息
     *
     * @var Taint[]
     */
    public $taints;

    /**
     * @description 为ECS安装云监控
     *
     * @var bool
     */
    public $cloudMonitorFlags;

    /**
     * @description 操作系统发行版
     *
     * @var string
     */
    public $platform;

    /**
     * @description 操作系统平台类型
     *
     * @var string
     */
    public $osType;

    /**
     * @description 等保安全加固
     *
     * @var bool
     */
    public $socEnabled;

    /**
     * @description CIS安全加固
     *
     * @var bool
     */
    public $cisEnabled;

    /**
     * @description CPU策略
     *
     * @var string
     */
    public $cpuPolicy;

    /**
     * @description Proxy代理模式，ipvs|iptables
     *
     * @var string
     */
    public $proxyMode;

    /**
     * @description 节点服务端口范围
     *
     * @var string
     */
    public $nodePortRange;

    /**
     * @description 密钥对名称，和login_password二选一。
     *
     * @var string
     */
    public $keyPair;

    /**
     * @description SSH登录密码。密码规则为8~30 个字符，且至少同时包含三项（大小写字母、数字和特殊符号），和key_pair二选一。
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @description 集群Master节点数量
     *
     * @var int
     */
    public $masterCount;

    /**
     * @description 集群Master节点使用的虚拟交换机
     *
     * @var string[]
     */
    public $masterVswitchIds;

    /**
     * @description 集群Master节点类型
     *
     * @var string[]
     */
    public $masterInstanceTypes;

    /**
     * @description 集群Master节点系统盘类型
     *
     * @var string
     */
    public $masterSystemDiskCategory;

    /**
     * @description 集群Master节点系统盘大小，至少40
     *
     * @var int
     */
    public $masterSystemDiskSize;

    /**
     * @description 集群Master节点自动快照备份策略
     *
     * @var string
     */
    public $masterSystemDiskSnapshotPolicyId;

    /**
     * @description 集群Master节点付费类型
     *
     * @var string
     */
    public $masterInstanceChargeType;

    /**
     * @description 集群Master节点包年包月周期
     *
     * @var string
     */
    public $masterPeriodUnit;

    /**
     * @description 集群Master节点包年包月时长
     *
     * @var int
     */
    public $masterPeriod;

    /**
     * @description 集群Master节点是否自动续费
     *
     * @var bool
     */
    public $masterAutoRenew;

    /**
     * @description 集群Master节点自动续费时长
     *
     * @var int
     */
    public $masterAutoRenewPeriod;

    /**
     * @description 集群Worker节点数量
     *
     * @var int
     */
    public $numOfNodes;

    /**
     * @description 集群节点所在虚拟交换机。
     *
     * @var string[]
     */
    public $vswitchIds;

    /**
     * @description 集群Worker节点所在虚拟交换机
     *
     * @var string[]
     */
    public $workerVswitchIds;

    /**
     * @description 集群Worker节点类型
     *
     * @var string[]
     */
    public $workerInstanceTypes;

    /**
     * @description 集群Worker节点系统盘类型
     *
     * @var string
     */
    public $workerSystemDiskCategory;

    /**
     * @description 集群Worker节点系统盘大小
     *
     * @var int
     */
    public $workerSystemDiskSize;

    /**
     * @description 集群Worker节点系统盘快照备份策略
     *
     * @var string
     */
    public $workerSystemDiskSnapshotPolicyId;

    /**
     * @description 集群Worker节点磁盘性能，只对ESSD类型磁盘生效
     *
     * @var string
     */
    public $workerSystemDiskPerformanceLevel;

    /**
     * @description 集群Worker节点数据盘配置
     *
     * @var DataDisk[]
     */
    public $workerDataDisks;

    /**
     * @description 集群Worker节点付费类型
     *
     * @var string
     */
    public $workerInstanceChargeType;

    /**
     * @description 集群Worker节点包年包月周期
     *
     * @var string
     */
    public $workerPeriodUnit;

    /**
     * @description 集群Worker节点包年包月时长
     *
     * @var int
     */
    public $workerPeriod;

    /**
     * @description 集群Worker节点到期是否自动续费
     *
     * @var bool
     */
    public $workerAutoRenew;

    /**
     * @description 集群Worker节点自动续费时长
     *
     * @var int
     */
    public $workerAutoRenewPeriod;

    /**
     * @description 使用已有节点创建集群时，已有实例列表
     *
     * @var string[]
     */
    public $instances;

    /**
     * @description 使用已有节点创建集群时，是否格式化已有实例的磁盘
     *
     * @var bool
     */
    public $formatDisk;

    /**
     * @description 使用已有节点创建集群时，是否保留实例名称。
     *
     * @var bool
     */
    public $keepInstanceName;

    /**
     * @description 创建ASK集群时，服务发现类型
     *
     * @var string[]
     */
    public $serviceDiscoveryTypes;

    /**
     * @description 使用自动创建专有网络创建ASK集群时，是否在vpc中创建Nat网关并配置SNAT规则。
     *
     * @var bool
     */
    public $natGateway;

    /**
     * @description 使用自动创建专有网络创建ASK集群时，需要指定专有网络的可用区
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description 面向场景时的集群类型。  Default：非边缘场景集群。 Edge：边缘场景集群。
     *
     * @var string
     */
    public $profile;

    /**
     * @description ASK 集群开启日志服务
     *
     * @var string
     */
    public $loggingType;

    /**
     * @description 控制平面日志
     *
     * @var string
     */
    public $controlplaneLogTtl;

    /**
     * @description 使用已有log project时，需要指定log project
     *
     * @var string
     */
    public $controlplaneLogProject;

    /**
     * @description 需要采集日志的组件
     *
     * @var string[]
     */
    public $controlplaneLogComponents;

    /**
     * @description 集群删除保护
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description 失败回滚
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @description 集群创建超时时间
     *
     * @var int
     */
    public $timeoutMins;
    protected $_name = [
        'name'                             => 'name',
        'regionId'                         => 'region_id',
        'clusterType'                      => 'cluster_type',
        'clusterSpec'                      => 'cluster_spec',
        'kubernetesVersion'                => 'kubernetes_version',
        'runtime'                          => 'runtime',
        'vpcid'                            => 'vpcid',
        'podVswitchIds'                    => 'pod_vswitch_ids',
        'containerCidr'                    => 'container_cidr',
        'serviceCidr'                      => 'service_cidr',
        'securityGroupId'                  => 'security_group_id',
        'isEnterpriseSecurityGroup'        => 'is_enterprise_security_group',
        'snatEntry'                        => 'snat_entry',
        'endpointPublicAccess'             => 'endpoint_public_access',
        'sshFlags'                         => 'ssh_flags',
        'timezone'                         => 'timezone',
        'nodeCidrMask'                     => 'node_cidr_mask',
        'userCa'                           => 'user_ca',
        'userData'                         => 'user_data',
        'clusterDomain'                    => 'cluster_domain',
        'nodeNameMode'                     => 'node_name_mode',
        'customSan'                        => 'custom_san',
        'encryptionProviderKey'            => 'encryption_provider_key',
        'serviceAccountIssuer'             => 'service_account_issuer',
        'apiAudiences'                     => 'api_audiences',
        'imageId'                          => 'image_id',
        'rdsInstances'                     => 'rds_instances',
        'tags'                             => 'tags',
        'addons'                           => 'addons',
        'taints'                           => 'taints',
        'cloudMonitorFlags'                => 'cloud_monitor_flags',
        'platform'                         => 'platform',
        'osType'                           => 'os_type',
        'socEnabled'                       => 'soc_enabled',
        'cisEnabled'                       => 'cis_enabled',
        'cpuPolicy'                        => 'cpu_policy',
        'proxyMode'                        => 'proxy_mode',
        'nodePortRange'                    => 'node_port_range',
        'keyPair'                          => 'key_pair',
        'loginPassword'                    => 'login_password',
        'masterCount'                      => 'master_count',
        'masterVswitchIds'                 => 'master_vswitch_ids',
        'masterInstanceTypes'              => 'master_instance_types',
        'masterSystemDiskCategory'         => 'master_system_disk_category',
        'masterSystemDiskSize'             => 'master_system_disk_size',
        'masterSystemDiskSnapshotPolicyId' => 'master_system_disk_snapshot_policy_id',
        'masterInstanceChargeType'         => 'master_instance_charge_type',
        'masterPeriodUnit'                 => 'master_period_unit',
        'masterPeriod'                     => 'master_period',
        'masterAutoRenew'                  => 'master_auto_renew',
        'masterAutoRenewPeriod'            => 'master_auto_renew_period',
        'numOfNodes'                       => 'num_of_nodes',
        'vswitchIds'                       => 'vswitch_ids',
        'workerVswitchIds'                 => 'worker_vswitch_ids',
        'workerInstanceTypes'              => 'worker_instance_types',
        'workerSystemDiskCategory'         => 'worker_system_disk_category',
        'workerSystemDiskSize'             => 'worker_system_disk_size',
        'workerSystemDiskSnapshotPolicyId' => 'worker_system_disk_snapshot_policy_id',
        'workerSystemDiskPerformanceLevel' => 'worker_system_disk_performance_level',
        'workerDataDisks'                  => 'worker_data_disks',
        'workerInstanceChargeType'         => 'worker_instance_charge_type',
        'workerPeriodUnit'                 => 'worker_period_unit',
        'workerPeriod'                     => 'worker_period',
        'workerAutoRenew'                  => 'worker_auto_renew',
        'workerAutoRenewPeriod'            => 'worker_auto_renew_period',
        'instances'                        => 'instances',
        'formatDisk'                       => 'format_disk',
        'keepInstanceName'                 => 'keep_instance_name',
        'serviceDiscoveryTypes'            => 'service_discovery_types',
        'natGateway'                       => 'nat_gateway',
        'zoneId'                           => 'zone_id',
        'profile'                          => 'profile',
        'loggingType'                      => 'logging_type',
        'controlplaneLogTtl'               => 'controlplane_log_ttl',
        'controlplaneLogProject'           => 'controlplane_log_project',
        'controlplaneLogComponents'        => 'controlplane_log_components',
        'deletionProtection'               => 'deletion_protection',
        'disableRollback'                  => 'disable_rollback',
        'timeoutMins'                      => 'timeout_mins',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['region_id'] = $this->regionId;
        }
        if (null !== $this->clusterType) {
            $res['cluster_type'] = $this->clusterType;
        }
        if (null !== $this->clusterSpec) {
            $res['cluster_spec'] = $this->clusterSpec;
        }
        if (null !== $this->kubernetesVersion) {
            $res['kubernetes_version'] = $this->kubernetesVersion;
        }
        if (null !== $this->runtime) {
            $res['runtime'] = null !== $this->runtime ? $this->runtime->toMap() : null;
        }
        if (null !== $this->vpcid) {
            $res['vpcid'] = $this->vpcid;
        }
        if (null !== $this->podVswitchIds) {
            $res['pod_vswitch_ids'] = $this->podVswitchIds;
        }
        if (null !== $this->containerCidr) {
            $res['container_cidr'] = $this->containerCidr;
        }
        if (null !== $this->serviceCidr) {
            $res['service_cidr'] = $this->serviceCidr;
        }
        if (null !== $this->securityGroupId) {
            $res['security_group_id'] = $this->securityGroupId;
        }
        if (null !== $this->isEnterpriseSecurityGroup) {
            $res['is_enterprise_security_group'] = $this->isEnterpriseSecurityGroup;
        }
        if (null !== $this->snatEntry) {
            $res['snat_entry'] = $this->snatEntry;
        }
        if (null !== $this->endpointPublicAccess) {
            $res['endpoint_public_access'] = $this->endpointPublicAccess;
        }
        if (null !== $this->sshFlags) {
            $res['ssh_flags'] = $this->sshFlags;
        }
        if (null !== $this->timezone) {
            $res['timezone'] = $this->timezone;
        }
        if (null !== $this->nodeCidrMask) {
            $res['node_cidr_mask'] = $this->nodeCidrMask;
        }
        if (null !== $this->userCa) {
            $res['user_ca'] = $this->userCa;
        }
        if (null !== $this->userData) {
            $res['user_data'] = $this->userData;
        }
        if (null !== $this->clusterDomain) {
            $res['cluster_domain'] = $this->clusterDomain;
        }
        if (null !== $this->nodeNameMode) {
            $res['node_name_mode'] = $this->nodeNameMode;
        }
        if (null !== $this->customSan) {
            $res['custom_san'] = $this->customSan;
        }
        if (null !== $this->encryptionProviderKey) {
            $res['encryption_provider_key'] = $this->encryptionProviderKey;
        }
        if (null !== $this->serviceAccountIssuer) {
            $res['service_account_issuer'] = $this->serviceAccountIssuer;
        }
        if (null !== $this->apiAudiences) {
            $res['api_audiences'] = $this->apiAudiences;
        }
        if (null !== $this->imageId) {
            $res['image_id'] = $this->imageId;
        }
        if (null !== $this->rdsInstances) {
            $res['rds_instances'] = $this->rdsInstances;
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
        if (null !== $this->addons) {
            $res['addons'] = [];
            if (null !== $this->addons && \is_array($this->addons)) {
                $n = 0;
                foreach ($this->addons as $item) {
                    $res['addons'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if (null !== $this->cloudMonitorFlags) {
            $res['cloud_monitor_flags'] = $this->cloudMonitorFlags;
        }
        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }
        if (null !== $this->osType) {
            $res['os_type'] = $this->osType;
        }
        if (null !== $this->socEnabled) {
            $res['soc_enabled'] = $this->socEnabled;
        }
        if (null !== $this->cisEnabled) {
            $res['cis_enabled'] = $this->cisEnabled;
        }
        if (null !== $this->cpuPolicy) {
            $res['cpu_policy'] = $this->cpuPolicy;
        }
        if (null !== $this->proxyMode) {
            $res['proxy_mode'] = $this->proxyMode;
        }
        if (null !== $this->nodePortRange) {
            $res['node_port_range'] = $this->nodePortRange;
        }
        if (null !== $this->keyPair) {
            $res['key_pair'] = $this->keyPair;
        }
        if (null !== $this->loginPassword) {
            $res['login_password'] = $this->loginPassword;
        }
        if (null !== $this->masterCount) {
            $res['master_count'] = $this->masterCount;
        }
        if (null !== $this->masterVswitchIds) {
            $res['master_vswitch_ids'] = $this->masterVswitchIds;
        }
        if (null !== $this->masterInstanceTypes) {
            $res['master_instance_types'] = $this->masterInstanceTypes;
        }
        if (null !== $this->masterSystemDiskCategory) {
            $res['master_system_disk_category'] = $this->masterSystemDiskCategory;
        }
        if (null !== $this->masterSystemDiskSize) {
            $res['master_system_disk_size'] = $this->masterSystemDiskSize;
        }
        if (null !== $this->masterSystemDiskSnapshotPolicyId) {
            $res['master_system_disk_snapshot_policy_id'] = $this->masterSystemDiskSnapshotPolicyId;
        }
        if (null !== $this->masterInstanceChargeType) {
            $res['master_instance_charge_type'] = $this->masterInstanceChargeType;
        }
        if (null !== $this->masterPeriodUnit) {
            $res['master_period_unit'] = $this->masterPeriodUnit;
        }
        if (null !== $this->masterPeriod) {
            $res['master_period'] = $this->masterPeriod;
        }
        if (null !== $this->masterAutoRenew) {
            $res['master_auto_renew'] = $this->masterAutoRenew;
        }
        if (null !== $this->masterAutoRenewPeriod) {
            $res['master_auto_renew_period'] = $this->masterAutoRenewPeriod;
        }
        if (null !== $this->numOfNodes) {
            $res['num_of_nodes'] = $this->numOfNodes;
        }
        if (null !== $this->vswitchIds) {
            $res['vswitch_ids'] = $this->vswitchIds;
        }
        if (null !== $this->workerVswitchIds) {
            $res['worker_vswitch_ids'] = $this->workerVswitchIds;
        }
        if (null !== $this->workerInstanceTypes) {
            $res['worker_instance_types'] = $this->workerInstanceTypes;
        }
        if (null !== $this->workerSystemDiskCategory) {
            $res['worker_system_disk_category'] = $this->workerSystemDiskCategory;
        }
        if (null !== $this->workerSystemDiskSize) {
            $res['worker_system_disk_size'] = $this->workerSystemDiskSize;
        }
        if (null !== $this->workerSystemDiskSnapshotPolicyId) {
            $res['worker_system_disk_snapshot_policy_id'] = $this->workerSystemDiskSnapshotPolicyId;
        }
        if (null !== $this->workerSystemDiskPerformanceLevel) {
            $res['worker_system_disk_performance_level'] = $this->workerSystemDiskPerformanceLevel;
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
        if (null !== $this->workerPeriodUnit) {
            $res['worker_period_unit'] = $this->workerPeriodUnit;
        }
        if (null !== $this->workerPeriod) {
            $res['worker_period'] = $this->workerPeriod;
        }
        if (null !== $this->workerAutoRenew) {
            $res['worker_auto_renew'] = $this->workerAutoRenew;
        }
        if (null !== $this->workerAutoRenewPeriod) {
            $res['worker_auto_renew_period'] = $this->workerAutoRenewPeriod;
        }
        if (null !== $this->instances) {
            $res['instances'] = $this->instances;
        }
        if (null !== $this->formatDisk) {
            $res['format_disk'] = $this->formatDisk;
        }
        if (null !== $this->keepInstanceName) {
            $res['keep_instance_name'] = $this->keepInstanceName;
        }
        if (null !== $this->serviceDiscoveryTypes) {
            $res['service_discovery_types'] = $this->serviceDiscoveryTypes;
        }
        if (null !== $this->natGateway) {
            $res['nat_gateway'] = $this->natGateway;
        }
        if (null !== $this->zoneId) {
            $res['zone_id'] = $this->zoneId;
        }
        if (null !== $this->profile) {
            $res['profile'] = $this->profile;
        }
        if (null !== $this->loggingType) {
            $res['logging_type'] = $this->loggingType;
        }
        if (null !== $this->controlplaneLogTtl) {
            $res['controlplane_log_ttl'] = $this->controlplaneLogTtl;
        }
        if (null !== $this->controlplaneLogProject) {
            $res['controlplane_log_project'] = $this->controlplaneLogProject;
        }
        if (null !== $this->controlplaneLogComponents) {
            $res['controlplane_log_components'] = $this->controlplaneLogComponents;
        }
        if (null !== $this->deletionProtection) {
            $res['deletion_protection'] = $this->deletionProtection;
        }
        if (null !== $this->disableRollback) {
            $res['disable_rollback'] = $this->disableRollback;
        }
        if (null !== $this->timeoutMins) {
            $res['timeout_mins'] = $this->timeoutMins;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }
        if (isset($map['cluster_type'])) {
            $model->clusterType = $map['cluster_type'];
        }
        if (isset($map['cluster_spec'])) {
            $model->clusterSpec = $map['cluster_spec'];
        }
        if (isset($map['kubernetes_version'])) {
            $model->kubernetesVersion = $map['kubernetes_version'];
        }
        if (isset($map['runtime'])) {
            $model->runtime = Runtime::fromMap($map['runtime']);
        }
        if (isset($map['vpcid'])) {
            $model->vpcid = $map['vpcid'];
        }
        if (isset($map['pod_vswitch_ids'])) {
            if (!empty($map['pod_vswitch_ids'])) {
                $model->podVswitchIds = $map['pod_vswitch_ids'];
            }
        }
        if (isset($map['container_cidr'])) {
            $model->containerCidr = $map['container_cidr'];
        }
        if (isset($map['service_cidr'])) {
            $model->serviceCidr = $map['service_cidr'];
        }
        if (isset($map['security_group_id'])) {
            $model->securityGroupId = $map['security_group_id'];
        }
        if (isset($map['is_enterprise_security_group'])) {
            $model->isEnterpriseSecurityGroup = $map['is_enterprise_security_group'];
        }
        if (isset($map['snat_entry'])) {
            $model->snatEntry = $map['snat_entry'];
        }
        if (isset($map['endpoint_public_access'])) {
            $model->endpointPublicAccess = $map['endpoint_public_access'];
        }
        if (isset($map['ssh_flags'])) {
            $model->sshFlags = $map['ssh_flags'];
        }
        if (isset($map['timezone'])) {
            $model->timezone = $map['timezone'];
        }
        if (isset($map['node_cidr_mask'])) {
            $model->nodeCidrMask = $map['node_cidr_mask'];
        }
        if (isset($map['user_ca'])) {
            $model->userCa = $map['user_ca'];
        }
        if (isset($map['user_data'])) {
            $model->userData = $map['user_data'];
        }
        if (isset($map['cluster_domain'])) {
            $model->clusterDomain = $map['cluster_domain'];
        }
        if (isset($map['node_name_mode'])) {
            $model->nodeNameMode = $map['node_name_mode'];
        }
        if (isset($map['custom_san'])) {
            $model->customSan = $map['custom_san'];
        }
        if (isset($map['encryption_provider_key'])) {
            $model->encryptionProviderKey = $map['encryption_provider_key'];
        }
        if (isset($map['service_account_issuer'])) {
            $model->serviceAccountIssuer = $map['service_account_issuer'];
        }
        if (isset($map['api_audiences'])) {
            $model->apiAudiences = $map['api_audiences'];
        }
        if (isset($map['image_id'])) {
            $model->imageId = $map['image_id'];
        }
        if (isset($map['rds_instances'])) {
            if (!empty($map['rds_instances'])) {
                $model->rdsInstances = $map['rds_instances'];
            }
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
        if (isset($map['addons'])) {
            if (!empty($map['addons'])) {
                $model->addons = [];
                $n             = 0;
                foreach ($map['addons'] as $item) {
                    $model->addons[$n++] = null !== $item ? Addon::fromMap($item) : $item;
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
        if (isset($map['cloud_monitor_flags'])) {
            $model->cloudMonitorFlags = $map['cloud_monitor_flags'];
        }
        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }
        if (isset($map['os_type'])) {
            $model->osType = $map['os_type'];
        }
        if (isset($map['soc_enabled'])) {
            $model->socEnabled = $map['soc_enabled'];
        }
        if (isset($map['cis_enabled'])) {
            $model->cisEnabled = $map['cis_enabled'];
        }
        if (isset($map['cpu_policy'])) {
            $model->cpuPolicy = $map['cpu_policy'];
        }
        if (isset($map['proxy_mode'])) {
            $model->proxyMode = $map['proxy_mode'];
        }
        if (isset($map['node_port_range'])) {
            $model->nodePortRange = $map['node_port_range'];
        }
        if (isset($map['key_pair'])) {
            $model->keyPair = $map['key_pair'];
        }
        if (isset($map['login_password'])) {
            $model->loginPassword = $map['login_password'];
        }
        if (isset($map['master_count'])) {
            $model->masterCount = $map['master_count'];
        }
        if (isset($map['master_vswitch_ids'])) {
            if (!empty($map['master_vswitch_ids'])) {
                $model->masterVswitchIds = $map['master_vswitch_ids'];
            }
        }
        if (isset($map['master_instance_types'])) {
            if (!empty($map['master_instance_types'])) {
                $model->masterInstanceTypes = $map['master_instance_types'];
            }
        }
        if (isset($map['master_system_disk_category'])) {
            $model->masterSystemDiskCategory = $map['master_system_disk_category'];
        }
        if (isset($map['master_system_disk_size'])) {
            $model->masterSystemDiskSize = $map['master_system_disk_size'];
        }
        if (isset($map['master_system_disk_snapshot_policy_id'])) {
            $model->masterSystemDiskSnapshotPolicyId = $map['master_system_disk_snapshot_policy_id'];
        }
        if (isset($map['master_instance_charge_type'])) {
            $model->masterInstanceChargeType = $map['master_instance_charge_type'];
        }
        if (isset($map['master_period_unit'])) {
            $model->masterPeriodUnit = $map['master_period_unit'];
        }
        if (isset($map['master_period'])) {
            $model->masterPeriod = $map['master_period'];
        }
        if (isset($map['master_auto_renew'])) {
            $model->masterAutoRenew = $map['master_auto_renew'];
        }
        if (isset($map['master_auto_renew_period'])) {
            $model->masterAutoRenewPeriod = $map['master_auto_renew_period'];
        }
        if (isset($map['num_of_nodes'])) {
            $model->numOfNodes = $map['num_of_nodes'];
        }
        if (isset($map['vswitch_ids'])) {
            if (!empty($map['vswitch_ids'])) {
                $model->vswitchIds = $map['vswitch_ids'];
            }
        }
        if (isset($map['worker_vswitch_ids'])) {
            if (!empty($map['worker_vswitch_ids'])) {
                $model->workerVswitchIds = $map['worker_vswitch_ids'];
            }
        }
        if (isset($map['worker_instance_types'])) {
            if (!empty($map['worker_instance_types'])) {
                $model->workerInstanceTypes = $map['worker_instance_types'];
            }
        }
        if (isset($map['worker_system_disk_category'])) {
            $model->workerSystemDiskCategory = $map['worker_system_disk_category'];
        }
        if (isset($map['worker_system_disk_size'])) {
            $model->workerSystemDiskSize = $map['worker_system_disk_size'];
        }
        if (isset($map['worker_system_disk_snapshot_policy_id'])) {
            $model->workerSystemDiskSnapshotPolicyId = $map['worker_system_disk_snapshot_policy_id'];
        }
        if (isset($map['worker_system_disk_performance_level'])) {
            $model->workerSystemDiskPerformanceLevel = $map['worker_system_disk_performance_level'];
        }
        if (isset($map['worker_data_disks'])) {
            if (!empty($map['worker_data_disks'])) {
                $model->workerDataDisks = [];
                $n                      = 0;
                foreach ($map['worker_data_disks'] as $item) {
                    $model->workerDataDisks[$n++] = null !== $item ? DataDisk::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['worker_instance_charge_type'])) {
            $model->workerInstanceChargeType = $map['worker_instance_charge_type'];
        }
        if (isset($map['worker_period_unit'])) {
            $model->workerPeriodUnit = $map['worker_period_unit'];
        }
        if (isset($map['worker_period'])) {
            $model->workerPeriod = $map['worker_period'];
        }
        if (isset($map['worker_auto_renew'])) {
            $model->workerAutoRenew = $map['worker_auto_renew'];
        }
        if (isset($map['worker_auto_renew_period'])) {
            $model->workerAutoRenewPeriod = $map['worker_auto_renew_period'];
        }
        if (isset($map['instances'])) {
            if (!empty($map['instances'])) {
                $model->instances = $map['instances'];
            }
        }
        if (isset($map['format_disk'])) {
            $model->formatDisk = $map['format_disk'];
        }
        if (isset($map['keep_instance_name'])) {
            $model->keepInstanceName = $map['keep_instance_name'];
        }
        if (isset($map['service_discovery_types'])) {
            if (!empty($map['service_discovery_types'])) {
                $model->serviceDiscoveryTypes = $map['service_discovery_types'];
            }
        }
        if (isset($map['nat_gateway'])) {
            $model->natGateway = $map['nat_gateway'];
        }
        if (isset($map['zone_id'])) {
            $model->zoneId = $map['zone_id'];
        }
        if (isset($map['profile'])) {
            $model->profile = $map['profile'];
        }
        if (isset($map['logging_type'])) {
            $model->loggingType = $map['logging_type'];
        }
        if (isset($map['controlplane_log_ttl'])) {
            $model->controlplaneLogTtl = $map['controlplane_log_ttl'];
        }
        if (isset($map['controlplane_log_project'])) {
            $model->controlplaneLogProject = $map['controlplane_log_project'];
        }
        if (isset($map['controlplane_log_components'])) {
            if (!empty($map['controlplane_log_components'])) {
                $model->controlplaneLogComponents = $map['controlplane_log_components'];
            }
        }
        if (isset($map['deletion_protection'])) {
            $model->deletionProtection = $map['deletion_protection'];
        }
        if (isset($map['disable_rollback'])) {
            $model->disableRollback = $map['disable_rollback'];
        }
        if (isset($map['timeout_mins'])) {
            $model->timeoutMins = $map['timeout_mins'];
        }

        return $model;
    }
}
