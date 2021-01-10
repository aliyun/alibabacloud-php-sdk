<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Logiccomposer\V20181212\Models;

use AlibabaCloud\SDK\Logiccomposer\V20181212\Models\DescribeMetricDetailResponseBody\datapoints;
use AlibabaCloud\Tea\Model;

class DescribeMetricDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var datapoints[]
     */
    public $datapoints;
    protected $_name = [
        'requestId'  => 'RequestId',
        'datapoints' => 'Datapoints',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->datapoints) {
            $res['Datapoints'] = [];
            if (null !== $this->datapoints && \is_array($this->datapoints)) {
                $n = 0;
                foreach ($this->datapoints as $item) {
                    $res['Datapoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMetricDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Datapoints'])) {
            if (!empty($map['Datapoints'])) {
                $model->datapoints = [];
                $n                 = 0;
                foreach ($map['Datapoints'] as $item) {
                    $model->datapoints[$n++] = null !== $item ? datapoints::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
