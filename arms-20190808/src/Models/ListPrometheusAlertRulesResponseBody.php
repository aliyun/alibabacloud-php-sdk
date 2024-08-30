<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusAlertRulesResponseBody\prometheusAlertRules;
use AlibabaCloud\Tea\Model;

class ListPrometheusAlertRulesResponseBody extends Model
{
    /**
     * @description The HTTP status code. The status code 200 indicates that the request was successful. Other status codes indicate that the request failed.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The returned message.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The returned struct.
     *
     * @var prometheusAlertRules[]
     */
    public $prometheusAlertRules;

    /**
     * @description The ID of the request.
     *
     * @example 9FEA6D00-317F-45E3-9004-7FB8B0B7****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example True
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code'                 => 'Code',
        'message'              => 'Message',
        'prometheusAlertRules' => 'PrometheusAlertRules',
        'requestId'            => 'RequestId',
        'success'              => 'Success',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->prometheusAlertRules) {
            $res['PrometheusAlertRules'] = [];
            if (null !== $this->prometheusAlertRules && \is_array($this->prometheusAlertRules)) {
                $n = 0;
                foreach ($this->prometheusAlertRules as $item) {
                    $res['PrometheusAlertRules'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return ListPrometheusAlertRulesResponseBody
     */
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
                $n                           = 0;
                foreach ($map['PrometheusAlertRules'] as $item) {
                    $model->prometheusAlertRules[$n++] = null !== $item ? prometheusAlertRules::fromMap($item) : $item;
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
