<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsResponseBody\instanceAccounts;
use AlibabaCloud\Tea\Model;

class DescribeInstanceAccountsResponseBody extends Model
{
    /**
     * @var bool
     */
    public $success;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceAccounts
     */
    public $instanceAccounts;
    protected $_name = [
        'success'          => 'Success',
        'requestId'        => 'RequestId',
        'instanceAccounts' => 'InstanceAccounts',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceAccounts) {
            $res['InstanceAccounts'] = null !== $this->instanceAccounts ? $this->instanceAccounts->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceAccountsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceAccounts'])) {
            $model->instanceAccounts = instanceAccounts::fromMap($map['InstanceAccounts']);
        }

        return $model;
    }
}
