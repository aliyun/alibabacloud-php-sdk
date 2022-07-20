<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\transcode\overwriteParams\muxConfig;

use AlibabaCloud\Tea\Model;

class segment extends Model
{
    /**
     * @description 切片时长
     *
     * @var string
     */
    public $duration;

    /**
     * @description 强制切片时间点
     *
     * @var string
     */
    public $forceSegTime;
    protected $_name = [
        'duration'     => 'Duration',
        'forceSegTime' => 'ForceSegTime',
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
        if (null !== $this->forceSegTime) {
            $res['ForceSegTime'] = $this->forceSegTime;
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
        if (isset($map['ForceSegTime'])) {
            $model->forceSegTime = $map['ForceSegTime'];
        }

        return $model;
    }
}
