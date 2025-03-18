<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateEipInstanceResponseBody extends Model
{
    /**
     * @description The ID of the EIP.
     *
     * @example eip-25877c70gddh****
     *
     * @var string
     */
    public $allocationId;

    /**
     * @description The ID of the request.
     *
     * @example 9DB6123F-470D-510A-A9EB-EBA799340452
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'allocationId' => 'AllocationId',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->allocationId) {
            $res['AllocationId'] = $this->allocationId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateEipInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllocationId'])) {
            $model->allocationId = $map['AllocationId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
