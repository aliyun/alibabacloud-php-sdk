<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemClientRulesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Sas\V20181203\Models\ListSystemClientRulesResponseBody\ruleList\policies;

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
     * @var string
     */
    public $platform;
    /**
     * @var policies[]
     */
    public $policies;
    /**
     * @var int
     */
    public $ruleId;
    /**
     * @var string
     */
    public $ruleName;
    /**
     * @var int
     */
    public $ruleType;
    /**
     * @var int
     */
    public $status;
    /**
     * @var bool
     */
    public $switchEnable;
    /**
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
        'switchEnable'    => 'SwitchEnable',
        'switchId'        => 'SwitchId',
    ];

    public function validate()
    {
        if (\is_array($this->policies)) {
            Model::validateArray($this->policies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->policies)) {
                $res['Policies'] = [];
                $n1              = 0;
                foreach ($this->policies as $item1) {
                    $res['Policies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->switchEnable) {
            $res['SwitchEnable'] = $this->switchEnable;
        }

        if (null !== $this->switchId) {
            $res['SwitchId'] = $this->switchId;
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
                $n1              = 0;
                foreach ($map['Policies'] as $item1) {
                    $model->policies[$n1++] = policies::fromMap($item1);
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

        if (isset($map['SwitchEnable'])) {
            $model->switchEnable = $map['SwitchEnable'];
        }

        if (isset($map['SwitchId'])) {
            $model->switchId = $map['SwitchId'];
        }

        return $model;
    }
}
