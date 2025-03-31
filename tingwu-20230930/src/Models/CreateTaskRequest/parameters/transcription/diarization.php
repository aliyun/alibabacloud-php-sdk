<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Tingwu\V20230930\Models\CreateTaskRequest\parameters\transcription;

use AlibabaCloud\Dara\Model;

class diarization extends Model
{
    /**
     * @var int
     */
    public $speakerCount;
    protected $_name = [
        'speakerCount' => 'SpeakerCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->speakerCount) {
            $res['SpeakerCount'] = $this->speakerCount;
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
        if (isset($map['SpeakerCount'])) {
            $model->speakerCount = $map['SpeakerCount'];
        }

        return $model;
    }
}
