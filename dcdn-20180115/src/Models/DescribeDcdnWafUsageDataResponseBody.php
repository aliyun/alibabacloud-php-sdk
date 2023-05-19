<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafUsageDataResponseBody\wafUsageData;
use AlibabaCloud\Tea\Model;

class DescribeDcdnWafUsageDataResponseBody extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **DescribeDcdnWafUsageData**.
     *
     * @example 2018-10-01T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Specifies how query results are grouped. By default, this parameter is empty. Valid values:
     *
     *   domain: Query results are grouped by accelerated domain name.
     *   An empty string: Query results are not grouped.
     *
     * @example CB1A380B-09F0-41BB-802B-72F8FD6DA2FE
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The accelerated domain name.
     *
     * @example 2018-09-30T16:00:00Z",
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The number of monitored requests.
     *
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
