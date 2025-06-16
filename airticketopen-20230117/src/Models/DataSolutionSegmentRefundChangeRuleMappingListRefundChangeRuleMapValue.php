<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataSolutionSegmentRefundChangeRuleMappingListRefundChangeRuleMapValue\changeRuleInUnusedList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataSolutionSegmentRefundChangeRuleMappingListRefundChangeRuleMapValue\changeRuleOutUnusedList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataSolutionSegmentRefundChangeRuleMappingListRefundChangeRuleMapValue\refundRuleAllUnusedList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataSolutionSegmentRefundChangeRuleMappingListRefundChangeRuleMapValue\refundRulePartUnusedList;

class DataSolutionSegmentRefundChangeRuleMappingListRefundChangeRuleMapValue extends Model
{
    /**
     * @var refundRuleAllUnusedList[]
     */
    public $refundRuleAllUnusedList;

    /**
     * @var refundRulePartUnusedList[]
     */
    public $refundRulePartUnusedList;

    /**
     * @var changeRuleInUnusedList[]
     */
    public $changeRuleInUnusedList;

    /**
     * @var changeRuleOutUnusedList[]
     */
    public $changeRuleOutUnusedList;
    protected $_name = [
        'refundRuleAllUnusedList' => 'refund_rule_all_unused_list',
        'refundRulePartUnusedList' => 'refund_rule_part_unused_list',
        'changeRuleInUnusedList' => 'change_rule_in_unused_list',
        'changeRuleOutUnusedList' => 'change_rule_out_unused_list',
    ];

    public function validate()
    {
        if (\is_array($this->refundRuleAllUnusedList)) {
            Model::validateArray($this->refundRuleAllUnusedList);
        }
        if (\is_array($this->refundRulePartUnusedList)) {
            Model::validateArray($this->refundRulePartUnusedList);
        }
        if (\is_array($this->changeRuleInUnusedList)) {
            Model::validateArray($this->changeRuleInUnusedList);
        }
        if (\is_array($this->changeRuleOutUnusedList)) {
            Model::validateArray($this->changeRuleOutUnusedList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->refundRuleAllUnusedList) {
            if (\is_array($this->refundRuleAllUnusedList)) {
                $res['refund_rule_all_unused_list'] = [];
                $n1 = 0;
                foreach ($this->refundRuleAllUnusedList as $item1) {
                    $res['refund_rule_all_unused_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->refundRulePartUnusedList) {
            if (\is_array($this->refundRulePartUnusedList)) {
                $res['refund_rule_part_unused_list'] = [];
                $n1 = 0;
                foreach ($this->refundRulePartUnusedList as $item1) {
                    $res['refund_rule_part_unused_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->changeRuleInUnusedList) {
            if (\is_array($this->changeRuleInUnusedList)) {
                $res['change_rule_in_unused_list'] = [];
                $n1 = 0;
                foreach ($this->changeRuleInUnusedList as $item1) {
                    $res['change_rule_in_unused_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->changeRuleOutUnusedList) {
            if (\is_array($this->changeRuleOutUnusedList)) {
                $res['change_rule_out_unused_list'] = [];
                $n1 = 0;
                foreach ($this->changeRuleOutUnusedList as $item1) {
                    $res['change_rule_out_unused_list'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['refund_rule_all_unused_list'])) {
            if (!empty($map['refund_rule_all_unused_list'])) {
                $model->refundRuleAllUnusedList = [];
                $n1 = 0;
                foreach ($map['refund_rule_all_unused_list'] as $item1) {
                    $model->refundRuleAllUnusedList[$n1] = refundRuleAllUnusedList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['refund_rule_part_unused_list'])) {
            if (!empty($map['refund_rule_part_unused_list'])) {
                $model->refundRulePartUnusedList = [];
                $n1 = 0;
                foreach ($map['refund_rule_part_unused_list'] as $item1) {
                    $model->refundRulePartUnusedList[$n1] = refundRulePartUnusedList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['change_rule_in_unused_list'])) {
            if (!empty($map['change_rule_in_unused_list'])) {
                $model->changeRuleInUnusedList = [];
                $n1 = 0;
                foreach ($map['change_rule_in_unused_list'] as $item1) {
                    $model->changeRuleInUnusedList[$n1] = changeRuleInUnusedList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['change_rule_out_unused_list'])) {
            if (!empty($map['change_rule_out_unused_list'])) {
                $model->changeRuleOutUnusedList = [];
                $n1 = 0;
                foreach ($map['change_rule_out_unused_list'] as $item1) {
                    $model->changeRuleOutUnusedList[$n1] = changeRuleOutUnusedList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
