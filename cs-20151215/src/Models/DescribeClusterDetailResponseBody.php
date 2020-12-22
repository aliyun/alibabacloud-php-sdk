<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailResponseBody\outputs;
use AlibabaCloud\Tea\Model;

class DescribeClusterDetailResponseBody extends Model
{
    /**
     * @description 集群ID。
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 集群类型。
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description 集群创建时间。
     *
     * @var string
     */
    public $created;

    /**
     * @description 集群初始化版本。
     *
     * @var string
     */
    public $initVersion;

    /**
     * @description 集群当前版本。
     *
     * @var string
     */
    public $currentVersion;

    /**
     * @description 集群可升级版本。
     *
     * @var string
     */
    public $nextVersion;

    /**
     * @description 集群是否开启删除保护。
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description 集群内Docker版本。
     *
     * @var string
     */
    public $dockerVersion;

    /**
     * @description 集群Ingress LB实例ID。
     *
     * @var string
     */
    public $externalLoadbalancerId;

    /**
     * @description 集群元数据。
     *
     * @var string
     */
    public $metaData;

    /**
     * @description 集群名称。
     *
     * @var string
     */
    public $name;

    /**
     * @description 集群采用的网络类型，例如：VPC网络。
     *
     * @var string
     */
    public $networkMode;

    /**
     * @description 集群所在地域ID。
     *
     * @var string
     */
    public $regionId;

    /**
     * @description 集群资源组ID。
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description 集群安全组ID。
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description 集群节点数量。
     *
     * @var int
     */
    public $size;

    /**
     * @description 集群运行状态。
     *
     * @var string
     */
    public $state;

    /**
     * @description 集群标签。
     *
     * @var Tag[]
     */
    public $tags;

    /**
     * @description 集群更新时间。
     *
     * @var string
     */
    public $updated;

    /**
     * @description 集群使用的VPC ID。
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description 集群节点使用的虚拟交换机列表。
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description Pod网络地址段，必须是有效的私有网段，即以下网段及其子网：10.0.0.0/8，172.16-31.0.0/12-16，192.168.0.0/16。不能与 VPC 及VPC 内已有 Kubernetes 集群使用的网段重复，创建成功后不能修改。  有关集群网络规划，请参见：[VPC下 Kubernetes 的网络地址段规划](https://help.aliyun.com/document_detail/～～86500～～)。
     *
     * @var string
     */
    public $subnetCidr;

    /**
     * @description 集群所在地域内的可用区ID。
     *
     * @var string
     */
    public $zoneId;

    /**
     * @description 集群访问地址。
     *
     * @var string
     */
    public $masterUrl;

    /**
     * @description 集群是否启用用PrivateZone。  true：启用 false：不启用 默认值：false。
     *
     * @var bool
     */
    public $privateZone;

    /**
     * @description 面向场景时的集群类型。  Default：非边缘场景集群。 Edge：边缘场景集群。
     *
     * @var string
     */
    public $profile;

    /**
     * @description 托管版集群类型，面向托管集群。  ack.pro.small：专业托管集群。 ack.standard ：标准托管集群。
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @description Worker节点RAM角色名称。
     *
     * @var string
     */
    public $workerRamRoleName;

    /**
     * @var MaintenanceWindow
     */
    public $maintenanceWindow;

    /**
     * @description 创建集群参数。
     *
     * @var mixed[]
     */
    public $parameters;

    /**
     * @description 集群创建的资源列表。
     *
     * @var outputs[]
     */
    public $outputs;
    protected $_name = [
        'clusterId'              => 'cluster_id',
        'clusterType'            => 'cluster_type',
        'created'                => 'created',
        'initVersion'            => 'init_version',
        'currentVersion'         => 'current_version',
        'nextVersion'            => 'next_version',
        'deletionProtection'     => 'deletion_protection',
        'dockerVersion'          => 'docker_version',
        'externalLoadbalancerId' => 'external_loadbalancer_id',
        'metaData'               => 'meta_data',
        'name'                   => 'name',
        'networkMode'            => 'network_mode',
        'regionId'               => 'region_id',
        'resourceGroupId'        => 'resource_group_id',
        'securityGroupId'        => 'security_group_id',
        'size'                   => 'size',
        'state'                  => 'state',
        'tags'                   => 'tags',
        'updated'                => 'updated',
        'vpcId'                  => 'vpc_id',
        'vswitchId'              => 'vswitch_id',
        'subnetCidr'             => 'subnet_cidr',
        'zoneId'                 => 'zone_id',
        'masterUrl'              => 'master_url',
        'privateZone'            => 'private_zone',
        'profile'                => 'profile',
        'clusterSpec'            => 'cluster_spec',
        'workerRamRoleName'      => 'worker_ram_role_name',
        'maintenanceWindow'      => 'maintenance_window',
        'parameters'             => 'parameters',
        'outputs'                => 'outputs',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->clusterType) {
            $res['cluster_type'] = $this->clusterType;
        }
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->initVersion) {
            $res['init_version'] = $this->initVersion;
        }
        if (null !== $this->currentVersion) {
            $res['current_version'] = $this->currentVersion;
        }
        if (null !== $this->nextVersion) {
            $res['next_version'] = $this->nextVersion;
        }
        if (null !== $this->deletionProtection) {
            $res['deletion_protection'] = $this->deletionProtection;
        }
        if (null !== $this->dockerVersion) {
            $res['docker_version'] = $this->dockerVersion;
        }
        if (null !== $this->externalLoadbalancerId) {
            $res['external_loadbalancer_id'] = $this->externalLoadbalancerId;
        }
        if (null !== $this->metaData) {
            $res['meta_data'] = $this->metaData;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->networkMode) {
            $res['network_mode'] = $this->networkMode;
        }
        if (null !== $this->regionId) {
            $res['region_id'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['resource_group_id'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupId) {
            $res['security_group_id'] = $this->securityGroupId;
        }
        if (null !== $this->size) {
            $res['size'] = $this->size;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
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
        if (null !== $this->updated) {
            $res['updated'] = $this->updated;
        }
        if (null !== $this->vpcId) {
            $res['vpc_id'] = $this->vpcId;
        }
        if (null !== $this->vswitchId) {
            $res['vswitch_id'] = $this->vswitchId;
        }
        if (null !== $this->subnetCidr) {
            $res['subnet_cidr'] = $this->subnetCidr;
        }
        if (null !== $this->zoneId) {
            $res['zone_id'] = $this->zoneId;
        }
        if (null !== $this->masterUrl) {
            $res['master_url'] = $this->masterUrl;
        }
        if (null !== $this->privateZone) {
            $res['private_zone'] = $this->privateZone;
        }
        if (null !== $this->profile) {
            $res['profile'] = $this->profile;
        }
        if (null !== $this->clusterSpec) {
            $res['cluster_spec'] = $this->clusterSpec;
        }
        if (null !== $this->workerRamRoleName) {
            $res['worker_ram_role_name'] = $this->workerRamRoleName;
        }
        if (null !== $this->maintenanceWindow) {
            $res['maintenance_window'] = null !== $this->maintenanceWindow ? $this->maintenanceWindow->toMap() : null;
        }
        if (null !== $this->parameters) {
            $res['parameters'] = $this->parameters;
        }
        if (null !== $this->outputs) {
            $res['outputs'] = [];
            if (null !== $this->outputs && \is_array($this->outputs)) {
                $n = 0;
                foreach ($this->outputs as $item) {
                    $res['outputs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeClusterDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['cluster_type'])) {
            $model->clusterType = $map['cluster_type'];
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['init_version'])) {
            $model->initVersion = $map['init_version'];
        }
        if (isset($map['current_version'])) {
            $model->currentVersion = $map['current_version'];
        }
        if (isset($map['next_version'])) {
            $model->nextVersion = $map['next_version'];
        }
        if (isset($map['deletion_protection'])) {
            $model->deletionProtection = $map['deletion_protection'];
        }
        if (isset($map['docker_version'])) {
            $model->dockerVersion = $map['docker_version'];
        }
        if (isset($map['external_loadbalancer_id'])) {
            $model->externalLoadbalancerId = $map['external_loadbalancer_id'];
        }
        if (isset($map['meta_data'])) {
            $model->metaData = $map['meta_data'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['network_mode'])) {
            $model->networkMode = $map['network_mode'];
        }
        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }
        if (isset($map['resource_group_id'])) {
            $model->resourceGroupId = $map['resource_group_id'];
        }
        if (isset($map['security_group_id'])) {
            $model->securityGroupId = $map['security_group_id'];
        }
        if (isset($map['size'])) {
            $model->size = $map['size'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
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
        if (isset($map['updated'])) {
            $model->updated = $map['updated'];
        }
        if (isset($map['vpc_id'])) {
            $model->vpcId = $map['vpc_id'];
        }
        if (isset($map['vswitch_id'])) {
            $model->vswitchId = $map['vswitch_id'];
        }
        if (isset($map['subnet_cidr'])) {
            $model->subnetCidr = $map['subnet_cidr'];
        }
        if (isset($map['zone_id'])) {
            $model->zoneId = $map['zone_id'];
        }
        if (isset($map['master_url'])) {
            $model->masterUrl = $map['master_url'];
        }
        if (isset($map['private_zone'])) {
            $model->privateZone = $map['private_zone'];
        }
        if (isset($map['profile'])) {
            $model->profile = $map['profile'];
        }
        if (isset($map['cluster_spec'])) {
            $model->clusterSpec = $map['cluster_spec'];
        }
        if (isset($map['worker_ram_role_name'])) {
            $model->workerRamRoleName = $map['worker_ram_role_name'];
        }
        if (isset($map['maintenance_window'])) {
            $model->maintenanceWindow = MaintenanceWindow::fromMap($map['maintenance_window']);
        }
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
        }
        if (isset($map['outputs'])) {
            if (!empty($map['outputs'])) {
                $model->outputs = [];
                $n              = 0;
                foreach ($map['outputs'] as $item) {
                    $model->outputs[$n++] = null !== $item ? outputs::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
