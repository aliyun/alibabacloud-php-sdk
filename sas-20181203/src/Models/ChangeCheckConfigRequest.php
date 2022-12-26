<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ChangeCheckConfigRequest extends Model
{
    /**
     * @var int[]
     */
    public $cycleDays;

    /**
     * @example 6
     *
     * @var int
     */
    public $endTime;

    /**
     * @var int[]
     */
    public $standardIds;

    /**
     * @example 0
     *
     * @var int
     */
    public $startTime;
    protected $_name = [
        'cycleDays'   => 'CycleDays',
        'endTime'     => 'EndTime',
        'standardIds' => 'StandardIds',
        'startTime'   => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cycleDays) {
            $res['CycleDays'] = $this->cycleDays;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->standardIds) {
            $res['StandardIds'] = $this->standardIds;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeCheckConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CycleDays'])) {
            if (!empty($map['CycleDays'])) {
                $model->cycleDays = $map['CycleDays'];
            }
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StandardIds'])) {
            if (!empty($map['StandardIds'])) {
                $model->standardIds = $map['StandardIds'];
            }
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
