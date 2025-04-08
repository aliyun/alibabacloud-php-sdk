<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class MemberAccountResult extends Model
{
    /**
     * @var string[]
     */
    public $accountNo;

    /**
     * @var string
     */
    public $shopId;
    protected $_name = [
        'accountNo' => 'accountNo',
        'shopId' => 'shopId',
    ];

    public function validate()
    {
        if (\is_array($this->accountNo)) {
            Model::validateArray($this->accountNo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountNo) {
            if (\is_array($this->accountNo)) {
                $res['accountNo'] = [];
                $n1 = 0;
                foreach ($this->accountNo as $item1) {
                    $res['accountNo'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->shopId) {
            $res['shopId'] = $this->shopId;
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
        if (isset($map['accountNo'])) {
            if (!empty($map['accountNo'])) {
                $model->accountNo = [];
                $n1 = 0;
                foreach ($map['accountNo'] as $item1) {
                    $model->accountNo[$n1++] = $item1;
                }
            }
        }

        if (isset($map['shopId'])) {
            $model->shopId = $map['shopId'];
        }

        return $model;
    }
}
