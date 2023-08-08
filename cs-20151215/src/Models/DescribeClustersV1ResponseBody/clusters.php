<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersV1ResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\MaintenanceWindow;
use AlibabaCloud\SDK\CS\V20151215\Models\Tag;
use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @description The ID of the queried cluster.
     *
     * @example c3fb96524f9274b4495df0f12a6b5****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The type of the managed Kubernetes cluster. This parameter is returned for a managed Kubernetes cluster. Valid values:
     *
     *   `ack.pro.small`: professional managed Kubernetes cluster
     *   `ack.standard`: standard managed Kubernetes cluster
     *
     * @example ack.standard
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @description The type of the cluster. Valid values:
     *
     *   `Kubernetes`: dedicated Kubernetes cluster
     *   `ManagedKubernetes`: managed Kubernetes cluster
     *   `Ask`: ASK cluster
     *   `ExternalKubernetes`: registered external cluster
     *
     * @example Kubernetes
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The time when the cluster was created.
     *
     * @example 2020-08-20T10:51:29+08:00
     *
     * @var string
     */
    public $created;

    /**
     * @description The Kubernetes version of the cluster.
     *
     * @example 1.16.9-aliyun.1
     *
     * @var string
     */
    public $currentVersion;

    /**
     * @description Indicates whether deletion protection is enabled for the cluster. After deletion protection is enabled, the cluster cannot be deleted in the console or by calling API operations. Valid values:
     *
     *   `true`: deletion protection is enabled for the cluster. The cluster cannot be deleted in the ACK console or by calling API operations.
     *   `false`: deletion protection is disabled for the cluster. The cluster can be deleted in the ACK console or by calling API operations.
     *
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description The Docker version that is used by the cluster.
     *
     * @example 19.03.5
     *
     * @var string
     */
    public $dockerVersion;

    /**
     * @description The ID of the Server Load Balancer (SLB) instance that is used for the Ingress of the cluster.
     *
     * The default SLB specification is slb.s1.small, which belongs to the high-performance instance type.
     * @example lb-2vcrbmlevo6kjpgch****
     *
     * @var string
     */
    public $externalLoadbalancerId;

    /**
     * @description The Kubernetes version of the cluster. The Kubernetes versions provided by ACK are consistent with the open source Kubernetes versions. We recommend that you select the latest Kubernetes version. If you do not specify a Kubernetes version, the latest Kubernetes version is used by default.
     *
     * You can create clusters of the latest two Kubernetes versions in the ACK console. You can create ACK clusters of earlier Kubernetes versions by calling API operations. For more information about the Kubernetes versions supported by ACK, see [Release notes for Kubernetes versions](~~185269~~).
     * @example 1.16.9-aliyun.1
     *
     * @var string
     */
    public $initVersion;

    /**
     * @description The maintenance window of the cluster. This feature is available only in professional managed Kubernetes clusters.
     *
     * @var MaintenanceWindow
     */
    public $maintenanceWindow;

    /**
     * @description The address of the cluster API server. It includes an internal endpoint and a public endpoint.
     *
     * @example {\"api_server_endpoint\":\"\",\"intranet_api_server_endpoint\":\"https://192.168.0.251:6443\"}
     *
     * @var string
     */
    public $masterUrl;

    /**
     * @description The metadata of the cluster.
     *
     * @example {\"Addons\":[{\"config\":***}
     *
     * @var string
     */
    public $metaData;

    /**
     * @description The name of the cluster.
     *
     * The name must be 1 to 63 characters in length, and can contain digits, letters, and hyphens (-). It cannot start with a hyphen (-).
     * @example cluster-demo
     *
     * @var string
     */
    public $name;

    /**
     * @description The network mode of the cluster. Valid values:
     *
     *   `classic`: classic network
     *   `vpc`: virtual private cloud (VPC)
     *   `overlay`: overlay network
     *   `calico`: network powered by Calico
     *
     * @example vpc
     *
     * @var string
     */
    public $networkMode;

    /**
     * @description The Kubernetes version to which the cluster can be upgraded.
     *
     * @example 1.18.8-aliyun.1
     *
     * @var string
     */
    public $nextVersion;

    /**
     * @description Indicates whether Alibaba Cloud DNS PrivateZone is enabled. Valid values:
     *
     *   `true`: Alibaba Cloud DNS PrivateZone is enabled.
     *   `false`: Alibaba Cloud DNS PrivateZone is disabled.
     *
     * @example false
     *
     * @var bool
     */
    public $privateZone;

    /**
     * @description The identifier of the cluster. Valid values:
     *
     *   `Edge`: The cluster is a managed edge Kubernetes cluster.
     *   `Default`: The cluster is not a managed edge Kubernetes cluster.
     *
     * @example Default
     *
     * @var string
     */
    public $profile;

    /**
     * @description The ID of the region where the cluster is deployed.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the cluster belongs.
     *
     * @example rg-acfmyvw3wjm****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the security group to which the instances of the cluster belong.
     *
     * @example sg-2vcgwsrwgt5mp0yi****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The number of nodes in the cluster. Master nodes and worker nodes are included.
     *
     * @example 5
     *
     * @var int
     */
    public $size;

    /**
     * @description The status of the cluster. Valid values:
     *
     *   `initial`: The cluster is being created.
     *   `failed`: The cluster failed to be created.
     *   `running`: The cluster is running.
     *   `updating`: The cluster is being upgraded.
     *   `updating_failed`: The cluster failed to be upgraded.
     *   `scaling`: The cluster is being scaled.
     *   `stopped`: The cluster is stopped.
     *   `deleting`: The cluster is being deleted.
     *   `deleted`: The cluster is deleted.
     *   `delete_failed`: The cluster failed to be deleted.
     *
     * @example running
     *
     * @var string
     */
    public $state;

    /**
     * @description The pod CIDR block. It must be a valid and private CIDR block, and must be one of the following CIDR blocks or their subnets:
     *
     *   10.0.0.0/8
     *   172.16-31.0.0/12-16
     *   192.168.0.0/16
     *
     * For more information about subnetting for ACK clusters, see [Plan CIDR blocks for ACK clusters in a VPC](~~86500~~).
     * @example 172.21.0.0/16
     *
     * @var string
     */
    public $subnetCidr;

    /**
     * @description The labels of the cluster.
     *
     * @var Tag[]
     */
    public $tags;

    /**
     * @description The time when the cluster was updated.
     *
     * @example 2020-09-16T11:09:55+08:00
     *
     * @var string
     */
    public $updated;

    /**
     * @description The ID of the VPC where the cluster is deployed. You must specify a VPC when you create a cluster.
     *
     * @example vpc-2vcg932hsxsxuqbgl****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The IDs of the vSwitches. You can select one to three vSwitches when you create a cluster. We recommend that you select vSwitches in different zones to ensure high availability.
     *
     * @example vsw-2vc41xuumx5z2rdma****,vsw-2vc41xuumx5z2rdma****
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description The name of the worker Resource Access Management (RAM) role. The RAM role is assigned to the worker nodes that are created on Elastic Compute Service (ECS) instances.
     *
     * @example KubernetesWorkerRole-ec87d15b-edca-4302-933f-c8a16bf0****
     *
     * @var string
     */
    public $workerRamRoleName;

    /**
     * @description The ID of the zone where the cluster is deployed.
     *
     * @example cn-beijing-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clusterId'              => 'cluster_id',
        'clusterSpec'            => 'cluster_spec',
        'clusterType'            => 'cluster_type',
        'created'                => 'created',
        'currentVersion'         => 'current_version',
        'deletionProtection'     => 'deletion_protection',
        'dockerVersion'          => 'docker_version',
        'externalLoadbalancerId' => 'external_loadbalancer_id',
        'initVersion'            => 'init_version',
        'maintenanceWindow'      => 'maintenance_window',
        'masterUrl'              => 'master_url',
        'metaData'               => 'meta_data',
        'name'                   => 'name',
        'networkMode'            => 'network_mode',
        'nextVersion'            => 'next_version',
        'privateZone'            => 'private_zone',
        'profile'                => 'profile',
        'regionId'               => 'region_id',
        'resourceGroupId'        => 'resource_group_id',
        'securityGroupId'        => 'security_group_id',
        'size'                   => 'size',
        'state'                  => 'state',
        'subnetCidr'             => 'subnet_cidr',
        'tags'                   => 'tags',
        'updated'                => 'updated',
        'vpcId'                  => 'vpc_id',
        'vswitchId'              => 'vswitch_id',
        'workerRamRoleName'      => 'worker_ram_role_name',
        'zoneId'                 => 'zone_id',
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
        if (null !== $this->clusterSpec) {
            $res['cluster_spec'] = $this->clusterSpec;
        }
        if (null !== $this->clusterType) {
            $res['cluster_type'] = $this->clusterType;
        }
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->currentVersion) {
            $res['current_version'] = $this->currentVersion;
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
        if (null !== $this->initVersion) {
            $res['init_version'] = $this->initVersion;
        }
        if (null !== $this->maintenanceWindow) {
            $res['maintenance_window'] = null !== $this->maintenanceWindow ? $this->maintenanceWindow->toMap() : null;
        }
        if (null !== $this->masterUrl) {
            $res['master_url'] = $this->masterUrl;
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
        if (null !== $this->nextVersion) {
            $res['next_version'] = $this->nextVersion;
        }
        if (null !== $this->privateZone) {
            $res['private_zone'] = $this->privateZone;
        }
        if (null !== $this->profile) {
            $res['profile'] = $this->profile;
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
        if (null !== $this->subnetCidr) {
            $res['subnet_cidr'] = $this->subnetCidr;
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
        if (null !== $this->workerRamRoleName) {
            $res['worker_ram_role_name'] = $this->workerRamRoleName;
        }
        if (null !== $this->zoneId) {
            $res['zone_id'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return clusters
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['cluster_spec'])) {
            $model->clusterSpec = $map['cluster_spec'];
        }
        if (isset($map['cluster_type'])) {
            $model->clusterType = $map['cluster_type'];
        }
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['current_version'])) {
            $model->currentVersion = $map['current_version'];
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
        if (isset($map['init_version'])) {
            $model->initVersion = $map['init_version'];
        }
        if (isset($map['maintenance_window'])) {
            $model->maintenanceWindow = MaintenanceWindow::fromMap($map['maintenance_window']);
        }
        if (isset($map['master_url'])) {
            $model->masterUrl = $map['master_url'];
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
        if (isset($map['next_version'])) {
            $model->nextVersion = $map['next_version'];
        }
        if (isset($map['private_zone'])) {
            $model->privateZone = $map['private_zone'];
        }
        if (isset($map['profile'])) {
            $model->profile = $map['profile'];
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
        if (isset($map['subnet_cidr'])) {
            $model->subnetCidr = $map['subnet_cidr'];
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
        if (isset($map['worker_ram_role_name'])) {
            $model->workerRamRoleName = $map['worker_ram_role_name'];
        }
        if (isset($map['zone_id'])) {
            $model->zoneId = $map['zone_id'];
        }

        return $model;
    }
}
