<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AirticketOpen\V20230117\Models\EnrichResponseBody\data\solutionList;

use AlibabaCloud\SDK\AirticketOpen\V20230117\Models\DataSolutionListSegmentRefundChangeRuleMappingListRefundChangeRuleMapValue;
use AlibabaCloud\Tea\Model;

class segmentRefundChangeRuleMappingList extends Model
{
    /**
     * @var DataSolutionListSegmentRefundChangeRuleMappingListRefundChangeRuleMapValue[]
     */
    public $refundChangeRuleMap;

    /**
     * @var string[]
     */
    public $segmentIdList;
    protected $_name = [
        'refundChangeRuleMap' => 'refund_change_rule_map',
        'segmentIdList'       => 'segment_id_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->refundChangeRuleMap) {
            $res['refund_change_rule_map'] = [];
            if (null !== $this->refundChangeRuleMap && \is_array($this->refundChangeRuleMap)) {
                foreach ($this->refundChangeRuleMap as $key => $val) {
                    $res['refund_change_rule_map'][$key] = null !== $val ? $val->toMap() : $val;
                }
            }
        }
        if (null !== $this->segmentIdList) {
            $res['segment_id_list'] = $this->segmentIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return segmentRefundChangeRuleMappingList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['refund_change_rule_map'])) {
            $model->refundChangeRuleMap = $map['refund_change_rule_map'];
        }
        if (isset($map['segment_id_list'])) {
            if (!empty($map['segment_id_list'])) {
                $model->segmentIdList = $map['segment_id_list'];
            }
        }

        return $model;
    }
}
