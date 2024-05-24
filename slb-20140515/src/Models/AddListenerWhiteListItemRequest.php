<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Slb\V20140515\Models;

use AlibabaCloud\Tea\Model;

class AddListenerWhiteListItemRequest extends Model
{
    /**
     * @description The frontend port that is used by the CLB instance.
     *
     * This parameter is required.
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The frontend protocol that is used by the CLB instance.
     *
     * >  This parameter is required when listeners that use different protocols listen on the same port.
     * @example https
     *
     * @var string
     */
    public $listenerProtocol;

    /**
     * @description The ID of the CLB instance.
     *
     * This parameter is required.
     * @example lb-bp1o94dp5i6ea*******
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
     * @description The ID of the region where the Classic Load Balancer (CLB) instance is created.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
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
     * @description The IP addresses or CIDR blocks that you want to add to the whitelist.
     *
     * This parameter takes effect when the **AccessControlStatus** parameter of the listener is set to **open_white_list**.
     *
     * Separate multiple IP addresses or CIDR blocks with commas (,).
     *
     * You cannot enter **0.0.0.0** or **0.0.0.0/0**. To disable access control, you can call the [SetListenerAccessControlStatus](https://help.aliyun.com/document_detail/27599.html) operation to set the value of the **AccessControlStatus** parameter to **close**.
     *
     * This parameter is required.
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $sourceItems;
    protected $_name = [
        'listenerPort'         => 'ListenerPort',
        'listenerProtocol'     => 'ListenerProtocol',
        'loadBalancerId'       => 'LoadBalancerId',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'sourceItems'          => 'SourceItems',
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
        if (null !== $this->sourceItems) {
            $res['SourceItems'] = $this->sourceItems;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddListenerWhiteListItemRequest
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
        if (isset($map['SourceItems'])) {
            $model->sourceItems = $map['SourceItems'];
        }

        return $model;
    }
}
