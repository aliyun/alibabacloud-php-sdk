<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Drds\V20190123\Models;

use AlibabaCloud\Tea\Model;

class DescribeBackupSetsRequest extends Model
{
    /**
     * @description The ID of the DRDS instance.
     *
     * @example drds***********
     *
     * @var string
     */
    public $drdsInstanceId;

    /**
     * @description The end of the query time which is in timestamp format (measured in millisecond) .
     *
     * >  The end time must be later than the start time.
     * @example 1591326000000
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The beginning of the query time which is in timestamp format (measured in millisecond).
     *
     * @example 1591327800000
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'drdsInstanceId' => 'DrdsInstanceId',
        'endTime'        => 'EndTime',
        'startTime'      => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->drdsInstanceId) {
            $res['DrdsInstanceId'] = $this->drdsInstanceId;
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
     * @return DescribeBackupSetsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DrdsInstanceId'])) {
            $model->drdsInstanceId = $map['DrdsInstanceId'];
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
