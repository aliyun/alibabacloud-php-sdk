<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models\BatchGetTrainTaskResponseBody\voiceList;

use AlibabaCloud\Dara\Model;

class voiceMaterial extends Model
{
    /**
     * @var int
     */
    public $voiceId;

    /**
     * @var string
     */
    public $voiceLanguage;

    /**
     * @var string
     */
    public $voiceUrl;
    protected $_name = [
        'voiceId' => 'voiceId',
        'voiceLanguage' => 'voiceLanguage',
        'voiceUrl' => 'voiceUrl',
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

        if (null !== $this->voiceLanguage) {
            $res['voiceLanguage'] = $this->voiceLanguage;
        }

        if (null !== $this->voiceUrl) {
            $res['voiceUrl'] = $this->voiceUrl;
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

        if (isset($map['voiceLanguage'])) {
            $model->voiceLanguage = $map['voiceLanguage'];
        }

        if (isset($map['voiceUrl'])) {
            $model->voiceUrl = $map['voiceUrl'];
        }

        return $model;
    }
}
