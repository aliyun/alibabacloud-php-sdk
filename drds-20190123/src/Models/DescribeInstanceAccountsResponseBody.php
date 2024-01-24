<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\SDK\Drds\V20190123\Models\DescribeInstanceAccountsResponseBody\instanceAccounts;
use AlibabaCloud\Tea\Model;

class DescribeInstanceAccountsResponseBody extends Model
{
    /**
     * @description Indicates the information about the instance accounts.
     *
     * @var instanceAccounts
     */
    public $instanceAccounts;

    /**
     * @description The ID of the request.
     *
     * @example E2E4056D-57EB-4353-8355-2E6284******
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request is successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'instanceAccounts' => 'InstanceAccounts',
        'requestId'        => 'RequestId',
        'success'          => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceAccounts) {
            $res['InstanceAccounts'] = null !== $this->instanceAccounts ? $this->instanceAccounts->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['InstanceAccounts'])) {
            $model->instanceAccounts = instanceAccounts::fromMap($map['InstanceAccounts']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
