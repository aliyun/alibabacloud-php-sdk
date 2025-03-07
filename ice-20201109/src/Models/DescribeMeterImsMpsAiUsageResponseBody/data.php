<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\DescribeMeterImsMpsAiUsageResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The usage duration, in minutes.
     *
     * @example 644
     *
     * @var int
     */
    public $duration;

    /**
     * @description The beginning time of usage. The value is a 10-digit timestamp.
     *
     * @example 1656950400
     *
     * @var int
     */
    public $time;

    /**
     * @description The AI type. Valid values:
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'duration' => 'Duration',
        'time'     => 'Time',
        'type'     => 'Type',
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
        if (null !== $this->time) {
            $res['Time'] = $this->time;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Time'])) {
            $model->time = $map['Time'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
