<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emr\V20160408\Models;

use AlibabaCloud\Tea\Model;

class DiffFlowEntitySnapshotRequest extends Model
{
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
    public $entityType;

    /**
     * @var string
     */
    public $entityId;

    /**
     * @var string
     */
    public $srcRevision;

    /**
     * @var string
     */
    public $dstRevision;
    protected $_name = [
        'resourceOwnerId' => 'ResourceOwnerId',
        'regionId'        => 'RegionId',
        'entityType'      => 'EntityType',
        'entityId'        => 'EntityId',
        'srcRevision'     => 'SrcRevision',
        'dstRevision'     => 'DstRevision',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->entityType) {
            $res['EntityType'] = $this->entityType;
        }
        if (null !== $this->entityId) {
            $res['EntityId'] = $this->entityId;
        }
        if (null !== $this->srcRevision) {
            $res['SrcRevision'] = $this->srcRevision;
        }
        if (null !== $this->dstRevision) {
            $res['DstRevision'] = $this->dstRevision;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DiffFlowEntitySnapshotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['EntityType'])) {
            $model->entityType = $map['EntityType'];
        }
        if (isset($map['EntityId'])) {
            $model->entityId = $map['EntityId'];
        }
        if (isset($map['SrcRevision'])) {
            $model->srcRevision = $map['SrcRevision'];
        }
        if (isset($map['DstRevision'])) {
            $model->dstRevision = $map['DstRevision'];
        }

        return $model;
    }
}
