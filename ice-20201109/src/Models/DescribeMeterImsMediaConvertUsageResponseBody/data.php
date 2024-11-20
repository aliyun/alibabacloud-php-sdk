<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsMediaConvertUsageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The usage duration, in minutes.
     *
     * @example 20
     *
     * @var int
     */
    public $duration;

    /**
     * @description The transcoding specifications.
     *
     * @example H264.HD
     *
     * @var string
     */
    public $specification;

    /**
     * @description The beginning time of usage. The value is a 10-digit timestamp.
     *
     * @example 1656950400
     *
     * @var int
     */
    public $time;
    protected $_name = [
        'duration'      => 'Duration',
        'specification' => 'Specification',
        'time'          => 'Time',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }

        return $model;
    }
}
