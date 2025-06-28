<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAllAccountsResponseBody\accountList;

class DescribeAllAccountsResponseBody extends Model
{
    /**
     * @var accountList[]
     */
    public $accountList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountList' => 'AccountList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->accountList)) {
            Model::validateArray($this->accountList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountList) {
            if (\is_array($this->accountList)) {
                $res['AccountList'] = [];
                $n1 = 0;
                foreach ($this->accountList as $item1) {
                    $res['AccountList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['AccountList'])) {
                $model->accountList = [];
                $n1 = 0;
                foreach ($map['AccountList'] as $item1) {
                    $model->accountList[$n1] = accountList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
