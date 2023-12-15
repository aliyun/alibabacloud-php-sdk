<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceHttpCodeResponseBody\instanceHttpCode;
use AlibabaCloud\Tea\Model;

class DescribeInstanceHttpCodeResponseBody extends Model
{
    /**
     * @description The HTTP status codes.
     *
     * @var instanceHttpCode
     */
    public $instanceHttpCode;

    /**
     * @description The ID of the request.
     *
     * @example AD00F8C0-311B-54A9-ADE2-2436771012DA
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceHttpCode' => 'InstanceHttpCode',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceHttpCode) {
            $res['InstanceHttpCode'] = null !== $this->instanceHttpCode ? $this->instanceHttpCode->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceHttpCodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceHttpCode'])) {
            $model->instanceHttpCode = instanceHttpCode::fromMap($map['InstanceHttpCode']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
