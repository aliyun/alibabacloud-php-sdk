<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Tea\Model;

class FindGuestCredentialsRecordRequest extends Model
{
    /**
     * @example 34429
     *
     * @var string
     */
    public $activityId;

    /**
     * @example 2023-08-07 12:00:00
     *
     * @var string
     */
    public $dateTimeString;

    /**
     * @var string
     */
    public $endDateTime;

    /**
     * @var string
     */
    public $startDateTime;
    protected $_name = [
        'activityId'     => 'ActivityId',
        'dateTimeString' => 'DateTimeString',
        'endDateTime'    => 'EndDateTime',
        'startDateTime'  => 'StartDateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->activityId) {
            $res['ActivityId'] = $this->activityId;
        }
        if (null !== $this->dateTimeString) {
            $res['DateTimeString'] = $this->dateTimeString;
        }
        if (null !== $this->endDateTime) {
            $res['EndDateTime'] = $this->endDateTime;
        }
        if (null !== $this->startDateTime) {
            $res['StartDateTime'] = $this->startDateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindGuestCredentialsRecordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActivityId'])) {
            $model->activityId = $map['ActivityId'];
        }
        if (isset($map['DateTimeString'])) {
            $model->dateTimeString = $map['DateTimeString'];
        }
        if (isset($map['EndDateTime'])) {
            $model->endDateTime = $map['EndDateTime'];
        }
        if (isset($map['StartDateTime'])) {
            $model->startDateTime = $map['StartDateTime'];
        }

        return $model;
    }
}
