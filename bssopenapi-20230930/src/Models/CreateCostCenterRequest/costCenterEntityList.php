<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\CreateCostCenterRequest;

use AlibabaCloud\Tea\Model;

class costCenterEntityList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $costCenterName;

    /**
     * @description This parameter is required.
     *
     * @example 1314839403940987
     *
     * @var int
     */
    public $ownerAccountId;

    /**
     * @description This parameter is required.
     *
     * @example -1
     *
     * @var int
     */
    public $parentCostCenterId;
    protected $_name = [
        'costCenterName' => 'CostCenterName',
        'ownerAccountId' => 'OwnerAccountId',
        'parentCostCenterId' => 'ParentCostCenterId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
     * @return costCenterEntityList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
