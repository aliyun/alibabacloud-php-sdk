<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dms\V20250414\Models;

use AlibabaCloud\Dara\Model;

class DLOrder extends Model
{
    /**
     * @var string
     */
    public $col;

    /**
     * @var int
     */
    public $order;
    protected $_name = [
        'col' => 'Col',
        'order' => 'Order',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->col) {
            $res['Col'] = $this->col;
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
        if (isset($map['Col'])) {
            $model->col = $map['Col'];
        }

        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        return $model;
    }
}
