<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreatePrometheusAlertRuleResponseBody\prometheusAlertRule;

class CreatePrometheusAlertRuleResponseBody extends Model
{
    /**
     * @var int
     */
    public $code;
    /**
     * @var string
     */
    public $message;
    /**
     * @var prometheusAlertRule
     */
    public $prometheusAlertRule;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'                => 'Code',
        'message'             => 'Message',
        'prometheusAlertRule' => 'PrometheusAlertRule',
        'requestId'           => 'RequestId',
        'success'             => 'Success',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->prometheusAlertRule) {
            $res['PrometheusAlertRule'] = null !== $this->prometheusAlertRule ? $this->prometheusAlertRule->toArray($noStream) : $this->prometheusAlertRule;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->success) {
            $res['Success'] = $this->success;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['PrometheusAlertRule'])) {
            $model->prometheusAlertRule = prometheusAlertRule::fromMap($map['PrometheusAlertRule']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
