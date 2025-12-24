<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ess\V20220222\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivityStatisticsResponseBody\scalingActivityErrorCodeStatistics;
use AlibabaCloud\SDK\Ess\V20220222\Models\DescribeScalingActivityStatisticsResponseBody\scalingActivityStatusStatistics;

class DescribeScalingActivityStatisticsResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var scalingActivityErrorCodeStatistics
     */
    public $scalingActivityErrorCodeStatistics;

    /**
     * @var scalingActivityStatusStatistics
     */
    public $scalingActivityStatusStatistics;
    protected $_name = [
        'requestId' => 'RequestId',
        'scalingActivityErrorCodeStatistics' => 'ScalingActivityErrorCodeStatistics',
        'scalingActivityStatusStatistics' => 'ScalingActivityStatusStatistics',
    ];

    public function validate()
    {
        if (null !== $this->scalingActivityErrorCodeStatistics) {
            $this->scalingActivityErrorCodeStatistics->validate();
        }
        if (null !== $this->scalingActivityStatusStatistics) {
            $this->scalingActivityStatusStatistics->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->scalingActivityErrorCodeStatistics) {
            $res['ScalingActivityErrorCodeStatistics'] = null !== $this->scalingActivityErrorCodeStatistics ? $this->scalingActivityErrorCodeStatistics->toArray($noStream) : $this->scalingActivityErrorCodeStatistics;
        }

        if (null !== $this->scalingActivityStatusStatistics) {
            $res['ScalingActivityStatusStatistics'] = null !== $this->scalingActivityStatusStatistics ? $this->scalingActivityStatusStatistics->toArray($noStream) : $this->scalingActivityStatusStatistics;
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

        if (isset($map['ScalingActivityErrorCodeStatistics'])) {
            $model->scalingActivityErrorCodeStatistics = scalingActivityErrorCodeStatistics::fromMap($map['ScalingActivityErrorCodeStatistics']);
        }

        if (isset($map['ScalingActivityStatusStatistics'])) {
            $model->scalingActivityStatusStatistics = scalingActivityStatusStatistics::fromMap($map['ScalingActivityStatusStatistics']);
        }

        return $model;
    }
}
