<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20171228\Models;

use AlibabaCloud\SDK\Ddoscoo\V20171228\Models\DescribeInstanceStatisticsResponse\instanceStatistics;
use AlibabaCloud\Tea\Model;

class DescribeInstanceStatisticsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var instanceStatistics[]
     */
    public $instanceStatistics;
    protected $_name = [
        'requestId'          => 'RequestId',
        'instanceStatistics' => 'InstanceStatistics',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('instanceStatistics', $this->instanceStatistics, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->instanceStatistics) {
            $res['InstanceStatistics'] = [];
            if (null !== $this->instanceStatistics && \is_array($this->instanceStatistics)) {
                $n = 0;
                foreach ($this->instanceStatistics as $item) {
                    $res['InstanceStatistics'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceStatisticsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['InstanceStatistics'])) {
            if (!empty($map['InstanceStatistics'])) {
                $model->instanceStatistics = [];
                $n                         = 0;
                foreach ($map['InstanceStatistics'] as $item) {
                    $model->instanceStatistics[$n++] = null !== $item ? instanceStatistics::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
