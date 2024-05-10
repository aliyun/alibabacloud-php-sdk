<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemClientRulesResponseBody;

use AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemClientRulesResponseBody\ruleList\policies;
use AlibabaCloud\Tea\Model;

class ruleList extends Model
{
    /**
     * @description The name of the aggregation type for the system defense rule.
     *
     * @example Initial entry
     *
     * @var string
     */
    public $aggregationName;

    /**
     * @description The description of the system defense rule.
     *
     * @example Supports alerting or blocking of images that have high-risk vulnerabilities\\*\\*\\*\\*
     *
     * @var string
     */
    public $description;

    /**
     * @description The type of the OS. Valid values:
     *
     *   **windows**: Windows
     *   **linux**: Linux
     *   **all**: all types
     *
     * @example linux
     *
     * @var string
     */
    public $platform;

    /**
     * @description An array that consists of policies.
     *
     * @var policies[]
     */
    public $policies;

    /**
     * @description The ID of the system defense rule.
     *
     * @example 30****
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description The name of the system defense rule.
     *
     * @example Rule\\*\\*\\*\\*
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The type of the system defense rule. Valid values:
     *
     *   **1**: alihips
     *   **2**: alinet
     *   **3**: alidetect
     *   **4**: alisecguard
     *
     * @example alihips
     *
     * @var int
     */
    public $ruleType;

    /**
     * @description The status of the system defense rule. Valid values:
     *
     *   **online**: enabled
     *   **offline**: disabled
     *
     * @example online
     *
     * @var int
     */
    public $status;

    /**
     * @description The switch ID of the system defense rule.
     *
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
