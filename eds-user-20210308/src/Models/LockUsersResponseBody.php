<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\LockUsersResponseBody\lockUsersResult;
use AlibabaCloud\Tea\Model;

class LockUsersResponseBody extends Model
{
    /**
     * @var lockUsersResult
     */
    public $lockUsersResult;

    /**
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'lockUsersResult' => 'LockUsersResult',
        'requestId'       => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->lockUsersResult) {
            $res['LockUsersResult'] = null !== $this->lockUsersResult ? $this->lockUsersResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return LockUsersResponseBody
     */
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
