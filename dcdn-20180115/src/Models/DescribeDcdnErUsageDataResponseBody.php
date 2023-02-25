<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnErUsageDataResponseBody\erAccData;
use AlibabaCloud\Tea\Model;

class DescribeDcdnErUsageDataResponseBody extends Model
{
    /**
     * @description The end of the time range during which data was queried.
     *
     * @example 2018-10-31T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The list of the returned data.
     *
     * @var erAccData
     */
    public $erAccData;

    /**
     * @description The ID of the request.
     *
     * @example C370DAF1-C838-4288-A1A0-9A87633D248E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The beginning of the time range during which data was queried.
     *
     * @example 2018-10-30T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'   => 'EndTime',
        'erAccData' => 'ErAccData',
        'requestId' => 'RequestId',
        'startTime' => 'StartTime',
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
        if (null !== $this->erAccData) {
            $res['ErAccData'] = null !== $this->erAccData ? $this->erAccData->toMap() : null;
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
     * @return DescribeDcdnErUsageDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ErAccData'])) {
            $model->erAccData = erAccData::fromMap($map['ErAccData']);
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
