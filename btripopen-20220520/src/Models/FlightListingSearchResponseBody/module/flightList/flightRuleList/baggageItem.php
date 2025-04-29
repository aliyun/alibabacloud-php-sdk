<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchResponseBody\module\flightList\flightRuleList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchResponseBody\module\flightList\flightRuleList\baggageItem\baggageSubItems;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightListingSearchResponseBody\module\flightList\flightRuleList\baggageItem\tips;

class baggageItem extends Model
{
    /**
     * @var baggageSubItems[]
     */
    public $baggageSubItems;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $tableHead;

    /**
     * @var tips
     */
    public $tips;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'baggageSubItems' => 'baggage_sub_items',
        'index' => 'index',
        'tableHead' => 'table_head',
        'tips' => 'tips',
        'title' => 'title',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->baggageSubItems)) {
            Model::validateArray($this->baggageSubItems);
        }
        if (null !== $this->tips) {
            $this->tips->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baggageSubItems) {
            if (\is_array($this->baggageSubItems)) {
                $res['baggage_sub_items'] = [];
                $n1 = 0;
                foreach ($this->baggageSubItems as $item1) {
                    $res['baggage_sub_items'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->tableHead) {
            $res['table_head'] = $this->tableHead;
        }

        if (null !== $this->tips) {
            $res['tips'] = null !== $this->tips ? $this->tips->toArray($noStream) : $this->tips;
        }

        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['baggage_sub_items'])) {
            if (!empty($map['baggage_sub_items'])) {
                $model->baggageSubItems = [];
                $n1 = 0;
                foreach ($map['baggage_sub_items'] as $item1) {
                    $model->baggageSubItems[$n1++] = baggageSubItems::fromMap($item1);
                }
            }
        }

        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        if (isset($map['table_head'])) {
            $model->tableHead = $map['table_head'];
        }

        if (isset($map['tips'])) {
            $model->tips = tips::fromMap($map['tips']);
        }

        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
