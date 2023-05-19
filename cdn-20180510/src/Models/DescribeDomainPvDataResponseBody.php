<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cdn\V20180510\Models;

use AlibabaCloud\SDK\Cdn\V20180510\Models\DescribeDomainPvDataResponseBody\pvDataInterval;
use AlibabaCloud\Tea\Model;

class DescribeDomainPvDataResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 3600
     *
     * @var string
     */
    public $dataInterval;

    /**
     * @description The time interval between the data entries. Unit: seconds.
     *
     * @example example.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description The accelerated domain name.
     *
     * @example 2015-11-28T04:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The operation that you want to perform. Set the value to **DescribeDomainPvData**.
     *
     * @var pvDataInterval
     */
    public $pvDataInterval;

    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * The end time must be later than the start time.
     * @example BCD7D917-76F1-442F-BB75-C810DE34C761
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range during which data was queried.
     *
     * @example 2015-11-28T03:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval'   => 'DataInterval',
        'domainName'     => 'DomainName',
        'endTime'        => 'EndTime',
        'pvDataInterval' => 'PvDataInterval',
        'requestId'      => 'RequestId',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->pvDataInterval) {
            $res['PvDataInterval'] = null !== $this->pvDataInterval ? $this->pvDataInterval->toMap() : null;
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
     * @return DescribeDomainPvDataResponseBody
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
        if (isset($map['PvDataInterval'])) {
            $model->pvDataInterval = pvDataInterval::fromMap($map['PvDataInterval']);
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
