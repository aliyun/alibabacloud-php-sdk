<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesResponseBody;

use AlibabaCloud\Tea\Model;

class ruleIds extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $priority;

    /**
     * @example rule-a3x3pg1yohq3lq****
     *
     * @var string
     */
    public $ruleId;
    protected $_name = [
        'priority' => 'Priority',
        'ruleId'   => 'RuleId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        return $model;
    }
}
