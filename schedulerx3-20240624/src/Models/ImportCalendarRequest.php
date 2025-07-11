<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models;

use AlibabaCloud\Tea\Model;

class ImportCalendarRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example xxljob-b6ec1xxxx
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description This parameter is required.
     *
     * @example [{"month":1,"days":[3,4,5,6,9,10,11,12,13,16,17,18,19,20,28,29,30,31]},{"month":2,"days":[1,2,3,6,7,8,9,10,13,14,15,16,17,20,21,22,23,24,27,28]},{"month":3,"days":[1,2,3,6,7,8,9,10,13,14,15,16,17,20,21,22,23,24,27,28,29,30,31]},{"month":4,"days":[3,4,6,7,10,11,12,13,14,17,18,19,20,21,23,24,25,26,27,28]},{"month":5,"days":[4,5,6,8,9,10,11,12,15,16,17,18,19,22,23,24,25,26,29,30,31]},{"month":6,"days":[1,2,5,6,7,8,9,12,13,14,15,16,19,20,21,25,26,27,28,29,30]},{"month":7,"days":[3,4,5,6,7,10,11,12,13,14,17,18,19,20,21,24,25,26,27,28,31]},{"month":8,"days":[1,2,3,4,7,8,9,10,11,14,15,16,17,18,21,22,23,24,25,28,29,30,31]},{"month":9,"days":[1,4,5,6,7,8,11,12,13,14,15,18,19,20,21,22,25,26,27,28]},{"month":10,"days":[7,8,9,10,11,12,13,16,17,18,19,20,23,24,25,26,27,30,31]},{"month":11,"days":[1,2,3,6,7,8,9,10,13,14,15,16,17,20,21,22,23,24,27,28,29,30]},{"month":12,"days":[1,4,5,6,7,8,11,12,13,14,15,18,19,20,21,22,25,26,27,28,29]}]
     *
     * @var string
     */
    public $months;

    /**
     * @description This parameter is required.
     *
     * @example workday
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 2024
     *
     * @var int
     */
    public $year;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'months' => 'Months',
        'name' => 'Name',
        'year' => 'Year',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->months) {
            $res['Months'] = $this->months;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->year) {
            $res['Year'] = $this->year;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ImportCalendarRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Months'])) {
            $model->months = $map['Months'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Year'])) {
            $model->year = $map['Year'];
        }

        return $model;
    }
}
