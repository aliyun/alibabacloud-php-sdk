<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\SubmitHotelOrderRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vip_1_0\Models\SubmitHotelOrderRequest\payload\itemList;

class payload extends Model
{
    /**
     * @var itemList[]
     */
    public $itemList;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'itemList' => 'ItemList',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (\is_array($this->itemList)) {
            Model::validateArray($this->itemList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->itemList) {
            if (\is_array($this->itemList)) {
                $res['ItemList'] = [];
                $n1 = 0;
                foreach ($this->itemList as $item1) {
                    $res['ItemList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ItemList'])) {
            if (!empty($map['ItemList'])) {
                $model->itemList = [];
                $n1 = 0;
                foreach ($map['ItemList'] as $item1) {
                    $model->itemList[$n1] = itemList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
