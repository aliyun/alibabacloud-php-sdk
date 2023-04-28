<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\baggageDetails;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\baggageDetails\baggageSubItems\baggageSubContents;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\baggageDetails\baggageSubItems\baggageSubContentVisualizes;
use AlibabaCloud\Tea\Model;

class baggageSubItems extends Model
{
    /**
     * @description attributes
     *
     * @var mixed[]
     */
    public $attributes;

    /**
     * @var baggageSubContentVisualizes[]
     */
    public $baggageSubContentVisualizes;

    /**
     * @var baggageSubContents[]
     */
    public $baggageSubContents;

    /**
     * @example demo
     *
     * @var string
     */
    public $content;

    /**
     * @example true
     *
     * @var bool
     */
    public $isStruct;

    /**
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
        'attributes'                  => 'attributes',
        'baggageSubContentVisualizes' => 'baggage_sub_content_visualizes',
        'baggageSubContents'          => 'baggage_sub_contents',
        'content'                     => 'content',
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
        if (null !== $this->attributes) {
            $res['attributes'] = $this->attributes;
        }
        if (null !== $this->baggageSubContentVisualizes) {
            $res['baggage_sub_content_visualizes'] = [];
            if (null !== $this->baggageSubContentVisualizes && \is_array($this->baggageSubContentVisualizes)) {
                $n = 0;
                foreach ($this->baggageSubContentVisualizes as $item) {
                    $res['baggage_sub_content_visualizes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->baggageSubContents) {
            $res['baggage_sub_contents'] = [];
            if (null !== $this->baggageSubContents && \is_array($this->baggageSubContents)) {
                $n = 0;
                foreach ($this->baggageSubContents as $item) {
                    $res['baggage_sub_contents'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
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
        if (isset($map['attributes'])) {
            $model->attributes = $map['attributes'];
        }
        if (isset($map['baggage_sub_content_visualizes'])) {
            if (!empty($map['baggage_sub_content_visualizes'])) {
                $model->baggageSubContentVisualizes = [];
                $n                                  = 0;
                foreach ($map['baggage_sub_content_visualizes'] as $item) {
                    $model->baggageSubContentVisualizes[$n++] = null !== $item ? baggageSubContentVisualizes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['baggage_sub_contents'])) {
            if (!empty($map['baggage_sub_contents'])) {
                $model->baggageSubContents = [];
                $n                         = 0;
                foreach ($map['baggage_sub_contents'] as $item) {
                    $model->baggageSubContents[$n++] = null !== $item ? baggageSubContents::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
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
