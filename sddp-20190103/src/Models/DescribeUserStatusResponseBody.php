<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeUserStatusResponseBody\userStatus;

class DescribeUserStatusResponseBody extends Model
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
        'requestId' => 'RequestId',
        'userStatus' => 'UserStatus',
    ];

    public function validate()
    {
        if (null !== $this->userStatus) {
            $this->userStatus->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->userStatus) {
            $res['UserStatus'] = null !== $this->userStatus ? $this->userStatus->toArray($noStream) : $this->userStatus;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['UserStatus'])) {
            $model->userStatus = userStatus::fromMap($map['UserStatus']);
        }

        return $model;
    }
}
