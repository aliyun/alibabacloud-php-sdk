<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\VoiceCommand\payload;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\VoiceCommand\payload\parameters\asr;
use AlibabaCloud\SDK\QwenB2BChat\V20261105\Models\VoiceCommand\payload\parameters\tts;

class parameters extends Model
{
    /**
     * @var asr
     */
    public $asr;

    /**
     * @var tts
     */
    public $tts;
    protected $_name = [
        'asr' => 'asr',
        'tts' => 'tts',
    ];

    public function validate()
    {
        if (null !== $this->asr) {
            $this->asr->validate();
        }
        if (null !== $this->tts) {
            $this->tts->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asr) {
            $res['asr'] = null !== $this->asr ? $this->asr->toArray($noStream) : $this->asr;
        }

        if (null !== $this->tts) {
            $res['tts'] = null !== $this->tts ? $this->tts->toArray($noStream) : $this->tts;
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
        if (isset($map['asr'])) {
            $model->asr = asr::fromMap($map['asr']);
        }

        if (isset($map['tts'])) {
            $model->tts = tts::fromMap($map['tts']);
        }

        return $model;
    }
}
