<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemClientRulesResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemClientRulesResponseBody\ruleList\policies;
use AlibabaCloud\Tea\Model;

class ruleList extends Model
{
    /**
     * @var string
     */
    public $aggregationName;

    /**
     * @var string
     */
    public $description;

    /**
     * @example linux
     *
     * @var string
     */
    public $platform;

    /**
     * @var policies[]
     */
    public $policies;

    /**
     * @example 30****
     *
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @example alihips
     *
     * @var int
     */
    public $ruleType;

    /**
     * @example online
     *
     * @var int
     */
    public $status;

    /**
     * @example USER-ENABLE-SWITCH-TYPE_****
     *
     * @var string
     */
    public $switchId;
    protected $_name = [
        'aggregationName' => 'AggregationName',
        'description'     => 'Description',
        'platform'        => 'Platform',
        'policies'        => 'Policies',
        'ruleId'          => 'RuleId',
        'ruleName'        => 'RuleName',
        'ruleType'        => 'RuleType',
        'status'          => 'Status',
        'switchId'        => 'SwitchId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aggregationName) {
            $res['AggregationName'] = $this->aggregationName;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->policies) {
            $res['Policies'] = [];
            if (null !== $this->policies && \is_array($this->policies)) {
                $n = 0;
                foreach ($this->policies as $item) {
                    $res['Policies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->switchId) {
            $res['SwitchId'] = $this->switchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AggregationName'])) {
            $model->aggregationName = $map['AggregationName'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['Policies'])) {
            if (!empty($map['Policies'])) {
                $model->policies = [];
                $n               = 0;
                foreach ($map['Policies'] as $item) {
                    $model->policies[$n++] = null !== $item ? policies::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SwitchId'])) {
            $model->switchId = $map['SwitchId'];
        }

        return $model;
    }
}
