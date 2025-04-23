<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\ResetUserPasswordResponseBody\resetUsersResult;

class ResetUserPasswordResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var resetUsersResult
     */
    public $resetUsersResult;
    protected $_name = [
        'requestId' => 'RequestId',
        'resetUsersResult' => 'ResetUsersResult',
    ];

    public function validate()
    {
        if (null !== $this->resetUsersResult) {
            $this->resetUsersResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->resetUsersResult) {
            $res['ResetUsersResult'] = null !== $this->resetUsersResult ? $this->resetUsersResult->toArray($noStream) : $this->resetUsersResult;
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

        if (isset($map['ResetUsersResult'])) {
            $model->resetUsersResult = resetUsersResult::fromMap($map['ResetUsersResult']);
        }

        return $model;
    }
}
