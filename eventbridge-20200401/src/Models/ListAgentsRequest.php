<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Dara\Model;

class ListAgentsRequest extends Model
{
    /**
     * @var string
     */
    public $after;

    /**
     * @var string
     */
    public $limit;

    /**
     * @var string
     */
    public $order;
    protected $_name = [
        'after' => 'After',
        'limit' => 'Limit',
        'order' => 'Order',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->after) {
            $res['After'] = $this->after;
        }

        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
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
        if (isset($map['After'])) {
            $model->after = $map['After'];
        }

        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        return $model;
    }
}
