<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateNetworkAclEntriesRequest\egressAclEntries;
use AlibabaCloud\SDK\Vpc\V20160428\Models\UpdateNetworkAclEntriesRequest\ingressAclEntries;
use AlibabaCloud\Tea\Model;

class UpdateNetworkAclEntriesRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The information about the outbound rules.
     *
     * @var egressAclEntries[]
     */
    public $egressAclEntries;

    /**
     * @description The information about the inbound rule.
     *
     * @var ingressAclEntries[]
     */
    public $ingressAclEntries;

    /**
     * @description The ID of the network ACL.
     *
     * @example nacl-bp1lhl0taikrzxsc****
     *
     * @var string
     */
    public $networkAclId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the network ACL.
     *
     * You can call the [DescribeRegions](~~36063~~) operation to query the most recent region list.
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
     * @description Specifies whether to update outbound rules. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * >  This parameter cannot be used to add outbound rules to ACLs. If you want to add more outbound rules to ACLs, specify both the existing rule and the rule that you want to add when you call this API operation. If you specify only the rule that you want to add, it overwrites the existing rule.
     * @example false
     *
     * @var bool
     */
    public $updateEgressAclEntries;

    /**
     * @description Specifies whether to update inbound rules. Valid values:
     *
     *   **true**
     *   **false** (default)
     *
     * >  This parameter cannot be used to add inbound rules to ACLs. If you want to add more inbound rules to ACLs, you must specify both the existing rule and the rule that you want to add when you call this API operation. If you specify only the rule that you want to add, it overwrites the existing rule.
     * @example false
     *
     * @var bool
     */
    public $updateIngressAclEntries;
    protected $_name = [
        'clientToken'             => 'ClientToken',
        'egressAclEntries'        => 'EgressAclEntries',
        'ingressAclEntries'       => 'IngressAclEntries',
        'networkAclId'            => 'NetworkAclId',
        'ownerId'                 => 'OwnerId',
        'regionId'                => 'RegionId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'updateEgressAclEntries'  => 'UpdateEgressAclEntries',
        'updateIngressAclEntries' => 'UpdateIngressAclEntries',
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
        if (null !== $this->egressAclEntries) {
            $res['EgressAclEntries'] = [];
            if (null !== $this->egressAclEntries && \is_array($this->egressAclEntries)) {
                $n = 0;
                foreach ($this->egressAclEntries as $item) {
                    $res['EgressAclEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ingressAclEntries) {
            $res['IngressAclEntries'] = [];
            if (null !== $this->ingressAclEntries && \is_array($this->ingressAclEntries)) {
                $n = 0;
                foreach ($this->ingressAclEntries as $item) {
                    $res['IngressAclEntries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->networkAclId) {
            $res['NetworkAclId'] = $this->networkAclId;
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
        if (null !== $this->updateEgressAclEntries) {
            $res['UpdateEgressAclEntries'] = $this->updateEgressAclEntries;
        }
        if (null !== $this->updateIngressAclEntries) {
            $res['UpdateIngressAclEntries'] = $this->updateIngressAclEntries;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateNetworkAclEntriesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['EgressAclEntries'])) {
            if (!empty($map['EgressAclEntries'])) {
                $model->egressAclEntries = [];
                $n                       = 0;
                foreach ($map['EgressAclEntries'] as $item) {
                    $model->egressAclEntries[$n++] = null !== $item ? egressAclEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['IngressAclEntries'])) {
            if (!empty($map['IngressAclEntries'])) {
                $model->ingressAclEntries = [];
                $n                        = 0;
                foreach ($map['IngressAclEntries'] as $item) {
                    $model->ingressAclEntries[$n++] = null !== $item ? ingressAclEntries::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NetworkAclId'])) {
            $model->networkAclId = $map['NetworkAclId'];
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
        if (isset($map['UpdateEgressAclEntries'])) {
            $model->updateEgressAclEntries = $map['UpdateEgressAclEntries'];
        }
        if (isset($map['UpdateIngressAclEntries'])) {
            $model->updateIngressAclEntries = $map['UpdateIngressAclEntries'];
        }

        return $model;
    }
}
