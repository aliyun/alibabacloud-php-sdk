<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeLiveDomainPublishErrorCodeResponseBody\realTimeCodeData;
use AlibabaCloud\Tea\Model;

class DescribeLiveDomainPublishErrorCodeResponseBody extends Model
{
    /**
     * @description The time granularity of the query. Unit: seconds. Default value: 60.
     *
     * @example 60
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The ingest domain.
     *
     * @example example.com,example.aliyundoc.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The end of the time range during which data was queried. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2016-06-29T09:10:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The proportions of error codes at each time interval.
     *
     * @var realTimeCodeData[]
     */
    public $realTimeCodeData;

    /**
     * @description The request ID.
     *
     * @example BC858082-736F-4A25-867B-E5B67C85ACF7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range during which data was queried. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2016-06-29T09:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval' => 'DataInterval',
        'domainName' => 'DomainName',
        'endTime' => 'EndTime',
        'realTimeCodeData' => 'RealTimeCodeData',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataInterval) {
            $res['DataInterval'] = $this->dataInterval;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->realTimeCodeData) {
            $res['RealTimeCodeData'] = [];
            if (null !== $this->realTimeCodeData && \is_array($this->realTimeCodeData)) {
                $n = 0;
                foreach ($this->realTimeCodeData as $item) {
                    $res['RealTimeCodeData'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLiveDomainPublishErrorCodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RealTimeCodeData'])) {
            if (!empty($map['RealTimeCodeData'])) {
                $model->realTimeCodeData = [];
                $n = 0;
                foreach ($map['RealTimeCodeData'] as $item) {
                    $model->realTimeCodeData[$n++] = null !== $item ? realTimeCodeData::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
