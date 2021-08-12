<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResourceResponseBody\data;

use AlibabaCloud\Tea\Model;

class costUnit extends Model
{
    /**
     * @var int
     */
    public $parentUnitId;

    /**
     * @var string
     */
    public $unitName;

    /**
     * @var int
     */
    public $unitId;

    /**
     * @var int
     */
    public $ownerUid;
    protected $_name = [
        'parentUnitId' => 'ParentUnitId',
        'unitName'     => 'UnitName',
        'unitId'       => 'UnitId',
        'ownerUid'     => 'OwnerUid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->parentUnitId) {
            $res['ParentUnitId'] = $this->parentUnitId;
        }
        if (null !== $this->unitName) {
            $res['UnitName'] = $this->unitName;
        }
        if (null !== $this->unitId) {
            $res['UnitId'] = $this->unitId;
        }
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return costUnit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParentUnitId'])) {
            $model->parentUnitId = $map['ParentUnitId'];
        }
        if (isset($map['UnitName'])) {
            $model->unitName = $map['UnitName'];
        }
        if (isset($map['UnitId'])) {
            $model->unitId = $map['UnitId'];
        }
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }

        return $model;
    }
}
