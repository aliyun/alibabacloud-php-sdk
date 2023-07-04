<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateTrafficMirrorSessionRequest extends Model
{
    /**
     * @description The ID of the traffic mirror destination. You can specify only an elastic network interface (ENI) or a Server Load Balancer (SLB) instance as a traffic mirror destination.
     *
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe63****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The type of the traffic mirror destination. Valid values:
     *
     *   **NetworkInterface**: an ENI
     *   **SLB**: an SLB instance
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The ID of the traffic mirror source. You can specify only an ENI as the traffic mirror source. The default value of **N** is **1**, which means that you can add only one traffic mirror source to a traffic mirror session.
     *
     * @example false
     *
     * @var bool
     */
    public $enabled;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region to which the traffic mirror session belongs. You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list. For more information about regions that support traffic mirroring, see [Overview of traffic mirroring](~~207513~~).
     *
     * @example 1500
     *
     * @var int
     */
    public $packetLength;

    /**
     * @description The maximum transmission unit (MTU). Default value: **1500**.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The ID of the traffic mirror session.
     *
     * @example cn-hongkong
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
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
     * @description The priority of the traffic mirror session. Valid values: **1** to **32766**.
     *
     * A smaller value indicates a higher priority. You cannot specify identical priorities for traffic mirror sessions that are created in the same region by using the same account.
     * @example tmf-j6cmls82xnc86vtpe****
     *
     * @var string
     */
    public $trafficMirrorFilterId;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must ensure that the value is unique among all requests. The client token can contain only ASCII characters.
     *
     * >  If you do not set this parameter, the system uses **RequestId** as **ClientToken**. **RequestId** might be different for each API request.
     * @example This is a trafficmirrorsession.
     *
     * @var string
     */
    public $trafficMirrorSessionDescription;

    /**
     * @description Specifies whether to perform a dry run. Valid values:
     *
     *   **true**: performs a dry run. The system checks the required parameters, request format, and limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and sends the request. If the request passes the dry run, the operation is performed.
     *
     * @example test
     *
     * @var string
     */
    public $trafficMirrorSessionName;

    /**
     * @example eni-j6c2fp57q8rr47rp****
     *
     * @var string[]
     */
    public $trafficMirrorSourceIds;

    /**
     * @description The ID of the filter.
     *
     * @example eni-j6c8znm5l1yt4sox****
     *
     * @var string
     */
    public $trafficMirrorTargetId;

    /**
     * @description The VXLAN network identifier (VNI). Valid values: **0** to **16777215**.
     *
     * You can use VNIs to identify mirrored traffic from different sessions at the traffic mirror destination. You can specify a custom VNI or use a random VNI allocated by the system. If you want the system to randomly allocate a VNI, do not enter a value.
     * @example NetworkInterface
     *
     * @var string
     */
    public $trafficMirrorTargetType;

    /**
     * @description Specifies whether to enable the traffic mirror session. Valid values:
     *
     *   **false** (default): does not enable the traffic mirror session.
     *   **true**: enables the traffic mirror session.
     *
     * @example 1
     *
     * @var int
     */
    public $virtualNetworkId;
    protected $_name = [
        'clientToken'                     => 'ClientToken',
        'dryRun'                          => 'DryRun',
        'enabled'                         => 'Enabled',
        'ownerAccount'                    => 'OwnerAccount',
        'ownerId'                         => 'OwnerId',
        'packetLength'                    => 'PacketLength',
        'priority'                        => 'Priority',
        'regionId'                        => 'RegionId',
        'resourceGroupId'                 => 'ResourceGroupId',
        'resourceOwnerAccount'            => 'ResourceOwnerAccount',
        'resourceOwnerId'                 => 'ResourceOwnerId',
        'trafficMirrorFilterId'           => 'TrafficMirrorFilterId',
        'trafficMirrorSessionDescription' => 'TrafficMirrorSessionDescription',
        'trafficMirrorSessionName'        => 'TrafficMirrorSessionName',
        'trafficMirrorSourceIds'          => 'TrafficMirrorSourceIds',
        'trafficMirrorTargetId'           => 'TrafficMirrorTargetId',
        'trafficMirrorTargetType'         => 'TrafficMirrorTargetType',
        'virtualNetworkId'                => 'VirtualNetworkId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->packetLength) {
            $res['PacketLength'] = $this->packetLength;
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
        if (null !== $this->trafficMirrorFilterId) {
            $res['TrafficMirrorFilterId'] = $this->trafficMirrorFilterId;
        }
        if (null !== $this->trafficMirrorSessionDescription) {
            $res['TrafficMirrorSessionDescription'] = $this->trafficMirrorSessionDescription;
        }
        if (null !== $this->trafficMirrorSessionName) {
            $res['TrafficMirrorSessionName'] = $this->trafficMirrorSessionName;
        }
        if (null !== $this->trafficMirrorSourceIds) {
            $res['TrafficMirrorSourceIds'] = $this->trafficMirrorSourceIds;
        }
        if (null !== $this->trafficMirrorTargetId) {
            $res['TrafficMirrorTargetId'] = $this->trafficMirrorTargetId;
        }
        if (null !== $this->trafficMirrorTargetType) {
            $res['TrafficMirrorTargetType'] = $this->trafficMirrorTargetType;
        }
        if (null !== $this->virtualNetworkId) {
            $res['VirtualNetworkId'] = $this->virtualNetworkId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTrafficMirrorSessionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['PacketLength'])) {
            $model->packetLength = $map['PacketLength'];
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
        if (isset($map['TrafficMirrorFilterId'])) {
            $model->trafficMirrorFilterId = $map['TrafficMirrorFilterId'];
        }
        if (isset($map['TrafficMirrorSessionDescription'])) {
            $model->trafficMirrorSessionDescription = $map['TrafficMirrorSessionDescription'];
        }
        if (isset($map['TrafficMirrorSessionName'])) {
            $model->trafficMirrorSessionName = $map['TrafficMirrorSessionName'];
        }
        if (isset($map['TrafficMirrorSourceIds'])) {
            if (!empty($map['TrafficMirrorSourceIds'])) {
                $model->trafficMirrorSourceIds = $map['TrafficMirrorSourceIds'];
            }
        }
        if (isset($map['TrafficMirrorTargetId'])) {
            $model->trafficMirrorTargetId = $map['TrafficMirrorTargetId'];
        }
        if (isset($map['TrafficMirrorTargetType'])) {
            $model->trafficMirrorTargetType = $map['TrafficMirrorTargetType'];
        }
        if (isset($map['VirtualNetworkId'])) {
            $model->virtualNetworkId = $map['VirtualNetworkId'];
        }

        return $model;
    }
}
