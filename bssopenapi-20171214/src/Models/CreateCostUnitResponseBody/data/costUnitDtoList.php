<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\CreateCostUnitResponseBody\data;

use AlibabaCloud\Tea\Model;

class costUnitDtoList extends Model
{
    /**
     * @var int
     */
    public $unitId;

    /**
     * @var int
     */
    public $parentUnitId;

    /**
     * @var int
     */
    public $ownerUid;

    /**
     * @var string
     */
    public $unitName;
    protected $_name = [
        'unitId'       => 'UnitId',
        'parentUnitId' => 'ParentUnitId',
        'ownerUid'     => 'OwnerUid',
        'unitName'     => 'UnitName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->unitId) {
            $res['UnitId'] = $this->unitId;
        }
        if (null !== $this->parentUnitId) {
            $res['ParentUnitId'] = $this->parentUnitId;
        }
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
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
        if (isset($map['UnitId'])) {
            $model->unitId = $map['UnitId'];
        }
        if (isset($map['ParentUnitId'])) {
            $model->parentUnitId = $map['ParentUnitId'];
        }
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['UnitName'])) {
            $model->unitName = $map['UnitName'];
        }

        return $model;
    }
}
