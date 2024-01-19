<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Smc\V20190601\Models\DescribeReplicationJobsResponseBody\replicationJobs\replicationJob\replicationJobRuns;

use AlibabaCloud\Tea\Model;

class replicationJobRun extends Model
{
    /**
     * @description The time when the migration job ended. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * >  The time displayed in the SMC console is in the format of UTC+8.
     * @example 2019-10-04T13:35:00Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the destination image.
     *
     * @example m-o6w3gy99qf89rkga****
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The time when the migration job was started. The time follows the [ISO 8601](~~25696~~) standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * >  The time displayed in the SMC console is in the format of UTC+8.
     * @example 2019-10-01T13:35:00Z
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The method used to run the migration job. Valid values:
     *
     *   Manual: The migration job was manually started.
     *   Schedule: The migration job was started at a scheduled time or at a specific interval.
     *
     * @example Schedule
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'endTime'   => 'EndTime',
        'imageId'   => 'ImageId',
        'startTime' => 'StartTime',
        'type'      => 'Type',
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
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return replicationJobRun
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
