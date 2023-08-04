<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribePrometheusAlertRuleResponseBody\prometheusAlertRule;

use AlibabaCloud\Tea\Model;

class annotations extends Model
{
    /**
     * @description The name of the annotation.
     *
     * @example message
     *
     * @var string
     */
    public $name;

    /**
     * @description The value of the annotation.
     *
     * @example The CPU utilization of ${{$labels.pod_name}} has exceeded 80%. Current value: {{$value}}%
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'name'  => 'Name',
        'value' => 'Value',
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
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return annotations
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
