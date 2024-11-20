<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitDynamicImageJobRequest\templateConfig\overwriteParams;

use AlibabaCloud\Tea\Model;

class timeSpan extends Model
{
    /**
     * @description The length of the clip.
     *
     *   Format: `hh:mm:ss[.SSS]` or `sssss[.SSS]`.
     *   Valid values: `[00:00:00.000,23:59:59.999]` or `[0.000,86399.999]`.
     *
     * @var string
     */
    public $duration;

    /**
     * @description The length of the ending part of the original clip to be cropped out. If you specify this parameter, the Duration parameter becomes invalid.
     *
     *   Format: `hh:mm:ss[.SSS]` or `sssss[.SSS]`.
     *   Valid values: `[00:00:00.000,23:59:59.999]` or `[0.000,86399.999]`.
     *
     * @var string
     */
    public $end;

    /**
     * @description The start point of the clip.
     *
     *   Format: `hh:mm:ss[.SSS]` or `sssss[.SSS]`.
     *   Valid values: `[00:00:00.000,23:59:59.999]` or `[0.000,86399.999]`.
     *
     * @var string
     */
    public $seek;
    protected $_name = [
        'duration' => 'Duration',
        'end'      => 'End',
        'seek'     => 'Seek',
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
        if (null !== $this->end) {
            $res['End'] = $this->end;
        }
        if (null !== $this->seek) {
            $res['Seek'] = $this->seek;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeSpan
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['End'])) {
            $model->end = $map['End'];
        }
        if (isset($map['Seek'])) {
            $model->seek = $map['Seek'];
        }

        return $model;
    }
}
