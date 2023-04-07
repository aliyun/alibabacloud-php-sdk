<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateResponseBody;

use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateResponseBody\module\promotionInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateResponseBody\module\ratePlanDaily;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateResponseBody\module\ratePlanInfo;
use AlibabaCloud\Tea\Model;

class module extends Model
{
    /**
     * @example demo
     *
     * @var string
     */
    public $extendInfo;

    /**
     * @example fb5e1abf33924b6c912bd6d80deec0eb-4
     *
     * @var string
     */
    public $itineraryNo;

    /**
     * @var promotionInfo
     */
    public $promotionInfo;

    /**
     * @var ratePlanDaily[]
     */
    public $ratePlanDaily;

    /**
     * @example 5314280514218
     *
     * @var int
     */
    public $ratePlanId;

    /**
     * @var ratePlanInfo
     */
    public $ratePlanInfo;

    /**
     * @example nonUltron_1673575241156_d91ea8ad16735752359161037bf6cf_c54d3768312a4b249b719f126377bf82
     *
     * @var string
     */
    public $validateResKey;
    protected $_name = [
        'extendInfo'     => 'extend_info',
        'itineraryNo'    => 'itinerary_no',
        'promotionInfo'  => 'promotion_info',
        'ratePlanDaily'  => 'rate_plan_daily',
        'ratePlanId'     => 'rate_plan_id',
        'ratePlanInfo'   => 'rate_plan_info',
        'validateResKey' => 'validate_res_key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extendInfo) {
            $res['extend_info'] = $this->extendInfo;
        }
        if (null !== $this->itineraryNo) {
            $res['itinerary_no'] = $this->itineraryNo;
        }
        if (null !== $this->promotionInfo) {
            $res['promotion_info'] = null !== $this->promotionInfo ? $this->promotionInfo->toMap() : null;
        }
        if (null !== $this->ratePlanDaily) {
            $res['rate_plan_daily'] = [];
            if (null !== $this->ratePlanDaily && \is_array($this->ratePlanDaily)) {
                $n = 0;
                foreach ($this->ratePlanDaily as $item) {
                    $res['rate_plan_daily'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ratePlanId) {
            $res['rate_plan_id'] = $this->ratePlanId;
        }
        if (null !== $this->ratePlanInfo) {
            $res['rate_plan_info'] = null !== $this->ratePlanInfo ? $this->ratePlanInfo->toMap() : null;
        }
        if (null !== $this->validateResKey) {
            $res['validate_res_key'] = $this->validateResKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return module
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['extend_info'])) {
            $model->extendInfo = $map['extend_info'];
        }
        if (isset($map['itinerary_no'])) {
            $model->itineraryNo = $map['itinerary_no'];
        }
        if (isset($map['promotion_info'])) {
            $model->promotionInfo = promotionInfo::fromMap($map['promotion_info']);
        }
        if (isset($map['rate_plan_daily'])) {
            if (!empty($map['rate_plan_daily'])) {
                $model->ratePlanDaily = [];
                $n                    = 0;
                foreach ($map['rate_plan_daily'] as $item) {
                    $model->ratePlanDaily[$n++] = null !== $item ? ratePlanDaily::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['rate_plan_id'])) {
            $model->ratePlanId = $map['rate_plan_id'];
        }
        if (isset($map['rate_plan_info'])) {
            $model->ratePlanInfo = ratePlanInfo::fromMap($map['rate_plan_info']);
        }
        if (isset($map['validate_res_key'])) {
            $model->validateResKey = $map['validate_res_key'];
        }

        return $model;
    }
}
