<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeInstanceStatisticsResponseBody\instanceStatistics;

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
        if (\is_array($this->instanceStatistics)) {
            Model::validateArray($this->instanceStatistics);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceStatistics) {
            if (\is_array($this->instanceStatistics)) {
                $res['InstanceStatistics'] = [];
                $n1                        = 0;
                foreach ($this->instanceStatistics as $item1) {
                    $res['InstanceStatistics'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['InstanceStatistics'])) {
            if (!empty($map['InstanceStatistics'])) {
                $model->instanceStatistics = [];
                $n1                        = 0;
                foreach ($map['InstanceStatistics'] as $item1) {
                    $model->instanceStatistics[$n1++] = instanceStatistics::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
