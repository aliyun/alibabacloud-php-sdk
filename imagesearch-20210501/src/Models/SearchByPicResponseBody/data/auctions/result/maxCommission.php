<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ImageSearch\V20210501\Models\SearchByPicResponseBody\data\auctions\result;

use AlibabaCloud\Tea\Model;

class maxCommission extends Model
{
    /**
     * @example https://s.click.taobao.com/t?e=xxxx
     *
     * @var string
     */
    public $maxCommissionClickUrl;

    /**
     * @example https://uland.taobao.com/coupon/xxxx
     *
     * @var string
     */
    public $maxCommissionCouponShareUrl;

    /**
     * @example 20.4
     *
     * @var string
     */
    public $maxCommissionRate;
    protected $_name = [
        'maxCommissionClickUrl'       => 'MaxCommissionClickUrl',
        'maxCommissionCouponShareUrl' => 'MaxCommissionCouponShareUrl',
        'maxCommissionRate'           => 'MaxCommissionRate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxCommissionClickUrl) {
            $res['MaxCommissionClickUrl'] = $this->maxCommissionClickUrl;
        }
        if (null !== $this->maxCommissionCouponShareUrl) {
            $res['MaxCommissionCouponShareUrl'] = $this->maxCommissionCouponShareUrl;
        }
        if (null !== $this->maxCommissionRate) {
            $res['MaxCommissionRate'] = $this->maxCommissionRate;
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
        if (isset($map['MaxCommissionClickUrl'])) {
            $model->maxCommissionClickUrl = $map['MaxCommissionClickUrl'];
        }
        if (isset($map['MaxCommissionCouponShareUrl'])) {
            $model->maxCommissionCouponShareUrl = $map['MaxCommissionCouponShareUrl'];
        }
        if (isset($map['MaxCommissionRate'])) {
            $model->maxCommissionRate = $map['MaxCommissionRate'];
        }

        return $model;
    }
}
