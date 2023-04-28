<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\baggageDetails\baggageSubItems\baggageSubContentVisualizes;

use AlibabaCloud\Tea\Model;

class description extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @example demo
     *
     * @var string
     */
    public $icon;

    /**
     * @example demo
     *
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'desc'  => 'desc',
        'icon'  => 'icon',
        'image' => 'image',
        'title' => 'title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->desc) {
            $res['desc'] = $this->desc;
        }
        if (null !== $this->icon) {
            $res['icon'] = $this->icon;
        }
        if (null !== $this->image) {
            $res['image'] = $this->image;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return description
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['desc'])) {
            $model->desc = $map['desc'];
        }
        if (isset($map['icon'])) {
            $model->icon = $map['icon'];
        }
        if (isset($map['image'])) {
            $model->image = $map['image'];
        }
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        return $model;
    }
}
