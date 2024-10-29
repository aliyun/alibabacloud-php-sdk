<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataRefundChangeRuleMapValue\changeRuleInUnusedList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataRefundChangeRuleMapValue\changeRuleOutUnusedList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataRefundChangeRuleMapValue\refundRuleAllUnusedList;
use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataRefundChangeRuleMapValue\refundRulePartUnusedList;
use AlibabaCloud\Tea\Model;

class DataRefundChangeRuleMapValue extends Model
{
    /**
     * @description refund rule for fully-unused tickets
     *
     * @var refundRuleAllUnusedList[]
     */
    public $refundRuleAllUnusedList;

    /**
     * @description refund rule for partially-used tickets
     *
     * @var refundRulePartUnusedList[]
     */
    public $refundRulePartUnusedList;

    /**
     * @description change rule for inbound segment unused tickets
     *
     * @var changeRuleInUnusedList[]
     */
    public $changeRuleInUnusedList;

    /**
     * @description change rule for outbound-flight-unused tickets
     *
     * @var changeRuleOutUnusedList[]
     */
    public $changeRuleOutUnusedList;
    protected $_name = [
        'refundRuleAllUnusedList'  => 'refund_rule_all_unused_list',
        'refundRulePartUnusedList' => 'refund_rule_part_unused_list',
        'changeRuleInUnusedList'   => 'change_rule_in_unused_list',
        'changeRuleOutUnusedList'  => 'change_rule_out_unused_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->refundRuleAllUnusedList) {
            $res['refund_rule_all_unused_list'] = [];
            if (null !== $this->refundRuleAllUnusedList && \is_array($this->refundRuleAllUnusedList)) {
                $n = 0;
                foreach ($this->refundRuleAllUnusedList as $item) {
                    $res['refund_rule_all_unused_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->refundRulePartUnusedList) {
            $res['refund_rule_part_unused_list'] = [];
            if (null !== $this->refundRulePartUnusedList && \is_array($this->refundRulePartUnusedList)) {
                $n = 0;
                foreach ($this->refundRulePartUnusedList as $item) {
                    $res['refund_rule_part_unused_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->changeRuleInUnusedList) {
            $res['change_rule_in_unused_list'] = [];
            if (null !== $this->changeRuleInUnusedList && \is_array($this->changeRuleInUnusedList)) {
                $n = 0;
                foreach ($this->changeRuleInUnusedList as $item) {
                    $res['change_rule_in_unused_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->changeRuleOutUnusedList) {
            $res['change_rule_out_unused_list'] = [];
            if (null !== $this->changeRuleOutUnusedList && \is_array($this->changeRuleOutUnusedList)) {
                $n = 0;
                foreach ($this->changeRuleOutUnusedList as $item) {
                    $res['change_rule_out_unused_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DataRefundChangeRuleMapValue
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['refund_rule_all_unused_list'])) {
            if (!empty($map['refund_rule_all_unused_list'])) {
                $model->refundRuleAllUnusedList = [];
                $n                              = 0;
                foreach ($map['refund_rule_all_unused_list'] as $item) {
                    $model->refundRuleAllUnusedList[$n++] = null !== $item ? refundRuleAllUnusedList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['refund_rule_part_unused_list'])) {
            if (!empty($map['refund_rule_part_unused_list'])) {
                $model->refundRulePartUnusedList = [];
                $n                               = 0;
                foreach ($map['refund_rule_part_unused_list'] as $item) {
                    $model->refundRulePartUnusedList[$n++] = null !== $item ? refundRulePartUnusedList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['change_rule_in_unused_list'])) {
            if (!empty($map['change_rule_in_unused_list'])) {
                $model->changeRuleInUnusedList = [];
                $n                             = 0;
                foreach ($map['change_rule_in_unused_list'] as $item) {
                    $model->changeRuleInUnusedList[$n++] = null !== $item ? changeRuleInUnusedList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['change_rule_out_unused_list'])) {
            if (!empty($map['change_rule_out_unused_list'])) {
                $model->changeRuleOutUnusedList = [];
                $n                              = 0;
                foreach ($map['change_rule_out_unused_list'] as $item) {
                    $model->changeRuleOutUnusedList[$n++] = null !== $item ? changeRuleOutUnusedList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
