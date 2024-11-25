<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeJobRequest;

use AlibabaCloud\Tea\Model;

class timedConfig extends Model
{
    /**
     * @description The stop time of the transcoding job. Note: The time span between the stop time and the current time cannot exceed seven days.
     *
     * @example 2022-08-05T06:08:31Z
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The start time of the transcoding job. Note: The time span between the start time and the current time cannot exceed seven days.
     *
     * @example 2022-06-19T02:16:41Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'   => 'EndTime',
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
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timedConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
