<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class DescribeMediaDistributionRequest extends Model
{
    /**
     * @description The end of the time range to query. The end time must be later than the start time. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC. The maximum time range to query is 6 months.
     *
     * @example 2017-01-11T12:59:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The statistical interval. Default value: day. Valid values:
     *
     *   hour: natural hour of the start and end time.
     *   day: natural day of the start and end time.
     *   week: natural week of the start and end time.
     *   month: natural month of the start and end time.
     *
     * @example day
     *
     * @var string
     */
    public $interval;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC. The maximum time range to query is 6 months.
     *
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The hierarchical storage type. Valid values:
     *
     *   Standard
     *   IA
     *   Archive
     *   ColdArchive
     *   SourceIA
     *   SourceArchive
     *   SourceColdArchive
     *   Changing
     *   SourceChanging
     *
     * @example Standard
     *
     * @var string
     */
    public $storageClass;
    protected $_name = [
        'endTime' => 'EndTime',
        'interval' => 'Interval',
        'startTime' => 'StartTime',
        'storageClass' => 'StorageClass',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->storageClass) {
            $res['StorageClass'] = $this->storageClass;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeMediaDistributionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['StorageClass'])) {
            $model->storageClass = $map['StorageClass'];
        }

        return $model;
    }
}
