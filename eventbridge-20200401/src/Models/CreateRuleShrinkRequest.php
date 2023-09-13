<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class CreateRuleShrinkRequest extends Model
{
    /**
     * @description The description of the event bus.
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the event bus.
     *
     * @example MyEventBus
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The event targets.
     *
     * @var string
     */
    public $eventTargetsShrink;

    /**
     * @description The event pattern, in JSON format. Valid values: stringEqual and stringExpression. You can specify up to five expressions in the map data structure in each field.
     *
     * You can specify up to five expressions in the map data structure in each field.
     * @example {\"source\": [{\"prefix\": \"acs.\"}],\"type\": [{\"prefix\":\"oss:ObjectReplication\"}],\"subject\":[{\"prefix\":\"acs:oss:cn-hangzhou:123456789098****:my-movie-bucket/\", \"suffix\":\".txt\"}]}
     *
     * @var string
     */
    public $filterPattern;

    /**
     * @description The name of the event rule.
     *
     * @example MNSRule
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The status of the event rule. Valid values: ENABLE: enables the event rule. It is the default status of the event rule. DISABLE: disables the event rule.
     *
     * @example ENABLE
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'description'        => 'Description',
        'eventBusName'       => 'EventBusName',
        'eventTargetsShrink' => 'EventTargets',
        'filterPattern'      => 'FilterPattern',
        'ruleName'           => 'RuleName',
        'status'             => 'Status',
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
        if (null !== $this->eventTargetsShrink) {
            $res['EventTargets'] = $this->eventTargetsShrink;
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
     * @return CreateRuleShrinkRequest
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
        if (isset($map['EventTargets'])) {
            $model->eventTargetsShrink = $map['EventTargets'];
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
