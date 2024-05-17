<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class ListTransitRouterCidrAllocationRequest extends Model
{
    /**
     * @description The ID of the network instance connection.
     *
     * @example tr-attach-2nalp6yksc805w****
     *
     * @var string
     */
    public $attachmentId;

    /**
     * @description The name of the network instance connection.
     *
     * @example nametest
     *
     * @var string
     */
    public $attachmentName;

    /**
     * @description The CIDR block of the transit router.
     *
     * @example 192.168.10.0/24
     *
     * @var string
     */
    public $cidr;

    /**
     * @description The CIDR blocks that have IP addresses allocated to network instances.
     *
     * @example 192.168.10.0/28
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * >  If you do not set this parameter, ClientToken is set to the value of RequestId. The value of RequestId for each API request may be different.
     * @example 123e4567-e89b-12d3-a456-426****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The CIDR block that is for exclusive use.
     *
     * Set the value to **VPN**, which specifies the CIDR block that is reserved for VPN connections.
     * @example VPN
     *
     * @var string
     */
    public $dedicatedOwnerId;

    /**
     * @description Specifies whether to perform a dry run. Valid values:
     *
     *   **true**: performs a dry run. The system checks the required parameters, request syntax, and limits. If the request fails the dry run, an error message is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and sends the request.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The number of entries to return on each page.
     *
     *   If you do not set **MaxResults**, it indicates that you do not need to query results in batches. The value of **MaxResults** indicates the total number of entries.
     *
     *   If a value is specified for **MaxResults**, it indicates that you need to query results in batches. Valid values: **1** to **100**. We recommend that you set **MaxResults** to **20**.
     *
     * The value of **MaxResults** in the response indicates the number of entries in the current batch.
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the query. Valid values:
     *
     *   If this is your first query or no subsequent query is to be sent, ignore this parameter.
     *   If a subsequent query is to be sent, set the value to the value of **NextToken** that is returned from the last call.
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
     * @description The ID of the region where the transit router is deployed.
     *
     * This parameter is required.
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
     * @description The ID of the CIDR block.
     *
     * You can call the [ListTransitRouterCidr](https://help.aliyun.com/document_detail/462772.html) operation to query the ID of a CIDR block.
     * @example cidr-0zv0q9crqpntzz****
     *
     * @var string
     */
    public $transitRouterCidrId;

    /**
     * @description The ID of the transit router.
     *
     * This parameter is required.
     * @example tr-p0w3x8c9em72a40nw****
     *
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'attachmentId'         => 'AttachmentId',
        'attachmentName'       => 'AttachmentName',
        'cidr'                 => 'Cidr',
        'cidrBlock'            => 'CidrBlock',
        'clientToken'          => 'ClientToken',
        'dedicatedOwnerId'     => 'DedicatedOwnerId',
        'dryRun'               => 'DryRun',
        'maxResults'           => 'MaxResults',
        'nextToken'            => 'NextToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'transitRouterCidrId'  => 'TransitRouterCidrId',
        'transitRouterId'      => 'TransitRouterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attachmentId) {
            $res['AttachmentId'] = $this->attachmentId;
        }
        if (null !== $this->attachmentName) {
            $res['AttachmentName'] = $this->attachmentName;
        }
        if (null !== $this->cidr) {
            $res['Cidr'] = $this->cidr;
        }
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->dedicatedOwnerId) {
            $res['DedicatedOwnerId'] = $this->dedicatedOwnerId;
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->transitRouterCidrId) {
            $res['TransitRouterCidrId'] = $this->transitRouterCidrId;
        }
        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTransitRouterCidrAllocationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttachmentId'])) {
            $model->attachmentId = $map['AttachmentId'];
        }
        if (isset($map['AttachmentName'])) {
            $model->attachmentName = $map['AttachmentName'];
        }
        if (isset($map['Cidr'])) {
            $model->cidr = $map['Cidr'];
        }
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DedicatedOwnerId'])) {
            $model->dedicatedOwnerId = $map['DedicatedOwnerId'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TransitRouterCidrId'])) {
            $model->transitRouterCidrId = $map['TransitRouterCidrId'];
        }
        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        return $model;
    }
}
