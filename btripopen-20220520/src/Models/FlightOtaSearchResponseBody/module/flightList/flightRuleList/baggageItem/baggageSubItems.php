<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\flightRuleList\baggageItem;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\flightRuleList\baggageItem\baggageSubItems\baggageSubContentVisualizes;
use AlibabaCloud\Tea\Model;

class baggageSubItems extends Model
{
    /**
     * @var baggageSubContentVisualizes[]
     */
    public $baggageSubContentVisualizes;

    /**
     * @var mixed[]
     */
    public $extraContentVisualizes;

    /**
     * @example true
     *
     * @var bool
     */
    public $isStruct;

    /**
     * @description PTC
     *
     * @example ADT
     *
     * @var string
     */
    public $ptc;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'baggageSubContentVisualizes' => 'baggage_sub_content_visualizes',
        'extraContentVisualizes'      => 'extra_content_visualizes',
        'isStruct'                    => 'is_struct',
        'ptc'                         => 'ptc',
        'title'                       => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baggageSubContentVisualizes) {
            $res['baggage_sub_content_visualizes'] = [];
            if (null !== $this->baggageSubContentVisualizes && \is_array($this->baggageSubContentVisualizes)) {
                $n = 0;
                foreach ($this->baggageSubContentVisualizes as $item) {
                    $res['baggage_sub_content_visualizes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->extraContentVisualizes) {
            $res['extra_content_visualizes'] = $this->extraContentVisualizes;
        }
        if (null !== $this->isStruct) {
            $res['is_struct'] = $this->isStruct;
        }
        if (null !== $this->ptc) {
            $res['ptc'] = $this->ptc;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baggageSubItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['baggage_sub_content_visualizes'])) {
            if (!empty($map['baggage_sub_content_visualizes'])) {
                $model->baggageSubContentVisualizes = [];
                $n                                  = 0;
                foreach ($map['baggage_sub_content_visualizes'] as $item) {
                    $model->baggageSubContentVisualizes[$n++] = null !== $item ? baggageSubContentVisualizes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['extra_content_visualizes'])) {
            if (!empty($map['extra_content_visualizes'])) {
                $model->extraContentVisualizes = $map['extra_content_visualizes'];
            }
        }
        if (isset($map['is_struct'])) {
            $model->isStruct = $map['is_struct'];
        }
        if (isset($map['ptc'])) {
            $model->ptc = $map['ptc'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
