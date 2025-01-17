<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\GetAccountLabelResponseBody\accountLabelList;

class GetAccountLabelResponseBody extends Model
{
    /**
     * @var accountLabelList[]
     */
    public $accountLabelList;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountLabelList' => 'AccountLabelList',
        'requestId'        => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->accountLabelList)) {
            Model::validateArray($this->accountLabelList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountLabelList) {
            if (\is_array($this->accountLabelList)) {
                $res['AccountLabelList'] = [];
                $n1                      = 0;
                foreach ($this->accountLabelList as $item1) {
                    $res['AccountLabelList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccountLabelList'])) {
            if (!empty($map['AccountLabelList'])) {
                $model->accountLabelList = [];
                $n1                      = 0;
                foreach ($map['AccountLabelList'] as $item1) {
                    $model->accountLabelList[$n1++] = accountLabelList::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
