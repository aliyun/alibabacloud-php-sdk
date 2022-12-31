<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsMediaConvertUHDUsageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 308028
     *
     * @var int
     */
    public $duration;

    /**
     * @example SuperResolution.Standard.1080P
     *
     * @var string
     */
    public $specification;

    /**
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
