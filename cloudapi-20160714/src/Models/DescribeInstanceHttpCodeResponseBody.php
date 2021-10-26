<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeInstanceHttpCodeResponseBody\instanceHttpCode;
use AlibabaCloud\Tea\Model;

class DescribeInstanceHttpCodeResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceHttpCode
     */
    public $instanceHttpCode;
    protected $_name = [
        'requestId'        => 'RequestId',
        'instanceHttpCode' => 'InstanceHttpCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceHttpCode) {
            $res['InstanceHttpCode'] = null !== $this->instanceHttpCode ? $this->instanceHttpCode->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceHttpCode'])) {
            $model->instanceHttpCode = instanceHttpCode::fromMap($map['InstanceHttpCode']);
        }

        return $model;
    }
}
