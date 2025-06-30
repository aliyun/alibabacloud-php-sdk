<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\baggageDetails;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\baggageDetails\baggageSubItems\baggageSubContents;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\baggageDetails\baggageSubItems\baggageSubContentVisualizes;

class baggageSubItems extends Model
{
    /**
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
     * @var string
     */
    public $content;

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
        'attributes' => 'attributes',
        'baggageSubContentVisualizes' => 'baggage_sub_content_visualizes',
        'baggageSubContents' => 'baggage_sub_contents',
        'content' => 'content',
        'isStruct' => 'is_struct',
        'ptc' => 'ptc',
        'title' => 'title',
    ];

    public function validate()
    {
        if (\is_array($this->attributes)) {
            Model::validateArray($this->attributes);
        }
        if (\is_array($this->baggageSubContentVisualizes)) {
            Model::validateArray($this->baggageSubContentVisualizes);
        }
        if (\is_array($this->baggageSubContents)) {
            Model::validateArray($this->baggageSubContents);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributes) {
            if (\is_array($this->attributes)) {
                $res['attributes'] = [];
                foreach ($this->attributes as $key1 => $value1) {
                    $res['attributes'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->baggageSubContentVisualizes) {
            if (\is_array($this->baggageSubContentVisualizes)) {
                $res['baggage_sub_content_visualizes'] = [];
                $n1 = 0;
                foreach ($this->baggageSubContentVisualizes as $item1) {
                    $res['baggage_sub_content_visualizes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->baggageSubContents) {
            if (\is_array($this->baggageSubContents)) {
                $res['baggage_sub_contents'] = [];
                $n1 = 0;
                foreach ($this->baggageSubContents as $item1) {
                    $res['baggage_sub_contents'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['attributes'])) {
            if (!empty($map['attributes'])) {
                $model->attributes = [];
                foreach ($map['attributes'] as $key1 => $value1) {
                    $model->attributes[$key1] = $value1;
                }
            }
        }

        if (isset($map['baggage_sub_content_visualizes'])) {
            if (!empty($map['baggage_sub_content_visualizes'])) {
                $model->baggageSubContentVisualizes = [];
                $n1 = 0;
                foreach ($map['baggage_sub_content_visualizes'] as $item1) {
                    $model->baggageSubContentVisualizes[$n1] = baggageSubContentVisualizes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['baggage_sub_contents'])) {
            if (!empty($map['baggage_sub_contents'])) {
                $model->baggageSubContents = [];
                $n1 = 0;
                foreach ($map['baggage_sub_contents'] as $item1) {
                    $model->baggageSubContents[$n1] = baggageSubContents::fromMap($item1);
                    ++$n1;
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
