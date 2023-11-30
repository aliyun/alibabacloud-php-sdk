<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pds\V20220301\Models;

use AlibabaCloud\SDK\Pds\V20220301\Models\DriveLogDetail\updateTo;
use AlibabaCloud\Tea\Model;

class DriveLogDetail extends Model
{
    /**
     * @var bool
     */
    public $forceDelete;

    /**
     * @var string
     */
    public $handoverOwnerName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var string
     */
    public $ownerType;

    /**
     * @var int
     */
    public $totalSize;

    /**
     * @var updateTo
     */
    public $updateTo;
    protected $_name = [
        'forceDelete'       => 'force_delete',
        'handoverOwnerName' => 'handover_owner_name',
        'name'              => 'name',
        'ownerId'           => 'owner_id',
        'ownerName'         => 'owner_name',
        'ownerType'         => 'owner_type',
        'totalSize'         => 'total_size',
        'updateTo'          => 'update_to',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->forceDelete) {
            $res['force_delete'] = $this->forceDelete;
        }
        if (null !== $this->handoverOwnerName) {
            $res['handover_owner_name'] = $this->handoverOwnerName;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['owner_id'] = $this->ownerId;
        }
        if (null !== $this->ownerName) {
            $res['owner_name'] = $this->ownerName;
        }
        if (null !== $this->ownerType) {
            $res['owner_type'] = $this->ownerType;
        }
        if (null !== $this->totalSize) {
            $res['total_size'] = $this->totalSize;
        }
        if (null !== $this->updateTo) {
            $res['update_to'] = null !== $this->updateTo ? $this->updateTo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DriveLogDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['force_delete'])) {
            $model->forceDelete = $map['force_delete'];
        }
        if (isset($map['handover_owner_name'])) {
            $model->handoverOwnerName = $map['handover_owner_name'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['owner_id'])) {
            $model->ownerId = $map['owner_id'];
        }
        if (isset($map['owner_name'])) {
            $model->ownerName = $map['owner_name'];
        }
        if (isset($map['owner_type'])) {
            $model->ownerType = $map['owner_type'];
        }
        if (isset($map['total_size'])) {
            $model->totalSize = $map['total_size'];
        }
        if (isset($map['update_to'])) {
            $model->updateTo = updateTo::fromMap($map['update_to']);
        }

        return $model;
    }
}
