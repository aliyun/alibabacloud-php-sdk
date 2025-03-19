<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobInstanceMetricsResponseBody\instanceMetrics;
use AlibabaCloud\Tea\Model;

class ListTrainingJobInstanceMetricsResponseBody extends Model
{
    /**
     * @var instanceMetrics[]
     */
    public $instanceMetrics;

    /**
     * @example F082BD0D-21E1-5F9B-81A0-AB07485B03CD
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceMetrics' => 'InstanceMetrics',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceMetrics) {
            $res['InstanceMetrics'] = [];
            if (null !== $this->instanceMetrics && \is_array($this->instanceMetrics)) {
                $n = 0;
                foreach ($this->instanceMetrics as $item) {
                    $res['InstanceMetrics'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return ListTrainingJobInstanceMetricsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceMetrics'])) {
            if (!empty($map['InstanceMetrics'])) {
                $model->instanceMetrics = [];
                $n = 0;
                foreach ($map['InstanceMetrics'] as $item) {
                    $model->instanceMetrics[$n++] = null !== $item ? instanceMetrics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
