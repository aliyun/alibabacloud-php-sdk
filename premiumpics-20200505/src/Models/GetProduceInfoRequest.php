<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class GetProduceInfoRequest extends Model
{
    /**
     * @example 94e51c6930d24f0b88f2a4f5066089c7
     *
     * @var string
     */
    public $goodsId;
    protected $_name = [
        'goodsId' => 'GoodsId',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetProduceInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GoodsId'])) {
            $model->goodsId = $map['GoodsId'];
        }

        return $model;
    }
}
