<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class UpdateRuleRequest extends Model
{
    /**
     * @description The description of the event bus.
     *
     * @example demo
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the event bus.
     *
     * @example hw-test
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The event pattern, in JSON format. Valid values: stringEqual stringExpression Each field can have a maximum of five expressions in the map data structure.
     *
     * Each field can have a maximum of five expressions in the map data structure.
     * @example {\"source\":[\"acs.oss\"],\"type\":[\"oss:BucketQueried:GetBucketStat\"]}
     *
     * @var string
     */
    public $filterPattern;

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
    protected $_name = [
        'description'   => 'Description',
        'eventBusName'  => 'EventBusName',
        'filterPattern' => 'FilterPattern',
        'ruleName'      => 'RuleName',
        'status'        => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }
        if (null !== $this->filterPattern) {
            $res['FilterPattern'] = $this->filterPattern;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }
        if (isset($map['FilterPattern'])) {
            $model->filterPattern = $map['FilterPattern'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
