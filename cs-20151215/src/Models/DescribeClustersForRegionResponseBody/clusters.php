<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribeClustersForRegionResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\Tag;

class clusters extends Model
{
    /**
     * @var string
     */
    public $clusterDomain;

    /**
     * @var string
     */
    public $clusterId;

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
     * @var string
     */
    public $created;

    /**
     * @var string
     */
    public $currentVersion;

    /**
     * @var bool
     */
    public $deletionProtection;

    /**
     * @var string
     */
    public $initVersion;

    /**
     * @var string
     */
    public $ipStack;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $nextVersion;

    /**
     * @var string
     */
    public $profile;

    /**
     * @var string
     */
    public $proxyMode;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $securityGroupId;

    /**
     * @var string
     */
    public $serviceCidr;

    /**
     * @var int
     */
    public $size;

    /**
     * @var string
     */
    public $state;

    /**
     * @var Tag[]
     */
    public $tags;

    /**
     * @var string
     */
    public $timezone;

    /**
     * @var string
     */
    public $updated;

    /**
     * @var string
     */
    public $vpcId;

    /**
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

    public function validate()
    {
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        if (\is_array($this->vswitchIds)) {
            Model::validateArray($this->vswitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            if (\is_array($this->vswitchIds)) {
                $res['vswitch_ids'] = [];
                $n1 = 0;
                foreach ($this->vswitchIds as $item1) {
                    $res['vswitch_ids'][$n1++] = $item1;
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
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1++] = Tag::fromMap($item1);
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
                $model->vswitchIds = [];
                $n1 = 0;
                foreach ($map['vswitch_ids'] as $item1) {
                    $model->vswitchIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
