<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListRecentChangeOrderResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Edas\V20170801\Models\ListRecentChangeOrderResponseBody\changeOrderList\changeOrder;

class changeOrderList extends Model
{
    /**
     * @var changeOrder[]
     */
    public $changeOrder;
    protected $_name = [
        'changeOrder' => 'ChangeOrder',
    ];

    public function validate()
    {
        if (\is_array($this->changeOrder)) {
            Model::validateArray($this->changeOrder);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->changeOrder) {
            if (\is_array($this->changeOrder)) {
                $res['ChangeOrder'] = [];
                $n1 = 0;
                foreach ($this->changeOrder as $item1) {
                    $res['ChangeOrder'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['ChangeOrder'])) {
            if (!empty($map['ChangeOrder'])) {
                $model->changeOrder = [];
                $n1 = 0;
                foreach ($map['ChangeOrder'] as $item1) {
                    $model->changeOrder[$n1] = changeOrder::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
