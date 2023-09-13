<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetRuleResponseBody;

use AlibabaCloud\SDK\Eventbridge\V20200401\Models\GetRuleResponseBody\data\targets;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The timestamp that indicates when the event rule was created.
     *
     * @example 1607071602000
     *
     * @var int
     */
    public $createdTimestamp;

    /**
     * @description The description of the event rule.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the event bus.
     *
     * @example Housekeeping-Bus
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The event pattern, in JSON format. Valid values: stringEqual and stringExpression. You can specify up to five expressions in the map data structure in each field.
     *
     * You can specify up to five expressions in the map data structure in each field.
     * @example {\"source\":[\"acs.oss\"],\"type\":[\"oss:BucketQueried:GetBucketStat\"]}
     *
     * @var string
     */
    public $filterPattern;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the event rule.
     *
     * @example acs:eventbridge:cn-hangzhou:123456789098****:eventbus/default/rule/myRule3
     *
     * @var string
     */
    public $ruleARN;

    /**
     * @description The name of the event rule.
     *
     * @example ramrolechange-fc
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The status of the event rule. Valid values: ENABLE (default): The event rule is enabled. DISABLE: The event rule is disabled.
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
     * @return data
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
