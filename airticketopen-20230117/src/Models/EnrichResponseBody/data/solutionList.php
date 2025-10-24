<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\EnrichResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\EnrichResponseBody\data\solutionList\journeyList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\EnrichResponseBody\data\solutionList\segmentBaggageCheckInInfoList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\EnrichResponseBody\data\solutionList\segmentBaggageMappingList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\EnrichResponseBody\data\solutionList\segmentRefundChangeRuleMappingList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\EnrichResponseBody\data\solutionList\solutionAttribute;

class solutionList extends Model
{
    /**
     * @var float
     */
    public $adultPrice;

    /**
     * @var float
     */
    public $adultTax;

    /**
     * @var float
     */
    public $childPrice;

    /**
     * @var float
     */
    public $childTax;

    /**
     * @var float
     */
    public $infantPrice;

    /**
     * @var float
     */
    public $infantTax;

    /**
     * @var journeyList[]
     */
    public $journeyList;

    /**
     * @var segmentBaggageCheckInInfoList[]
     */
    public $segmentBaggageCheckInInfoList;

    /**
     * @var segmentBaggageMappingList[]
     */
    public $segmentBaggageMappingList;

    /**
     * @var segmentRefundChangeRuleMappingList[]
     */
    public $segmentRefundChangeRuleMappingList;

    /**
     * @var solutionAttribute
     */
    public $solutionAttribute;

    /**
     * @var string
     */
    public $solutionId;
    protected $_name = [
        'adultPrice' => 'adult_price',
        'adultTax' => 'adult_tax',
        'childPrice' => 'child_price',
        'childTax' => 'child_tax',
        'infantPrice' => 'infant_price',
        'infantTax' => 'infant_tax',
        'journeyList' => 'journey_list',
        'segmentBaggageCheckInInfoList' => 'segment_baggage_check_in_info_list',
        'segmentBaggageMappingList' => 'segment_baggage_mapping_list',
        'segmentRefundChangeRuleMappingList' => 'segment_refund_change_rule_mapping_list',
        'solutionAttribute' => 'solution_attribute',
        'solutionId' => 'solution_id',
    ];

    public function validate()
    {
        if (\is_array($this->journeyList)) {
            Model::validateArray($this->journeyList);
        }
        if (\is_array($this->segmentBaggageCheckInInfoList)) {
            Model::validateArray($this->segmentBaggageCheckInInfoList);
        }
        if (\is_array($this->segmentBaggageMappingList)) {
            Model::validateArray($this->segmentBaggageMappingList);
        }
        if (\is_array($this->segmentRefundChangeRuleMappingList)) {
            Model::validateArray($this->segmentRefundChangeRuleMappingList);
        }
        if (null !== $this->solutionAttribute) {
            $this->solutionAttribute->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->journeyList)) {
                $res['journey_list'] = [];
                $n1 = 0;
                foreach ($this->journeyList as $item1) {
                    $res['journey_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->segmentBaggageCheckInInfoList) {
            if (\is_array($this->segmentBaggageCheckInInfoList)) {
                $res['segment_baggage_check_in_info_list'] = [];
                $n1 = 0;
                foreach ($this->segmentBaggageCheckInInfoList as $item1) {
                    $res['segment_baggage_check_in_info_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->segmentBaggageMappingList) {
            if (\is_array($this->segmentBaggageMappingList)) {
                $res['segment_baggage_mapping_list'] = [];
                $n1 = 0;
                foreach ($this->segmentBaggageMappingList as $item1) {
                    $res['segment_baggage_mapping_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->segmentRefundChangeRuleMappingList) {
            if (\is_array($this->segmentRefundChangeRuleMappingList)) {
                $res['segment_refund_change_rule_mapping_list'] = [];
                $n1 = 0;
                foreach ($this->segmentRefundChangeRuleMappingList as $item1) {
                    $res['segment_refund_change_rule_mapping_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->solutionAttribute) {
            $res['solution_attribute'] = null !== $this->solutionAttribute ? $this->solutionAttribute->toArray($noStream) : $this->solutionAttribute;
        }

        if (null !== $this->solutionId) {
            $res['solution_id'] = $this->solutionId;
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
                $n1 = 0;
                foreach ($map['journey_list'] as $item1) {
                    $model->journeyList[$n1] = journeyList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['segment_baggage_check_in_info_list'])) {
            if (!empty($map['segment_baggage_check_in_info_list'])) {
                $model->segmentBaggageCheckInInfoList = [];
                $n1 = 0;
                foreach ($map['segment_baggage_check_in_info_list'] as $item1) {
                    $model->segmentBaggageCheckInInfoList[$n1] = segmentBaggageCheckInInfoList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['segment_baggage_mapping_list'])) {
            if (!empty($map['segment_baggage_mapping_list'])) {
                $model->segmentBaggageMappingList = [];
                $n1 = 0;
                foreach ($map['segment_baggage_mapping_list'] as $item1) {
                    $model->segmentBaggageMappingList[$n1] = segmentBaggageMappingList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['segment_refund_change_rule_mapping_list'])) {
            if (!empty($map['segment_refund_change_rule_mapping_list'])) {
                $model->segmentRefundChangeRuleMappingList = [];
                $n1 = 0;
                foreach ($map['segment_refund_change_rule_mapping_list'] as $item1) {
                    $model->segmentRefundChangeRuleMappingList[$n1] = segmentRefundChangeRuleMappingList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['solution_attribute'])) {
            $model->solutionAttribute = solutionAttribute::fromMap($map['solution_attribute']);
        }

        if (isset($map['solution_id'])) {
            $model->solutionId = $map['solution_id'];
        }

        return $model;
    }
}
