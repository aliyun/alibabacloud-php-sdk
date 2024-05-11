<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class GetOnCallSchedulesDetailRequest extends Model
{
    /**
     * @description The date on which the shift ends. Format: `yyyy-MM-dd`.
     *
     * @example 2022-10-30
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the scheduling policy.
     *
     * This parameter is required.
     * @example 1234
     *
     * @var int
     */
    public $id;

    /**
     * @description The date from which the shift starts. Format: `yyyy-MM-dd`.
     *
     * @example 2022-10-01
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'endTime'   => 'EndTime',
        'id'        => 'Id',
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
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOnCallSchedulesDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
