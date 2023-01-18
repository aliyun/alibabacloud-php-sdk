<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\FlightSearchListResponseBody\module\flightList\flightRuleList\changeRuleItem\refundSubItems;

use AlibabaCloud\Tea\Model;

class refundSubContents extends Model
{
    /**
     * @var string
     */
    public $feeDesc;

    /**
     * @var string
     */
    public $feeRange;

    /**
     * @example 1
     *
     * @var int
     */
    public $style;
    protected $_name = [
        'feeDesc'  => 'fee_desc',
        'feeRange' => 'fee_range',
        'style'    => 'style',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->feeDesc) {
            $res['fee_desc'] = $this->feeDesc;
        }
        if (null !== $this->feeRange) {
            $res['fee_range'] = $this->feeRange;
        }
        if (null !== $this->style) {
            $res['style'] = $this->style;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refundSubContents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fee_desc'])) {
            $model->feeDesc = $map['fee_desc'];
        }
        if (isset($map['fee_range'])) {
            $model->feeRange = $map['fee_range'];
        }
        if (isset($map['style'])) {
            $model->style = $map['style'];
        }

        return $model;
    }
}
