<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class ListDpiSignaturesRequest extends Model
{
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
    protected $_name = [
        'dpiGroupId' => 'DpiGroupId',
        'dpiSignatureIds' => 'DpiSignatureIds',
        'dpiSignatureNames' => 'DpiSignatureNames',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        if (\is_array($this->dpiSignatureIds)) {
            Model::validateArray($this->dpiSignatureIds);
        }
        if (\is_array($this->dpiSignatureNames)) {
            Model::validateArray($this->dpiSignatureNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dpiGroupId) {
            $res['DpiGroupId'] = $this->dpiGroupId;
        }

        if (null !== $this->dpiSignatureIds) {
            if (\is_array($this->dpiSignatureIds)) {
                $res['DpiSignatureIds'] = [];
                $n1 = 0;
                foreach ($this->dpiSignatureIds as $item1) {
                    $res['DpiSignatureIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dpiSignatureNames) {
            if (\is_array($this->dpiSignatureNames)) {
                $res['DpiSignatureNames'] = [];
                $n1 = 0;
                foreach ($this->dpiSignatureNames as $item1) {
                    $res['DpiSignatureNames'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DpiGroupId'])) {
            $model->dpiGroupId = $map['DpiGroupId'];
        }

        if (isset($map['DpiSignatureIds'])) {
            if (!empty($map['DpiSignatureIds'])) {
                $model->dpiSignatureIds = [];
                $n1 = 0;
                foreach ($map['DpiSignatureIds'] as $item1) {
                    $model->dpiSignatureIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DpiSignatureNames'])) {
            if (!empty($map['DpiSignatureNames'])) {
                $model->dpiSignatureNames = [];
                $n1 = 0;
                foreach ($map['DpiSignatureNames'] as $item1) {
                    $model->dpiSignatureNames[$n1] = $item1;
                    ++$n1;
                }
            }
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

        return $model;
    }
}
