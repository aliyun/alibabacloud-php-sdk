<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Premiumpics\V20200505\Models;

use AlibabaCloud\Tea\Model;

class ListLogoSamplesRequest extends Model
{
    /**
     * @example e2a520fd3efd46fcb8e2e112b158b246
     *
     * @var string
     */
    public $goodsId;

    /**
     * @example 1
     *
     * @var int
     */
    public $page;

    /**
     * @description UserId
     *
     * @example UserId
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'goodsId' => 'GoodsId',
        'page'    => 'Page',
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
        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListLogoSamplesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GoodsId'])) {
            $model->goodsId = $map['GoodsId'];
        }
        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
