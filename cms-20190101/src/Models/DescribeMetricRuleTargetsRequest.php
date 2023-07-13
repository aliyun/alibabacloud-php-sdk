<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DescribeMetricRuleTargetsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the alert rule.
     *
     * For information about how to obtain the ID of an alert rule, see [DescribeMetricRuleList](~~114941~~).
     * @example ae06917_75a8c43178ab66****
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'regionId' => 'RegionId',
        'ruleId'   => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetricRuleTargetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
