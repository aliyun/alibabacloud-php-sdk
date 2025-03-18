<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersForRegionResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\Tag;
use AlibabaCloud\Tea\Model;

class clusters extends Model
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
     * @example c905d1364c2dd4b6284a3f41790c4****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The types of ACK managed clusters:
     *
     *   ack.pro.small: ACK Pro cluster
     *   ack.standard: ACK Basic cluster
     *
     * @example ack.standard
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @description The type of the cluster. Valid values:
     *
     *   Kubernetes: ACK dedicated cluster
     *   ManagedKubernetes: ACK managed clusters. ACK managed clusters include ACK Basic clusters, ACK Pro clusters, ACK Serverless Basic clusters, ACK Serverless Pro clusters, ACK Edge Basic clusters, ACK Edge Pro clusters, and ACK Lingjun Pro clusters.
     *   ExternalKubernetes: registered cluster
     *
     * @example ManagedKubernetes
     *
     * @var string
     */
    public $clusterType;

    /**
     * @description The CIDR block of pods in the cluster.
     *
     * @example 172.20.0.0/16
     *
     * @var string
     */
    public $containerCidr;

    /**
     * @description The time at which the instance is created.
     *
     * @example 2020-12-01T20:40:40+08:00
     *
     * @var string
     */
    public $created;

    /**
     * @description The current Kubernetes version of the cluster.
     *
     * @example 1.16.6-aliyun.1
     *
     * @var string
     */
    public $currentVersion;

    /**
     * @description Specifies whether to enable cluster deletion protection. If you enable this option, the cluster cannot be deleted in the console or by calling API operations. You can obtain the terminal ID by calling one of the following operations:
     *
     *   true: enables deletion protection for the cluster. This way, the cluster cannot be deleted in the ACK console or by calling API operations.
     *   false: disables deletion protection for the cluster. This way, the cluster can be deleted in the ACK console or by calling API operations.
     *
     * @example false
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description The initial Kubernetes version of the cluster.
     *
     * @example 1.16.6-aliyun.1
     *
     * @var string
     */
    public $initVersion;

    /**
     * @description The IP protocol stack of the cluster.
     *
     * @example ipv4
     *
     * @var string
     */
    public $ipStack;

    /**
     * @description The name of the cluster.
     *
     * @example test-cluster
     *
     * @var string
     */
    public $name;

    /**
     * @description The Kubernetes version to which the cluster can be updated.
     *
     * @example 1.18.8-aliyun.1
     *
     * @var string
     */
    public $nextVersion;

    /**
     * @description The subtype of the clusters. Valid values:
     *
     *   Default: ACK managed clusters. ACK managed clusters include ACK Basic clusters and ACK Pro clusters.
     *   Edge: ACK Edge clusters. ACK Edge clusters include ACK Edge Basic clusters and ACK Edge Pro clusters.
     *   Serverless: ACK Serverless clusters. ACK Serverless clusters include ACK Serverless Basic clusters and ACK Serverless Pro clusters.
     *   Lingjun: ACK Lingjun Pro clusters.
     *
     * @example Default
     *
     * @var string
     */
    public $profile;

    /**
     * @description The kube-proxy mode of the cluster.
     *
     * Valid value:
     *
     *   iptables: iptables.
     *   ipvs: ipvs.
     *
     * @example ipvs
     *
     * @var string
     */
    public $proxyMode;

    /**
     * @description The region ID.
     *
     * @example cn-beijing-a
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the cluster resource group.
     *
     * @example rg-acfmyvw3wjm****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the security group of the cluster.
     *
     * @example sg-2zeihch86ooz9io4****
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
     * @description The number of nodes in the ACK cluster.
     *
     * @example 2
     *
     * @var int
     */
    public $size;

    /**
     * @description The status of the cluster. Valid values:
     *
     *   initial: The cluster is being created.
     *   failed: The cluster failed to be created.
     *   running: The cluster is running.
     *   Upgrading: The cluster is being updated.
     *   scaling: The cluster is being scaled.
     *   waiting: The cluster is waiting for connection requests.
     *   disconnected: The cluster is disconnected.
     *   inactive: The cluster is inactive.
     *   unavailable: The cluster is unavailable.
     *   deleting: The cluster is being deleted.
     *   deleted: The ACK cluster is deleted.
     *   delete_failed: The cluster failed to be deleted.
     *
     * @example running
     *
     * @var string
     */
    public $state;

    /**
     * @description The list of cluster tags.
     *
     * @var Tag[]
     */
    public $tags;

    /**
     * @description The time zone.
     *
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timezone;

    /**
     * @description The time when the cluster was updated.
     *
     * @example 2020-12-08T15:37:00+08:00
     *
     * @var string
     */
    public $updated;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the cluster belongs.
     *
     * @example vpc-2zeg8nf1ukc0fcmvq****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The list of vSwitches on the control plane of the cluster.
     *
     * @var string[]
     */
    public $vswitchIds;
    protected $_name = [
        'clusterDomain' => 'cluster_domain',
        'clusterId' => 'cluster_id',
        'clusterSpec' => 'cluster_spec',
        'clusterType' => 'cluster_type',
        'containerCidr' => 'container_cidr',
        'created' => 'created',
        'currentVersion' => 'current_version',
        'deletionProtection' => 'deletion_protection',
        'initVersion' => 'init_version',
        'ipStack' => 'ip_stack',
        'name' => 'name',
        'nextVersion' => 'next_version',
        'profile' => 'profile',
        'proxyMode' => 'proxy_mode',
        'regionId' => 'region_id',
        'resourceGroupId' => 'resource_group_id',
        'securityGroupId' => 'security_group_id',
        'serviceCidr' => 'service_cidr',
        'size' => 'size',
        'state' => 'state',
        'tags' => 'tags',
        'timezone' => 'timezone',
        'updated' => 'updated',
        'vpcId' => 'vpc_id',
        'vswitchIds' => 'vswitch_ids',
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
        if (null !== $this->created) {
            $res['created'] = $this->created;
        }
        if (null !== $this->currentVersion) {
            $res['current_version'] = $this->currentVersion;
        }
        if (null !== $this->deletionProtection) {
            $res['deletion_protection'] = $this->deletionProtection;
        }
        if (null !== $this->initVersion) {
            $res['init_version'] = $this->initVersion;
        }
        if (null !== $this->ipStack) {
            $res['ip_stack'] = $this->ipStack;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->nextVersion) {
            $res['next_version'] = $this->nextVersion;
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
        if (null !== $this->vswitchIds) {
            $res['vswitch_ids'] = $this->vswitchIds;
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
        if (isset($map['created'])) {
            $model->created = $map['created'];
        }
        if (isset($map['current_version'])) {
            $model->currentVersion = $map['current_version'];
        }
        if (isset($map['deletion_protection'])) {
            $model->deletionProtection = $map['deletion_protection'];
        }
        if (isset($map['init_version'])) {
            $model->initVersion = $map['init_version'];
        }
        if (isset($map['ip_stack'])) {
            $model->ipStack = $map['ip_stack'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['next_version'])) {
            $model->nextVersion = $map['next_version'];
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
        if (isset($map['vswitch_ids'])) {
            if (!empty($map['vswitch_ids'])) {
                $model->vswitchIds = $map['vswitch_ids'];
            }
        }

        return $model;
    }
}
