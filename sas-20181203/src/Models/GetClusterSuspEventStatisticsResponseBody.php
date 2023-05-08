<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\SDK\Sas\V20181203\Models\GetClusterSuspEventStatisticsResponseBody\suspStatistics;
use AlibabaCloud\Tea\Model;

class GetClusterSuspEventStatisticsResponseBody extends Model
{
    /**
     * @example ACF97412-FD09-4D1F-994F-34DF12BR****
     *
     * @var string
     */
    public $requestId;

    /**
     * @var suspStatistics
     */
    public $suspStatistics;
    protected $_name = [
        'requestId'      => 'RequestId',
        'suspStatistics' => 'SuspStatistics',
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
        if (null !== $this->suspStatistics) {
            $res['SuspStatistics'] = null !== $this->suspStatistics ? $this->suspStatistics->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetClusterSuspEventStatisticsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SuspStatistics'])) {
            $model->suspStatistics = suspStatistics::fromMap($map['SuspStatistics']);
        }

        return $model;
    }
}
