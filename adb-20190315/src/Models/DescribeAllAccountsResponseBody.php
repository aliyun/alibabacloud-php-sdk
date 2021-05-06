<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeAllAccountsResponseBody\accountList;
use AlibabaCloud\Tea\Model;

class DescribeAllAccountsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var accountList[]
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
            $res['AccountList'] = [];
            if (null !== $this->accountList && \is_array($this->accountList)) {
                $n = 0;
                foreach ($this->accountList as $item) {
                    $res['AccountList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAllAccountsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AccountList'])) {
            if (!empty($map['AccountList'])) {
                $model->accountList = [];
                $n                  = 0;
                foreach ($map['AccountList'] as $item) {
                    $model->accountList[$n++] = null !== $item ? accountList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
