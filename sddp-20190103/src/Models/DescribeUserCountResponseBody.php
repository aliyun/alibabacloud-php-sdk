<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeUserCountResponseBody\userCount;
use AlibabaCloud\Tea\Model;

class DescribeUserCountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var userCount
     */
    public $userCount;
    protected $_name = [
        'requestId' => 'RequestId',
        'userCount' => 'UserCount',
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
        if (null !== $this->userCount) {
            $res['UserCount'] = null !== $this->userCount ? $this->userCount->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserCountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UserCount'])) {
            $model->userCount = userCount::fromMap($map['UserCount']);
        }

        return $model;
    }
}
