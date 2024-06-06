<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class ShopStatusChangeResult extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $operate;
    protected $_name = [
        'operate' => 'operate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->operate) {
            $res['operate'] = $this->operate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ShopStatusChangeResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['operate'])) {
            $model->operate = $map['operate'];
        }

        return $model;
    }
}
