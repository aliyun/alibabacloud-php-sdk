<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyCostUnitRequest;

use AlibabaCloud\Tea\Model;

class unitEntityList extends Model
{
    /**
     * @var string
     */
    public $newUnitName;

    /**
     * @var int
     */
    public $ownerUid;

    /**
     * @var int
     */
    public $unitId;
    protected $_name = [
        'newUnitName' => 'NewUnitName',
        'ownerUid'    => 'OwnerUid',
        'unitId'      => 'UnitId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->newUnitName) {
            $res['NewUnitName'] = $this->newUnitName;
        }
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
     * @return unitEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NewUnitName'])) {
            $model->newUnitName = $map['NewUnitName'];
        }
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }
        if (isset($map['UnitId'])) {
            $model->unitId = $map['UnitId'];
        }

        return $model;
    }
}
