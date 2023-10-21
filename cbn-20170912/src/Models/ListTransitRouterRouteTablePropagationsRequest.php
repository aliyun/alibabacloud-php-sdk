<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class ListTransitRouterRouteTablePropagationsRequest extends Model
{
    /**
     * @description The number of entries to return on each page. Default value: **50**.
     *
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the query.
     *
     * @example dd20****
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
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The status of the route learning correlation. Valid values:
     *
     *   **Active**: available
     *   **Enabling**: being enabled
     *   **Disabling**: being disabled
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the network instance connection.
     *
     * @example tr-attach-vx6iwhjr1x1j78****
     *
     * @var string
     */
    public $transitRouterAttachmentId;

    /**
     * @description The ID of the network instance.
     *
     * @example vpc-bp1h8vbrbcgohcju5****
     *
     * @var string
     */
    public $transitRouterAttachmentResourceId;

    /**
     * @description The type of the network instance. Valid values:
     *
     *   **VPC**: virtual private cloud (VPC)
     *   **VBR**: virtual border router (VBR)
     *   **TR**: transit router
     *   **VPN**: VPN connection
     *
     * @example VPC
     *
     * @var string
     */
    public $transitRouterAttachmentResourceType;

    /**
     * @description The ID of the route table of the Enterprise Edition transit router.
     *
     * @example vtb-bp1dudbh2d5na6b50****
     *
     * @var string
     */
    public $transitRouterRouteTableId;
    protected $_name = [
        'maxResults'                          => 'MaxResults',
        'nextToken'                           => 'NextToken',
        'ownerAccount'                        => 'OwnerAccount',
        'ownerId'                             => 'OwnerId',
        'resourceOwnerAccount'                => 'ResourceOwnerAccount',
        'resourceOwnerId'                     => 'ResourceOwnerId',
        'status'                              => 'Status',
        'transitRouterAttachmentId'           => 'TransitRouterAttachmentId',
        'transitRouterAttachmentResourceId'   => 'TransitRouterAttachmentResourceId',
        'transitRouterAttachmentResourceType' => 'TransitRouterAttachmentResourceType',
        'transitRouterRouteTableId'           => 'TransitRouterRouteTableId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->transitRouterAttachmentId) {
            $res['TransitRouterAttachmentId'] = $this->transitRouterAttachmentId;
        }
        if (null !== $this->transitRouterAttachmentResourceId) {
            $res['TransitRouterAttachmentResourceId'] = $this->transitRouterAttachmentResourceId;
        }
        if (null !== $this->transitRouterAttachmentResourceType) {
            $res['TransitRouterAttachmentResourceType'] = $this->transitRouterAttachmentResourceType;
        }
        if (null !== $this->transitRouterRouteTableId) {
            $res['TransitRouterRouteTableId'] = $this->transitRouterRouteTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTransitRouterRouteTablePropagationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TransitRouterAttachmentId'])) {
            $model->transitRouterAttachmentId = $map['TransitRouterAttachmentId'];
        }
        if (isset($map['TransitRouterAttachmentResourceId'])) {
            $model->transitRouterAttachmentResourceId = $map['TransitRouterAttachmentResourceId'];
        }
        if (isset($map['TransitRouterAttachmentResourceType'])) {
            $model->transitRouterAttachmentResourceType = $map['TransitRouterAttachmentResourceType'];
        }
        if (isset($map['TransitRouterRouteTableId'])) {
            $model->transitRouterRouteTableId = $map['TransitRouterRouteTableId'];
        }

        return $model;
    }
}
