<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models;

use AlibabaCloud\Tea\Model;

class DeleteCostUnitRequest extends Model
{
    /**
     * @description The user ID of the cost center owner.
     *
     * This parameter is required.
     * @example 2135342
     *
     * @var int
     */
    public $ownerUid;

    /**
     * @description The ID of the cost center. A value of -1 indicates the root cost center.
     *
     * This parameter is required.
     * @example 376348
     *
     * @var int
     */
    public $unitId;
    protected $_name = [
        'ownerUid' => 'OwnerUid',
        'unitId'   => 'UnitId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }
        if (null !== $this->unitId) {
            $res['UnitId'] = $this->unitId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCostUnitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['UnitId'])) {
            $model->unitId = $map['UnitId'];
        }

        return $model;
    }
}
