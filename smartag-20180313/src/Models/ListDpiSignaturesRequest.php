<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Tea\Model;

class ListDpiSignaturesRequest extends Model
{
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
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var string
     */
    public $dpiGroupId;

    /**
     * @var string[]
     */
    public $dpiSignatureIds;

    /**
     * @var string[]
     */
    public $dpiSignatureNames;
    protected $_name = [
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'regionId'             => 'RegionId',
        'nextToken'            => 'NextToken',
        'maxResults'           => 'MaxResults',
        'dpiGroupId'           => 'DpiGroupId',
        'dpiSignatureIds'      => 'DpiSignatureIds',
        'dpiSignatureNames'    => 'DpiSignatureNames',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->dpiGroupId) {
            $res['DpiGroupId'] = $this->dpiGroupId;
        }
        if (null !== $this->dpiSignatureIds) {
            $res['DpiSignatureIds'] = $this->dpiSignatureIds;
        }
        if (null !== $this->dpiSignatureNames) {
            $res['DpiSignatureNames'] = $this->dpiSignatureNames;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListDpiSignaturesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['DpiGroupId'])) {
            $model->dpiGroupId = $map['DpiGroupId'];
        }
        if (isset($map['DpiSignatureIds'])) {
            if (!empty($map['DpiSignatureIds'])) {
                $model->dpiSignatureIds = $map['DpiSignatureIds'];
            }
        }
        if (isset($map['DpiSignatureNames'])) {
            if (!empty($map['DpiSignatureNames'])) {
                $model->dpiSignatureNames = $map['DpiSignatureNames'];
            }
        }

        return $model;
    }
}
