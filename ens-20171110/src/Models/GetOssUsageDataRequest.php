<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class GetOssUsageDataRequest extends Model
{
    /**
     * @description The name of the logical Object Storage Service (OSS) bucket.
     *
     * @example ens-sink-bucketzyp1656903494
     *
     * @var string
     */
    public $bucket;

    /**
     * @description The end of the time range to query. The time is in UTC. Format: 2010-01-21T09:50:23Z.
     *
     * @example 2022-01-12T00:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The aggregation granularity. Unit: minutes.
     *
     * Default value: 5. Valid values: 5 to 1440.
     * @example 10
     *
     * @var string
     */
    public $period;

    /**
     * @description The beginning of the time range to query. The time is in UTC. Format: 2010-01-21T09:50:23Z.
     *
     * @example 2022-01-11T00:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'bucket'    => 'Bucket',
        'endTime'   => 'EndTime',
        'period'    => 'Period',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bucket) {
            $res['Bucket'] = $this->bucket;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->period) {
            $res['Period'] = $this->period;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOssUsageDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Bucket'])) {
            $model->bucket = $map['Bucket'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Period'])) {
            $model->period = $map['Period'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
