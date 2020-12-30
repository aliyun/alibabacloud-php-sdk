<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class SetOwnersRequest extends Model
{
    /**
     * @var int
     */
    public $tid;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $ownerType;

    /**
     * @var string
     */
    public $ownerIds;
    protected $_name = [
        'tid'        => 'Tid',
        'resourceId' => 'ResourceId',
        'ownerType'  => 'OwnerType',
        'ownerIds'   => 'OwnerIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->ownerType) {
            $res['OwnerType'] = $this->ownerType;
        }
        if (null !== $this->ownerIds) {
            $res['OwnerIds'] = $this->ownerIds;
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
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['OwnerType'])) {
            $model->ownerType = $map['OwnerType'];
        }
        if (isset($map['OwnerIds'])) {
            $model->ownerIds = $map['OwnerIds'];
        }

        return $model;
    }
}
