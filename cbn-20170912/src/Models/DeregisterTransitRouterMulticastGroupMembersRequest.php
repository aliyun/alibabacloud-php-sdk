<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;

class DeregisterTransitRouterMulticastGroupMembersRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var bool
     */
    public $dryRun;
    /**
     * @var string
     */
    public $groupIpAddress;
    /**
     * @var string[]
     */
    public $networkInterfaceIds;
    /**
     * @var string
     */
    public $ownerAccount;
    /**
     * @var int
     */
    public $ownerId;
    /**
     * @var string[]
     */
    public $peerTransitRouterMulticastDomains;
    /**
     * @var string
     */
    public $resourceOwnerAccount;
    /**
     * @var int
     */
    public $resourceOwnerId;
    /**
     * @var string
     */
    public $transitRouterMulticastDomainId;
    protected $_name = [
        'clientToken'                       => 'ClientToken',
        'dryRun'                            => 'DryRun',
        'groupIpAddress'                    => 'GroupIpAddress',
        'networkInterfaceIds'               => 'NetworkInterfaceIds',
        'ownerAccount'                      => 'OwnerAccount',
        'ownerId'                           => 'OwnerId',
        'peerTransitRouterMulticastDomains' => 'PeerTransitRouterMulticastDomains',
        'resourceOwnerAccount'              => 'ResourceOwnerAccount',
        'resourceOwnerId'                   => 'ResourceOwnerId',
        'transitRouterMulticastDomainId'    => 'TransitRouterMulticastDomainId',
    ];

    public function validate()
    {
        if (\is_array($this->networkInterfaceIds)) {
            Model::validateArray($this->networkInterfaceIds);
        }
        if (\is_array($this->peerTransitRouterMulticastDomains)) {
            Model::validateArray($this->peerTransitRouterMulticastDomains);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }

        if (null !== $this->groupIpAddress) {
            $res['GroupIpAddress'] = $this->groupIpAddress;
        }

        if (null !== $this->networkInterfaceIds) {
            if (\is_array($this->networkInterfaceIds)) {
                $res['NetworkInterfaceIds'] = [];
                $n1                         = 0;
                foreach ($this->networkInterfaceIds as $item1) {
                    $res['NetworkInterfaceIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->peerTransitRouterMulticastDomains) {
            if (\is_array($this->peerTransitRouterMulticastDomains)) {
                $res['PeerTransitRouterMulticastDomains'] = [];
                $n1                                       = 0;
                foreach ($this->peerTransitRouterMulticastDomains as $item1) {
                    $res['PeerTransitRouterMulticastDomains'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->transitRouterMulticastDomainId) {
            $res['TransitRouterMulticastDomainId'] = $this->transitRouterMulticastDomainId;
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
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }

        if (isset($map['GroupIpAddress'])) {
            $model->groupIpAddress = $map['GroupIpAddress'];
        }

        if (isset($map['NetworkInterfaceIds'])) {
            if (!empty($map['NetworkInterfaceIds'])) {
                $model->networkInterfaceIds = [];
                $n1                         = 0;
                foreach ($map['NetworkInterfaceIds'] as $item1) {
                    $model->networkInterfaceIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['PeerTransitRouterMulticastDomains'])) {
            if (!empty($map['PeerTransitRouterMulticastDomains'])) {
                $model->peerTransitRouterMulticastDomains = [];
                $n1                                       = 0;
                foreach ($map['PeerTransitRouterMulticastDomains'] as $item1) {
                    $model->peerTransitRouterMulticastDomains[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['TransitRouterMulticastDomainId'])) {
            $model->transitRouterMulticastDomainId = $map['TransitRouterMulticastDomainId'];
        }

        return $model;
    }
}
