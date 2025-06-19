<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Vs\V20181212\Models\GetRenderingProjectInstanceStateMetricsResponseBody\stateMetrics;

class GetRenderingProjectInstanceStateMetricsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var stateMetrics[]
     */
    public $stateMetrics;
    protected $_name = [
        'requestId' => 'RequestId',
        'stateMetrics' => 'StateMetrics',
    ];

    public function validate()
    {
        if (\is_array($this->stateMetrics)) {
            Model::validateArray($this->stateMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->stateMetrics) {
            if (\is_array($this->stateMetrics)) {
                $res['StateMetrics'] = [];
                $n1 = 0;
                foreach ($this->stateMetrics as $item1) {
                    $res['StateMetrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['StateMetrics'])) {
            if (!empty($map['StateMetrics'])) {
                $model->stateMetrics = [];
                $n1 = 0;
                foreach ($map['StateMetrics'] as $item1) {
                    $model->stateMetrics[$n1] = stateMetrics::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
