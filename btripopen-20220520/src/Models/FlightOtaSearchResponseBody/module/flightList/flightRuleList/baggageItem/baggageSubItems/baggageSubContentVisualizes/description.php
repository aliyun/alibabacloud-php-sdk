<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightOtaSearchResponseBody\module\flightList\flightRuleList\baggageItem\baggageSubItems\baggageSubContentVisualizes;

use AlibabaCloud\Dara\Model;

class description extends Model
{
    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $icon;

    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'desc' => 'desc',
        'icon' => 'icon',
        'image' => 'image',
        'title' => 'title',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
