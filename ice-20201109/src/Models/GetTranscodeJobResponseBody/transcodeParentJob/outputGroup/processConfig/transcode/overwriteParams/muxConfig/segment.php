<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetTranscodeJobResponseBody\transcodeParentJob\outputGroup\processConfig\transcode\overwriteParams\muxConfig;

use AlibabaCloud\Dara\Model;

class segment extends Model
{
    /**
     * @var string
     */
    public $duration;
    /**
     * @var string
     */
    public $forceSegTime;
    protected $_name = [
        'duration'     => 'Duration',
        'forceSegTime' => 'ForceSegTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
