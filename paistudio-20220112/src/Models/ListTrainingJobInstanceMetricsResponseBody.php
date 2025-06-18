<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobInstanceMetricsResponseBody\instanceMetrics;

class ListTrainingJobInstanceMetricsResponseBody extends Model
{
    /**
     * @var instanceMetrics[]
     */
    public $instanceMetrics;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceMetrics' => 'InstanceMetrics',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->instanceMetrics)) {
            Model::validateArray($this->instanceMetrics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceMetrics) {
            if (\is_array($this->instanceMetrics)) {
                $res['InstanceMetrics'] = [];
                $n1 = 0;
                foreach ($this->instanceMetrics as $item1) {
                    $res['InstanceMetrics'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceMetrics'])) {
            if (!empty($map['InstanceMetrics'])) {
                $model->instanceMetrics = [];
                $n1 = 0;
                foreach ($map['InstanceMetrics'] as $item1) {
                    $model->instanceMetrics[$n1] = instanceMetrics::fromMap($item1);
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
