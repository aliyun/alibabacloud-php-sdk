<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sddp\V20190103\Models;

use AlibabaCloud\SDK\Sddp\V20190103\Models\DescribeAccountDetailResponseBody\account;
use AlibabaCloud\Tea\Model;

class DescribeAccountDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var account
     */
    public $account;
    protected $_name = [
        'requestId' => 'RequestId',
        'account'   => 'Account',
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
        if (null !== $this->account) {
            $res['Account'] = null !== $this->account ? $this->account->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccountDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Account'])) {
            $model->account = account::fromMap($map['Account']);
        }

        return $model;
    }
}
