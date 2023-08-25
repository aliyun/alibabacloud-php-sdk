<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountsResponseBody\accountList;
use AlibabaCloud\Tea\Model;

class DescribeAccountsResponseBody extends Model
{
    /**
     * @description The queried database accounts.
     *
     * @var accountList
     */
    public $accountList;

    /**
     * @description The request ID.
     *
     * @example 9CCFAAB4-97B7-5800-B9F2-685EB596E3EF
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountList' => 'AccountList',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountList) {
            $res['AccountList'] = null !== $this->accountList ? $this->accountList->toMap() : null;
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
        if (isset($map['AccountList'])) {
            $model->accountList = accountList::fromMap($map['AccountList']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
