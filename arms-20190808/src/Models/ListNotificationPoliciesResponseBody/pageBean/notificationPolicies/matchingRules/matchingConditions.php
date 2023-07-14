<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\ListNotificationPoliciesResponseBody\pageBean\notificationPolicies\matchingRules;

use AlibabaCloud\Tea\Model;

class matchingConditions extends Model
{
    /**
     * @description The key of the matching condition.
     *
     * @example altertname
     *
     * @var string
     */
    public $key;

    /**
     * @description The logical operator of the matching condition. Valid values:
     *
     *   `eq`: equal to.
     *   `neq`: not equal to.
     *   `in`: contains.
     *   `nin`: does not contain.
     *   `re`: regular expression match.
     *   `nre`: regular expression mismatch.
     *
     * @example eq
     *
     * @var string
     */
    public $operator;

    /**
     * @description The value of the matching condition.
     *
     * @example test
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
     * @return matchingConditions
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
