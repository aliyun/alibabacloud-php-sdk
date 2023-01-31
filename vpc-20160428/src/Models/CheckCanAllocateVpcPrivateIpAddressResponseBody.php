<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CheckCanAllocateVpcPrivateIpAddressResponseBody extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $canAllocate;

    /**
     * @example 93360B0-2969-40BF-8542-EBB34FD358AB
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'canAllocate' => 'CanAllocate',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canAllocate) {
            $res['CanAllocate'] = $this->canAllocate;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckCanAllocateVpcPrivateIpAddressResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanAllocate'])) {
            $model->canAllocate = $map['CanAllocate'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
