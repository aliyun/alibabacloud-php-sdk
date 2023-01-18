<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\cabinInfoList\flightRuleList\baggageItem\baggageSubItems;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\cabinInfoList\flightRuleList\baggageItem\baggageSubItems\baggageSubContentVisualizes\description;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\cabinInfoList\flightRuleList\baggageItem\baggageSubItems\baggageSubContentVisualizes\imageDO;
use AlibabaCloud\Tea\Model;

class baggageSubContentVisualizes extends Model
{
    /**
     * @var string[]
     */
    public $baggageDesc;

    /**
     * @example 0
     *
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
     * @example true
     *
     * @var bool
     */
    public $isHighlight;

    /**
     * @var string
     */
    public $subTitle;
    protected $_name = [
        'baggageDesc'           => 'baggage_desc',
        'baggageSubContentType' => 'baggage_sub_content_type',
        'description'           => 'description',
        'imageDO'               => 'image_d_o',
        'isHighlight'           => 'is_highlight',
        'subTitle'              => 'sub_title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->baggageDesc) {
            $res['baggage_desc'] = $this->baggageDesc;
        }
        if (null !== $this->baggageSubContentType) {
            $res['baggage_sub_content_type'] = $this->baggageSubContentType;
        }
        if (null !== $this->description) {
            $res['description'] = null !== $this->description ? $this->description->toMap() : null;
        }
        if (null !== $this->imageDO) {
            $res['image_d_o'] = null !== $this->imageDO ? $this->imageDO->toMap() : null;
        }
        if (null !== $this->isHighlight) {
            $res['is_highlight'] = $this->isHighlight;
        }
        if (null !== $this->subTitle) {
            $res['sub_title'] = $this->subTitle;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return baggageSubContentVisualizes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['baggage_desc'])) {
            if (!empty($map['baggage_desc'])) {
                $model->baggageDesc = $map['baggage_desc'];
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
