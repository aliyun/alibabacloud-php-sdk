<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\ListProtectedResourcesResponseBody;

use AlibabaCloud\Dara\Model;

class protectedResources extends Model
{
    /**
     * @var string
     */
    public $createdByProduct;

    /**
     * @var int
     */
    public $protectedDataSize;

    /**
     * @var string
     */
    public $protectedResourceId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $snapshotCount;

    /**
     * @var string
     */
    public $sourceType;
    protected $_name = [
        'createdByProduct' => 'CreatedByProduct',
        'protectedDataSize' => 'ProtectedDataSize',
        'protectedResourceId' => 'ProtectedResourceId',
        'resourceId' => 'ResourceId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'snapshotCount' => 'SnapshotCount',
        'sourceType' => 'SourceType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdByProduct) {
            $res['CreatedByProduct'] = $this->createdByProduct;
        }

        if (null !== $this->protectedDataSize) {
            $res['ProtectedDataSize'] = $this->protectedDataSize;
        }

        if (null !== $this->protectedResourceId) {
            $res['ProtectedResourceId'] = $this->protectedResourceId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }

        if (null !== $this->snapshotCount) {
            $res['SnapshotCount'] = $this->snapshotCount;
        }

        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
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
        if (isset($map['CreatedByProduct'])) {
            $model->createdByProduct = $map['CreatedByProduct'];
        }

        if (isset($map['ProtectedDataSize'])) {
            $model->protectedDataSize = $map['ProtectedDataSize'];
        }

        if (isset($map['ProtectedResourceId'])) {
            $model->protectedResourceId = $map['ProtectedResourceId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['SnapshotCount'])) {
            $model->snapshotCount = $map['SnapshotCount'];
        }

        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }

        return $model;
    }
}
