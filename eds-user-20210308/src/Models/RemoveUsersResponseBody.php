<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models;

use AlibabaCloud\SDK\Edsuser\V20210308\Models\RemoveUsersResponseBody\removeUsersResult;
use AlibabaCloud\Tea\Model;

class RemoveUsersResponseBody extends Model
{
    /**
     * @var removeUsersResult
     */
    public $removeUsersResult;

    /**
     * @example 1CBAFFAB-B697-4049-A9B1-67E1FC5F****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'removeUsersResult' => 'RemoveUsersResult',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->removeUsersResult) {
            $res['RemoveUsersResult'] = null !== $this->removeUsersResult ? $this->removeUsersResult->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RemoveUsersResponseBody
     */
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
