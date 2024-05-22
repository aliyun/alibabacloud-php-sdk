<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListTranscodeJobsResponseBody\jobs\outputGroup\processConfig;

use AlibabaCloud\Tea\Model;

class combineConfigs extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 0 或 exclude
     *
     * @var string
     */
    public $audioIndex;

    /**
     * @example 20.0
     *
     * @var float
     */
    public $duration;

    /**
     * @example 0.0
     *
     * @var float
     */
    public $start;

    /**
     * @description This parameter is required.
     *
     * @example 0 或 exclude
     *
     * @var string
     */
    public $videoIndex;
    protected $_name = [
        'audioIndex' => 'AudioIndex',
        'duration'   => 'Duration',
        'start'      => 'Start',
        'videoIndex' => 'VideoIndex',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->audioIndex) {
            $res['AudioIndex'] = $this->audioIndex;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }
        if (null !== $this->videoIndex) {
            $res['VideoIndex'] = $this->videoIndex;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return combineConfigs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AudioIndex'])) {
            $model->audioIndex = $map['AudioIndex'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }
        if (isset($map['VideoIndex'])) {
            $model->videoIndex = $map['VideoIndex'];
        }

        return $model;
    }
}
