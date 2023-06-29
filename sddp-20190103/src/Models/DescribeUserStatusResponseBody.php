<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeUserStatusResponseBody\userStatus;
use AlibabaCloud\Tea\Model;

class DescribeUserStatusResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 769FB3C1-F4C9-42DF-9B72-7077A8989C13
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the current account.
     *
     * @var userStatus
     */
    public $userStatus;
    protected $_name = [
        'requestId'  => 'RequestId',
        'userStatus' => 'UserStatus',
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
        if (null !== $this->userStatus) {
            $res['UserStatus'] = null !== $this->userStatus ? $this->userStatus->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserStatusResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserStatus'])) {
            $model->userStatus = userStatus::fromMap($map['UserStatus']);
        }

        return $model;
    }
}
