<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class UpdateTrafficMirrorFilterRuleAttributeRequest extends Model
{
    /**
     * @description The new priority of the inbound or outbound rule. A smaller value indicates a higher priority.
     *
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe637760
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The new destination port range of the inbound or outbound traffic.
     *
     * >  If you set **Protocol** to **ICMP**, you cannot change the port range.
     * @example 10.0.0.0/24
     *
     * @var string
     */
    public $destinationCidrBlock;

    /**
     * @description The ID of the region to which the mirrored traffic belongs.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list. For more information about regions that support traffic mirroring, see [Overview of traffic mirroring](~~207513~~).
     * @example -1/-1
     *
     * @var string
     */
    public $destinationPortRange;

    /**
     * @description The new protocol that is used by the traffic to be mirrored by the inbound or outbound rule. Valid values:
     *
     *   **ALL**: all protocols
     *   **ICMP**: Internet Control Message Protocol (ICMP)
     *   **TCP**: TCP
     *   **UDP**: User Datagram Protocol (UDP)
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The new action of the inbound or outbound rule. Valid values:
     *
     *   **accept**: accepts network traffic.
     *   **drop**: drops network traffic.
     *
     * @example 1
     *
     * @var int
     */
    public $priority;

    /**
     * @description The new destination CIDR block of the inbound or outbound traffic.
     *
     * @example ICMP
     *
     * @var string
     */
    public $protocol;

    /**
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
     * @description The new source CIDR block of the inbound or outbound traffic.
     *
     * @example accept
     *
     * @var string
     */
    public $ruleAction;

    /**
     * @description The new source port range of the inbound or outbound traffic.
     *
     * >  If you set **Protocol** to **ICMP**, you cannot change the port range.
     * @example 0.0.0.0/0
     *
     * @var string
     */
    public $sourceCidrBlock;

    /**
     * @description The ID of the request.
     *
     * @example 22/40
     *
     * @var string
     */
    public $sourcePortRange;

    /**
     * @description Specifies whether to check the request without performing the operation. Valid values:
     *
     *   **true**: only checks the API request. The configuration of the inbound or outbound rule is not modified. The system checks the required parameters, request syntax, and limits. If the request fails to pass the check, an error message is returned. If the request passes the precheck, the `DryRunOperation` error code is returned.
     *   **false**: sends the request. This is the default value. If the request passes the check, a 2xx HTTP status code is returned and the configuration of the inbound or outbound rule is modified.
     *
     * @example tmr-j6c89rzmtd3hhdugq****
     *
     * @var string
     */
    public $trafficMirrorFilterRuleId;
    protected $_name = [
        'clientToken'               => 'ClientToken',
        'destinationCidrBlock'      => 'DestinationCidrBlock',
        'destinationPortRange'      => 'DestinationPortRange',
        'dryRun'                    => 'DryRun',
        'ownerAccount'              => 'OwnerAccount',
        'ownerId'                   => 'OwnerId',
        'priority'                  => 'Priority',
        'protocol'                  => 'Protocol',
        'regionId'                  => 'RegionId',
        'resourceOwnerAccount'      => 'ResourceOwnerAccount',
        'resourceOwnerId'           => 'ResourceOwnerId',
        'ruleAction'                => 'RuleAction',
        'sourceCidrBlock'           => 'SourceCidrBlock',
        'sourcePortRange'           => 'SourcePortRange',
        'trafficMirrorFilterRuleId' => 'TrafficMirrorFilterRuleId',
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
        if (null !== $this->destinationCidrBlock) {
            $res['DestinationCidrBlock'] = $this->destinationCidrBlock;
        }
        if (null !== $this->destinationPortRange) {
            $res['DestinationPortRange'] = $this->destinationPortRange;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
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
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
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
        if (null !== $this->ruleAction) {
            $res['RuleAction'] = $this->ruleAction;
        }
        if (null !== $this->sourceCidrBlock) {
            $res['SourceCidrBlock'] = $this->sourceCidrBlock;
        }
        if (null !== $this->sourcePortRange) {
            $res['SourcePortRange'] = $this->sourcePortRange;
        }
        if (null !== $this->trafficMirrorFilterRuleId) {
            $res['TrafficMirrorFilterRuleId'] = $this->trafficMirrorFilterRuleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTrafficMirrorFilterRuleAttributeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DestinationCidrBlock'])) {
            $model->destinationCidrBlock = $map['DestinationCidrBlock'];
        }
        if (isset($map['DestinationPortRange'])) {
            $model->destinationPortRange = $map['DestinationPortRange'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
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
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
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
        if (isset($map['RuleAction'])) {
            $model->ruleAction = $map['RuleAction'];
        }
        if (isset($map['SourceCidrBlock'])) {
            $model->sourceCidrBlock = $map['SourceCidrBlock'];
        }
        if (isset($map['SourcePortRange'])) {
            $model->sourcePortRange = $map['SourcePortRange'];
        }
        if (isset($map['TrafficMirrorFilterRuleId'])) {
            $model->trafficMirrorFilterRuleId = $map['TrafficMirrorFilterRuleId'];
        }

        return $model;
    }
}
