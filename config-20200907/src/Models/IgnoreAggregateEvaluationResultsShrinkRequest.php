<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\Tea\Model;

class IgnoreAggregateEvaluationResultsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $aggregatorId;

    /**
     * @var string
     */
    public $configRuleId;

    /**
     * @var string
     */
    public $ignoreDate;

    /**
     * @var string
     */
    public $reason;

    /**
     * @var string
     */
    public $resourcesShrink;
    protected $_name = [
        'aggregatorId'    => 'AggregatorId',
        'configRuleId'    => 'ConfigRuleId',
        'ignoreDate'      => 'IgnoreDate',
        'reason'          => 'Reason',
        'resourcesShrink' => 'Resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregatorId) {
            $res['AggregatorId'] = $this->aggregatorId;
        }
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->ignoreDate) {
            $res['IgnoreDate'] = $this->ignoreDate;
        }
        if (null !== $this->reason) {
            $res['Reason'] = $this->reason;
        }
        if (null !== $this->resourcesShrink) {
            $res['Resources'] = $this->resourcesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IgnoreAggregateEvaluationResultsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregatorId'])) {
            $model->aggregatorId = $map['AggregatorId'];
        }
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['IgnoreDate'])) {
            $model->ignoreDate = $map['IgnoreDate'];
        }
        if (isset($map['Reason'])) {
            $model->reason = $map['Reason'];
        }
        if (isset($map['Resources'])) {
            $model->resourcesShrink = $map['Resources'];
        }

        return $model;
    }
}
