<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentConfig\ttsConfig\pronunciationRules;

class ttsConfig extends Model
{
    /**
     * @var pronunciationRules[]
     */
    public $pronunciationRules;

    /**
     * @var string
     */
    public $voiceId;

    /**
     * @var string[]
     */
    public $voiceIdList;
    protected $_name = [
        'pronunciationRules' => 'PronunciationRules',
        'voiceId' => 'VoiceId',
        'voiceIdList' => 'VoiceIdList',
    ];

    public function validate()
    {
        if (\is_array($this->pronunciationRules)) {
            Model::validateArray($this->pronunciationRules);
        }
        if (\is_array($this->voiceIdList)) {
            Model::validateArray($this->voiceIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->pronunciationRules) {
            if (\is_array($this->pronunciationRules)) {
                $res['PronunciationRules'] = [];
                $n1 = 0;
                foreach ($this->pronunciationRules as $item1) {
                    $res['PronunciationRules'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->voiceId) {
            $res['VoiceId'] = $this->voiceId;
        }

        if (null !== $this->voiceIdList) {
            if (\is_array($this->voiceIdList)) {
                $res['VoiceIdList'] = [];
                $n1 = 0;
                foreach ($this->voiceIdList as $item1) {
                    $res['VoiceIdList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['PronunciationRules'])) {
            if (!empty($map['PronunciationRules'])) {
                $model->pronunciationRules = [];
                $n1 = 0;
                foreach ($map['PronunciationRules'] as $item1) {
                    $model->pronunciationRules[$n1] = pronunciationRules::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['VoiceId'])) {
            $model->voiceId = $map['VoiceId'];
        }

        if (isset($map['VoiceIdList'])) {
            if (!empty($map['VoiceIdList'])) {
                $model->voiceIdList = [];
                $n1 = 0;
                foreach ($map['VoiceIdList'] as $item1) {
                    $model->voiceIdList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
