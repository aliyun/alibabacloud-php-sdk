<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig;

use AlibabaCloud\Dara\Model;

class voiceprintConfig extends Model
{
    /**
     * @var bool
     */
    public $useVoiceprint;

    /**
     * @var string
     */
    public $voiceprintId;
    protected $_name = [
        'useVoiceprint' => 'UseVoiceprint',
        'voiceprintId' => 'VoiceprintId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->useVoiceprint) {
            $res['UseVoiceprint'] = $this->useVoiceprint;
        }

        if (null !== $this->voiceprintId) {
            $res['VoiceprintId'] = $this->voiceprintId;
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
        if (isset($map['UseVoiceprint'])) {
            $model->useVoiceprint = $map['UseVoiceprint'];
        }

        if (isset($map['VoiceprintId'])) {
            $model->voiceprintId = $map['VoiceprintId'];
        }

        return $model;
    }
}
