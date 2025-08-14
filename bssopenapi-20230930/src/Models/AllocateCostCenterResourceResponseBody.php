<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20230930\Models;

use AlibabaCloud\Dara\Model;

class AllocateCostCenterResourceResponseBody extends Model
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
     * @var mixed
     */
    public $metadata;

    /**
     * @var int
     */
    public $ownerAccountId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'costCenterId' => 'CostCenterId',
        'isSuccess' => 'IsSuccess',
        'metadata' => 'Metadata',
        'ownerAccountId' => 'OwnerAccountId',
        'requestId' => 'RequestId',
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

        if (null !== $this->metadata) {
            $res['Metadata'] = $this->metadata;
        }

        if (null !== $this->ownerAccountId) {
            $res['OwnerAccountId'] = $this->ownerAccountId;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        if (isset($map['Metadata'])) {
            $model->metadata = $map['Metadata'];
        }

        if (isset($map['OwnerAccountId'])) {
            $model->ownerAccountId = $map['OwnerAccountId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
