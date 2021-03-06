<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeHostAccountsResponseBody\accounts;
use AlibabaCloud\Tea\Model;

class DescribeHostAccountsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var accounts
     */
    public $accounts;
    protected $_name = [
        'requestId' => 'RequestId',
        'accounts'  => 'Accounts',
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
        if (null !== $this->accounts) {
            $res['Accounts'] = null !== $this->accounts ? $this->accounts->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeHostAccountsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Accounts'])) {
            $model->accounts = accounts::fromMap($map['Accounts']);
        }

        return $model;
    }
}
