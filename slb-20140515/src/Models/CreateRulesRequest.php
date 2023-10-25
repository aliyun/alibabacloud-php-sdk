<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class CreateRulesRequest extends Model
{
    /**
     * @description The frontend listener port that is used by the SLB instance.
     *
     * Valid values: **1 to 65535**.
     * @example 443
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The frontend protocol that is used by the SLB instance.
     *
     * > This parameter is required if the same port is used by listeners that use different protocols.
     * @example https
     *
     * @var string
     */
    public $listenerProtocol;

    /**
     * @description The ID of the SLB instance.
     *
     * @example lb-bp1ca0zt07t934w******
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the region where the Server Load Balancer (SLB) instance is deployed.
     *
     * You can call the [DescribeRegions](~~27584~~) operation to query the most recent region list.
     * @example cn-hangzhou
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
     * @description The forwarding rules that you want to create. You can create up to 10 forwarding rules in each request. Each forwarding rule contains the following parameters:
     *
     *   **RuleName**: Required. The value must be of the STRING type. The name of the forwarding rule. The name must be 1 to 40 characters in length, and can contain letters, digits, hyphens (-), forward slashes (/), periods (.), and underscores (\_). Forwarding rule names must be unique within the same listener.
     *   **Domain**: Optional. The value must be of the STRING type. The domain name that is associated with the forwarding rule. You must specify at least one of this parameter and **Url**.
     *   **Url**: Optional. The value must be of the STRING type. The URL must be 1 to 80 characters in length and can contain only letters, digits, hyphens (-), forward slashes (/), periods (.), percent signs (%), question marks (?), number signs (#), and ampersands (&). The URL cannot be a forward slash (/). However, the URL must start with a forward slash (/). You must specify at least one of this parameter and **Domain**.
     *   **VServerGroupId**: Required. The value must be of the STRING type. The ID of the vServer group that is associated with the forwarding rule.
     *
     * > You must specify at least one of `Domain` and `Url`. The combination of `Domain` and `Url` must be unique within the same listener.
     * @example [{"RuleName":"Rule2","Domain":"test.com","VServerGroupId":"rsp-bp114ni******"}]
     *
     * @var string
     */
    public $ruleList;
    protected $_name = [
        'listenerPort'         => 'ListenerPort',
        'listenerProtocol'     => 'ListenerProtocol',
        'loadBalancerId'       => 'LoadBalancerId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'ruleList'             => 'RuleList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->ruleList) {
            $res['RuleList'] = $this->ruleList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateRulesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['RuleList'])) {
            $model->ruleList = $map['RuleList'];
        }

        return $model;
    }
}
