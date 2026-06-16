<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\TextTranslateResponseBody\data;

use AlibabaCloud\Dara\Model;

class translations extends Model
{
    /**
     * @var int
     */
    public $characters;

    /**
     * @var string
     */
    public $detectedLanguage;

    /**
     * @var string
     */
    public $translatedText;
    protected $_name = [
        'characters' => 'Characters',
        'detectedLanguage' => 'DetectedLanguage',
        'translatedText' => 'TranslatedText',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->characters) {
            $res['Characters'] = $this->characters;
        }

        if (null !== $this->detectedLanguage) {
            $res['DetectedLanguage'] = $this->detectedLanguage;
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
        if (isset($map['Characters'])) {
            $model->characters = $map['Characters'];
        }

        if (isset($map['DetectedLanguage'])) {
            $model->detectedLanguage = $map['DetectedLanguage'];
        }

        if (isset($map['TranslatedText'])) {
            $model->translatedText = $map['TranslatedText'];
        }

        return $model;
    }
}
