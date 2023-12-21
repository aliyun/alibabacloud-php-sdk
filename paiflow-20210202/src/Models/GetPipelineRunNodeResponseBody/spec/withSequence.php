<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models\GetPipelineRunNodeResponseBody\spec;

use AlibabaCloud\Tea\Model;

class withSequence extends Model
{
    /**
     * @example 10
     *
     * @var int
     */
    public $end;

    /**
     * @example "2020-05-%d"
     *
     * @var string
     */
    public $format;

    /**
     * @example 1
     *
     * @var int
     */
    public $start;
    protected $_name = [
        'end'    => 'End',
        'format' => 'Format',
        'start'  => 'Start',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return withSequence
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
