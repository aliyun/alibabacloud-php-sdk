<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20210422\Models\DescribePrometheusAlertRuleResponseBody\prometheusAlertRule;

class DescribePrometheusAlertRuleResponseBody extends Model
{
    /**
     * @var prometheusAlertRule
     */
    public $prometheusAlertRule;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'prometheusAlertRule' => 'PrometheusAlertRule',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->prometheusAlertRule) {
            $this->prometheusAlertRule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->prometheusAlertRule) {
            $res['PrometheusAlertRule'] = null !== $this->prometheusAlertRule ? $this->prometheusAlertRule->toArray($noStream) : $this->prometheusAlertRule;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
