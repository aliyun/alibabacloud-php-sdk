<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eventbridge\V20200401\Models;

use AlibabaCloud\Tea\Model;

class PutTargetsShrinkRequest extends Model
{
    /**
     * @description The name of the event bus.
     *
     * @example eventTest
     *
     * @var string
     */
    public $eventBusName;

    /**
     * @description The name of the event rule.
     *
     * @example ssr-send-to-vendor-test01
     *
     * @var string
     */
    public $ruleName;

    /**
     * @description The event targets to be created or updated. For more information, see [Limits.](https://www.alibabacloud.com/help/en/eventbridge/latest/limits)
     *
     * @var string
     */
    public $targetsShrink;
    protected $_name = [
        'eventBusName'  => 'EventBusName',
        'ruleName'      => 'RuleName',
        'targetsShrink' => 'Targets',
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
        if (null !== $this->targetsShrink) {
            $res['Targets'] = $this->targetsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutTargetsShrinkRequest
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
        if (isset($map['Targets'])) {
            $model->targetsShrink = $map['Targets'];
        }

        return $model;
    }
}
