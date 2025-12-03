<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models\GetAsyncTranslateResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $detectedLanguage;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $translatedText;

    /**
     * @var string
     */
    public $wordCount;
    protected $_name = [
        'detectedLanguage' => 'DetectedLanguage',
        'status' => 'Status',
        'translatedText' => 'TranslatedText',
        'wordCount' => 'WordCount',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->detectedLanguage) {
            $res['DetectedLanguage'] = $this->detectedLanguage;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->translatedText) {
            $res['TranslatedText'] = $this->translatedText;
        }

        if (null !== $this->wordCount) {
            $res['WordCount'] = $this->wordCount;
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
        if (isset($map['DetectedLanguage'])) {
            $model->detectedLanguage = $map['DetectedLanguage'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TranslatedText'])) {
            $model->translatedText = $map['TranslatedText'];
        }

        if (isset($map['WordCount'])) {
            $model->wordCount = $map['WordCount'];
        }

        return $model;
    }
}
