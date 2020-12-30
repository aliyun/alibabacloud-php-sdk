<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smartag\V20180313\Models;

use AlibabaCloud\SDK\Smartag\V20180313\Models\DescribeUserFlowStatisticsResponseBody\sagStatistics;
use AlibabaCloud\Tea\Model;

class DescribeUserFlowStatisticsResponseBody extends Model
{
    /**
     * @var sagStatistics
     */
    public $sagStatistics;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'sagStatistics' => 'SagStatistics',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->sagStatistics) {
            $res['SagStatistics'] = null !== $this->sagStatistics ? $this->sagStatistics->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserFlowStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SagStatistics'])) {
            $model->sagStatistics = sagStatistics::fromMap($map['SagStatistics']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
