<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class MemberAccountRequest extends Model
{
    /**
     * @var string
     */
    public $shopId;
    protected $_name = [
        'shopId' => 'shopId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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
        if (isset($map['shopId'])) {
            $model->shopId = $map['shopId'];
        }

        return $model;
    }
}
