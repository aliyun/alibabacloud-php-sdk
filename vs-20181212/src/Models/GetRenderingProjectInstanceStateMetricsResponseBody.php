<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\SDK\Vs\V20181212\Models\GetRenderingProjectInstanceStateMetricsResponseBody\stateMetrics;
use AlibabaCloud\Tea\Model;

class GetRenderingProjectInstanceStateMetricsResponseBody extends Model
{
    /**
     * @description Id of the request
     *
     * @example BEA5625F-8FCF-48F4-851B-CA63946DA664
     *
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

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->stateMetrics) {
            $res['StateMetrics'] = [];
            if (null !== $this->stateMetrics && \is_array($this->stateMetrics)) {
                $n = 0;
                foreach ($this->stateMetrics as $item) {
                    $res['StateMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRenderingProjectInstanceStateMetricsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StateMetrics'])) {
            if (!empty($map['StateMetrics'])) {
                $model->stateMetrics = [];
                $n = 0;
                foreach ($map['StateMetrics'] as $item) {
                    $model->stateMetrics[$n++] = null !== $item ? stateMetrics::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
