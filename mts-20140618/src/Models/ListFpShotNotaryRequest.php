<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class ListFpShotNotaryRequest extends Model
{
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
    public $nextPageToken;

    /**
     * @var int
     */
    public $maximumPageSize;

    /**
     * @var string
     */
    public $startOfCreatedTimeRange;

    /**
     * @var string
     */
    public $endOfCreatedTimeRange;

    /**
     * @var string
     */
    public $fpDBId;

    /**
     * @var string
     */
    public $ownerAccount;
    protected $_name = [
        'ownerId'                 => 'OwnerId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'nextPageToken'           => 'NextPageToken',
        'maximumPageSize'         => 'MaximumPageSize',
        'startOfCreatedTimeRange' => 'StartOfCreatedTimeRange',
        'endOfCreatedTimeRange'   => 'EndOfCreatedTimeRange',
        'fpDBId'                  => 'FpDBId',
        'ownerAccount'            => 'OwnerAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->nextPageToken) {
            $res['NextPageToken'] = $this->nextPageToken;
        }
        if (null !== $this->maximumPageSize) {
            $res['MaximumPageSize'] = $this->maximumPageSize;
        }
        if (null !== $this->startOfCreatedTimeRange) {
            $res['StartOfCreatedTimeRange'] = $this->startOfCreatedTimeRange;
        }
        if (null !== $this->endOfCreatedTimeRange) {
            $res['EndOfCreatedTimeRange'] = $this->endOfCreatedTimeRange;
        }
        if (null !== $this->fpDBId) {
            $res['FpDBId'] = $this->fpDBId;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListFpShotNotaryRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['NextPageToken'])) {
            $model->nextPageToken = $map['NextPageToken'];
        }
        if (isset($map['MaximumPageSize'])) {
            $model->maximumPageSize = $map['MaximumPageSize'];
        }
        if (isset($map['StartOfCreatedTimeRange'])) {
            $model->startOfCreatedTimeRange = $map['StartOfCreatedTimeRange'];
        }
        if (isset($map['EndOfCreatedTimeRange'])) {
            $model->endOfCreatedTimeRange = $map['EndOfCreatedTimeRange'];
        }
        if (isset($map['FpDBId'])) {
            $model->fpDBId = $map['FpDBId'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        return $model;
    }
}
