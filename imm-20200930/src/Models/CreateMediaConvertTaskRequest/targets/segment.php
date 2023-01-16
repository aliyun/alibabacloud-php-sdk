<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\targets;

use AlibabaCloud\Tea\Model;

class segment extends Model
{
    /**
     * @example 30
     *
     * @var float
     */
    public $duration;

    /**
     * @example hls
     *
     * @var string
     */
    public $format;

    /**
     * @example 5
     *
     * @var int
     */
    public $startNumber;
    protected $_name = [
        'duration'    => 'Duration',
        'format'      => 'Format',
        'startNumber' => 'StartNumber',
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
        if (null !== $this->format) {
            $res['Format'] = $this->format;
        }
        if (null !== $this->startNumber) {
            $res['StartNumber'] = $this->startNumber;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return segment
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Format'])) {
            $model->format = $map['Format'];
        }
        if (isset($map['StartNumber'])) {
            $model->startNumber = $map['StartNumber'];
        }

        return $model;
    }
}
