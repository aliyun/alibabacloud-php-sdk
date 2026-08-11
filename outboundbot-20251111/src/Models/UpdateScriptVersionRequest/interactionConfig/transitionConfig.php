<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OutboundBot\V20251111\Models\UpdateScriptVersionRequest\interactionConfig;

use AlibabaCloud\Dara\Model;

class transitionConfig extends Model
{
    /**
     * @var string
     */
    public $aiPhrasePrompt;

    /**
     * @var string[]
     */
    public $fixedPhraseList;

    /**
     * @var string
     */
    public $phraseSource;

    /**
     * @var bool
     */
    public $transitionSwitch;
    protected $_name = [
        'aiPhrasePrompt' => 'AiPhrasePrompt',
        'fixedPhraseList' => 'FixedPhraseList',
        'phraseSource' => 'PhraseSource',
        'transitionSwitch' => 'TransitionSwitch',
    ];

    public function validate()
    {
        if (\is_array($this->fixedPhraseList)) {
            Model::validateArray($this->fixedPhraseList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aiPhrasePrompt) {
            $res['AiPhrasePrompt'] = $this->aiPhrasePrompt;
        }

        if (null !== $this->fixedPhraseList) {
            if (\is_array($this->fixedPhraseList)) {
                $res['FixedPhraseList'] = [];
                $n1 = 0;
                foreach ($this->fixedPhraseList as $item1) {
                    $res['FixedPhraseList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->phraseSource) {
            $res['PhraseSource'] = $this->phraseSource;
        }

        if (null !== $this->transitionSwitch) {
            $res['TransitionSwitch'] = $this->transitionSwitch;
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
        if (isset($map['AiPhrasePrompt'])) {
            $model->aiPhrasePrompt = $map['AiPhrasePrompt'];
        }

        if (isset($map['FixedPhraseList'])) {
            if (!empty($map['FixedPhraseList'])) {
                $model->fixedPhraseList = [];
                $n1 = 0;
                foreach ($map['FixedPhraseList'] as $item1) {
                    $model->fixedPhraseList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PhraseSource'])) {
            $model->phraseSource = $map['PhraseSource'];
        }

        if (isset($map['TransitionSwitch'])) {
            $model->transitionSwitch = $map['TransitionSwitch'];
        }

        return $model;
    }
}
