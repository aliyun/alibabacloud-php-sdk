<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class MemberAccountResult extends Model
{
    /**
     * @example "yue***@newburn.cn"
     *
     * @var string[]
     */
    public $accountNo;

    /**
     * @example 123
     *
     * @var string
     */
    public $shopId;
    protected $_name = [
        'accountNo' => 'accountNo',
        'shopId'    => 'shopId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountNo) {
            $res['accountNo'] = $this->accountNo;
        }
        if (null !== $this->shopId) {
            $res['shopId'] = $this->shopId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MemberAccountResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['accountNo'])) {
            if (!empty($map['accountNo'])) {
                $model->accountNo = $map['accountNo'];
            }
        }
        if (isset($map['shopId'])) {
            $model->shopId = $map['shopId'];
        }

        return $model;
    }
}
