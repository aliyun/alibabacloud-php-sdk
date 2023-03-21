<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageScanAuthorizationResponseBody\authStatus;
use AlibabaCloud\Tea\Model;

class DescribeImageScanAuthorizationResponseBody extends Model
{
    /**
     * @var authStatus
     */
    public $authStatus;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'authStatus' => 'AuthStatus',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authStatus) {
            $res['AuthStatus'] = null !== $this->authStatus ? $this->authStatus->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageScanAuthorizationResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthStatus'])) {
            $model->authStatus = authStatus::fromMap($map['AuthStatus']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
