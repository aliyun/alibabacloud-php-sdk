<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gpdb\V20160503\Models;

use AlibabaCloud\SDK\Gpdb\V20160503\Models\DescribeAccountsResponseBody\accounts;
use AlibabaCloud\Tea\Model;

class DescribeAccountsResponseBody extends Model
{
    /**
     * @description The queried database accounts.
     *
     * @var accounts
     */
    public $accounts;

    /**
     * @description The request ID.
     *
     * @example 7565770E-7C45-462D-BA4A-8A5396F2CAD1
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accounts' => 'Accounts',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accounts) {
            $res['Accounts'] = null !== $this->accounts ? $this->accounts->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccountsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accounts'])) {
            $model->accounts = accounts::fromMap($map['Accounts']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
