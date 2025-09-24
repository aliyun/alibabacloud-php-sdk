<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCostUnitResponseBody\data;

use AlibabaCloud\Dara\Model;

class costUnitDtoList extends Model
{
    /**
     * @var int
     */
    public $ownerUid;

    /**
     * @var int
     */
    public $parentUnitId;

    /**
     * @var int
     */
    public $unitId;

    /**
     * @var string
     */
    public $unitName;
    protected $_name = [
        'ownerUid' => 'OwnerUid',
        'parentUnitId' => 'ParentUnitId',
        'unitId' => 'UnitId',
        'unitName' => 'UnitName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
