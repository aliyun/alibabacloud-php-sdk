<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\UpdateTimingSyntheticTaskRequest;

use AlibabaCloud\Tea\Model;

class customPeriod extends Model
{
    /**
     * @description The hour at which the test ends. Valid values: 0 to 24.
     *
     * @example 22
     *
     * @var int
     */
    public $endHour;

    /**
     * @description The hour at which the test starts. Valid values: 0 to 24.
     *
     * @example 14
     *
     * @var int
     */
    public $startHour;
    protected $_name = [
        'endHour'   => 'EndHour',
        'startHour' => 'StartHour',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endHour) {
            $res['EndHour'] = $this->endHour;
        }
        if (null !== $this->startHour) {
            $res['StartHour'] = $this->startHour;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customPeriod
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndHour'])) {
            $model->endHour = $map['EndHour'];
        }
        if (isset($map['StartHour'])) {
            $model->startHour = $map['StartHour'];
        }

        return $model;
    }
}
