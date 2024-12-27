<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imm\V20200930\Models\CreateMediaConvertTaskRequest\targets;

use AlibabaCloud\Tea\Model;

class segment extends Model
{
    /**
     * @description The duration of the segment. Unit: seconds.
     *
     * @example 30
     *
     * @var float
     */
    public $duration;

    /**
     * @description The media segmentation mode. Valid values:
     *
     *   hls
     *   dash
     *
     * @example hls
     *
     * @var string
     */
    public $format;

    /**
     * @description The start sequence number. You can specify this parameter only if you set Format to hls. Default value: 0.
     *
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
