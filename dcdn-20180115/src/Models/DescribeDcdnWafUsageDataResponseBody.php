<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafUsageDataResponseBody\wafUsageData;
use AlibabaCloud\Tea\Model;

class DescribeDcdnWafUsageDataResponseBody extends Model
{
    /**
     * @example 2018-10-01T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @example CB1A380B-09F0-41BB-802B-72F8FD6DA2FE
     *
     * @var string
     */
    public $requestId;

    /**
     * @example 2018-09-30T16:00:00Z",
     *
     * @var string
     */
    public $startTime;

    /**
     * @var wafUsageData
     */
    public $wafUsageData;
    protected $_name = [
        'endTime'      => 'EndTime',
        'requestId'    => 'RequestId',
        'startTime'    => 'StartTime',
        'wafUsageData' => 'WafUsageData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->wafUsageData) {
            $res['WafUsageData'] = null !== $this->wafUsageData ? $this->wafUsageData->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnWafUsageDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['WafUsageData'])) {
            $model->wafUsageData = wafUsageData::fromMap($map['WafUsageData']);
        }

        return $model;
    }
}
