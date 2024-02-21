<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class CreateDiagnosticReportRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The end of the time range to create the diagnostic report. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * >  The start time must be later than the end time.
     * @example 1596177993001
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The beginning of the time range to create the diagnostic report. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1596177993000
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'DBInstanceId' => 'DBInstanceId',
        'endTime'      => 'EndTime',
        'startTime'    => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->DBInstanceId) {
            $res['DBInstanceId'] = $this->DBInstanceId;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDiagnosticReportRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DBInstanceId'])) {
            $model->DBInstanceId = $map['DBInstanceId'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
