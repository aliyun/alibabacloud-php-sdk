<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersForRegionResponseBody;

use AlibabaCloud\SDK\CS\V20151215\Models\Tag;
use AlibabaCloud\Tea\Model;

class clusters extends Model
{
    /**
     * @example cluster.local
     *
     * @var string
     */
    public $clusterDomain;

    /**
     * @example c905d1364c2dd4b6284a3f41790c4****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @example ack.standard
     *
     * @var string
     */
    public $clusterSpec;

    /**
     * @example ManagedKubernetes
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
     * @example 2020-12-01T20:40:40+08:00
     *
     * @var string
     */
    public $created;

    /**
     * @example 1.16.6-aliyun.1
     *
     * @var string
     */
    public $currentVersion;

    /**
     * @example false
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @example 1.16.6-aliyun.1
     *
     * @var string
     */
    public $initVersion;

    /**
     * @example ipv4
     *
     * @var string
     */
    public $ipStack;

    /**
     * @example test-cluster
     *
     * @var string
     */
    public $name;

    /**
     * @example 1.18.8-aliyun.1
     *
     * @var string
     */
    public $nextVersion;

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
     * @example cn-beijing-a
     *
     * @var string
     */
    public $regionId;

    /**
     * @example rg-acfmyvw3wjm****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example sg-2zeihch86ooz9io4****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description This parameter is required.
     *
     * @example 172.21.0.0/20
     *
     * @var string
     */
    public $serviceCidr;

    /**
     * @example 2
     *
     * @var int
     */
    public $size;

    /**
     * @example running
     *
     * @var string
     */
    public $state;

    /**
     * @var Tag[]
     */
    public $tags;

    /**
     * @example Asia/Shanghai
     *
     * @var string
     */
    public $timezone;

    /**
     * @example 2020-12-08T15:37:00+08:00
     *
     * @var string
     */
    public $updated;

    /**
     * @example vpc-2zeg8nf1ukc0fcmvq****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @var string[]
     */
    public $vswitchIds;
    protected $_name = [
        'clusterDomain'      => 'cluster_domain',
        'clusterId'          => 'cluster_id',
        'clusterSpec'        => 'cluster_spec',
        'clusterType'        => 'cluster_type',
        'containerCidr'      => 'container_cidr',
        'created'            => 'created',
        'currentVersion'     => 'current_version',
        'deletionProtection' => 'deletion_protection',
        'initVersion'        => 'init_version',
        'ipStack'            => 'ip_stack',
        'name'               => 'name',
        'nextVersion'        => 'next_version',
        'profile'            => 'profile',
        'proxyMode'          => 'proxy_mode',
        'regionId'           => 'region_id',
        'resourceGroupId'    => 'resource_group_id',
        'securityGroupId'    => 'security_group_id',
        'serviceCidr'        => 'service_cidr',
        'size'               => 'size',
        'state'              => 'state',
        'tags'               => 'tags',
        'timezone'           => 'timezone',
        'updated'            => 'updated',
        'vpcId'              => 'vpc_id',
        'vswitchIds'         => 'vswitch_ids',
    ];

    public function validate()
    {
    }

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
                $n           = 0;
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
