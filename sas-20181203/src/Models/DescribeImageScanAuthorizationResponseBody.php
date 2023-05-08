<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\DescribeImageScanAuthorizationResponseBody\authStatus;
use AlibabaCloud\Tea\Model;

class DescribeImageScanAuthorizationResponseBody extends Model
{
    /**
     * @description The authorization status of image scans.
     *
     * @var authStatus
     */
    public $authStatus;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 340D7FC4-D575-1661-8ACD-CFA7BE57****
     *
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
