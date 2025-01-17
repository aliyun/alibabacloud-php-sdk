<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig;

use AlibabaCloud\Dara\Model;

class combineConfigs extends Model
{
    /**
     * @var string
     */
    public $audioIndex;
    /**
     * @var float
     */
    public $duration;
    /**
     * @var float
     */
    public $start;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
