<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ModifyCostCenterRequest;

use AlibabaCloud\Tea\Model;

class costCenterEntityList extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 485938
     *
     * @var int
     */
    public $costCenterId;

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
    protected $_name = [
        'costCenterId' => 'CostCenterId',
        'costCenterName' => 'CostCenterName',
        'ownerAccountId' => 'OwnerAccountId',
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
        if (isset($map['CostCenterId'])) {
            $model->costCenterId = $map['CostCenterId'];
        }
        if (isset($map['CostCenterName'])) {
            $model->costCenterName = $map['CostCenterName'];
        }
        if (isset($map['OwnerAccountId'])) {
            $model->ownerAccountId = $map['OwnerAccountId'];
        }

        return $model;
    }
}
