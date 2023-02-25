<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnDomainIpaConnDataResponseBody\connectionDataPerInterval;
use AlibabaCloud\Tea\Model;

class DescribeDcdnDomainIpaConnDataResponseBody extends Model
{
    /**
     * @description The number of user connections at each time interval.
     *
     * @var connectionDataPerInterval
     */
    public $connectionDataPerInterval;

    /**
     * @description The end of the time range during which data was queried.
     *
     * @example 2015-02-22T15:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the request.
     *
     * @example A2A1EEF8-043E-43A1-807C-BEAC18EA1807
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range during which data was queried.
     *
     * @example 2015-02-21T15:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'connectionDataPerInterval' => 'ConnectionDataPerInterval',
        'endTime'                   => 'EndTime',
        'requestId'                 => 'RequestId',
        'startTime'                 => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->connectionDataPerInterval) {
            $res['ConnectionDataPerInterval'] = null !== $this->connectionDataPerInterval ? $this->connectionDataPerInterval->toMap() : null;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
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
     * @return DescribeDcdnDomainIpaConnDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConnectionDataPerInterval'])) {
            $model->connectionDataPerInterval = connectionDataPerInterval::fromMap($map['ConnectionDataPerInterval']);
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
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
