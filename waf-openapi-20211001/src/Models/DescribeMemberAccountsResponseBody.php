<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeMemberAccountsResponseBody\accountInfos;

class DescribeMemberAccountsResponseBody extends Model
{
    /**
     * @var accountInfos[]
     */
    public $accountInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accountInfos' => 'AccountInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->accountInfos)) {
            Model::validateArray($this->accountInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountInfos) {
            if (\is_array($this->accountInfos)) {
                $res['AccountInfos'] = [];
                $n1 = 0;
                foreach ($this->accountInfos as $item1) {
                    $res['AccountInfos'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccountInfos'])) {
            if (!empty($map['AccountInfos'])) {
                $model->accountInfos = [];
                $n1 = 0;
                foreach ($map['AccountInfos'] as $item1) {
                    $model->accountInfos[$n1] = accountInfos::fromMap($item1);
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
