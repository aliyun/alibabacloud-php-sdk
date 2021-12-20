<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class SetOwnersRequest extends Model
{
    /**
     * @var string
     */
    public $ownerIds;

    /**
     * @var string
     */
    public $ownerType;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'ownerIds'   => 'OwnerIds',
        'ownerType'  => 'OwnerType',
        'regionId'   => 'RegionId',
        'resourceId' => 'ResourceId',
        'tid'        => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerIds) {
            $res['OwnerIds'] = $this->ownerIds;
        }
        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetOwnersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerIds'])) {
            $model->ownerIds = $map['OwnerIds'];
        }
        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
