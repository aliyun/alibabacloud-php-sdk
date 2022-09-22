<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateFileSystemResponseBody extends Model
{
    /**
     * @var string[]
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
     * @var string[]
     */
    public $unAllocationId;
    protected $_name = [
        'allocationId'   => 'AllocationId',
        'bizStatusCode'  => 'BizStatusCode',
        'requestId'      => 'RequestId',
        'unAllocationId' => 'UnAllocationId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->bizStatusCode) {
            $res['BizStatusCode'] = $this->bizStatusCode;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->unAllocationId) {
            $res['UnAllocationId'] = $this->unAllocationId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileSystemResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            if (!empty($map['AllocationId'])) {
                $model->allocationId = $map['AllocationId'];
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
                $model->unAllocationId = $map['UnAllocationId'];
            }
        }

        return $model;
    }
}
