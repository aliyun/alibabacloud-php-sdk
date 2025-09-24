<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\ModifyCostUnitRequest;

use AlibabaCloud\Dara\Model;

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
        'ownerUid' => 'OwnerUid',
        'unitId' => 'UnitId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
