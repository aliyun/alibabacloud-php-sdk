<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusAlertRulesResponseBody\prometheusAlertRules;

class ListPrometheusAlertRulesResponseBody extends Model
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
     * @var prometheusAlertRules[]
     */
    public $prometheusAlertRules;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'message' => 'Message',
        'prometheusAlertRules' => 'PrometheusAlertRules',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate()
    {
        if (\is_array($this->prometheusAlertRules)) {
            Model::validateArray($this->prometheusAlertRules);
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

        if (null !== $this->prometheusAlertRules) {
            if (\is_array($this->prometheusAlertRules)) {
                $res['PrometheusAlertRules'] = [];
                $n1 = 0;
                foreach ($this->prometheusAlertRules as $item1) {
                    $res['PrometheusAlertRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['PrometheusAlertRules'])) {
            if (!empty($map['PrometheusAlertRules'])) {
                $model->prometheusAlertRules = [];
                $n1 = 0;
                foreach ($map['PrometheusAlertRules'] as $item1) {
                    $model->prometheusAlertRules[$n1] = prometheusAlertRules::fromMap($item1);
                    ++$n1;
                }
            }
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
