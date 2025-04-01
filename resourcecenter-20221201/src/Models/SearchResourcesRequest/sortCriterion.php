<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models\SearchResourcesRequest;

use AlibabaCloud\Dara\Model;

class sortCriterion extends Model
{
    /**
     * @var string
     */
    public $key;

    /**
     * @var string
     */
    public $order;
    protected $_name = [
        'key' => 'Key',
        'order' => 'Order',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }

        if (null !== $this->order) {
            $res['Order'] = $this->order;
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
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        return $model;
    }
}
