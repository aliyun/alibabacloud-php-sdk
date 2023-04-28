<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\baggageDetails\baggageSubItems;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\baggageDetails\baggageSubItems\baggageSubContentVisualizes\description;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\baggageDetails\baggageSubItems\baggageSubContentVisualizes\imageDO;
use AlibabaCloud\Tea\Model;

class baggageSubContentVisualizes extends Model
{
    /**
     * @var string[]
     */
    public $baggageDesc;

    /**
     * @example 1
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
        'imageDO'               => 'imageDO',
        'isHighlight'           => 'is_highlight',
        'subTitle'              => 'subTitle',
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
            $res['imageDO'] = null !== $this->imageDO ? $this->imageDO->toMap() : null;
        }
        if (null !== $this->isHighlight) {
            $res['is_highlight'] = $this->isHighlight;
        }
        if (null !== $this->subTitle) {
            $res['subTitle'] = $this->subTitle;
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
        if (isset($map['imageDO'])) {
            $model->imageDO = imageDO::fromMap($map['imageDO']);
        }
        if (isset($map['is_highlight'])) {
            $model->isHighlight = $map['is_highlight'];
        }
        if (isset($map['subTitle'])) {
            $model->subTitle = $map['subTitle'];
        }

        return $model;
    }
}
