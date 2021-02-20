<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceStatisticsResponseBody\instanceStatistics;
use AlibabaCloud\Tea\Model;

class DescribeInstanceStatisticsResponseBody extends Model
{
    /**
     * @var instanceStatistics[]
     */
    public $instanceStatistics;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceStatistics' => 'InstanceStatistics',
        'requestId'          => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceStatistics) {
            $res['InstanceStatistics'] = [];
            if (null !== $this->instanceStatistics && \is_array($this->instanceStatistics)) {
                $n = 0;
                foreach ($this->instanceStatistics as $item) {
                    $res['InstanceStatistics'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeInstanceStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceStatistics'])) {
            if (!empty($map['InstanceStatistics'])) {
                $model->instanceStatistics = [];
                $n                         = 0;
                foreach ($map['InstanceStatistics'] as $item) {
                    $model->instanceStatistics[$n++] = null !== $item ? instanceStatistics::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
