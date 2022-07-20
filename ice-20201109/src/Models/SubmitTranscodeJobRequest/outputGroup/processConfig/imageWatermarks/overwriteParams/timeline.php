<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitTranscodeJobRequest\outputGroup\processConfig\imageWatermarks\overwriteParams;

use AlibabaCloud\Tea\Model;

class timeline extends Model
{
    /**
     * @description 显示时长，秒数 或者 "ToEND"
     *
     * @var string
     */
    public $duration;

    /**
     * @description 开始时间
     *
     * @var string
     */
    public $start;
    protected $_name = [
        'duration' => 'Duration',
        'start'    => 'Start',
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
        if (null !== $this->start) {
            $res['Start'] = $this->start;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return timeline
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Start'])) {
            $model->start = $map['Start'];
        }

        return $model;
    }
}
