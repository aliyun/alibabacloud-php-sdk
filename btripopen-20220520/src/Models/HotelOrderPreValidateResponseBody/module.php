<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateResponseBody\module\itemInvoice;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateResponseBody\module\promotionInfo;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateResponseBody\module\ratePlanDaily;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\HotelOrderPreValidateResponseBody\module\ratePlanInfo;

class module extends Model
{
    /**
     * @var string
     */
    public $extendInfo;

    /**
     * @var itemInvoice
     */
    public $itemInvoice;

    /**
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
     * @var int
     */
    public $ratePlanId;

    /**
     * @var ratePlanInfo
     */
    public $ratePlanInfo;

    /**
     * @var string
     */
    public $validateResKey;
    protected $_name = [
        'extendInfo' => 'extend_info',
        'itemInvoice' => 'item_invoice',
        'itineraryNo' => 'itinerary_no',
        'promotionInfo' => 'promotion_info',
        'ratePlanDaily' => 'rate_plan_daily',
        'ratePlanId' => 'rate_plan_id',
        'ratePlanInfo' => 'rate_plan_info',
        'validateResKey' => 'validate_res_key',
    ];

    public function validate()
    {
        if (null !== $this->itemInvoice) {
            $this->itemInvoice->validate();
        }
        if (null !== $this->promotionInfo) {
            $this->promotionInfo->validate();
        }
        if (\is_array($this->ratePlanDaily)) {
            Model::validateArray($this->ratePlanDaily);
        }
        if (null !== $this->ratePlanInfo) {
            $this->ratePlanInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->extendInfo) {
            $res['extend_info'] = $this->extendInfo;
        }

        if (null !== $this->itemInvoice) {
            $res['item_invoice'] = null !== $this->itemInvoice ? $this->itemInvoice->toArray($noStream) : $this->itemInvoice;
        }

        if (null !== $this->itineraryNo) {
            $res['itinerary_no'] = $this->itineraryNo;
        }

        if (null !== $this->promotionInfo) {
            $res['promotion_info'] = null !== $this->promotionInfo ? $this->promotionInfo->toArray($noStream) : $this->promotionInfo;
        }

        if (null !== $this->ratePlanDaily) {
            if (\is_array($this->ratePlanDaily)) {
                $res['rate_plan_daily'] = [];
                $n1 = 0;
                foreach ($this->ratePlanDaily as $item1) {
                    $res['rate_plan_daily'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->ratePlanId) {
            $res['rate_plan_id'] = $this->ratePlanId;
        }

        if (null !== $this->ratePlanInfo) {
            $res['rate_plan_info'] = null !== $this->ratePlanInfo ? $this->ratePlanInfo->toArray($noStream) : $this->ratePlanInfo;
        }

        if (null !== $this->validateResKey) {
            $res['validate_res_key'] = $this->validateResKey;
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
        if (isset($map['extend_info'])) {
            $model->extendInfo = $map['extend_info'];
        }

        if (isset($map['item_invoice'])) {
            $model->itemInvoice = itemInvoice::fromMap($map['item_invoice']);
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
                $n1 = 0;
                foreach ($map['rate_plan_daily'] as $item1) {
                    $model->ratePlanDaily[$n1++] = ratePlanDaily::fromMap($item1);
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
