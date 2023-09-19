<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class DeleteMetricRuleTargetsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the alert rule.
     *
     * @example ruleId-xxxxxx
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description The resource IDs.
     *
     * @example 12345
     *
     * @var string[]
     */
    public $targetIds;
    protected $_name = [
        'regionId'  => 'RegionId',
        'ruleId'    => 'RuleId',
        'targetIds' => 'TargetIds',
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
        if (null !== $this->targetIds) {
            $res['TargetIds'] = $this->targetIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMetricRuleTargetsRequest
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
        if (isset($map['TargetIds'])) {
            if (!empty($map['TargetIds'])) {
                $model->targetIds = $map['TargetIds'];
            }
        }

        return $model;
    }
}
