<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\cabinInfoList\flightRuleList\baggageItem\baggageSubItems\baggageSubContentVisualizes;

use AlibabaCloud\Dara\Model;

class imageDO extends Model
{
    /**
     * @var string
     */
    public $image;

    /**
     * @var string
     */
    public $largest;

    /**
     * @var string
     */
    public $middle;

    /**
     * @var string
     */
    public $smallest;
    protected $_name = [
        'image' => 'image',
        'largest' => 'largest',
        'middle' => 'middle',
        'smallest' => 'smallest',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->image) {
            $res['image'] = $this->image;
        }

        if (null !== $this->largest) {
            $res['largest'] = $this->largest;
        }

        if (null !== $this->middle) {
            $res['middle'] = $this->middle;
        }

        if (null !== $this->smallest) {
            $res['smallest'] = $this->smallest;
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
        if (isset($map['image'])) {
            $model->image = $map['image'];
        }

        if (isset($map['largest'])) {
            $model->largest = $map['largest'];
        }

        if (isset($map['middle'])) {
            $model->middle = $map['middle'];
        }

        if (isset($map['smallest'])) {
            $model->smallest = $map['smallest'];
        }

        return $model;
    }
}
