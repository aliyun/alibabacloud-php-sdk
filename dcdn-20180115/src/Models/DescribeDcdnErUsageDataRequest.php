<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Tea\Model;

class DescribeDcdnErUsageDataRequest extends Model
{
    /**
     * @description The end of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * >  The end time must be later than the start time.
     * @example 2018-10-31T16:00:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the ER.
     *
     * @example routine1.test
     *
     * @var string
     */
    public $routineID;

    /**
     * @description The specification of the ER. Valid values:
     *
     *   5ms
     *   50ms
     *   100ms
     *
     * @example 50ms
     *
     * @var string
     */
    public $spec;

    /**
     * @description Specifies how the results are grouped. If you set this parameter to routine, the returned results are grouped based on the ER ID. If you set this parameter to spec, the returned results are grouped based on the ER specification.
     *
     * >  If you leave this parameter empty, the returned results are not grouped.
     * @example routine
     *
     * @var string
     */
    public $splitBy;

    /**
     * @description The beginning of the time range to query. Specify the time in the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time must be in UTC.
     *
     * @example 2018-10-30T16:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'   => 'EndTime',
        'routineID' => 'RoutineID',
        'spec'      => 'Spec',
        'splitBy'   => 'SplitBy',
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
        if (null !== $this->routineID) {
            $res['RoutineID'] = $this->routineID;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->splitBy) {
            $res['SplitBy'] = $this->splitBy;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnErUsageDataRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['RoutineID'])) {
            $model->routineID = $map['RoutineID'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['SplitBy'])) {
            $model->splitBy = $map['SplitBy'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
