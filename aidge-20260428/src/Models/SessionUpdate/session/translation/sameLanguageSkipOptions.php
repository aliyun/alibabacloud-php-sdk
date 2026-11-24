<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\SessionUpdate\session\translation;

use AlibabaCloud\Dara\Model;

class sameLanguageSkipOptions extends Model
{
    /**
     * @var bool
     */
    public $skipText;

    /**
     * @var bool
     */
    public $skipAudio;
    protected $_name = [
        'skipText' => 'skip_text',
        'skipAudio' => 'skip_audio',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->skipText) {
            $res['skip_text'] = $this->skipText;
        }

        if (null !== $this->skipAudio) {
            $res['skip_audio'] = $this->skipAudio;
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
        if (isset($map['skip_text'])) {
            $model->skipText = $map['skip_text'];
        }

        if (isset($map['skip_audio'])) {
            $model->skipAudio = $map['skip_audio'];
        }

        return $model;
    }
}
