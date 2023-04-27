<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class SetOwnersRequest extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **SetOwners**.
     *
     * @example 51****
     *
     * @var string
     */
    public $ownerIds;

    /**
     * @description The ID of the request.
     *
     * @example INSTANCE
     *
     * @var string
     */
    public $ownerType;

    /**
     * @description The error code.
     *
     * @example 174****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The ID of the user whom you want to specify as an owner. Separate multiple IDs with commas (,). You can call the [GetUser](~~147098~~) or [ListUsers](~~141938~~) operation to query the ID of the user.
     *
     * >  The value of the OwnerIds parameter is that of the UserId parameter.
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'ownerIds'   => 'OwnerIds',
        'ownerType'  => 'OwnerType',
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
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
