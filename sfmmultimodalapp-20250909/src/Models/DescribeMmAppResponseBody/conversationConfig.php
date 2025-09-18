<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SfmMultiModalApp\V20250909\Models\DescribeMmAppResponseBody;

use AlibabaCloud\Dara\Model;

class conversationConfig extends Model
{
    /**
     * @var string
     */
    public $asrModel;

    /**
     * @var bool
     */
    public $openAsr;

    /**
     * @var bool
     */
    public $openTts;

    /**
     * @var string
     */
    public $ttsModel;
    protected $_name = [
        'asrModel' => 'AsrModel',
        'openAsr' => 'OpenAsr',
        'openTts' => 'OpenTts',
        'ttsModel' => 'TtsModel',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asrModel) {
            $res['AsrModel'] = $this->asrModel;
        }

        if (null !== $this->openAsr) {
            $res['OpenAsr'] = $this->openAsr;
        }

        if (null !== $this->openTts) {
            $res['OpenTts'] = $this->openTts;
        }

        if (null !== $this->ttsModel) {
            $res['TtsModel'] = $this->ttsModel;
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
        if (isset($map['AsrModel'])) {
            $model->asrModel = $map['AsrModel'];
        }

        if (isset($map['OpenAsr'])) {
            $model->openAsr = $map['OpenAsr'];
        }

        if (isset($map['OpenTts'])) {
            $model->openTts = $map['OpenTts'];
        }

        if (isset($map['TtsModel'])) {
            $model->ttsModel = $map['TtsModel'];
        }

        return $model;
    }
}
