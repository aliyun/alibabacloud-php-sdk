<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\cabinInfoList\flightRuleList;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\cabinInfoList\flightRuleList\changeRuleItem\extraContents;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\cabinInfoList\flightRuleList\changeRuleItem\refundSubItems;

class changeRuleItem extends Model
{
    /**
     * @var extraContents[]
     */
    public $extraContents;

    /**
     * @var int
     */
    public $index;

    /**
     * @var refundSubItems[]
     */
    public $refundSubItems;

    /**
     * @var string[]
     */
    public $subTableHead;

    /**
     * @var string
     */
    public $tableHead;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'extraContents' => 'extra_contents',
        'index' => 'index',
        'refundSubItems' => 'refund_sub_items',
        'subTableHead' => 'sub_table_head',
        'tableHead' => 'table_head',
        'title' => 'title',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->extraContents)) {
            Model::validateArray($this->extraContents);
        }
        if (\is_array($this->refundSubItems)) {
            Model::validateArray($this->refundSubItems);
        }
        if (\is_array($this->subTableHead)) {
            Model::validateArray($this->subTableHead);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extraContents) {
            if (\is_array($this->extraContents)) {
                $res['extra_contents'] = [];
                $n1 = 0;
                foreach ($this->extraContents as $item1) {
                    $res['extra_contents'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->refundSubItems) {
            if (\is_array($this->refundSubItems)) {
                $res['refund_sub_items'] = [];
                $n1 = 0;
                foreach ($this->refundSubItems as $item1) {
                    $res['refund_sub_items'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->subTableHead) {
            if (\is_array($this->subTableHead)) {
                $res['sub_table_head'] = [];
                $n1 = 0;
                foreach ($this->subTableHead as $item1) {
                    $res['sub_table_head'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->tableHead) {
            $res['table_head'] = $this->tableHead;
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
        if (isset($map['extra_contents'])) {
            if (!empty($map['extra_contents'])) {
                $model->extraContents = [];
                $n1 = 0;
                foreach ($map['extra_contents'] as $item1) {
                    $model->extraContents[$n1++] = extraContents::fromMap($item1);
                }
            }
        }

        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        if (isset($map['refund_sub_items'])) {
            if (!empty($map['refund_sub_items'])) {
                $model->refundSubItems = [];
                $n1 = 0;
                foreach ($map['refund_sub_items'] as $item1) {
                    $model->refundSubItems[$n1++] = refundSubItems::fromMap($item1);
                }
            }
        }

        if (isset($map['sub_table_head'])) {
            if (!empty($map['sub_table_head'])) {
                $model->subTableHead = [];
                $n1 = 0;
                foreach ($map['sub_table_head'] as $item1) {
                    $model->subTableHead[$n1++] = $item1;
                }
            }
        }

        if (isset($map['table_head'])) {
            $model->tableHead = $map['table_head'];
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
