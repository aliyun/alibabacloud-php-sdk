<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class ListTransitRouterMulticastGroupsRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among all requests. The token can contain only ASCII characters.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The IP address of the multicast group.
     *
     * Each multicast group is identified by its IP address.
     * @example 239.XX.XX.2
     *
     * @var string
     */
    public $groupIpAddress;

    /**
     * @description Specified whether to query the multicast members. Valid values:
     *
     *   **false**: no
     *   **true**: yes
     *
     * >- If you set only one of them or both of them, the specified values prevail.
     * @example false
     *
     * @var bool
     */
    public $isGroupMember;

    /**
     * @description Specifies whether to query the multicast sources. Valid values:
     *
     *   **false**: no
     *   **true**: yes
     *
     * >- If you set only one of them or both of them, the specified values prevail.
     * @example true
     *
     * @var bool
     */
    public $isGroupSource;

    /**
     * @description The number of entries to return on each page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The IDs of ENIs.
     *
     * @var string[]
     */
    public $networkInterfaceIds;

    /**
     * @description The token that determines the start point of the query. Valid values:
     *
     *   If this is your first query and no next queries are to be sent, ignore this parameter.
     *   If a subsequent query is to be sent, set the parameter to the value of NextToken that is returned from the last call.
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
     * @description The ID of the inter-region multicast domain.
     *
     * @var string[]
     */
    public $peerTransitRouterMulticastDomains;

    /**
     * @description The ID of the resource associated with the multicast resource.
     *
     * @example vpc-p0w9alkte4w2htrqe****
     *
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
     * @description The type of the multicast resource. Valid values:
     *
     *   **VPC**: queries multicast resources by VPC.
     *   **TR**: queries multicast resources that are also deployed in a different region.
     *
     * @example VPC
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The ID of the network instance connection.
     *
     * @example tr-attach-g3kz2k3u76amsk****
     *
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @description The ID of the multicast domain.
     *
     * @example tr-mcast-domain-5mjb5gjb6dgu98****
     *
     * @var string
     */
    public $transitRouterMulticastDomainId;

    /**
     * @description The vSwitch IDs.
     *
     * @var string[]
     */
    public $vSwitchIds;
    protected $_name = [
        'clientToken'                       => 'ClientToken',
        'groupIpAddress'                    => 'GroupIpAddress',
        'isGroupMember'                     => 'IsGroupMember',
        'isGroupSource'                     => 'IsGroupSource',
        'maxResults'                        => 'MaxResults',
        'networkInterfaceIds'               => 'NetworkInterfaceIds',
        'nextToken'                         => 'NextToken',
        'ownerAccount'                      => 'OwnerAccount',
        'ownerId'                           => 'OwnerId',
        'peerTransitRouterMulticastDomains' => 'PeerTransitRouterMulticastDomains',
        'resourceId'                        => 'ResourceId',
        'resourceOwnerAccount'              => 'ResourceOwnerAccount',
        'resourceOwnerId'                   => 'ResourceOwnerId',
        'resourceType'                      => 'ResourceType',
        'transitRouterAttachmentId'         => 'TransitRouterAttachmentId',
        'transitRouterMulticastDomainId'    => 'TransitRouterMulticastDomainId',
        'vSwitchIds'                        => 'VSwitchIds',
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
            $res['NetworkInterfaceIds'] = $this->networkInterfaceIds;
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
            $res['PeerTransitRouterMulticastDomains'] = $this->peerTransitRouterMulticastDomains;
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
            $res['VSwitchIds'] = $this->vSwitchIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTransitRouterMulticastGroupsRequest
     */
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
                $model->networkInterfaceIds = $map['NetworkInterfaceIds'];
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
                $model->peerTransitRouterMulticastDomains = $map['PeerTransitRouterMulticastDomains'];
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
                $model->vSwitchIds = $map['VSwitchIds'];
            }
        }

        return $model;
    }
}
