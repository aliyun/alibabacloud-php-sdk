<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\ResetUserPasswordResponseBody\resetUsersResult;
use AlibabaCloud\Tea\Model;

class ResetUserPasswordResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 32D05B39-E6EE-4D7A-9FD0-762A26859D0D
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The result of resetting the password of the convenience user.
     *
     * @var resetUsersResult
     */
    public $resetUsersResult;
    protected $_name = [
        'requestId'        => 'RequestId',
        'resetUsersResult' => 'ResetUsersResult',
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
        if (null !== $this->resetUsersResult) {
            $res['ResetUsersResult'] = null !== $this->resetUsersResult ? $this->resetUsersResult->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ResetUserPasswordResponseBody
     */
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
