<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mts\V20140618\Models;

use AlibabaCloud\Tea\Model;

class QueryMediaListByURLRequest extends Model
{
    /**
     * @var string
     */
    public $fileURLs;

    /**
     * @var bool
     */
    public $includeMediaInfo;

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
    public $includeSummaryList;

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
    protected $_name = [
        'fileURLs'             => 'FileURLs',
        'includeMediaInfo'     => 'IncludeMediaInfo',
        'includePlayList'      => 'IncludePlayList',
        'includeSnapshotList'  => 'IncludeSnapshotList',
        'includeSummaryList'   => 'IncludeSummaryList',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileURLs) {
            $res['FileURLs'] = $this->fileURLs;
        }
        if (null !== $this->includeMediaInfo) {
            $res['IncludeMediaInfo'] = $this->includeMediaInfo;
        }
        if (null !== $this->includePlayList) {
            $res['IncludePlayList'] = $this->includePlayList;
        }
        if (null !== $this->includeSnapshotList) {
            $res['IncludeSnapshotList'] = $this->includeSnapshotList;
        }
        if (null !== $this->includeSummaryList) {
            $res['IncludeSummaryList'] = $this->includeSummaryList;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return QueryMediaListByURLRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileURLs'])) {
            $model->fileURLs = $map['FileURLs'];
        }
        if (isset($map['IncludeMediaInfo'])) {
            $model->includeMediaInfo = $map['IncludeMediaInfo'];
        }
        if (isset($map['IncludePlayList'])) {
            $model->includePlayList = $map['IncludePlayList'];
        }
        if (isset($map['IncludeSnapshotList'])) {
            $model->includeSnapshotList = $map['IncludeSnapshotList'];
        }
        if (isset($map['IncludeSummaryList'])) {
            $model->includeSummaryList = $map['IncludeSummaryList'];
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

        return $model;
    }
}
