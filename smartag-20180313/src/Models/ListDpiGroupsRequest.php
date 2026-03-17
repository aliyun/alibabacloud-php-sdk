<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\Dara\Model;

class ListDpiGroupsRequest extends Model
{
    /**
     * @var string[]
     */
    public $dpiGroupIds;

    /**
     * @var string[]
     */
    public $dpiGroupNames;

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
        'dpiGroupIds' => 'DpiGroupIds',
        'dpiGroupNames' => 'DpiGroupNames',
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
        if (\is_array($this->dpiGroupIds)) {
            Model::validateArray($this->dpiGroupIds);
        }
        if (\is_array($this->dpiGroupNames)) {
            Model::validateArray($this->dpiGroupNames);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->dpiGroupIds) {
            if (\is_array($this->dpiGroupIds)) {
                $res['DpiGroupIds'] = [];
                $n1 = 0;
                foreach ($this->dpiGroupIds as $item1) {
                    $res['DpiGroupIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->dpiGroupNames) {
            if (\is_array($this->dpiGroupNames)) {
                $res['DpiGroupNames'] = [];
                $n1 = 0;
                foreach ($this->dpiGroupNames as $item1) {
                    $res['DpiGroupNames'][$n1] = $item1;
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
        if (isset($map['DpiGroupIds'])) {
            if (!empty($map['DpiGroupIds'])) {
                $model->dpiGroupIds = [];
                $n1 = 0;
                foreach ($map['DpiGroupIds'] as $item1) {
                    $model->dpiGroupIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['DpiGroupNames'])) {
            if (!empty($map['DpiGroupNames'])) {
                $model->dpiGroupNames = [];
                $n1 = 0;
                foreach ($map['DpiGroupNames'] as $item1) {
                    $model->dpiGroupNames[$n1] = $item1;
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
