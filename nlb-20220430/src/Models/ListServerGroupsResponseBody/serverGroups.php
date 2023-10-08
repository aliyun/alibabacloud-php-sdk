<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models\ListServerGroupsResponseBody;

use AlibabaCloud\SDK\Nlb\V20220430\Models\ListServerGroupsResponseBody\serverGroups\healthCheck;
use AlibabaCloud\SDK\Nlb\V20220430\Models\ListServerGroupsResponseBody\serverGroups\tags;
use AlibabaCloud\Tea\Model;

class serverGroups extends Model
{
    /**
     * @description The IP version. Valid values:
     *
     *   **ipv4**
     *   **DualStack**
     *
     * @example ipv4
     *
     * @var string
     */
    public $addressIPVersion;

    /**
     * @description The ID of the Alibaba Cloud account.
     *
     * @example 165820696622****
     *
     * @var int
     */
    public $aliUid;

    /**
     * @description Indicates whether the feature of forwarding requests to all ports is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $anyPortEnabled;

    /**
     * @description Indicates whether connection draining is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example false
     *
     * @var bool
     */
    public $connectionDrainEnabled;

    /**
     * @description The timeout period of connection draining. Unit: seconds. Valid values: **10** to **900**.
     *
     * @example 200
     *
     * @var int
     */
    public $connectionDrainTimeout;

    /**
     * @description The configurations of health checks.
     *
     * @var healthCheck
     */
    public $healthCheck;

    /**
     * @description Indicates whether client IP preservation is enabled. Valid values:
     *
     *   **true**
     *   **false**
     *
     * > This parameter is set to **true** by default when **AddressIPVersion** is set to **ipv4**. This parameter is set to **false** when **AddressIPVersion** is set to **ipv6**. **true** will be supported by later versions.
     * @example true
     *
     * @var bool
     */
    public $preserveClientIpEnabled;

    /**
     * @description The protocol used to forward requests to the backend servers. Valid values: **TCP**, **UDP**, and **TCPSSL**.
     *
     * @example TCP
     *
     * @var string
     */
    public $protocol;

    /**
     * @description The region ID of the NLB instance.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The NLB instances.
     *
     * @var string[]
     */
    public $relatedLoadBalancerIds;

    /**
     * @description The ID of the resource group to which the server group belongs.
     *
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The routing algorithm. Valid values:
     *
     *   **Wrr**: Backend servers with higher weights receive more requests than backend servers with lower weights.
     *   **rr**: Requests are forwarded to the backend servers in sequence. sch: Requests are forwarded to the backend servers based on source IP address hashing.
     *   **sch**: Requests from the same source IP address are forwarded to the same backend server.
     *   **tch**: Four-element hashing, which specifies consistent hashing that is based on four factors: source IP address, destination IP address, source port, and destination port. Requests that contain the same information based on the four factors are forwarded to the same backend server.
     *   **qch**: QUIC ID hashing. Requests that contain the same QUIC ID are forwarded to the same backend server.
     *
     * @example Wrr
     *
     * @var string
     */
    public $scheduler;

    /**
     * @description The number of server groups associated with the NLB instances.
     *
     * @example 2
     *
     * @var int
     */
    public $serverCount;

    /**
     * @description The server group ID.
     *
     * @example sgp-atstuj3rtoptyui****
     *
     * @var string
     */
    public $serverGroupId;

    /**
     * @description The server group name.
     *
     * @example NLB_ServerGroup
     *
     * @var string
     */
    public $serverGroupName;

    /**
     * @description The status of the server group. Valid values:
     *
     *   **Creating**
     *   **Available**
     *   **Configuring**
     *
     * @example Available
     *
     * @var string
     */
    public $serverGroupStatus;

    /**
     * @description The type of server group. Valid values:
     *
     *   **Instance** : contains servers of the **Ecs**, **Ens**, and **Eci** types.
     *   **Ip**: contains servers specified by IP addresses.
     *
     * @example Instance
     *
     * @var string
     */
    public $serverGroupType;

    /**
     * @description The tag.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the VPC to which the server group belongs.
     *
     * @example vpc-bp15zckdt37pq72zv****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'addressIPVersion'        => 'AddressIPVersion',
        'aliUid'                  => 'AliUid',
        'anyPortEnabled'          => 'AnyPortEnabled',
        'connectionDrainEnabled'  => 'ConnectionDrainEnabled',
        'connectionDrainTimeout'  => 'ConnectionDrainTimeout',
        'healthCheck'             => 'HealthCheck',
        'preserveClientIpEnabled' => 'PreserveClientIpEnabled',
        'protocol'                => 'Protocol',
        'regionId'                => 'RegionId',
        'relatedLoadBalancerIds'  => 'RelatedLoadBalancerIds',
        'resourceGroupId'         => 'ResourceGroupId',
        'scheduler'               => 'Scheduler',
        'serverCount'             => 'ServerCount',
        'serverGroupId'           => 'ServerGroupId',
        'serverGroupName'         => 'ServerGroupName',
        'serverGroupStatus'       => 'ServerGroupStatus',
        'serverGroupType'         => 'ServerGroupType',
        'tags'                    => 'Tags',
        'vpcId'                   => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
            $res['HealthCheck'] = null !== $this->healthCheck ? $this->healthCheck->toMap() : null;
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
