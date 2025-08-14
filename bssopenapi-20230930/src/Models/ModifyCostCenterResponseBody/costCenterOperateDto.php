<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models\ModifyCostCenterResponseBody;

use AlibabaCloud\Dara\Model;

class costCenterOperateDto extends Model
{
    /**
     * @var int
     */
    public $costCenterId;

    /**
     * @var bool
     */
    public $isSuccess;

    /**
     * @var int
     */
    public $ownerAccountId;
    protected $_name = [
        'costCenterId' => 'CostCenterId',
        'isSuccess' => 'IsSuccess',
        'ownerAccountId' => 'OwnerAccountId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->costCenterId) {
            $res['CostCenterId'] = $this->costCenterId;
        }

        if (null !== $this->isSuccess) {
            $res['IsSuccess'] = $this->isSuccess;
        }

        if (null !== $this->ownerAccountId) {
            $res['OwnerAccountId'] = $this->ownerAccountId;
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
        if (isset($map['CostCenterId'])) {
            $model->costCenterId = $map['CostCenterId'];
        }

        if (isset($map['IsSuccess'])) {
            $model->isSuccess = $map['IsSuccess'];
        }

        if (isset($map['OwnerAccountId'])) {
            $model->ownerAccountId = $map['OwnerAccountId'];
        }

        return $model;
    }
}
