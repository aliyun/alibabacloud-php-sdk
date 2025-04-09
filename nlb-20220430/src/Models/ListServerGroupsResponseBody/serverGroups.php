<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\ListServerGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListServerGroupsResponseBody\serverGroups\healthCheck;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListServerGroupsResponseBody\serverGroups\tags;

class serverGroups extends Model
{
    /**
     * @var string
     */
    public $addressIPVersion;

    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var bool
     */
    public $anyPortEnabled;

    /**
     * @var bool
     */
    public $connectionDrainEnabled;

    /**
     * @var int
     */
    public $connectionDrainTimeout;

    /**
     * @var healthCheck
     */
    public $healthCheck;

    /**
     * @var bool
     */
    public $preserveClientIpEnabled;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $regionId;

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
        'addressIPVersion' => 'AddressIPVersion',
        'aliUid' => 'AliUid',
        'anyPortEnabled' => 'AnyPortEnabled',
        'connectionDrainEnabled' => 'ConnectionDrainEnabled',
        'connectionDrainTimeout' => 'ConnectionDrainTimeout',
        'healthCheck' => 'HealthCheck',
        'preserveClientIpEnabled' => 'PreserveClientIpEnabled',
        'protocol' => 'Protocol',
        'regionId' => 'RegionId',
        'relatedLoadBalancerIds' => 'RelatedLoadBalancerIds',
        'resourceGroupId' => 'ResourceGroupId',
        'scheduler' => 'Scheduler',
        'serverCount' => 'ServerCount',
        'serverGroupId' => 'ServerGroupId',
        'serverGroupName' => 'ServerGroupName',
        'serverGroupStatus' => 'ServerGroupStatus',
        'serverGroupType' => 'ServerGroupType',
        'tags' => 'Tags',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->healthCheck) {
            $this->healthCheck->validate();
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
        if (null !== $this->addressIPVersion) {
            $res['AddressIPVersion'] = $this->addressIPVersion;
        }

        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }

        if (null !== $this->anyPortEnabled) {
            $res['AnyPortEnabled'] = $this->anyPortEnabled;
        }

        if (null !== $this->connectionDrainEnabled) {
            $res['ConnectionDrainEnabled'] = $this->connectionDrainEnabled;
        }

        if (null !== $this->connectionDrainTimeout) {
            $res['ConnectionDrainTimeout'] = $this->connectionDrainTimeout;
        }

        if (null !== $this->healthCheck) {
            $res['HealthCheck'] = null !== $this->healthCheck ? $this->healthCheck->toArray($noStream) : $this->healthCheck;
        }

        if (null !== $this->preserveClientIpEnabled) {
            $res['PreserveClientIpEnabled'] = $this->preserveClientIpEnabled;
        }

        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->relatedLoadBalancerIds) {
            if (\is_array($this->relatedLoadBalancerIds)) {
                $res['RelatedLoadBalancerIds'] = [];
                $n1 = 0;
                foreach ($this->relatedLoadBalancerIds as $item1) {
                    $res['RelatedLoadBalancerIds'][$n1++] = $item1;
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
                    $res['Tags'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AddressIPVersion'])) {
            $model->addressIPVersion = $map['AddressIPVersion'];
        }

        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }

        if (isset($map['AnyPortEnabled'])) {
            $model->anyPortEnabled = $map['AnyPortEnabled'];
        }

        if (isset($map['ConnectionDrainEnabled'])) {
            $model->connectionDrainEnabled = $map['ConnectionDrainEnabled'];
        }

        if (isset($map['ConnectionDrainTimeout'])) {
            $model->connectionDrainTimeout = $map['ConnectionDrainTimeout'];
        }

        if (isset($map['HealthCheck'])) {
            $model->healthCheck = healthCheck::fromMap($map['HealthCheck']);
        }

        if (isset($map['PreserveClientIpEnabled'])) {
            $model->preserveClientIpEnabled = $map['PreserveClientIpEnabled'];
        }

        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RelatedLoadBalancerIds'])) {
            if (!empty($map['RelatedLoadBalancerIds'])) {
                $model->relatedLoadBalancerIds = [];
                $n1 = 0;
                foreach ($map['RelatedLoadBalancerIds'] as $item1) {
                    $model->relatedLoadBalancerIds[$n1++] = $item1;
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
                    $model->tags[$n1++] = tags::fromMap($item1);
                }
            }
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
