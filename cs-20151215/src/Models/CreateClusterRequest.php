<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\addons;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\runtime;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\tags;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\taints;
use AlibabaCloud\SDK\CS\V20151215\Models\CreateClusterRequest\workerDataDisks;
use AlibabaCloud\Tea\Model;

class CreateClusterRequest extends Model
{
    /**
     * @description 组件信息。
     *
     * @var addons[]
     */
    public $addons;

    /**
     * @description 是否安装云监控插件。
     *
     * @var bool
     */
    public $cloudMonitorFlags;

    /**
     * @description 集群类型
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description POD网络地址段。
     *
     * @var string
     */
    public $containerCidr;

    /**
     * @description CPU管理策略。
     *
     * @var string
     */
    public $cpuPolicy;

    /**
     * @description 集群是否开启删除保护。
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description 集群创建失败后是否回滚。
     *
     * @var bool
     */
    public $disableRollback;

    /**
     * @description 集群是否运行公网访问。
     *
     * @var bool
     */
    public $endpointPublicAccess;

    /**
     * @description 是否进行数据盘挂载
     *
     * @var bool
     */
    public $formatDisk;

    /**
     * @description 自定义镜像ID。
     *
     * @var string
     */
    public $imageId;

    /**
     * @description 已有实例列表。
     *
     * @var string[]
     */
    public $instances;

    /**
     * @description 是否自动创建企业安全组，与security_group_id二选一。
     *
     * @var bool
     */
    public $isEnterpriseSecurityGroup;

    /**
     * @description 是否保留实例名称。
     *
     * @var bool
     */
    public $keepInstanceName;

    /**
     * @description key_pair名称，和login_password二选一。
     *
     * @var string
     */
    public $keyPair;

    /**
     * @description 集群版本好。
     *
     * @var string
     */
    public $kubernetesVersion;

    /**
     * @description SSH登录密码，与key_pair二选一。
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @description Master节点是否自动续费。
     *
     * @var bool
     */
    public $masterAutoRenew;

    /**
     * @description Master节点自动续费周期。
     *
     * @var int
     */
    public $masterAutoRenewPeriod;

    /**
     * @description Master节点数量。
     *
     * @var int
     */
    public $masterCount;

    /**
     * @description Master节点付费类型。
     *
     * @var string
     */
    public $masterInstanceChargeType;

    /**
     * @description Master节点ECS规格类型。
     *
     * @var string[]
     */
    public $masterInstanceTypes;

    /**
     * @description Master节点包年包月时长，当master_instance_charge_type取值为PrePaid时才生效且为必选值。
     *
     * @var int
     */
    public $masterPeriod;

    /**
     * @description Master节点包年包月周期。
     *
     * @var string
     */
    public $masterPeriodUnit;

    /**
     * @description Master节点系统盘类型。
     *
     * @var string
     */
    public $masterSystemDiskCategory;

    /**
     * @description Master节点系统盘大小。
     *
     * @var int
     */
    public $masterSystemDiskSize;

    /**
     * @description Master节点交换机ID列表。
     *
     * @var string[]
     */
    public $masterVswitchIds;

    /**
     * @description 集群名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 节点IP数量，这里通过CIDR来指定。
     *
     * @var string
     */
    public $nodeCidrMask;

    /**
     * @description 节点服务端口范围。
     *
     * @var string
     */
    public $nodePortRange;

    /**
     * @description Worker节点数量。
     *
     * @var int
     */
    public $numOfNodes;

    /**
     * @description 操作系统。
     *
     * @var string
     */
    public $osType;

    /**
     * @description 操作系统发行版。
     *
     * @var string
     */
    public $platform;

    /**
     * @description Pod的虚拟交换机列表，在ENI多网卡模式下，需要传额外的VSwitch ID给addon。
     *
     * @var string[]
     */
    public $podVswitchIds;

    /**
     * @description 是否开启PrivateZone用于服务发现。
     *
     * @var bool
     */
    public $privateZone;

    /**
     * @description 边缘集群标识。
     *
     * @var string
     */
    public $profile;

    /**
     * @description kube-proxy代理模式。
     *
     * @var string
     */
    public $proxyMode;

    /**
     * @description RDS列表，将该ECS加入到选择的RDS实例的白名单中。。
     *
     * @var string[]
     */
    public $rdsInstances;

    /**
     * @description 集群所属地域ID。
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 容器运行时。
     *
     * @var runtime
     */
    public $runtime;

    /**
     * @description 自定义安全组ID。
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description Service网络地址段。
     *
     * @var string
     */
    public $serviceCidr;

    /**
     * @description 集群是否配置SNAT。
     *
     * @var bool
     */
    public $snatEntry;

    /**
     * @description 集群是否开启公网SSH登录。
     *
     * @var bool
     */
    public $sshFlags;

    /**
     * @description 集群标签。
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description 污点信息。
     *
     * @var taints[]
     */
    public $taints;

    /**
     * @description 集群创建超时时间。
     *
     * @var int
     */
    public $timeoutMins;

    /**
     * @description 节点用户自定义数据。
     *
     * @var string
     */
    public $userData;

    /**
     * @description 集群使用的VPC。
     *
     * @var string
     */
    public $vpcid;

    /**
     * @description 虚拟交换机列表。List长度范围为[1，3]。当集群类型为托管版或标准serverless集群时，该参数必填。
     *
     * @var string[]
     */
    public $vswitchIds;

    /**
     * @description Worker节点是否自动续费。
     *
     * @var bool
     */
    public $workerAutoRenew;

    /**
     * @description Worker节点自动续费周期。
     *
     * @var int
     */
    public $workerAutoRenewPeriod;

    /**
     * @description Worker节点数据盘配置。
     *
     * @var workerDataDisks[]
     */
    public $workerDataDisks;

    /**
     * @description Worker节点付费类型。
     *
     * @var string
     */
    public $workerInstanceChargeType;

    /**
     * @description Worker节点ECS实例类型。
     *
     * @var string[]
     */
    public $workerInstanceTypes;

    /**
     * @description Worker节点包年包月时长。
     *
     * @var int
     */
    public $workerPeriod;

    /**
     * @description Worker节点包年包月周期。
     *
     * @var string
     */
    public $workerPeriodUnit;

    /**
     * @description Worker节点系统盘类型。
     *
     * @var string
     */
    public $workerSystemDiskCategory;

    /**
     * @description Worker节点系统盘大小。
     *
     * @var int
     */
    public $workerSystemDiskSize;

    /**
     * @description 集群使用的虚拟交换机。
     *
     * @var string[]
     */
    public $workerVswitchIds;

    /**
     * @description 集群所属地域内的可用区ID。
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'addons'                    => 'addons',
        'cloudMonitorFlags'         => 'cloud_monitor_flags',
        'clusterType'               => 'cluster_type',
        'containerCidr'             => 'container_cidr',
        'cpuPolicy'                 => 'cpu_policy',
        'deletionProtection'        => 'deletion_protection',
        'disableRollback'           => 'disable_rollback',
        'endpointPublicAccess'      => 'endpoint_public_access',
        'formatDisk'                => 'format_disk',
        'imageId'                   => 'image_id',
        'instances'                 => 'instances',
        'isEnterpriseSecurityGroup' => 'is_enterprise_security_group',
        'keepInstanceName'          => 'keep_instance_name',
        'keyPair'                   => 'key_pair',
        'kubernetesVersion'         => 'kubernetes_version',
        'loginPassword'             => 'login_password',
        'masterAutoRenew'           => 'master_auto_renew',
        'masterAutoRenewPeriod'     => 'master_auto_renew_period',
        'masterCount'               => 'master_count',
        'masterInstanceChargeType'  => 'master_instance_charge_type',
        'masterInstanceTypes'       => 'master_instance_types',
        'masterPeriod'              => 'master_period',
        'masterPeriodUnit'          => 'master_period_unit',
        'masterSystemDiskCategory'  => 'master_system_disk_category',
        'masterSystemDiskSize'      => 'master_system_disk_size',
        'masterVswitchIds'          => 'master_vswitch_ids',
        'name'                      => 'name',
        'nodeCidrMask'              => 'node_cidr_mask',
        'nodePortRange'             => 'node_port_range',
        'numOfNodes'                => 'num_of_nodes',
        'osType'                    => 'os_type',
        'platform'                  => 'platform',
        'podVswitchIds'             => 'pod_vswitch_ids',
        'privateZone'               => 'private_zone',
        'profile'                   => 'profile',
        'proxyMode'                 => 'proxy_mode',
        'rdsInstances'              => 'rds_instances',
        'regionId'                  => 'region_id',
        'runtime'                   => 'runtime',
        'securityGroupId'           => 'security_group_id',
        'serviceCidr'               => 'service_cidr',
        'snatEntry'                 => 'snat_entry',
        'sshFlags'                  => 'ssh_flags',
        'tags'                      => 'tags',
        'taints'                    => 'taints',
        'timeoutMins'               => 'timeout_mins',
        'userData'                  => 'user_data',
        'vpcid'                     => 'vpcid',
        'vswitchIds'                => 'vswitch_ids',
        'workerAutoRenew'           => 'worker_auto_renew',
        'workerAutoRenewPeriod'     => 'worker_auto_renew_period',
        'workerDataDisks'           => 'worker_data_disks',
        'workerInstanceChargeType'  => 'worker_instance_charge_type',
        'workerInstanceTypes'       => 'worker_instance_types',
        'workerPeriod'              => 'worker_period',
        'workerPeriodUnit'          => 'worker_period_unit',
        'workerSystemDiskCategory'  => 'worker_system_disk_category',
        'workerSystemDiskSize'      => 'worker_system_disk_size',
        'workerVswitchIds'          => 'worker_vswitch_ids',
        'zoneId'                    => 'zone_id',
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
        if (null !== $this->cloudMonitorFlags) {
            $res['cloud_monitor_flags'] = $this->cloudMonitorFlags;
        }
        if (null !== $this->clusterType) {
            $res['cluster_type'] = $this->clusterType;
        }
        if (null !== $this->containerCidr) {
            $res['container_cidr'] = $this->containerCidr;
        }
        if (null !== $this->cpuPolicy) {
            $res['cpu_policy'] = $this->cpuPolicy;
        }
        if (null !== $this->deletionProtection) {
            $res['deletion_protection'] = $this->deletionProtection;
        }
        if (null !== $this->disableRollback) {
            $res['disable_rollback'] = $this->disableRollback;
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
        if (null !== $this->instances) {
            $res['instances'] = $this->instances;
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
        if (null !== $this->masterSystemDiskSize) {
            $res['master_system_disk_size'] = $this->masterSystemDiskSize;
        }
        if (null !== $this->masterVswitchIds) {
            $res['master_vswitch_ids'] = $this->masterVswitchIds;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nodeCidrMask) {
            $res['node_cidr_mask'] = $this->nodeCidrMask;
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
        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }
        if (null !== $this->podVswitchIds) {
            $res['pod_vswitch_ids'] = $this->podVswitchIds;
        }
        if (null !== $this->privateZone) {
            $res['private_zone'] = $this->privateZone;
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
        if (null !== $this->runtime) {
            $res['runtime'] = null !== $this->runtime ? $this->runtime->toMap() : null;
        }
        if (null !== $this->securityGroupId) {
            $res['security_group_id'] = $this->securityGroupId;
        }
        if (null !== $this->serviceCidr) {
            $res['service_cidr'] = $this->serviceCidr;
        }
        if (null !== $this->snatEntry) {
            $res['snat_entry'] = $this->snatEntry;
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
        if (null !== $this->workerSystemDiskSize) {
            $res['worker_system_disk_size'] = $this->workerSystemDiskSize;
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
                    $model->addons[$n++] = null !== $item ? addons::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['cloud_monitor_flags'])) {
            $model->cloudMonitorFlags = $map['cloud_monitor_flags'];
        }
        if (isset($map['cluster_type'])) {
            $model->clusterType = $map['cluster_type'];
        }
        if (isset($map['container_cidr'])) {
            $model->containerCidr = $map['container_cidr'];
        }
        if (isset($map['cpu_policy'])) {
            $model->cpuPolicy = $map['cpu_policy'];
        }
        if (isset($map['deletion_protection'])) {
            $model->deletionProtection = $map['deletion_protection'];
        }
        if (isset($map['disable_rollback'])) {
            $model->disableRollback = $map['disable_rollback'];
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
        if (isset($map['instances'])) {
            if (!empty($map['instances'])) {
                $model->instances = $map['instances'];
            }
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
        if (isset($map['master_system_disk_size'])) {
            $model->masterSystemDiskSize = $map['master_system_disk_size'];
        }
        if (isset($map['master_vswitch_ids'])) {
            if (!empty($map['master_vswitch_ids'])) {
                $model->masterVswitchIds = $map['master_vswitch_ids'];
            }
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['node_cidr_mask'])) {
            $model->nodeCidrMask = $map['node_cidr_mask'];
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
        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }
        if (isset($map['pod_vswitch_ids'])) {
            if (!empty($map['pod_vswitch_ids'])) {
                $model->podVswitchIds = $map['pod_vswitch_ids'];
            }
        }
        if (isset($map['private_zone'])) {
            $model->privateZone = $map['private_zone'];
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
        if (isset($map['runtime'])) {
            $model->runtime = runtime::fromMap($map['runtime']);
        }
        if (isset($map['security_group_id'])) {
            $model->securityGroupId = $map['security_group_id'];
        }
        if (isset($map['service_cidr'])) {
            $model->serviceCidr = $map['service_cidr'];
        }
        if (isset($map['snat_entry'])) {
            $model->snatEntry = $map['snat_entry'];
        }
        if (isset($map['ssh_flags'])) {
            $model->sshFlags = $map['ssh_flags'];
        }
        if (isset($map['tags'])) {
            if (!empty($map['tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['taints'])) {
            if (!empty($map['taints'])) {
                $model->taints = [];
                $n             = 0;
                foreach ($map['taints'] as $item) {
                    $model->taints[$n++] = null !== $item ? taints::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['timeout_mins'])) {
            $model->timeoutMins = $map['timeout_mins'];
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
        if (isset($map['worker_system_disk_size'])) {
            $model->workerSystemDiskSize = $map['worker_system_disk_size'];
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
