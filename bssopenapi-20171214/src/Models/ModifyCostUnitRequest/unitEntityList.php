<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyCostUnitRequest;

use AlibabaCloud\Tea\Model;

class unitEntityList extends Model
{
    /**
     * @var int
     */
    public $unitId;

    /**
     * @var string
     */
    public $newUnitName;

    /**
     * @var int
     */
    public $ownerUid;
    protected $_name = [
        'unitId'      => 'UnitId',
        'newUnitName' => 'NewUnitName',
        'ownerUid'    => 'OwnerUid',
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
        if (null !== $this->newUnitName) {
            $res['NewUnitName'] = $this->newUnitName;
        }
        if (null !== $this->ownerUid) {
            $res['OwnerUid'] = $this->ownerUid;
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
        if (isset($map['UnitId'])) {
            $model->unitId = $map['UnitId'];
        }
        if (isset($map['NewUnitName'])) {
            $model->newUnitName = $map['NewUnitName'];
        }
        if (isset($map['OwnerUid'])) {
            $model->ownerUid = $map['OwnerUid'];
        }

        return $model;
    }
}
