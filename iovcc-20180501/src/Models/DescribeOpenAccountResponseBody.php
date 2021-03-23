<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\DescribeOpenAccountResponseBody\openAccount;
use AlibabaCloud\Tea\Model;

class DescribeOpenAccountResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var openAccount
     */
    public $openAccount;
    protected $_name = [
        'requestId'   => 'RequestId',
        'openAccount' => 'OpenAccount',
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
        if (null !== $this->openAccount) {
            $res['OpenAccount'] = null !== $this->openAccount ? $this->openAccount->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OpenAccount'])) {
            $model->openAccount = openAccount::fromMap($map['OpenAccount']);
        }

        return $model;
    }
}
