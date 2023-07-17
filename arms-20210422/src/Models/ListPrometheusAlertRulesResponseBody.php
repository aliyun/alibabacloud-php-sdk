<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\SDK\ARMS\V20210422\Models\ListPrometheusAlertRulesResponseBody\prometheusAlertRules;
use AlibabaCloud\Tea\Model;

class ListPrometheusAlertRulesResponseBody extends Model
{
    /**
     * @var prometheusAlertRules[]
     */
    public $prometheusAlertRules;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'prometheusAlertRules' => 'PrometheusAlertRules',
        'requestId'            => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

        return $model;
    }
}
