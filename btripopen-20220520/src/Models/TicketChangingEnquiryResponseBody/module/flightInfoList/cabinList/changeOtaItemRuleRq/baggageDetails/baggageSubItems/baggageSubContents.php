<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\baggageDetails\baggageSubItems;

use AlibabaCloud\Dara\Model;

class baggageSubContents extends Model
{
    /**
     * @var string
     */
    public $baggageDesc;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var int
     */
    public $style;

    /**
     * @var string
     */
    public $subTitle;
    protected $_name = [
        'baggageDesc' => 'baggage_desc',
        'icon' => 'icon',
        'style' => 'style',
        'subTitle' => 'sub_title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->baggageDesc) {
            $res['baggage_desc'] = $this->baggageDesc;
        }

        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }

        if (null !== $this->style) {
            $res['style'] = $this->style;
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
            $model->baggageDesc = $map['baggage_desc'];
        }

        if (isset($map['icon'])) {
            $model->icon = $map['icon'];
        }

        if (isset($map['style'])) {
            $model->style = $map['style'];
        }

        if (isset($map['sub_title'])) {
            $model->subTitle = $map['sub_title'];
        }

        return $model;
    }
}
