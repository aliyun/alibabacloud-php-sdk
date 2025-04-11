<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;

class ListTransitRouterCidrAllocationRequest extends Model
{
    /**
     * @var string
     */
    public $attachmentId;

    /**
     * @var string
     */
    public $attachmentName;

    /**
     * @var string
     */
    public $cidr;

    /**
     * @var string
     */
    public $cidrBlock;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $dedicatedOwnerId;

    /**
     * @var bool
     */
    public $dryRun;

    /**
     * @var int
     */
    public $maxResults;

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
     * @var string
     */
    public $transitRouterCidrId;

    /**
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'attachmentId' => 'AttachmentId',
        'attachmentName' => 'AttachmentName',
        'cidr' => 'Cidr',
        'cidrBlock' => 'CidrBlock',
        'clientToken' => 'ClientToken',
        'dedicatedOwnerId' => 'DedicatedOwnerId',
        'dryRun' => 'DryRun',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'transitRouterCidrId' => 'TransitRouterCidrId',
        'transitRouterId' => 'TransitRouterId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
