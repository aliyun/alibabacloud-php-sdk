<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;

class ListTransitRouterMulticastGroupsRequest extends Model
{
    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $groupIpAddress;

    /**
     * @var bool
     */
    public $isGroupMember;

    /**
     * @var bool
     */
    public $isGroupSource;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string[]
     */
    public $networkInterfaceIds;

    /**
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
     * @var string[]
     */
    public $peerTransitRouterMulticastDomains;

    /**
     * @var string
     */
    public $resourceId;

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
    public $resourceType;

    /**
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @var string
     */
    public $transitRouterMulticastDomainId;

    /**
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'groupIpAddress' => 'GroupIpAddress',
        'isGroupMember' => 'IsGroupMember',
        'isGroupSource' => 'IsGroupSource',
        'maxResults' => 'MaxResults',
        'networkInterfaceIds' => 'NetworkInterfaceIds',
        'nextToken' => 'NextToken',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'peerTransitRouterMulticastDomains' => 'PeerTransitRouterMulticastDomains',
        'resourceId' => 'ResourceId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceType' => 'ResourceType',
        'transitRouterAttachmentId' => 'TransitRouterAttachmentId',
        'transitRouterMulticastDomainId' => 'TransitRouterMulticastDomainId',
        'vSwitchIds' => 'VSwitchIds',
    ];

    public function validate()
    {
        if (\is_array($this->networkInterfaceIds)) {
            Model::validateArray($this->networkInterfaceIds);
        }
        if (\is_array($this->peerTransitRouterMulticastDomains)) {
            Model::validateArray($this->peerTransitRouterMulticastDomains);
        }
        if (\is_array($this->vSwitchIds)) {
            Model::validateArray($this->vSwitchIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->groupIpAddress) {
            $res['GroupIpAddress'] = $this->groupIpAddress;
        }

        if (null !== $this->isGroupMember) {
            $res['IsGroupMember'] = $this->isGroupMember;
        }

        if (null !== $this->isGroupSource) {
            $res['IsGroupSource'] = $this->isGroupSource;
        }

        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }

        if (null !== $this->networkInterfaceIds) {
            if (\is_array($this->networkInterfaceIds)) {
                $res['NetworkInterfaceIds'] = [];
                $n1 = 0;
                foreach ($this->networkInterfaceIds as $item1) {
                    $res['NetworkInterfaceIds'][$n1++] = $item1;
                }
            }
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

        if (null !== $this->peerTransitRouterMulticastDomains) {
            if (\is_array($this->peerTransitRouterMulticastDomains)) {
                $res['PeerTransitRouterMulticastDomains'] = [];
                $n1 = 0;
                foreach ($this->peerTransitRouterMulticastDomains as $item1) {
                    $res['PeerTransitRouterMulticastDomains'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->transitRouterAttachmentId) {
            $res['TransitRouterAttachmentId'] = $this->transitRouterAttachmentId;
        }

        if (null !== $this->transitRouterMulticastDomainId) {
            $res['TransitRouterMulticastDomainId'] = $this->transitRouterMulticastDomainId;
        }

        if (null !== $this->vSwitchIds) {
            if (\is_array($this->vSwitchIds)) {
                $res['VSwitchIds'] = [];
                $n1 = 0;
                foreach ($this->vSwitchIds as $item1) {
                    $res['VSwitchIds'][$n1++] = $item1;
                }
            }
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

        if (isset($map['GroupIpAddress'])) {
            $model->groupIpAddress = $map['GroupIpAddress'];
        }

        if (isset($map['IsGroupMember'])) {
            $model->isGroupMember = $map['IsGroupMember'];
        }

        if (isset($map['IsGroupSource'])) {
            $model->isGroupSource = $map['IsGroupSource'];
        }

        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }

        if (isset($map['NetworkInterfaceIds'])) {
            if (!empty($map['NetworkInterfaceIds'])) {
                $model->networkInterfaceIds = [];
                $n1 = 0;
                foreach ($map['NetworkInterfaceIds'] as $item1) {
                    $model->networkInterfaceIds[$n1++] = $item1;
                }
            }
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

        if (isset($map['PeerTransitRouterMulticastDomains'])) {
            if (!empty($map['PeerTransitRouterMulticastDomains'])) {
                $model->peerTransitRouterMulticastDomains = [];
                $n1 = 0;
                foreach ($map['PeerTransitRouterMulticastDomains'] as $item1) {
                    $model->peerTransitRouterMulticastDomains[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['TransitRouterAttachmentId'])) {
            $model->transitRouterAttachmentId = $map['TransitRouterAttachmentId'];
        }

        if (isset($map['TransitRouterMulticastDomainId'])) {
            $model->transitRouterMulticastDomainId = $map['TransitRouterMulticastDomainId'];
        }

        if (isset($map['VSwitchIds'])) {
            if (!empty($map['VSwitchIds'])) {
                $model->vSwitchIds = [];
                $n1 = 0;
                foreach ($map['VSwitchIds'] as $item1) {
                    $model->vSwitchIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
