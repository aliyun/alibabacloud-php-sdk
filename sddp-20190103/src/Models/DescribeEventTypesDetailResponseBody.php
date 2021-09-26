<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeEventTypesDetailResponseBody\userStatus;
use AlibabaCloud\Tea\Model;

class DescribeEventTypesDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
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
     * @return DescribeEventTypesDetailResponseBody
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
