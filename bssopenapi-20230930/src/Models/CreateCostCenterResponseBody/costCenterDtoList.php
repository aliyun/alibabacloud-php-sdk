<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateCostCenterResponseBody;

use AlibabaCloud\Tea\Model;

class costCenterDtoList extends Model
{
    /**
     * @example 485938
     *
     * @var int
     */
    public $costCenterId;

    /**
     * @var string
     */
    public $costCenterName;

    /**
     * @example 1314839403940987
     *
     * @var int
     */
    public $ownerAccountId;

    /**
     * @example -1
     *
     * @var int
     */
    public $parentCostCenterId;
    protected $_name = [
        'costCenterId' => 'CostCenterId',
        'costCenterName' => 'CostCenterName',
        'ownerAccountId' => 'OwnerAccountId',
        'parentCostCenterId' => 'ParentCostCenterId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->costCenterId) {
            $res['CostCenterId'] = $this->costCenterId;
        }
        if (null !== $this->costCenterName) {
            $res['CostCenterName'] = $this->costCenterName;
        }
        if (null !== $this->ownerAccountId) {
            $res['OwnerAccountId'] = $this->ownerAccountId;
        }
        if (null !== $this->parentCostCenterId) {
            $res['ParentCostCenterId'] = $this->parentCostCenterId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return costCenterDtoList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CostCenterId'])) {
            $model->costCenterId = $map['CostCenterId'];
        }
        if (isset($map['CostCenterName'])) {
            $model->costCenterName = $map['CostCenterName'];
        }
        if (isset($map['OwnerAccountId'])) {
            $model->ownerAccountId = $map['OwnerAccountId'];
        }
        if (isset($map['ParentCostCenterId'])) {
            $model->parentCostCenterId = $map['ParentCostCenterId'];
        }

        return $model;
    }
}
