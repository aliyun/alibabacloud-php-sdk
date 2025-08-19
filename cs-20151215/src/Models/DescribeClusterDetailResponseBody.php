<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailResponseBody\autoMode;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailResponseBody\controlPlaneConfig;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailResponseBody\operationPolicy;
use AlibabaCloud\SDK\CS\V20151215\Models\DescribeClusterDetailResponseBody\rrsaConfig;

class DescribeClusterDetailResponseBody extends Model
{
    /**
     * @var autoMode
     */
    public $autoMode;

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
     * @var controlPlaneConfig
     */
    public $controlPlaneConfig;

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
    public $dockerVersion;

    /**
     * @var string
     */
    public $externalLoadbalancerId;

    /**
     * @var string[]
     */
    public $extraSans;

    /**
     * @var string
     */
    public $initVersion;

    /**
     * @var string
     */
    public $ipStack;

    /**
     * @var MaintenanceWindow
     */
    public $maintenanceWindow;

    /**
     * @var string
     */
    public $masterUrl;

    /**
     * @var string
     */
    public $metaData;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $networkMode;

    /**
     * @var string
     */
    public $nextVersion;

    /**
     * @var string
     */
    public $nodeCidrMask;

    /**
     * @var operationPolicy
     */
    public $operationPolicy;

    /**
     * @var string[]
     */
    public $parameters;

    /**
     * @var bool
     */
    public $privateZone;

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
     * @var rrsaConfig
     */
    public $rrsaConfig;

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
     * @var string
     */
    public $subnetCidr;

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
     * @var string
     */
    public $vswitchId;

    /**
     * @var string[]
     */
    public $vswitchIds;

    /**
     * @var string
     */
    public $workerRamRoleName;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'autoMode' => 'auto_mode',
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
        'extraSans' => 'extra_sans',
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
        'rrsaConfig' => 'rrsa_config',
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

    public function validate()
    {
        if (null !== $this->autoMode) {
            $this->autoMode->validate();
        }
        if (null !== $this->controlPlaneConfig) {
            $this->controlPlaneConfig->validate();
        }
        if (\is_array($this->extraSans)) {
            Model::validateArray($this->extraSans);
        }
        if (null !== $this->maintenanceWindow) {
            $this->maintenanceWindow->validate();
        }
        if (null !== $this->operationPolicy) {
            $this->operationPolicy->validate();
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (null !== $this->rrsaConfig) {
            $this->rrsaConfig->validate();
        }
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
        if (null !== $this->autoMode) {
            $res['auto_mode'] = null !== $this->autoMode ? $this->autoMode->toArray($noStream) : $this->autoMode;
        }

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
            $res['control_plane_config'] = null !== $this->controlPlaneConfig ? $this->controlPlaneConfig->toArray($noStream) : $this->controlPlaneConfig;
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

        if (null !== $this->initVersion) {
            $res['init_version'] = $this->initVersion;
        }

        if (null !== $this->ipStack) {
            $res['ip_stack'] = $this->ipStack;
        }

        if (null !== $this->maintenanceWindow) {
            $res['maintenance_window'] = null !== $this->maintenanceWindow ? $this->maintenanceWindow->toArray($noStream) : $this->maintenanceWindow;
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
            $res['operation_policy'] = null !== $this->operationPolicy ? $this->operationPolicy->toArray($noStream) : $this->operationPolicy;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['parameters'] = [];
                foreach ($this->parameters as $key1 => $value1) {
                    $res['parameters'][$key1] = $value1;
                }
            }
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

        if (null !== $this->rrsaConfig) {
            $res['rrsa_config'] = null !== $this->rrsaConfig ? $this->rrsaConfig->toArray($noStream) : $this->rrsaConfig;
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
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->vswitchIds)) {
                $res['vswitch_ids'] = [];
                $n1 = 0;
                foreach ($this->vswitchIds as $item1) {
                    $res['vswitch_ids'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->workerRamRoleName) {
            $res['worker_ram_role_name'] = $this->workerRamRoleName;
        }

        if (null !== $this->zoneId) {
            $res['zone_id'] = $this->zoneId;
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
        if (isset($map['auto_mode'])) {
            $model->autoMode = autoMode::fromMap($map['auto_mode']);
        }

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
            if (!empty($map['parameters'])) {
                $model->parameters = [];
                foreach ($map['parameters'] as $key1 => $value1) {
                    $model->parameters[$key1] = $value1;
                }
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

        if (isset($map['region_id'])) {
            $model->regionId = $map['region_id'];
        }

        if (isset($map['resource_group_id'])) {
            $model->resourceGroupId = $map['resource_group_id'];
        }

        if (isset($map['rrsa_config'])) {
            $model->rrsaConfig = rrsaConfig::fromMap($map['rrsa_config']);
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
                $n1 = 0;
                foreach ($map['tags'] as $item1) {
                    $model->tags[$n1] = Tag::fromMap($item1);
                    ++$n1;
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
                $model->vswitchIds = [];
                $n1 = 0;
                foreach ($map['vswitch_ids'] as $item1) {
                    $model->vswitchIds[$n1] = $item1;
                    ++$n1;
                }
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
