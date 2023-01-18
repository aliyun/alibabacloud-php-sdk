<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\flightRuleList\baggageItem\baggageSubItems\baggageSubContentVisualizes;

use AlibabaCloud\Tea\Model;

class description extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @example https://gw.alicdn.com/imgextra/i4/O1CN01UynXG31pjsEtA3tMF_!!6000000005397-2-tps-36-36.png
     *
     * @var string
     */
    public $icon;

    /**
     * @example https://gw.alicdn.com/imgextra/i1/O1CN01qe7wL21gJ0SmEXXL7_!!6000000004120-2-tps-1206-768.png
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
