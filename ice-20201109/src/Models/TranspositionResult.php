<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class TranspositionResult extends Model
{
    /**
     * @var string
     */
    public $targetLanguage;

    /**
     * @var string
     */
    public $translatedText;
    protected $_name = [
        'targetLanguage' => 'TargetLanguage',
        'translatedText' => 'TranslatedText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->targetLanguage) {
            $res['TargetLanguage'] = $this->targetLanguage;
        }

        if (null !== $this->translatedText) {
            $res['TranslatedText'] = $this->translatedText;
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
        if (isset($map['TargetLanguage'])) {
            $model->targetLanguage = $map['TargetLanguage'];
        }

        if (isset($map['TranslatedText'])) {
            $model->translatedText = $map['TranslatedText'];
        }

        return $model;
    }
}
