<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\cabinInfoList\flightRuleList\baggageItem;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\cabinInfoList\flightRuleList\baggageItem\baggageSubItems\baggageSubContentVisualizes;

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
     * @var bool
     */
    public $isStruct;

    /**
     * @var string
     */
    public $ptc;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'baggageSubContentVisualizes' => 'baggage_sub_content_visualizes',
        'extraContentVisualizes' => 'extra_content_visualizes',
        'isStruct' => 'is_struct',
        'ptc' => 'ptc',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->baggageSubContentVisualizes)) {
            Model::validateArray($this->baggageSubContentVisualizes);
        }
        if (\is_array($this->extraContentVisualizes)) {
            Model::validateArray($this->extraContentVisualizes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baggageSubContentVisualizes) {
            if (\is_array($this->baggageSubContentVisualizes)) {
                $res['baggage_sub_content_visualizes'] = [];
                $n1 = 0;
                foreach ($this->baggageSubContentVisualizes as $item1) {
                    $res['baggage_sub_content_visualizes'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->extraContentVisualizes) {
            if (\is_array($this->extraContentVisualizes)) {
                $res['extra_content_visualizes'] = [];
                $n1 = 0;
                foreach ($this->extraContentVisualizes as $item1) {
                    $res['extra_content_visualizes'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['baggage_sub_content_visualizes'])) {
            if (!empty($map['baggage_sub_content_visualizes'])) {
                $model->baggageSubContentVisualizes = [];
                $n1 = 0;
                foreach ($map['baggage_sub_content_visualizes'] as $item1) {
                    $model->baggageSubContentVisualizes[$n1++] = baggageSubContentVisualizes::fromMap($item1);
                }
            }
        }

        if (isset($map['extra_content_visualizes'])) {
            if (!empty($map['extra_content_visualizes'])) {
                $model->extraContentVisualizes = [];
                $n1 = 0;
                foreach ($map['extra_content_visualizes'] as $item1) {
                    $model->extraContentVisualizes[$n1++] = $item1;
                }
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
