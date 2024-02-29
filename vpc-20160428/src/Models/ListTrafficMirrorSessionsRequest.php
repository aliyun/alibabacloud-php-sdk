<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorSessionsRequest\tags;
use AlibabaCloud\Tea\Model;

class ListTrafficMirrorSessionsRequest extends Model
{
    /**
     * @description Specifies whether to enable the traffic mirror session. Valid values:
     *
     *   **false**: does not enable the traffic mirror session.
     *   **true**: enables the traffic mirror session.
     *
     * @example false
     *
     * @var bool
     */
    public $enabled;

    /**
     * @description The maximum number of entries to return. Valid values: **1** to **100**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used for the next query. Valid values:
     *
     *   If this is your first query and no next queries are to be sent, ignore this parameter.
     *   If a next query is to be sent, set the value to the value of NextToken that is returned from the last call.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The priority of the traffic mirror session. Valid values: **1** to **32766**.
     *
     * A smaller value indicates a higher priority. You cannot specify identical priorities for traffic mirror sessions that are created in the same region by using the same account.
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The ID of the region to which the traffic mirror session belongs. You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list. For more information about regions that support traffic mirroring, see [Overview of traffic mirroring](~~207513~~).
     *
     * @example cn-hongkong
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the mirrored traffic belongs.
     *
     * @example rg-bp67acfmxazb4ph****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The tags of the resource.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the traffic mirror filter.
     *
     * @example tmf-j6cmls82xnc86vtpe****
     *
     * @var string
     */
    public $trafficMirrorFilterId;

    /**
     * @description The IDs of the traffic mirror session. The maximum value of N is 100, which indicates that you can query up to 100 traffic mirror sessions at a time.
     *
     * @example tms-j6cla50buc44ap8tu****
     *
     * @var string[]
     */
    public $trafficMirrorSessionIds;

    /**
     * @description The name of the traffic mirror session.
     *
     * The name must be 1 to 128 characters in length, and cannot start with `http://` or `https://`.
     * @example abc
     *
     * @var string
     */
    public $trafficMirrorSessionName;

    /**
     * @description The ID of the traffic mirror source. You can specify only an elastic network interface (ENI) as the mirror source.
     *
     * @example eni-j6c8znm5l1yt4sox*****
     *
     * @var string
     */
    public $trafficMirrorSourceId;

    /**
     * @description The ID of the traffic mirror destination. You can specify only an ENI or a Server Load Balancer (SLB) instance as a traffic mirror destination.
     *
     * @example eni-j6c2fp57q8rr47rp****
     *
     * @var string
     */
    public $trafficMirrorTargetId;

    /**
     * @description The VXLAN network identifier (VNI) that is used to distinguish different mirrored traffic. Valid values: **0** to **16777215**. You can use VNIs to identify mirrored traffic from different sessions at the traffic mirror destination. You can specify a custom VNI or use a random VNI that is allocated by the system. If you want the system to randomly allocate a VNI, ignore this parameter.
     *
     * @example 10
     *
     * @var int
     */
    public $virtualNetworkId;
    protected $_name = [
        'enabled'                  => 'Enabled',
        'maxResults'               => 'MaxResults',
        'nextToken'                => 'NextToken',
        'ownerAccount'             => 'OwnerAccount',
        'ownerId'                  => 'OwnerId',
        'priority'                 => 'Priority',
        'regionId'                 => 'RegionId',
        'resourceGroupId'          => 'ResourceGroupId',
        'resourceOwnerAccount'     => 'ResourceOwnerAccount',
        'resourceOwnerId'          => 'ResourceOwnerId',
        'tags'                     => 'Tags',
        'trafficMirrorFilterId'    => 'TrafficMirrorFilterId',
        'trafficMirrorSessionIds'  => 'TrafficMirrorSessionIds',
        'trafficMirrorSessionName' => 'TrafficMirrorSessionName',
        'trafficMirrorSourceId'    => 'TrafficMirrorSourceId',
        'trafficMirrorTargetId'    => 'TrafficMirrorTargetId',
        'virtualNetworkId'         => 'VirtualNetworkId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (null !== $this->trafficMirrorFilterId) {
            $res['TrafficMirrorFilterId'] = $this->trafficMirrorFilterId;
        }
        if (null !== $this->trafficMirrorSessionIds) {
            $res['TrafficMirrorSessionIds'] = $this->trafficMirrorSessionIds;
        }
        if (null !== $this->trafficMirrorSessionName) {
            $res['TrafficMirrorSessionName'] = $this->trafficMirrorSessionName;
        }
        if (null !== $this->trafficMirrorSourceId) {
            $res['TrafficMirrorSourceId'] = $this->trafficMirrorSourceId;
        }
        if (null !== $this->trafficMirrorTargetId) {
            $res['TrafficMirrorTargetId'] = $this->trafficMirrorTargetId;
        }
        if (null !== $this->virtualNetworkId) {
            $res['VirtualNetworkId'] = $this->virtualNetworkId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTrafficMirrorSessionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
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
        if (isset($map['TrafficMirrorFilterId'])) {
            $model->trafficMirrorFilterId = $map['TrafficMirrorFilterId'];
        }
        if (isset($map['TrafficMirrorSessionIds'])) {
            if (!empty($map['TrafficMirrorSessionIds'])) {
                $model->trafficMirrorSessionIds = $map['TrafficMirrorSessionIds'];
            }
        }
        if (isset($map['TrafficMirrorSessionName'])) {
            $model->trafficMirrorSessionName = $map['TrafficMirrorSessionName'];
        }
        if (isset($map['TrafficMirrorSourceId'])) {
            $model->trafficMirrorSourceId = $map['TrafficMirrorSourceId'];
        }
        if (isset($map['TrafficMirrorTargetId'])) {
            $model->trafficMirrorTargetId = $map['TrafficMirrorTargetId'];
        }
        if (isset($map['VirtualNetworkId'])) {
            $model->virtualNetworkId = $map['VirtualNetworkId'];
        }

        return $model;
    }
}
