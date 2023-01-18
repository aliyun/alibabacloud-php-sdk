<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\transferInfo\transferFlightRuleList;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\transferInfo\transferFlightRuleList\changeRuleItem\extraContents;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\transferInfo\transferFlightRuleList\changeRuleItem\refundSubItems;
use AlibabaCloud\Tea\Model;

class changeRuleItem extends Model
{
    /**
     * @var extraContents[]
     */
    public $extraContents;

    /**
     * @example 0
     *
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
     * @example 0
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'extraContents'  => 'extra_contents',
        'index'          => 'index',
        'refundSubItems' => 'refund_sub_items',
        'subTableHead'   => 'sub_table_head',
        'tableHead'      => 'table_head',
        'title'          => 'title',
        'type'           => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extraContents) {
            $res['extra_contents'] = [];
            if (null !== $this->extraContents && \is_array($this->extraContents)) {
                $n = 0;
                foreach ($this->extraContents as $item) {
                    $res['extra_contents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->refundSubItems) {
            $res['refund_sub_items'] = [];
            if (null !== $this->refundSubItems && \is_array($this->refundSubItems)) {
                $n = 0;
                foreach ($this->refundSubItems as $item) {
                    $res['refund_sub_items'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->subTableHead) {
            $res['sub_table_head'] = $this->subTableHead;
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

    /**
     * @param array $map
     *
     * @return changeRuleItem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['extra_contents'])) {
            if (!empty($map['extra_contents'])) {
                $model->extraContents = [];
                $n                    = 0;
                foreach ($map['extra_contents'] as $item) {
                    $model->extraContents[$n++] = null !== $item ? extraContents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['refund_sub_items'])) {
            if (!empty($map['refund_sub_items'])) {
                $model->refundSubItems = [];
                $n                     = 0;
                foreach ($map['refund_sub_items'] as $item) {
                    $model->refundSubItems[$n++] = null !== $item ? refundSubItems::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['sub_table_head'])) {
            if (!empty($map['sub_table_head'])) {
                $model->subTableHead = $map['sub_table_head'];
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
