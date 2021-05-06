<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAccountsResponseBody\accountList;
use AlibabaCloud\Tea\Model;

class DescribeAccountsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var accountList
     */
    public $accountList;
    protected $_name = [
        'requestId'   => 'RequestId',
        'accountList' => 'AccountList',
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
        if (null !== $this->accountList) {
            $res['AccountList'] = null !== $this->accountList ? $this->accountList->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AccountList'])) {
            $model->accountList = accountList::fromMap($map['AccountList']);
        }

        return $model;
    }
}
