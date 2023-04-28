<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\TicketChangingEnquiryResponseBody\module\flightInfoList\cabinList\changeOtaItemRuleRq\baggageDetails\baggageSubItems\baggageSubContentVisualizes;

use AlibabaCloud\Tea\Model;

class imageDO extends Model
{
    /**
     * @example https://gw.alicdn.com/imgextra/i3/O1CN01kLt3m923XsUs6WVif_!!6000000007266-2-tps-280-300.png
     *
     * @var string
     */
    public $image;

    /**
     * @example 50
     *
     * @var string
     */
    public $largest;

    /**
     * @example 40
     *
     * @var string
     */
    public $middle;

    /**
     * @example 20
     *
     * @var string
     */
    public $smallest;
    protected $_name = [
        'image'    => 'image',
        'largest'  => 'largest',
        'middle'   => 'middle',
        'smallest' => 'smallest',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return imageDO
     */
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
