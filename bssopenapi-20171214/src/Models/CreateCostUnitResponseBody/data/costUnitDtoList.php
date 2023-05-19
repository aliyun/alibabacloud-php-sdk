<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateCostUnitResponseBody\data;

use AlibabaCloud\Tea\Model;

class costUnitDtoList extends Model
{
    /**
     * @description The user ID of the owner of the cost center.
     *
     * @example 26387563
     *
     * @var int
     */
    public $ownerUid;

    /**
     * @description The ID of the parent cost center. A value of -1 indicates the root cost center.
     *
     * @example -1
     *
     * @var int
     */
    public $parentUnitId;

    /**
     * @description The ID of the cost center.
     *
     * @example 84327659328
     *
     * @var int
     */
    public $unitId;

    /**
     * @description The name of the cost center.
     *
     * @example test
     *
     * @var string
     */
    public $unitName;
    protected $_name = [
        'ownerUid'     => 'OwnerUid',
        'parentUnitId' => 'ParentUnitId',
        'unitId'       => 'UnitId',
        'unitName'     => 'UnitName',
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
        if (null !== $this->parentUnitId) {
            $res['ParentUnitId'] = $this->parentUnitId;
        }
        if (null !== $this->unitId) {
            $res['UnitId'] = $this->unitId;
        }
        if (null !== $this->unitName) {
            $res['UnitName'] = $this->unitName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return costUnitDtoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['ParentUnitId'])) {
            $model->parentUnitId = $map['ParentUnitId'];
        }
        if (isset($map['UnitId'])) {
            $model->unitId = $map['UnitId'];
        }
        if (isset($map['UnitName'])) {
            $model->unitName = $map['UnitName'];
        }

        return $model;
    }
}
