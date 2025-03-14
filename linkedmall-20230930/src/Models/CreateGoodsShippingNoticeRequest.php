<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class CreateGoodsShippingNoticeRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var GoodsShippingNoticeCreateCmd
     */
    public $body;
    protected $_name = [
        'body' => 'body',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateGoodsShippingNoticeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = GoodsShippingNoticeCreateCmd::fromMap($map['body']);
        }

        return $model;
    }
}
