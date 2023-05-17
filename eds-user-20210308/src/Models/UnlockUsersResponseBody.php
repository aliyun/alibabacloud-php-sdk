<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\UnlockUsersResponseBody\unlockUsersResult;
use AlibabaCloud\Tea\Model;

class UnlockUsersResponseBody extends Model
{
    /**
     * @example 023F4EC4-3602-4A3E-A514-4970847D59DB
     *
     * @var string
     */
    public $requestId;

    /**
     * @var unlockUsersResult
     */
    public $unlockUsersResult;
    protected $_name = [
        'requestId'         => 'RequestId',
        'unlockUsersResult' => 'UnlockUsersResult',
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
        if (null !== $this->unlockUsersResult) {
            $res['UnlockUsersResult'] = null !== $this->unlockUsersResult ? $this->unlockUsersResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnlockUsersResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UnlockUsersResult'])) {
            $model->unlockUsersResult = unlockUsersResult::fromMap($map['UnlockUsersResult']);
        }

        return $model;
    }
}
