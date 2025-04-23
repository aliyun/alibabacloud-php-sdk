<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\LockUsersResponseBody\lockUsersResult;

class LockUsersResponseBody extends Model
{
    /**
     * @var lockUsersResult
     */
    public $lockUsersResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'lockUsersResult' => 'LockUsersResult',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->lockUsersResult) {
            $this->lockUsersResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->lockUsersResult) {
            $res['LockUsersResult'] = null !== $this->lockUsersResult ? $this->lockUsersResult->toArray($noStream) : $this->lockUsersResult;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['LockUsersResult'])) {
            $model->lockUsersResult = lockUsersResult::fromMap($map['LockUsersResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
