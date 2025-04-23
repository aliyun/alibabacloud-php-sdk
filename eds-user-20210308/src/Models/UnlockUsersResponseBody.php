<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\UnlockUsersResponseBody\unlockUsersResult;

class UnlockUsersResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var unlockUsersResult
     */
    public $unlockUsersResult;
    protected $_name = [
        'requestId' => 'RequestId',
        'unlockUsersResult' => 'UnlockUsersResult',
    ];

    public function validate()
    {
        if (null !== $this->unlockUsersResult) {
            $this->unlockUsersResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->unlockUsersResult) {
            $res['UnlockUsersResult'] = null !== $this->unlockUsersResult ? $this->unlockUsersResult->toArray($noStream) : $this->unlockUsersResult;
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

        if (isset($map['UnlockUsersResult'])) {
            $model->unlockUsersResult = unlockUsersResult::fromMap($map['UnlockUsersResult']);
        }

        return $model;
    }
}
