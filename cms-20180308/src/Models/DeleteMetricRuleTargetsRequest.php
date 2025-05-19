<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20180308\Models;

use AlibabaCloud\Dara\Model;

class DeleteMetricRuleTargetsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ruleId;

    /**
     * @var string[]
     */
    public $targetIds;
    protected $_name = [
        'regionId' => 'RegionId',
        'ruleId' => 'RuleId',
        'targetIds' => 'TargetIds',
    ];

    public function validate()
    {
        if (\is_array($this->targetIds)) {
            Model::validateArray($this->targetIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->targetIds) {
            if (\is_array($this->targetIds)) {
                $res['TargetIds'] = [];
                $n1 = 0;
                foreach ($this->targetIds as $item1) {
                    $res['TargetIds'][$n1++] = $item1;
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['TargetIds'])) {
            if (!empty($map['TargetIds'])) {
                $model->targetIds = [];
                $n1 = 0;
                foreach ($map['TargetIds'] as $item1) {
                    $model->targetIds[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
