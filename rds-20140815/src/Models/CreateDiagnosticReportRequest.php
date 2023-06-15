<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class CreateDiagnosticReportRequest extends Model
{
    /**
     * @description The ID of the instance.
     *
     * @example rm-uf6wjk521****
     *
     * @var string
     */
    public $DBInstanceId;

    /**
     * @description The end time of the monitored data that is used to generate the diagnostic report. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time must be in UTC.
     *
     * @example 2018-06-12T15:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The start time of the monitored data that is used to generate the diagnostic report. Specify the time in the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm*Z format. The time must be in UTC.
     *
     * @example 2018-06-11T15:00Z
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
