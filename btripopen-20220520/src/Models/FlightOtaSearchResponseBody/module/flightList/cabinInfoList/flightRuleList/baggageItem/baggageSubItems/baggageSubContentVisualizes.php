<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\cabinInfoList\flightRuleList\baggageItem\baggageSubItems;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\cabinInfoList\flightRuleList\baggageItem\baggageSubItems\baggageSubContentVisualizes\description;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\cabinInfoList\flightRuleList\baggageItem\baggageSubItems\baggageSubContentVisualizes\imageDO;

class baggageSubContentVisualizes extends Model
{
    /**
     * @var string[]
     */
    public $baggageDesc;

    /**
     * @var int
     */
    public $baggageSubContentType;

    /**
     * @var description
     */
    public $description;

    /**
     * @var imageDO
     */
    public $imageDO;

    /**
     * @var bool
     */
    public $isHighlight;

    /**
     * @var string
     */
    public $subTitle;
    protected $_name = [
        'baggageDesc' => 'baggage_desc',
        'baggageSubContentType' => 'baggage_sub_content_type',
        'description' => 'description',
        'imageDO' => 'image_d_o',
        'isHighlight' => 'is_highlight',
        'subTitle' => 'sub_title',
    ];

    public function validate()
    {
        if (\is_array($this->baggageDesc)) {
            Model::validateArray($this->baggageDesc);
        }
        if (null !== $this->description) {
            $this->description->validate();
        }
        if (null !== $this->imageDO) {
            $this->imageDO->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baggageDesc) {
            if (\is_array($this->baggageDesc)) {
                $res['baggage_desc'] = [];
                $n1 = 0;
                foreach ($this->baggageDesc as $item1) {
                    $res['baggage_desc'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->baggageSubContentType) {
            $res['baggage_sub_content_type'] = $this->baggageSubContentType;
        }

        if (null !== $this->description) {
            $res['description'] = null !== $this->description ? $this->description->toArray($noStream) : $this->description;
        }

        if (null !== $this->imageDO) {
            $res['image_d_o'] = null !== $this->imageDO ? $this->imageDO->toArray($noStream) : $this->imageDO;
        }

        if (null !== $this->isHighlight) {
            $res['is_highlight'] = $this->isHighlight;
        }

        if (null !== $this->subTitle) {
            $res['sub_title'] = $this->subTitle;
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
        if (isset($map['baggage_desc'])) {
            if (!empty($map['baggage_desc'])) {
                $model->baggageDesc = [];
                $n1 = 0;
                foreach ($map['baggage_desc'] as $item1) {
                    $model->baggageDesc[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['baggage_sub_content_type'])) {
            $model->baggageSubContentType = $map['baggage_sub_content_type'];
        }

        if (isset($map['description'])) {
            $model->description = description::fromMap($map['description']);
        }

        if (isset($map['image_d_o'])) {
            $model->imageDO = imageDO::fromMap($map['image_d_o']);
        }

        if (isset($map['is_highlight'])) {
            $model->isHighlight = $map['is_highlight'];
        }

        if (isset($map['sub_title'])) {
            $model->subTitle = $map['sub_title'];
        }

        return $model;
    }
}
