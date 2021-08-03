<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210501\Models\SearchByUrlResponseBody\data\auctions\result;

use AlibabaCloud\Tea\Model;

class maxCommission extends Model
{
    /**
     * @var string
     */
    public $maxCommissionRate;

    /**
     * @var string
     */
    public $maxCommissionClickUrl;

    /**
     * @var string
     */
    public $maxCommissionCouponShareUrl;
    protected $_name = [
        'maxCommissionRate'           => 'MaxCommissionRate',
        'maxCommissionClickUrl'       => 'MaxCommissionClickUrl',
        'maxCommissionCouponShareUrl' => 'MaxCommissionCouponShareUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxCommissionRate) {
            $res['MaxCommissionRate'] = $this->maxCommissionRate;
        }
        if (null !== $this->maxCommissionClickUrl) {
            $res['MaxCommissionClickUrl'] = $this->maxCommissionClickUrl;
        }
        if (null !== $this->maxCommissionCouponShareUrl) {
            $res['MaxCommissionCouponShareUrl'] = $this->maxCommissionCouponShareUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return maxCommission
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxCommissionRate'])) {
            $model->maxCommissionRate = $map['MaxCommissionRate'];
        }
        if (isset($map['MaxCommissionClickUrl'])) {
            $model->maxCommissionClickUrl = $map['MaxCommissionClickUrl'];
        }
        if (isset($map['MaxCommissionCouponShareUrl'])) {
            $model->maxCommissionCouponShareUrl = $map['MaxCommissionCouponShareUrl'];
        }

        return $model;
    }
}
