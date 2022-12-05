<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class CreateInventoryLockRequest extends Model
{
    /**
     * @var string
     */
    public $goodsId;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'goodsId' => 'GoodsId',
        'userId'  => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->goodsId) {
            $res['GoodsId'] = $this->goodsId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateInventoryLockRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GoodsId'])) {
            $model->goodsId = $map['GoodsId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
