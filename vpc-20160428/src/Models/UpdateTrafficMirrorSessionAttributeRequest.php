<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class UpdateTrafficMirrorSessionAttributeRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system uses **RequestId** as **ClientToken**. **RequestId** may be different for each API request.
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe63****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description Specifies whether to precheck the request without performing the operation. Valid values:
     *
     *   **true**: checks the request without performing the operation. The system prechecks the required parameters, request syntax, and limits. If the request fails the precheck, an error message is returned. If the request passes the precheck, the `DryRunOperation` error code is returned.
     *   **false**: sends the request. If the request passes the check, a 2xx HTTP status code is returned and the operation is performed. This is the default value.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Specifies whether to enable the traffic mirror session.
     *
     *   **false**: disables the traffic mirror session. This is the default value.
     *   **true**: enables the traffic mirror session.
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
     * @var int
     */
    public $packetLength;

    /**
     * @description The priority of the traffic mirror session. Valid values: **1** to **32766**.
     *
     * A smaller value specifies a higher priority. You cannot specify identical priorities for traffic mirror sessions that are created in the same region by using the same account.
     * @example 2
     *
     * @var int
     */
    public $priority;

    /**
     * @description The region ID of the traffic mirror session. You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list. For more information about regions that support traffic mirroring, see [Overview of traffic mirroring](~~207513~~).
     *
     * @example cn-hongkong
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The ID of the traffic mirror filter.
     *
     * @example tmf-j6cmls82xnc86vtpe****
     *
     * @var string
     */
    public $trafficMirrorFilterId;

    /**
     * @description The description of the traffic mirror session.
     *
     * The description must be 1 to 256 characters in length and cannot start with `http://` or `https://`.
     * @example This is a new session.
     *
     * @var string
     */
    public $trafficMirrorSessionDescription;

    /**
     * @description The ID of the traffic mirror session.
     *
     * @example tms-j6cla50buc44ap8tu****
     *
     * @var string
     */
    public $trafficMirrorSessionId;

    /**
     * @description The name of the traffic mirror session.
     *
     * The name must be 1 to 128 characters in length and cannot start with `http://` or `https://`.
     * @example abc
     *
     * @var string
     */
    public $trafficMirrorSessionName;

    /**
     * @description The ID of the traffic mirror destination.
     *
     * @example eni-j6c2fp57q8rr47rp*****
     *
     * @var string
     */
    public $trafficMirrorTargetId;

    /**
     * @description The type of the traffic mirror destination. Valid values:
     *
     *   **NetworkInterface**: an ENI
     *   **SLB**: an internal-facing Server Load Balancer (SLB) instance
     *
     * @example NetworkInterface
     *
     * @var string
     */
    public $trafficMirrorTargetType;

    /**
     * @description The VXLAN network identifier (VNI) that is used to distinguish different mirrored traffic. Valid values: **0** to **16777215**.
     *
     * You can use VNIs to identify mirrored traffic from different sessions at the traffic mirror destination. If you do not specify a VNI, the system randomly allocates a VNI. If you want the system to randomly allocate a VNI, ignore this parameter.
     * @example 10
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
        'resourceOwnerAccount'            => 'ResourceOwnerAccount',
        'resourceOwnerId'                 => 'ResourceOwnerId',
        'trafficMirrorFilterId'           => 'TrafficMirrorFilterId',
        'trafficMirrorSessionDescription' => 'TrafficMirrorSessionDescription',
        'trafficMirrorSessionId'          => 'TrafficMirrorSessionId',
        'trafficMirrorSessionName'        => 'TrafficMirrorSessionName',
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
        if (null !== $this->trafficMirrorSessionId) {
            $res['TrafficMirrorSessionId'] = $this->trafficMirrorSessionId;
        }
        if (null !== $this->trafficMirrorSessionName) {
            $res['TrafficMirrorSessionName'] = $this->trafficMirrorSessionName;
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
     * @return UpdateTrafficMirrorSessionAttributeRequest
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
        if (isset($map['TrafficMirrorSessionId'])) {
            $model->trafficMirrorSessionId = $map['TrafficMirrorSessionId'];
        }
        if (isset($map['TrafficMirrorSessionName'])) {
            $model->trafficMirrorSessionName = $map['TrafficMirrorSessionName'];
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
