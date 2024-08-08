<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailadvqa\V20230417\Models;

use AlibabaCloud\Tea\Model;

class BatchSaveOrderPopShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $ordersShrink;
    protected $_name = [
        'ordersShrink' => 'Orders',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ordersShrink) {
            $res['Orders'] = $this->ordersShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchSaveOrderPopShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Orders'])) {
            $model->ordersShrink = $map['Orders'];
        }

        return $model;
    }
}
