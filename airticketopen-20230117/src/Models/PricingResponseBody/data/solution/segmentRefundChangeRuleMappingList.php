<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\PricingResponseBody\data\solution;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataSolutionSegmentRefundChangeRuleMappingListRefundChangeRuleMapValue;

class segmentRefundChangeRuleMappingList extends Model
{
    /**
     * @var DataSolutionSegmentRefundChangeRuleMappingListRefundChangeRuleMapValue[]
     */
    public $refundChangeRuleMap;

    /**
     * @var string[]
     */
    public $segmentIdList;
    protected $_name = [
        'refundChangeRuleMap' => 'refund_change_rule_map',
        'segmentIdList' => 'segment_id_list',
    ];

    public function validate()
    {
        if (\is_array($this->refundChangeRuleMap)) {
            Model::validateArray($this->refundChangeRuleMap);
        }
        if (\is_array($this->segmentIdList)) {
            Model::validateArray($this->segmentIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->refundChangeRuleMap) {
            if (\is_array($this->refundChangeRuleMap)) {
                $res['refund_change_rule_map'] = [];
                foreach ($this->refundChangeRuleMap as $key1 => $value1) {
                    $res['refund_change_rule_map'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->segmentIdList) {
            if (\is_array($this->segmentIdList)) {
                $res['segment_id_list'] = [];
                $n1 = 0;
                foreach ($this->segmentIdList as $item1) {
                    $res['segment_id_list'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['refund_change_rule_map'])) {
            if (!empty($map['refund_change_rule_map'])) {
                $model->refundChangeRuleMap = [];
                foreach ($map['refund_change_rule_map'] as $key1 => $value1) {
                    $model->refundChangeRuleMap[$key1] = DataSolutionSegmentRefundChangeRuleMappingListRefundChangeRuleMapValue::fromMap($value1);
                }
            }
        }

        if (isset($map['segment_id_list'])) {
            if (!empty($map['segment_id_list'])) {
                $model->segmentIdList = [];
                $n1 = 0;
                foreach ($map['segment_id_list'] as $item1) {
                    $model->segmentIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
