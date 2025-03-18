<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailResponseBody\controlPlaneConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailResponseBody\operationPolicy;
use AlibabaCloud\Tea\Model;

class DescribeClusterDetailResponseBody extends Model
{
    /**
     * @description The domain name of the cluster.
     *
     * @example cluster.local
     *
     * @var string
     */
    public $clusterDomain;

    /**
     * @description The cluster ID.
     *
     * @example c82e6987e2961451182edacd74faf****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description After you set `cluster_type` to `ManagedKubernetes` and configure the `profile` parameter, you can further specify the edition of the cluster.
     *
     *   `ack.pro.small`: Pro.
     *   `ack.standard`: Basic. If you leave the parameter empty, the Basic edition is selected.
     *
     * @example ack.pro.small
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @description *   `Kubernetes`: ACK dedicated cluster.
     *   `ManagedKubernetes`: ACK managed cluster. ACK managed clusters include ACK Basic clusters, ACK Pro clusters, ACK Serverless clusters (Basic and Pro), ACK Edge clusters (Basic and Pro), and ACK Lingjun clusters (Pro).
     *   `ExternalKubernetes`: registered cluster.
     *
     * @example Kubernetes
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The CIDR block of the pod. The configuration of the Flannel network plug-in.
     *
     * @example 172.20.0.0/16
     *
     * @var string
     */
    public $containerCidr;

    /**
     * @description The control plane configurations in an ACK dedicated cluster.
     *
     * @var controlPlaneConfig
     */
    public $controlPlaneConfig;

    /**
     * @description The time when the cluster was created.
     *
     * @example 2019-11-25T15:50:20+08:00
     *
     * @var string
     */
    public $created;

    /**
     * @description The current Kubernetes version of the cluster. For more information about the Kubernetes versions supported by ACK, see [Release notes for Kubernetes versions](https://help.aliyun.com/document_detail/185269.html).
     *
     * @example 1.16.6-aliyun.1
     *
     * @var string
     */
    public $currentVersion;

    /**
     * @description Indicates whether deletion protection is enabled for the cluster. If deletion protection is enabled, the cluster cannot be deleted in the Container Service console or by calling API operations. Valid values:
     *
     *   `true`: deletion protection is enabled for the cluster. This way, the cluster cannot be deleted in the Container Service console or by calling API operations.
     *   `false`: deletion protection is disabled for the cluster. This way, the cluster can be deleted in the Container Service console or by calling API operations.
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
     * @description The ID of the Server Load Balancer (SLB) instance that is created for the Ingress of the cluster.
     *
     * @example lb-2zehc05z3b8dwiifh****
     *
     * @var string
     */
    public $externalLoadbalancerId;

    /**
     * @description The initial Kubernetes version of the cluster.
     *
     * @example 1.16.6-aliyun.1
     *
     * @var string
     */
    public $initVersion;

    /**
     * @description The IP protocol stack of the cluster. Valid values:
     *
     *   ipv4: creates a cluster that supports only the IPv4 protocol stack.
     *   dual: creates a cluster that supports IPv4/IPv6 dual-stack.
     *
     * @example ipv4
     *
     * @var string
     */
    public $ipStack;

    /**
     * @description The maintenance window of the cluster. This feature is available only in ACK Pro clusters.
     *
     * @var MaintenanceWindow
     */
    public $maintenanceWindow;

    /**
     * @description The endpoints of the cluster, including an internal endpoint and a public endpoint.
     *
     * @example {\\"intranet_api_server_endpoint\\":\\"https://192.168.0.251:6443\\"***}
     *
     * @var string
     */
    public $masterUrl;

    /**
     * @description The metadata of the cluster.
     *
     * @example \\"Addons\\":***
     *
     * @var string
     */
    public $metaData;

    /**
     * @description The name of the cluster.
     *
     * The name must be 1 to 63 characters in length, and can contain digits, letters, and hyphens (-). The name cannot start with a hyphen (-).
     *
     * @example cluster-demo
     *
     * @var string
     */
    public $name;

    /**
     * @description The network type of the cluster. Example: Virtual Private Cloud (VPC).
     *
     * @example vpc
     *
     * @var string
     */
    public $networkMode;

    /**
     * @description The Kubernetes version to which the cluster can be updated.
     *
     * @example 1.18.8-aliyun.1
     *
     * @var string
     */
    public $nextVersion;

    /**
     * @description The maximum number of IP addresses that can be assigned to nodes. This number is determined by the node CIDR block. This parameter takes effect only if the cluster uses Flannel network plug-in.
     *
     * @example 26
     *
     * @var string
     */
    public $nodeCidrMask;

    /**
     * @description The automatic O\\&M policy of the cluster.
     *
     * @var operationPolicy
     */
    public $operationPolicy;

    /**
     * @description The Resource Orchestration Service (ROS) parameters of the cluster.
     *
     * @var string[]
     */
    public $parameters;

    /**
     * @description Indicates whether Alibaba Cloud DNS PrivateZone (PrivateZone) is enabled for the cluster. Valid values:
     *
     *   `true`: PrivateZone is enabled.
     *   `false`: PrivateZone is dislabled.
     *
     * Default value: false
     *
     * @example false
     *
     * @var bool
     */
    public $privateZone;

    /**
     * @description If you set `cluster_type` to `ManagedKubernetes`, an ACK managed cluster is created. In this case, you can further specify the cluster edition.
     *
     *   `Default`. ACK managed cluster. ACK managed clusters include ACK Basic clusters and ACK Pro clusters.
     *   `Edge`: ACK Edge cluster. ACK Edge clusters include ACK Edge Basic clusters and ACK Edge Pro clusters.
     *   `Serverless`: ACK Serverless cluster. ACK Serverless clusters include ACK Serverless Basic clusters and ACK Serverless Pro clusters.
     *   `Lingjun`: ACK Lingjun Pro cluster.
     *
     * @example Default
     *
     * @var string
     */
    public $profile;

    /**
     * @description The kube-proxy mode. Valid values:
     *
     *   `iptables`: a mature and stable kube-proxy mode that uses iptables rules to conduct Service discovery and load balancing. The performance of this mode is limited by the size of the cluster. This mode is suitable for clusters that run a small number of Services.
     *   `ipvs`: provides high performance and uses IP Virtual Server (IPVS). This allows you to configure service discovery and load balancing. This mode is suitable for clusters that are required to run a large number of services. We recommend that you use this mode in scenarios that require high load balancing performance.
     *
     * @example ipvs
     *
     * @var string
     */
    public $proxyMode;

    /**
     * @description The region ID of the cluster.
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
     * @description The ID of the security group to which the cluster belongs.
     *
     * @example sg-25yq****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The CIDR block of the service network.
     *
     * This parameter is required.
     *
     * @example 172.21.0.0/20
     *
     * @var string
     */
    public $serviceCidr;

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
     *   `updating`: The cluster is being updated.
     *   `updating_failed`: The cluster failed to be updated.
     *   `scaling`: The cluster is being scaled.
     *   `waiting`: The cluster is waiting for connection requests.
     *   `disconnected`: The cluster is disconnected.
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
     * The pod CIDR block cannot overlap with the CIDR block of the VPC in which the cluster is deployed and the CIDR blocks of existing clusters in the VPC. You cannot modify the pod CIDR block after you create the cluster.
     *
     * For more information about the network planning of ACK clusters, see [Plan CIDR blocks for an ACK cluster](https://help.aliyun.com/document_detail/186964.html).
     *
     * @example 172.20.0.0/16
     *
     * @deprecated
     *
     * @var string
     */
    public $subnetCidr;

    /**
     * @description The resource labels of the cluster.
     *
     * @var Tag[]
     */
    public $tags;

    /**
     * @description The time zone
     *
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timezone;

    /**
     * @description The time when the cluster was updated.
     *
     * @example 2020-01-13T23:01:03+08:00
     *
     * @var string
     */
    public $updated;

    /**
     * @description The ID of the VPC where the cluster is deployed. This parameter is required when you create a cluster.
     *
     * @example vpc-2zecuu62b9zw7a7qn****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the vSwitche. This field is deprecated. Use vswitch_ids to query the vSwitches on the control plane and vswitch_ids to query the vSwitches on the data plane.
     *
     * @example vsw-2zete8s4qocqg0mf6****,vsw-2zete8s4qocqg0mf6****
     *
     * @deprecated
     *
     * @var string
     */
    public $vswitchId;

    /**
     * @description The vSwitch for the control plane of the cluster.
     *
     * @var string[]
     */
    public $vswitchIds;

    /**
     * @description The name of the worker Resource Access Management (RAM) role. The RAM role is assigned to the worker nodes of the cluster to allow the worker nodes to manage Elastic Compute Service (ECS) instances.
     *
     * @example KubernetesWorkerRole-ec87d15b-edca-4302-933f-c8a16bf0****
     *
     * @var string
     */
    public $workerRamRoleName;

    /**
     * @description The ID of the zone within the region where the cluster is located.
     *
     * @example cn-beijing-a
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clusterDomain' => 'cluster_domain',
        'clusterId' => 'cluster_id',
        'clusterSpec' => 'cluster_spec',
        'clusterType' => 'cluster_type',
        'containerCidr' => 'container_cidr',
        'controlPlaneConfig' => 'control_plane_config',
        'created' => 'created',
        'currentVersion' => 'current_version',
        'deletionProtection' => 'deletion_protection',
        'dockerVersion' => 'docker_version',
        'externalLoadbalancerId' => 'external_loadbalancer_id',
        'initVersion' => 'init_version',
        'ipStack' => 'ip_stack',
        'maintenanceWindow' => 'maintenance_window',
        'masterUrl' => 'master_url',
        'metaData' => 'meta_data',
        'name' => 'name',
        'networkMode' => 'network_mode',
        'nextVersion' => 'next_version',
        'nodeCidrMask' => 'node_cidr_mask',
        'operationPolicy' => 'operation_policy',
        'parameters' => 'parameters',
        'privateZone' => 'private_zone',
        'profile' => 'profile',
        'proxyMode' => 'proxy_mode',
        'regionId' => 'region_id',
        'resourceGroupId' => 'resource_group_id',
        'securityGroupId' => 'security_group_id',
        'serviceCidr' => 'service_cidr',
        'size' => 'size',
        'state' => 'state',
        'subnetCidr' => 'subnet_cidr',
        'tags' => 'tags',
        'timezone' => 'timezone',
        'updated' => 'updated',
        'vpcId' => 'vpc_id',
        'vswitchId' => 'vswitch_id',
        'vswitchIds' => 'vswitch_ids',
        'workerRamRoleName' => 'worker_ram_role_name',
        'zoneId' => 'zone_id',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterDomain) {
            $res['cluster_domain'] = $this->clusterDomain;
        }
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
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
            $res['control_plane_config'] = null !== $this->controlPlaneConfig ? $this->controlPlaneConfig->toMap() : null;
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
        if (null !== $this->ipStack) {
            $res['ip_stack'] = $this->ipStack;
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
        if (null !== $this->nodeCidrMask) {
            $res['node_cidr_mask'] = $this->nodeCidrMask;
        }
        if (null !== $this->operationPolicy) {
            $res['operation_policy'] = null !== $this->operationPolicy ? $this->operationPolicy->toMap() : null;
        }
        if (null !== $this->parameters) {
            $res['parameters'] = $this->parameters;
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
        if (null !== $this->regionId) {
            $res['region_id'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['resource_group_id'] = $this->resourceGroupId;
        }
        if (null !== $this->securityGroupId) {
            $res['security_group_id'] = $this->securityGroupId;
        }
        if (null !== $this->serviceCidr) {
            $res['service_cidr'] = $this->serviceCidr;
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
        if (null !== $this->timezone) {
            $res['timezone'] = $this->timezone;
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
        if (null !== $this->vswitchIds) {
            $res['vswitch_ids'] = $this->vswitchIds;
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
     * @return DescribeClusterDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['cluster_domain'])) {
            $model->clusterDomain = $map['cluster_domain'];
        }
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
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
        if (isset($map['ip_stack'])) {
            $model->ipStack = $map['ip_stack'];
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
        if (isset($map['node_cidr_mask'])) {
            $model->nodeCidrMask = $map['node_cidr_mask'];
        }
        if (isset($map['operation_policy'])) {
            $model->operationPolicy = operationPolicy::fromMap($map['operation_policy']);
        }
        if (isset($map['parameters'])) {
            $model->parameters = $map['parameters'];
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
        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }
        if (isset($map['resource_group_id'])) {
            $model->resourceGroupId = $map['resource_group_id'];
        }
        if (isset($map['security_group_id'])) {
            $model->securityGroupId = $map['security_group_id'];
        }
        if (isset($map['service_cidr'])) {
            $model->serviceCidr = $map['service_cidr'];
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
                $n = 0;
                foreach ($map['tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? Tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['timezone'])) {
            $model->timezone = $map['timezone'];
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
        if (isset($map['vswitch_ids'])) {
            if (!empty($map['vswitch_ids'])) {
                $model->vswitchIds = $map['vswitch_ids'];
            }
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
