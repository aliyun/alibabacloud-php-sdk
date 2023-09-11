<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeDispatchRuleResponseBody\dispatchRule\labelMatchExpressionGrid\labelMatchExpressionGroups;

use AlibabaCloud\Tea\Model;

class labelMatchExpressions extends Model
{
    /**
     * @description The key of the tag of the dispatch rule. Valid values:
     *
     *   `_aliyun_arms_userid`: user ID
     *   `_aliyun_arms_involvedObject_kind`: type of the associated object
     *   `_aliyun_arms_involvedObject_id`: ID of the associated object
     *   `_aliyun_arms_involvedObject_name`: name of the associated object
     *   `_aliyun_arms_alert_name`: alert name
     *   `_aliyun_arms_alert_rule_id`: alert rule ID
     *   `_aliyun_arms_alert_type`: alert type
     *   `_aliyun_arms_alert_level`: alert severity
     *
     * @example _aliyun_arms_involvedObject_kind
     *
     * @var string
     */
    public $key;

    /**
     * @description The operator used in the dispatch rule. Valid values:
     *
     *   `eq`: equals to.
     *   `re`: matches a regular expression.
     *
     * @example eq
     *
     * @var string
     */
    public $operator;

    /**
     * @description The value of the tag.
     *
     * @example app
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'      => 'Key',
        'operator' => 'Operator',
        'value'    => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->key) {
            $res['Key'] = $this->key;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return labelMatchExpressions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
