<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gwlb\V20240415\Models\ListServerGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListServerGroupsResponseBody\serverGroups\connectionDrainConfig;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListServerGroupsResponseBody\serverGroups\healthCheckConfig;
use AlibabaCloud\SDK\Gwlb\V20240415\Models\ListServerGroupsResponseBody\serverGroups\tags;

class serverGroups extends Model
{
    /**
     * @var connectionDrainConfig
     */
    public $connectionDrainConfig;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var healthCheckConfig
     */
    public $healthCheckConfig;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string[]
     */
    public $relatedLoadBalancerIds;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $scheduler;

    /**
     * @var int
     */
    public $serverCount;

    /**
     * @var string
     */
    public $serverFailoverMode;

    /**
     * @var string
     */
    public $serverGroupId;

    /**
     * @var string
     */
    public $serverGroupName;

    /**
     * @var string
     */
    public $serverGroupStatus;

    /**
     * @var string
     */
    public $serverGroupType;

    /**
     * @var tags[]
     */
    public $tags;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'connectionDrainConfig' => 'ConnectionDrainConfig',
        'createTime' => 'CreateTime',
        'healthCheckConfig' => 'HealthCheckConfig',
        'protocol' => 'Protocol',
        'relatedLoadBalancerIds' => 'RelatedLoadBalancerIds',
        'resourceGroupId' => 'ResourceGroupId',
        'scheduler' => 'Scheduler',
        'serverCount' => 'ServerCount',
        'serverFailoverMode' => 'ServerFailoverMode',
        'serverGroupId' => 'ServerGroupId',
        'serverGroupName' => 'ServerGroupName',
        'serverGroupStatus' => 'ServerGroupStatus',
        'serverGroupType' => 'ServerGroupType',
        'tags' => 'Tags',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->connectionDrainConfig) {
            $this->connectionDrainConfig->validate();
        }
        if (null !== $this->healthCheckConfig) {
            $this->healthCheckConfig->validate();
        }
        if (\is_array($this->relatedLoadBalancerIds)) {
            Model::validateArray($this->relatedLoadBalancerIds);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->connectionDrainConfig) {
            $res['ConnectionDrainConfig'] = null !== $this->connectionDrainConfig ? $this->connectionDrainConfig->toArray($noStream) : $this->connectionDrainConfig;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->healthCheckConfig) {
            $res['HealthCheckConfig'] = null !== $this->healthCheckConfig ? $this->healthCheckConfig->toArray($noStream) : $this->healthCheckConfig;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->relatedLoadBalancerIds) {
            if (\is_array($this->relatedLoadBalancerIds)) {
                $res['RelatedLoadBalancerIds'] = [];
                $n1 = 0;
                foreach ($this->relatedLoadBalancerIds as $item1) {
                    $res['RelatedLoadBalancerIds'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->serverFailoverMode) {
            $res['ServerFailoverMode'] = $this->serverFailoverMode;
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
            if (\is_array($this->tags)) {
                $res['Tags'] = [];
                $n1 = 0;
                foreach ($this->tags as $item1) {
                    $res['Tags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
                $model->relatedLoadBalancerIds = [];
                $n1 = 0;
                foreach ($map['RelatedLoadBalancerIds'] as $item1) {
                    $model->relatedLoadBalancerIds[$n1] = $item1;
                    ++$n1;
                }
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

        if (isset($map['ServerFailoverMode'])) {
            $model->serverFailoverMode = $map['ServerFailoverMode'];
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
                $n1 = 0;
                foreach ($map['Tags'] as $item1) {
                    $model->tags[$n1] = tags::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
