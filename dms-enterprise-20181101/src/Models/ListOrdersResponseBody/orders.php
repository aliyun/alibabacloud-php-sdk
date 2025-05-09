<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListOrdersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListOrdersResponseBody\orders\order;

class orders extends Model
{
    /**
     * @var order[]
     */
    public $order;
    protected $_name = [
        'order' => 'Order',
    ];

    public function validate()
    {
        if (\is_array($this->order)) {
            Model::validateArray($this->order);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->order) {
            if (\is_array($this->order)) {
                $res['Order'] = [];
                $n1 = 0;
                foreach ($this->order as $item1) {
                    $res['Order'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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
        if (isset($map['Order'])) {
            if (!empty($map['Order'])) {
                $model->order = [];
                $n1 = 0;
                foreach ($map['Order'] as $item1) {
                    $model->order[$n1++] = order::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
