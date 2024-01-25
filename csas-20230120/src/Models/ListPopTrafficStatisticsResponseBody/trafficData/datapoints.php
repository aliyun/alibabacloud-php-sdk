<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models\ListPopTrafficStatisticsResponseBody\trafficData;

use AlibabaCloud\Tea\Model;

class datapoints extends Model
{
    /**
     * @example 15325
     *
     * @var float
     */
    public $average;

    /**
     * @example 2023-12-06 15:29:00
     *
     * @var string
     */
    public $dateTime;
    protected $_name = [
        'average'  => 'Average',
        'dateTime' => 'DateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->average) {
            $res['Average'] = $this->average;
        }
        if (null !== $this->dateTime) {
            $res['DateTime'] = $this->dateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datapoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Average'])) {
            $model->average = $map['Average'];
        }
        if (isset($map['DateTime'])) {
            $model->dateTime = $map['DateTime'];
        }

        return $model;
    }
}
