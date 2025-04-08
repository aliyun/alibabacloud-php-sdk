<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ShopStatusChangeRequest extends Model
{
    /**
     * @var string
     */
    public $shopId;

    /**
     * @var string
     */
    public $shopStatus;
    protected $_name = [
        'shopId' => 'shopId',
        'shopStatus' => 'shopStatus',
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

        if (null !== $this->shopStatus) {
            $res['shopStatus'] = $this->shopStatus;
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

        if (isset($map['shopStatus'])) {
            $model->shopStatus = $map['shopStatus'];
        }

        return $model;
    }
}
