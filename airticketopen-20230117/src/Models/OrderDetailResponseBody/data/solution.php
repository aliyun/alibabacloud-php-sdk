<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\solution\journeyList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\solution\segmentBaggageCheckInInfoList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\solution\segmentBaggageMappingList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\OrderDetailResponseBody\data\solution\segmentRefundChangeRuleMappingList;
use AlibabaCloud\Tea\Model;

class solution extends Model
{
    /**
     * @description adult fare
     *
     * @example 300
     *
     * @var float
     */
    public $adultPrice;

    /**
     * @description adult tax
     *
     * @example 30
     *
     * @var float
     */
    public $adultTax;

    /**
     * @description child fare
     *
     * @example 200
     *
     * @var float
     */
    public $childPrice;

    /**
     * @description child tax
     *
     * @example 20
     *
     * @var float
     */
    public $childTax;

    /**
     * @description infant fare
     *
     * @example 100
     *
     * @var float
     */
    public $infantPrice;

    /**
     * @description infant tax
     *
     * @example 10
     *
     * @var float
     */
    public $infantTax;

    /**
     * @description journey list
     *
     * @var journeyList[]
     */
    public $journeyList;

    /**
     * @description product type description
     *
     * @example description
     *
     * @var string
     */
    public $productTypeDescription;

    /**
     * @description refund coupon description
     *
     * @example description
     *
     * @var string
     */
    public $refundTicketCouponDescription;

    /**
     * @description through check-in baggage policy
     *
     * @var segmentBaggageCheckInInfoList[]
     */
    public $segmentBaggageCheckInInfoList;

    /**
     * @description baggage rule list
     *
     * @var segmentBaggageMappingList[]
     */
    public $segmentBaggageMappingList;

    /**
     * @description change and refund policy
     *
     * @var segmentRefundChangeRuleMappingList[]
     */
    public $segmentRefundChangeRuleMappingList;

    /**
     * @description solution_id
     *
     * @example eJwz8DeySEo0NjQ01TU3TUxxx
     *
     * @var string
     */
    public $solutionId;
    protected $_name = [
        'adultPrice'                         => 'adult_price',
        'adultTax'                           => 'adult_tax',
        'childPrice'                         => 'child_price',
        'childTax'                           => 'child_tax',
        'infantPrice'                        => 'infant_price',
        'infantTax'                          => 'infant_tax',
        'journeyList'                        => 'journey_list',
        'productTypeDescription'             => 'product_type_description',
        'refundTicketCouponDescription'      => 'refund_ticket_coupon_description',
        'segmentBaggageCheckInInfoList'      => 'segment_baggage_check_in_info_list',
        'segmentBaggageMappingList'          => 'segment_baggage_mapping_list',
        'segmentRefundChangeRuleMappingList' => 'segment_refund_change_rule_mapping_list',
        'solutionId'                         => 'solution_id',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->adultPrice) {
            $res['adult_price'] = $this->adultPrice;
        }
        if (null !== $this->adultTax) {
            $res['adult_tax'] = $this->adultTax;
        }
        if (null !== $this->childPrice) {
            $res['child_price'] = $this->childPrice;
        }
        if (null !== $this->childTax) {
            $res['child_tax'] = $this->childTax;
        }
        if (null !== $this->infantPrice) {
            $res['infant_price'] = $this->infantPrice;
        }
        if (null !== $this->infantTax) {
            $res['infant_tax'] = $this->infantTax;
        }
        if (null !== $this->journeyList) {
            $res['journey_list'] = [];
            if (null !== $this->journeyList && \is_array($this->journeyList)) {
                $n = 0;
                foreach ($this->journeyList as $item) {
                    $res['journey_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->productTypeDescription) {
            $res['product_type_description'] = $this->productTypeDescription;
        }
        if (null !== $this->refundTicketCouponDescription) {
            $res['refund_ticket_coupon_description'] = $this->refundTicketCouponDescription;
        }
        if (null !== $this->segmentBaggageCheckInInfoList) {
            $res['segment_baggage_check_in_info_list'] = [];
            if (null !== $this->segmentBaggageCheckInInfoList && \is_array($this->segmentBaggageCheckInInfoList)) {
                $n = 0;
                foreach ($this->segmentBaggageCheckInInfoList as $item) {
                    $res['segment_baggage_check_in_info_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->segmentBaggageMappingList) {
            $res['segment_baggage_mapping_list'] = [];
            if (null !== $this->segmentBaggageMappingList && \is_array($this->segmentBaggageMappingList)) {
                $n = 0;
                foreach ($this->segmentBaggageMappingList as $item) {
                    $res['segment_baggage_mapping_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->segmentRefundChangeRuleMappingList) {
            $res['segment_refund_change_rule_mapping_list'] = [];
            if (null !== $this->segmentRefundChangeRuleMappingList && \is_array($this->segmentRefundChangeRuleMappingList)) {
                $n = 0;
                foreach ($this->segmentRefundChangeRuleMappingList as $item) {
                    $res['segment_refund_change_rule_mapping_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->solutionId) {
            $res['solution_id'] = $this->solutionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return solution
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['adult_price'])) {
            $model->adultPrice = $map['adult_price'];
        }
        if (isset($map['adult_tax'])) {
            $model->adultTax = $map['adult_tax'];
        }
        if (isset($map['child_price'])) {
            $model->childPrice = $map['child_price'];
        }
        if (isset($map['child_tax'])) {
            $model->childTax = $map['child_tax'];
        }
        if (isset($map['infant_price'])) {
            $model->infantPrice = $map['infant_price'];
        }
        if (isset($map['infant_tax'])) {
            $model->infantTax = $map['infant_tax'];
        }
        if (isset($map['journey_list'])) {
            if (!empty($map['journey_list'])) {
                $model->journeyList = [];
                $n                  = 0;
                foreach ($map['journey_list'] as $item) {
                    $model->journeyList[$n++] = null !== $item ? journeyList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['product_type_description'])) {
            $model->productTypeDescription = $map['product_type_description'];
        }
        if (isset($map['refund_ticket_coupon_description'])) {
            $model->refundTicketCouponDescription = $map['refund_ticket_coupon_description'];
        }
        if (isset($map['segment_baggage_check_in_info_list'])) {
            if (!empty($map['segment_baggage_check_in_info_list'])) {
                $model->segmentBaggageCheckInInfoList = [];
                $n                                    = 0;
                foreach ($map['segment_baggage_check_in_info_list'] as $item) {
                    $model->segmentBaggageCheckInInfoList[$n++] = null !== $item ? segmentBaggageCheckInInfoList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['segment_baggage_mapping_list'])) {
            if (!empty($map['segment_baggage_mapping_list'])) {
                $model->segmentBaggageMappingList = [];
                $n                                = 0;
                foreach ($map['segment_baggage_mapping_list'] as $item) {
                    $model->segmentBaggageMappingList[$n++] = null !== $item ? segmentBaggageMappingList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['segment_refund_change_rule_mapping_list'])) {
            if (!empty($map['segment_refund_change_rule_mapping_list'])) {
                $model->segmentRefundChangeRuleMappingList = [];
                $n                                         = 0;
                foreach ($map['segment_refund_change_rule_mapping_list'] as $item) {
                    $model->segmentRefundChangeRuleMappingList[$n++] = null !== $item ? segmentRefundChangeRuleMappingList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['solution_id'])) {
            $model->solutionId = $map['solution_id'];
        }

        return $model;
    }
}
