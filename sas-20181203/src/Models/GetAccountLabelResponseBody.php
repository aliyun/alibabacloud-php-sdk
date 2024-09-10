<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetAccountLabelResponseBody\accountLabelList;
use AlibabaCloud\Tea\Model;

class GetAccountLabelResponseBody extends Model
{
    /**
     * @var accountLabelList[]
     */
    public $accountLabelList;

    /**
     * @example 7BC55C8F-226E-5AF5-9A2C-2EC43864****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountLabelList' => 'AccountLabelList',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountLabelList) {
            $res['AccountLabelList'] = [];
            if (null !== $this->accountLabelList && \is_array($this->accountLabelList)) {
                $n = 0;
                foreach ($this->accountLabelList as $item) {
                    $res['AccountLabelList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccountLabelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountLabelList'])) {
            if (!empty($map['AccountLabelList'])) {
                $model->accountLabelList = [];
                $n                       = 0;
                foreach ($map['AccountLabelList'] as $item) {
                    $model->accountLabelList[$n++] = null !== $item ? accountLabelList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
