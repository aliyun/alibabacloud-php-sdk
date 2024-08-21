<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\SDK\ARMS\V20190808\Models\ListPrometheusAlertTemplatesResponseBody\prometheusAlertTemplates;
use AlibabaCloud\Tea\Model;

class ListPrometheusAlertTemplatesResponseBody extends Model
{
    /**
     * @description The returned struct.
     *
     * @var prometheusAlertTemplates[]
     */
    public $prometheusAlertTemplates;

    /**
     * @description The ID of the request.
     *
     * @example 9FEA6D00-317F-45E3-9004-7FB8B0B7****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'prometheusAlertTemplates' => 'PrometheusAlertTemplates',
        'requestId'                => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->prometheusAlertTemplates) {
            $res['PrometheusAlertTemplates'] = [];
            if (null !== $this->prometheusAlertTemplates && \is_array($this->prometheusAlertTemplates)) {
                $n = 0;
                foreach ($this->prometheusAlertTemplates as $item) {
                    $res['PrometheusAlertTemplates'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListPrometheusAlertTemplatesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PrometheusAlertTemplates'])) {
            if (!empty($map['PrometheusAlertTemplates'])) {
                $model->prometheusAlertTemplates = [];
                $n                               = 0;
                foreach ($map['PrometheusAlertTemplates'] as $item) {
                    $model->prometheusAlertTemplates[$n++] = null !== $item ? prometheusAlertTemplates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
