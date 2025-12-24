<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeInstanceCreateAndDeleteStatisticsResponseBody\instanceCreateAndDeleteStatistics;

class DescribeInstanceCreateAndDeleteStatisticsResponseBody extends Model
{
    /**
     * @var instanceCreateAndDeleteStatistics
     */
    public $instanceCreateAndDeleteStatistics;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instanceCreateAndDeleteStatistics' => 'InstanceCreateAndDeleteStatistics',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->instanceCreateAndDeleteStatistics) {
            $this->instanceCreateAndDeleteStatistics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceCreateAndDeleteStatistics) {
            $res['InstanceCreateAndDeleteStatistics'] = null !== $this->instanceCreateAndDeleteStatistics ? $this->instanceCreateAndDeleteStatistics->toArray($noStream) : $this->instanceCreateAndDeleteStatistics;
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
        if (isset($map['InstanceCreateAndDeleteStatistics'])) {
            $model->instanceCreateAndDeleteStatistics = instanceCreateAndDeleteStatistics::fromMap($map['InstanceCreateAndDeleteStatistics']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
