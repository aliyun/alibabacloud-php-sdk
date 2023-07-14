<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribePrometheusAlertRuleResponseBody\prometheusAlertRule;
use AlibabaCloud\Tea\Model;

class DescribePrometheusAlertRuleResponseBody extends Model
{
    /**
     * @var prometheusAlertRule
     */
    public $prometheusAlertRule;

    /**
     * @example 9FEA6D00-317F-45E3-9004-7FB8B0B7****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'prometheusAlertRule' => 'PrometheusAlertRule',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prometheusAlertRule) {
            $res['PrometheusAlertRule'] = null !== $this->prometheusAlertRule ? $this->prometheusAlertRule->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribePrometheusAlertRuleResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrometheusAlertRule'])) {
            $model->prometheusAlertRule = prometheusAlertRule::fromMap($map['PrometheusAlertRule']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
