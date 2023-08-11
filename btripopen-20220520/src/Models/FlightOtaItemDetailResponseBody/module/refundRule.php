<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaItemDetailResponseBody\module;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaItemDetailResponseBody\module\refundRule\extraContents;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaItemDetailResponseBody\module\refundRule\refundSubItems;
use AlibabaCloud\Tea\Model;

class refundRule extends Model
{
    /**
     * @var extraContents[]
     */
    public $extraContents;

    /**
     * @example HO3925
     *
     * @var string
     */
    public $flightNo;

    /**
     * @example 0
     *
     * @var int
     */
    public $freeBaggage;

    /**
     * @example 0
     *
     * @var int
     */
    public $index;

    /**
     * @example 0
     *
     * @var int
     */
    public $level;

    /**
     * @var refundSubItems[]
     */
    public $refundSubItems;

    /**
     * @description subTableHead
     *
     * @var string[]
     */
    public $subTableHead;

    /**
     * @example tableHead
     *
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
        'flightNo'       => 'flight_no',
        'freeBaggage'    => 'free_baggage',
        'index'          => 'index',
        'level'          => 'level',
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
        if (null !== $this->flightNo) {
            $res['flight_no'] = $this->flightNo;
        }
        if (null !== $this->freeBaggage) {
            $res['free_baggage'] = $this->freeBaggage;
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->level) {
            $res['level'] = $this->level;
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
     * @return refundRule
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
        if (isset($map['flight_no'])) {
            $model->flightNo = $map['flight_no'];
        }
        if (isset($map['free_baggage'])) {
            $model->freeBaggage = $map['free_baggage'];
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['level'])) {
            $model->level = $map['level'];
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
