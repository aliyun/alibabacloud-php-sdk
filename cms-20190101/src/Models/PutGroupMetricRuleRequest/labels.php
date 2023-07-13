<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\PutGroupMetricRuleRequest;

use AlibabaCloud\Tea\Model;

class labels extends Model
{
    /**
     * @description The name of the alert rule.
     *
     *   When you create an alert rule for the application group, enter the name of the alert rule.
     *   When you modify a specified alert rule in the application group, you must obtain the name of the alert rule. For information about how to obtain the name of an alert rule, see [DescribeMetricRuleList](~~114941~~).
     *
     * @example key1
     *
     * @var string
     */
    public $key;

    /**
     * @description The ID of the alert rule.
     *
     * @example value1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'key'   => 'Key',
        'value' => 'Value',
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return labels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Key'])) {
            $model->key = $map['Key'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
