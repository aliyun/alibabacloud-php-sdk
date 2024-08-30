<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListDispatchRuleResponseBody;

use AlibabaCloud\Tea\Model;

class dispatchRules extends Model
{
    /**
     * @description The name of the notification policy.
     *
     * @example Prod
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the notification policy.
     *
     * @example 10282
     *
     * @var int
     */
    public $ruleId;

    /**
     * @description Indicates whether the notification policy is enabled. Valid values:
     *
     *   `true`
     *   `false`
     *
     * @example true
     *
     * @var string
     */
    public $state;
    protected $_name = [
        'name'   => 'Name',
        'ruleId' => 'RuleId',
        'state'  => 'State',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dispatchRules
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }

        return $model;
    }
}
