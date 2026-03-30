<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VoiceNavigator\V20251111\Models\CreateCloneVoiceResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $cloneVoiceId;

    /**
     * @var string
     */
    public $voice;
    protected $_name = [
        'cloneVoiceId' => 'CloneVoiceId',
        'voice' => 'Voice',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cloneVoiceId) {
            $res['CloneVoiceId'] = $this->cloneVoiceId;
        }

        if (null !== $this->voice) {
            $res['Voice'] = $this->voice;
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
        if (isset($map['CloneVoiceId'])) {
            $model->cloneVoiceId = $map['CloneVoiceId'];
        }

        if (isset($map['Voice'])) {
            $model->voice = $map['Voice'];
        }

        return $model;
    }
}
