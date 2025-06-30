<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\changeDetails\extraContents;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\changeDetails\refundSubItems;

class changeDetails extends Model
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
                    $res['extra_contents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
                    $res['refund_sub_items'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
                    $model->extraContents[$n1] = extraContents::fromMap($item1);
                    ++$n1;
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
                    $model->refundSubItems[$n1] = refundSubItems::fromMap($item1);
                    ++$n1;
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
