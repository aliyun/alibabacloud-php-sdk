<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\LingMou\V20250527\Models;

use AlibabaCloud\Dara\Model;

class GetTTSVoiceByIdCustomRequest extends Model
{
    /**
     * @var string
     */
    public $voiceId;
    protected $_name = [
        'voiceId' => 'voiceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->voiceId) {
            $res['voiceId'] = $this->voiceId;
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
        if (isset($map['voiceId'])) {
            $model->voiceId = $map['voiceId'];
        }

        return $model;
    }
}
