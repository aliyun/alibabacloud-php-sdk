<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models\ListServerGroupsResponseBody;

use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListServerGroupsResponseBody\serverGroups\connectionDrainConfig;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListServerGroupsResponseBody\serverGroups\healthCheckConfig;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListServerGroupsResponseBody\serverGroups\tags;
use AlibabaCloud\Tea\Model;

class serverGroups extends Model
{
    /**
     * @var connectionDrainConfig
     */
    public $connectionDrainConfig;

    /**
     * @example 2024-08-05T18:24:07Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var healthCheckConfig
     */
    public $healthCheckConfig;

    /**
     * @example GENEVE
     *
     * @var string
     */
    public $protocol;

    /**
     * @var string[]
     */
    public $relatedLoadBalancerIds;

    /**
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @example 5TCH
     *
     * @var string
     */
    public $scheduler;

    /**
     * @example 2
     *
     * @var int
     */
    public $serverCount;

    /**
     * @example sgp-atstuj3rtoptyui****
     *
     * @var string
     */
    public $serverGroupId;

    /**
     * @example testServerGroupName
     *
     * @var string
     */
    public $serverGroupName;

    /**
     * @example Available
     *
     * @var string
     */
    public $serverGroupStatus;

    /**
     * @example Instance
     *
     * @var string
     */
    public $serverGroupType;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @example vpc-bp15zckdt37pq72zv****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'connectionDrainConfig'  => 'ConnectionDrainConfig',
        'createTime'             => 'CreateTime',
        'healthCheckConfig'      => 'HealthCheckConfig',
        'protocol'               => 'Protocol',
        'relatedLoadBalancerIds' => 'RelatedLoadBalancerIds',
        'resourceGroupId'        => 'ResourceGroupId',
        'scheduler'              => 'Scheduler',
        'serverCount'            => 'ServerCount',
        'serverGroupId'          => 'ServerGroupId',
        'serverGroupName'        => 'ServerGroupName',
        'serverGroupStatus'      => 'ServerGroupStatus',
        'serverGroupType'        => 'ServerGroupType',
        'tags'                   => 'Tags',
        'vpcId'                  => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionDrainConfig) {
            $res['ConnectionDrainConfig'] = null !== $this->connectionDrainConfig ? $this->connectionDrainConfig->toMap() : null;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->healthCheckConfig) {
            $res['HealthCheckConfig'] = null !== $this->healthCheckConfig ? $this->healthCheckConfig->toMap() : null;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->relatedLoadBalancerIds) {
            $res['RelatedLoadBalancerIds'] = $this->relatedLoadBalancerIds;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->scheduler) {
            $res['Scheduler'] = $this->scheduler;
        }
        if (null !== $this->serverCount) {
            $res['ServerCount'] = $this->serverCount;
        }
        if (null !== $this->serverGroupId) {
            $res['ServerGroupId'] = $this->serverGroupId;
        }
        if (null !== $this->serverGroupName) {
            $res['ServerGroupName'] = $this->serverGroupName;
        }
        if (null !== $this->serverGroupStatus) {
            $res['ServerGroupStatus'] = $this->serverGroupStatus;
        }
        if (null !== $this->serverGroupType) {
            $res['ServerGroupType'] = $this->serverGroupType;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return serverGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionDrainConfig'])) {
            $model->connectionDrainConfig = connectionDrainConfig::fromMap($map['ConnectionDrainConfig']);
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['HealthCheckConfig'])) {
            $model->healthCheckConfig = healthCheckConfig::fromMap($map['HealthCheckConfig']);
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['RelatedLoadBalancerIds'])) {
            if (!empty($map['RelatedLoadBalancerIds'])) {
                $model->relatedLoadBalancerIds = $map['RelatedLoadBalancerIds'];
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Scheduler'])) {
            $model->scheduler = $map['Scheduler'];
        }
        if (isset($map['ServerCount'])) {
            $model->serverCount = $map['ServerCount'];
        }
        if (isset($map['ServerGroupId'])) {
            $model->serverGroupId = $map['ServerGroupId'];
        }
        if (isset($map['ServerGroupName'])) {
            $model->serverGroupName = $map['ServerGroupName'];
        }
        if (isset($map['ServerGroupStatus'])) {
            $model->serverGroupStatus = $map['ServerGroupStatus'];
        }
        if (isset($map['ServerGroupType'])) {
            $model->serverGroupType = $map['ServerGroupType'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
