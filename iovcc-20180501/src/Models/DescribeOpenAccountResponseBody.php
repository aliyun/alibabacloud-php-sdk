<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeOpenAccountResponseBody\openAccount;
use AlibabaCloud\Tea\Model;

class DescribeOpenAccountResponseBody extends Model
{
    /**
     * @var openAccount
     */
    public $openAccount;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'openAccount' => 'OpenAccount',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->openAccount) {
            $res['OpenAccount'] = null !== $this->openAccount ? $this->openAccount->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeOpenAccountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OpenAccount'])) {
            $model->openAccount = openAccount::fromMap($map['OpenAccount']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
