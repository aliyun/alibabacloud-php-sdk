<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class QueryMediaListRequest extends Model
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
    public $mediaIds;

    /**
     * @var bool
     */
    public $includePlayList;

    /**
     * @var bool
     */
    public $includeSnapshotList;

    /**
     * @var bool
     */
    public $includeMediaInfo;

    /**
     * @var bool
     */
    public $includeSummaryList;

    /**
     * @var string
     */
    public $ownerAccount;
    protected $_name = [
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'mediaIds'             => 'MediaIds',
        'includePlayList'      => 'IncludePlayList',
        'includeSnapshotList'  => 'IncludeSnapshotList',
        'includeMediaInfo'     => 'IncludeMediaInfo',
        'includeSummaryList'   => 'IncludeSummaryList',
        'ownerAccount'         => 'OwnerAccount',
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
        if (null !== $this->mediaIds) {
            $res['MediaIds'] = $this->mediaIds;
        }
        if (null !== $this->includePlayList) {
            $res['IncludePlayList'] = $this->includePlayList;
        }
        if (null !== $this->includeSnapshotList) {
            $res['IncludeSnapshotList'] = $this->includeSnapshotList;
        }
        if (null !== $this->includeMediaInfo) {
            $res['IncludeMediaInfo'] = $this->includeMediaInfo;
        }
        if (null !== $this->includeSummaryList) {
            $res['IncludeSummaryList'] = $this->includeSummaryList;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMediaListRequest
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
        if (isset($map['MediaIds'])) {
            $model->mediaIds = $map['MediaIds'];
        }
        if (isset($map['IncludePlayList'])) {
            $model->includePlayList = $map['IncludePlayList'];
        }
        if (isset($map['IncludeSnapshotList'])) {
            $model->includeSnapshotList = $map['IncludeSnapshotList'];
        }
        if (isset($map['IncludeMediaInfo'])) {
            $model->includeMediaInfo = $map['IncludeMediaInfo'];
        }
        if (isset($map['IncludeSummaryList'])) {
            $model->includeSummaryList = $map['IncludeSummaryList'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }

        return $model;
    }
}
