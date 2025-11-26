<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateStorageGatewayResponseBody\allocationId;
use AlibabaCloud\SDK\Ens\V20171110\Models\CreateStorageGatewayResponseBody\unAllocationId;

class CreateStorageGatewayResponseBody extends Model
{
    /**
     * @var allocationId[]
     */
    public $allocationId;

    /**
     * @var string
     */
    public $bizStatusCode;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var unAllocationId[]
     */
    public $unAllocationId;
    protected $_name = [
        'allocationId' => 'AllocationId',
        'bizStatusCode' => 'BizStatusCode',
        'requestId' => 'RequestId',
        'unAllocationId' => 'UnAllocationId',
    ];

    public function validate()
    {
        if (\is_array($this->allocationId)) {
            Model::validateArray($this->allocationId);
        }
        if (\is_array($this->unAllocationId)) {
            Model::validateArray($this->unAllocationId);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->allocationId) {
            if (\is_array($this->allocationId)) {
                $res['AllocationId'] = [];
                $n1 = 0;
                foreach ($this->allocationId as $item1) {
                    $res['AllocationId'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->bizStatusCode) {
            $res['BizStatusCode'] = $this->bizStatusCode;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->unAllocationId) {
            if (\is_array($this->unAllocationId)) {
                $res['UnAllocationId'] = [];
                $n1 = 0;
                foreach ($this->unAllocationId as $item1) {
                    $res['UnAllocationId'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['AllocationId'])) {
            if (!empty($map['AllocationId'])) {
                $model->allocationId = [];
                $n1 = 0;
                foreach ($map['AllocationId'] as $item1) {
                    $model->allocationId[$n1] = allocationId::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['BizStatusCode'])) {
            $model->bizStatusCode = $map['BizStatusCode'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UnAllocationId'])) {
            if (!empty($map['UnAllocationId'])) {
                $model->unAllocationId = [];
                $n1 = 0;
                foreach ($map['UnAllocationId'] as $item1) {
                    $model->unAllocationId[$n1] = unAllocationId::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
