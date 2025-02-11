<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20211201\Models\DescribeAccountsResponseBody\accountList;

class DescribeAccountsResponseBody extends Model
{
    /**
     * @var accountList
     */
    public $accountList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountList' => 'AccountList',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->accountList) {
            $this->accountList->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountList) {
            $res['AccountList'] = null !== $this->accountList ? $this->accountList->toArray($noStream) : $this->accountList;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
