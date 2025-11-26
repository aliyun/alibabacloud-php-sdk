<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Dara\Model;

class CreateFileSystemShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $orderDetailsShrink;
    protected $_name = [
        'orderDetailsShrink' => 'OrderDetails',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->orderDetailsShrink) {
            $res['OrderDetails'] = $this->orderDetailsShrink;
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
        if (isset($map['OrderDetails'])) {
            $model->orderDetailsShrink = $map['OrderDetails'];
        }

        return $model;
    }
}
