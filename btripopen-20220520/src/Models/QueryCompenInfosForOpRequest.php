<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Dara\Model;

class QueryCompenInfosForOpRequest extends Model
{
    /**
     * @var int
     */
    public $category;

    /**
     * @var string
     */
    public $compenId;

    /**
     * @var string
     */
    public $orderId;
    protected $_name = [
        'category' => 'category',
        'compenId' => 'compen_id',
        'orderId' => 'order_id',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->category) {
            $res['category'] = $this->category;
        }

        if (null !== $this->compenId) {
            $res['compen_id'] = $this->compenId;
        }

        if (null !== $this->orderId) {
            $res['order_id'] = $this->orderId;
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
        if (isset($map['category'])) {
            $model->category = $map['category'];
        }

        if (isset($map['compen_id'])) {
            $model->compenId = $map['compen_id'];
        }

        if (isset($map['order_id'])) {
            $model->orderId = $map['order_id'];
        }

        return $model;
    }
}
