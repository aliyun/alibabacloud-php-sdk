<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class DisableRuleRequest extends Model
{
    /**
     * @description The name of the event bus.
     *
     * This parameter is required.
     * @example MyEventBus
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The name of the event rule.
     *
     * This parameter is required.
     * @example tf-testacc-rule
     *
     * @var string
     */
    public $ruleName;
    protected $_name = [
        'eventBusName' => 'EventBusName',
        'ruleName'     => 'RuleName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->eventBusName) {
            $res['EventBusName'] = $this->eventBusName;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisableRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EventBusName'])) {
            $model->eventBusName = $map['EventBusName'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }

        return $model;
    }
}
