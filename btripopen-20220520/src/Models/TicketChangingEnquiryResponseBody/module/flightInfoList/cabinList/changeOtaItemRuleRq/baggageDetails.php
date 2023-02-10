<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\baggageDetails\baggageSubItems;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\baggageDetails\tips;
use AlibabaCloud\Tea\Model;

class baggageDetails extends Model
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
        'index'           => 'index',
        'tableHead'       => 'table_head',
        'tips'            => 'tips',
        'title'           => 'title',
        'type'            => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baggageSubItems) {
            $res['baggage_sub_items'] = [];
            if (null !== $this->baggageSubItems && \is_array($this->baggageSubItems)) {
                $n = 0;
                foreach ($this->baggageSubItems as $item) {
                    $res['baggage_sub_items'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['tips'] = null !== $this->tips ? $this->tips->toMap() : null;
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
     * @return baggageDetails
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['baggage_sub_items'])) {
            if (!empty($map['baggage_sub_items'])) {
                $model->baggageSubItems = [];
                $n                      = 0;
                foreach ($map['baggage_sub_items'] as $item) {
                    $model->baggageSubItems[$n++] = null !== $item ? baggageSubItems::fromMap($item) : $item;
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
