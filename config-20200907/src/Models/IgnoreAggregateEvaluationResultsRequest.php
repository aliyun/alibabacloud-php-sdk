<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models;

use AlibabaCloud\SDK\Config\V20200907\Models\IgnoreAggregateEvaluationResultsRequest\resources;
use AlibabaCloud\Tea\Model;

class IgnoreAggregateEvaluationResultsRequest extends Model
{
    /**
     * @description The ID of the account group.
     *
     * This parameter is required.
     * @example ca-5b6c626622af008f****
     *
     * @var string
     */
    public $aggregatorId;

    /**
     * @description The ID of the rule.
     *
     * This parameter is required.
     * @example cr-7e72626622af0051****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The date from which the system automatically re-evaluates the ignored incompliant resources.
     *
     * >  If you leave this parameter empty, the system does not automatically re-evaluate the ignored incompliant resources. You must manually re-evaluate the ignored incompliant resources.
     * @example 2022-06-01
     *
     * @var string
     */
    public $ignoreDate;

    /**
     * @description The reason why you ignore the resource.
     *
     * @var string
     */
    public $reason;

    /**
     * @description The resources to be ignored.
     *
     * This parameter is required.
     * @var resources[]
     */
    public $resources;
    protected $_name = [
        'aggregatorId' => 'AggregatorId',
        'configRuleId' => 'ConfigRuleId',
        'ignoreDate'   => 'IgnoreDate',
        'reason'       => 'Reason',
        'resources'    => 'Resources',
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
        if (null !== $this->resources) {
            $res['Resources'] = [];
            if (null !== $this->resources && \is_array($this->resources)) {
                $n = 0;
                foreach ($this->resources as $item) {
                    $res['Resources'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IgnoreAggregateEvaluationResultsRequest
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
            if (!empty($map['Resources'])) {
                $model->resources = [];
                $n                = 0;
                foreach ($map['Resources'] as $item) {
                    $model->resources[$n++] = null !== $item ? resources::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
