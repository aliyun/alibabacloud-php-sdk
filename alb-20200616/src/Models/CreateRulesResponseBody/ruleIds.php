<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models\CreateRulesResponseBody;

use AlibabaCloud\Tea\Model;

class ruleIds extends Model
{
    /**
     * @description 转发规则标识
     *
     * @var string
     */
    public $ruleId;

    /**
     * @description 转发规则优先级
     *
     * @var int
     */
    public $priority;
    protected $_name = [
        'ruleId'   => 'RuleId',
        'priority' => 'Priority',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
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
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        return $model;
    }
}
