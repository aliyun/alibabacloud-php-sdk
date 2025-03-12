<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class MemberAccountRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 123
     *
     * @var string
     */
    public $shopId;
    protected $_name = [
        'shopId' => 'shopId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->shopId) {
            $res['shopId'] = $this->shopId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return MemberAccountRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['shopId'])) {
            $model->shopId = $map['shopId'];
        }

        return $model;
    }
}
