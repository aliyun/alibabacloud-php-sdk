<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsso\V20210515\Models;

use AlibabaCloud\Tea\Model;

class GetUserIdResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example A3A41736-A050-50B6-ABC5-590F376A0044
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The ID of the CloudSSO user.
     *
     * @example u-d8d1iox****
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'requestId' => 'RequestId',
        'userId'    => 'UserId',
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUserIdResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
