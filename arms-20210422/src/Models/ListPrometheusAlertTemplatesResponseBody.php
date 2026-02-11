<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20210422\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20210422\Models\ListPrometheusAlertTemplatesResponseBody\prometheusAlertTemplates;

class ListPrometheusAlertTemplatesResponseBody extends Model
{
    /**
     * @var prometheusAlertTemplates[]
     */
    public $prometheusAlertTemplates;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'prometheusAlertTemplates' => 'PrometheusAlertTemplates',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->prometheusAlertTemplates)) {
            Model::validateArray($this->prometheusAlertTemplates);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->prometheusAlertTemplates) {
            if (\is_array($this->prometheusAlertTemplates)) {
                $res['PrometheusAlertTemplates'] = [];
                $n1 = 0;
                foreach ($this->prometheusAlertTemplates as $item1) {
                    $res['PrometheusAlertTemplates'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['PrometheusAlertTemplates'])) {
            if (!empty($map['PrometheusAlertTemplates'])) {
                $model->prometheusAlertTemplates = [];
                $n1 = 0;
                foreach ($map['PrometheusAlertTemplates'] as $item1) {
                    $model->prometheusAlertTemplates[$n1] = prometheusAlertTemplates::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
