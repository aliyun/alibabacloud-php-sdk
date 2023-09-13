<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListRulesResponseBody\data;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\ListRulesResponseBody\data\rules\targets;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The creation timestamp.
     *
     * @example 1607071602000
     *
     * @var int
     */
    public $createdTimestamp;

    /**
     * @description The rule description.
     *
     * @example demo
     *
     * @var string
     */
    public $description;

    /**
     * @description The details of the event rule.
     *
     * @var mixed[]
     */
    public $detailMap;

    /**
     * @description The name of the event bus.
     *
     * @example demo
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The event pattern, in JSON format. Valid values: stringEqual pattern stringExpression pattern Each field can have a maximum of five expressions in the map data structure.
     *
     * Each field can have a maximum of five expressions in the map data structure.
     * @example {\"source\":[\"acs.oss\"],\"type\":[\"oss:BucketQueried:GetBucketStat\"]}
     *
     * @var string
     */
    public $filterPattern;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the rule.
     *
     * @example acs:eventbridge:cn-hangzhou:123456789098****:eventbus/default/rule/myRule3
     *
     * @var string
     */
    public $ruleARN;

    /**
     * @description The name of the event rule.
     *
     * @example tf-testacc-rule
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The status of the event rule. Valid values: ENABLE: The event rule is enabled. It is the default state of the event rule. DISABLE: The event rule is disabled.
     *
     * @example ENABLE
     *
     * @var string
     */
    public $status;

    /**
     * @description The event targets.
     *
     * @var targets[]
     */
    public $targets;
    protected $_name = [
        'createdTimestamp' => 'CreatedTimestamp',
        'description'      => 'Description',
        'detailMap'        => 'DetailMap',
        'eventBusName'     => 'EventBusName',
        'filterPattern'    => 'FilterPattern',
        'ruleARN'          => 'RuleARN',
        'ruleName'         => 'RuleName',
        'status'           => 'Status',
        'targets'          => 'Targets',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createdTimestamp) {
            $res['CreatedTimestamp'] = $this->createdTimestamp;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->detailMap) {
            $res['DetailMap'] = $this->detailMap;
        }
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }
        if (null !== $this->filterPattern) {
            $res['FilterPattern'] = $this->filterPattern;
        }
        if (null !== $this->ruleARN) {
            $res['RuleARN'] = $this->ruleARN;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->targets) {
            $res['Targets'] = [];
            if (null !== $this->targets && \is_array($this->targets)) {
                $n = 0;
                foreach ($this->targets as $item) {
                    $res['Targets'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreatedTimestamp'])) {
            $model->createdTimestamp = $map['CreatedTimestamp'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DetailMap'])) {
            $model->detailMap = $map['DetailMap'];
        }
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }
        if (isset($map['FilterPattern'])) {
            $model->filterPattern = $map['FilterPattern'];
        }
        if (isset($map['RuleARN'])) {
            $model->ruleARN = $map['RuleARN'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Targets'])) {
            if (!empty($map['Targets'])) {
                $model->targets = [];
                $n              = 0;
                foreach ($map['Targets'] as $item) {
                    $model->targets[$n++] = null !== $item ? targets::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
