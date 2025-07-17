<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribePrometheusAlertRuleResponseBody\prometheusAlertRule;

use AlibabaCloud\Tea\Model;

class labels extends Model
{
    /**
     * @description The name of the tag.
     *
     * @example severity
     *
     * @var string
     */
    public $name;

    /**
     * @description The value of the tag.
     *
     * @example critical
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name' => 'Name',
        'value' => 'Value',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
