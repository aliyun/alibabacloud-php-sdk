<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\QueryCostCenterResponseBody;

use AlibabaCloud\Dara\Model;

class costCenterDtoList extends Model
{
    /**
     * @var string
     */
    public $costCenterCode;

    /**
     * @var int
     */
    public $costCenterId;

    /**
     * @var string
     */
    public $costCenterName;

    /**
     * @var int
     */
    public $level;

    /**
     * @var int
     */
    public $ownerAccountId;

    /**
     * @var int
     */
    public $parentCostCenterId;

    /**
     * @var int
     */
    public $prevCostCenterId;
    protected $_name = [
        'costCenterCode' => 'CostCenterCode',
        'costCenterId' => 'CostCenterId',
        'costCenterName' => 'CostCenterName',
        'level' => 'Level',
        'ownerAccountId' => 'OwnerAccountId',
        'parentCostCenterId' => 'ParentCostCenterId',
        'prevCostCenterId' => 'PrevCostCenterId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costCenterCode) {
            $res['CostCenterCode'] = $this->costCenterCode;
        }

        if (null !== $this->costCenterId) {
            $res['CostCenterId'] = $this->costCenterId;
        }

        if (null !== $this->costCenterName) {
            $res['CostCenterName'] = $this->costCenterName;
        }

        if (null !== $this->level) {
            $res['Level'] = $this->level;
        }

        if (null !== $this->ownerAccountId) {
            $res['OwnerAccountId'] = $this->ownerAccountId;
        }

        if (null !== $this->parentCostCenterId) {
            $res['ParentCostCenterId'] = $this->parentCostCenterId;
        }

        if (null !== $this->prevCostCenterId) {
            $res['PrevCostCenterId'] = $this->prevCostCenterId;
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
        if (isset($map['CostCenterCode'])) {
            $model->costCenterCode = $map['CostCenterCode'];
        }

        if (isset($map['CostCenterId'])) {
            $model->costCenterId = $map['CostCenterId'];
        }

        if (isset($map['CostCenterName'])) {
            $model->costCenterName = $map['CostCenterName'];
        }

        if (isset($map['Level'])) {
            $model->level = $map['Level'];
        }

        if (isset($map['OwnerAccountId'])) {
            $model->ownerAccountId = $map['OwnerAccountId'];
        }

        if (isset($map['ParentCostCenterId'])) {
            $model->parentCostCenterId = $map['ParentCostCenterId'];
        }

        if (isset($map['PrevCostCenterId'])) {
            $model->prevCostCenterId = $map['PrevCostCenterId'];
        }

        return $model;
    }
}
