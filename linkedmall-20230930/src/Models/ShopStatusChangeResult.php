<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class ShopStatusChangeResult extends Model
{
    /**
     * @var bool
     */
    public $operate;
    protected $_name = [
        'operate' => 'operate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->operate) {
            $res['operate'] = $this->operate;
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
        if (isset($map['operate'])) {
            $model->operate = $map['operate'];
        }

        return $model;
    }
}
