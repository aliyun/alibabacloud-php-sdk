<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Marketing_event\V20210101\Models;

use AlibabaCloud\Tea\Model;

class FindGuestTicketRecordRequest extends Model
{
    /**
     * @example 34434
     *
     * @var string
     */
    public $activityId;

    /**
     * @example 2023-09-04 15:14:00
     *
     * @var string
     */
    public $dateTimeString;
    protected $_name = [
        'activityId'     => 'ActivityId',
        'dateTimeString' => 'DateTimeString',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindGuestTicketRecordRequest
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

        return $model;
    }
}
