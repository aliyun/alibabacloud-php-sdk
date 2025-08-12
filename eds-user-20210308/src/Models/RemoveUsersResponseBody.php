<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveUsersResponseBody\removeUsersResult;

class RemoveUsersResponseBody extends Model
{
    /**
     * @var removeUsersResult
     */
    public $removeUsersResult;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'removeUsersResult' => 'RemoveUsersResult',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->removeUsersResult) {
            $this->removeUsersResult->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->removeUsersResult) {
            $res['RemoveUsersResult'] = null !== $this->removeUsersResult ? $this->removeUsersResult->toArray($noStream) : $this->removeUsersResult;
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
        if (isset($map['RemoveUsersResult'])) {
            $model->removeUsersResult = removeUsersResult::fromMap($map['RemoveUsersResult']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
