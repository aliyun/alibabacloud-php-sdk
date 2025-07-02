<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\AIAgentOutboundCallConfig;

use AlibabaCloud\Dara\Model;

class asrConfig extends Model
{
    /**
     * @var string[]
     */
    public $asrHotWords;

    /**
     * @var string
     */
    public $asrLanguageId;

    /**
     * @var int
     */
    public $asrMaxSilence;

    /**
     * @var string
     */
    public $customParams;

    /**
     * @var int
     */
    public $vadLevel;
    protected $_name = [
        'asrHotWords' => 'AsrHotWords',
        'asrLanguageId' => 'AsrLanguageId',
        'asrMaxSilence' => 'AsrMaxSilence',
        'customParams' => 'CustomParams',
        'vadLevel' => 'VadLevel',
    ];

    public function validate()
    {
        if (\is_array($this->asrHotWords)) {
            Model::validateArray($this->asrHotWords);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asrHotWords) {
            if (\is_array($this->asrHotWords)) {
                $res['AsrHotWords'] = [];
                $n1 = 0;
                foreach ($this->asrHotWords as $item1) {
                    $res['AsrHotWords'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->asrLanguageId) {
            $res['AsrLanguageId'] = $this->asrLanguageId;
        }

        if (null !== $this->asrMaxSilence) {
            $res['AsrMaxSilence'] = $this->asrMaxSilence;
        }

        if (null !== $this->customParams) {
            $res['CustomParams'] = $this->customParams;
        }

        if (null !== $this->vadLevel) {
            $res['VadLevel'] = $this->vadLevel;
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
        if (isset($map['AsrHotWords'])) {
            if (!empty($map['AsrHotWords'])) {
                $model->asrHotWords = [];
                $n1 = 0;
                foreach ($map['AsrHotWords'] as $item1) {
                    $model->asrHotWords[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['AsrLanguageId'])) {
            $model->asrLanguageId = $map['AsrLanguageId'];
        }

        if (isset($map['AsrMaxSilence'])) {
            $model->asrMaxSilence = $map['AsrMaxSilence'];
        }

        if (isset($map['CustomParams'])) {
            $model->customParams = $map['CustomParams'];
        }

        if (isset($map['VadLevel'])) {
            $model->vadLevel = $map['VadLevel'];
        }

        return $model;
    }
}
