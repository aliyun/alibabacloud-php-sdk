<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\SDK\ESA\V20240910\Models\DescribeDDoSBpsListResponseBody\dataModule;
use AlibabaCloud\Tea\Model;

class DescribeDDoSBpsListResponseBody extends Model
{
    /**
     * @description The interval between each piece of data, in seconds.
     *
     * Generated based on the interval between StartTime and EndTime: less than 1 hour, 60s; 1 hour or more but less than 1 day, 300s; 1 day or more but less than a week, 1800s; 1 week or more, 3600s.
     *
     * @example 300
     *
     * @var int
     */
    public $dataInterval;

    /**
     * @description A list of network bandwidth data for each time interval.
     *
     * @var dataModule[]
     */
    public $dataModule;

    /**
     * @description The end time for fetching data. In ISO8601 format, using UTC+0, formatted as: yyyy-MM-ddTHH:mm:ssZ.
     *
     * The end time must be later than the start time, and the span between start and end times should not exceed 31 days.
     *
     * @example 2023-05-18T06:19:42Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description Request ID.
     *
     * @example 156A6B-677B1A-4297B7-9187B7-2B44792
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The start time for fetching data. In ISO8601 format, using UTC, formatted as: YYYY-MM-DDThh:mm:ssZ.
     *
     * @example 2023-05-14T17:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'dataInterval' => 'DataInterval',
        'dataModule' => 'DataModule',
        'endTime' => 'EndTime',
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
        if (null !== $this->dataModule) {
            $res['DataModule'] = [];
            if (null !== $this->dataModule && \is_array($this->dataModule)) {
                $n = 0;
                foreach ($this->dataModule as $item) {
                    $res['DataModule'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeDDoSBpsListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataInterval'])) {
            $model->dataInterval = $map['DataInterval'];
        }
        if (isset($map['DataModule'])) {
            if (!empty($map['DataModule'])) {
                $model->dataModule = [];
                $n = 0;
                foreach ($map['DataModule'] as $item) {
                    $model->dataModule[$n++] = null !== $item ? dataModule::fromMap($item) : $item;
                }
            }
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
