<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models\GetAsyncTranslateResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example zh
     *
     * @var string
     */
    public $detectedLanguage;

    /**
     * @example ready
     *
     * @var string
     */
    public $status;

    /**
     * @example hello
     *
     * @var string
     */
    public $translatedText;

    /**
     * @example 2
     *
     * @var string
     */
    public $wordCount;
    protected $_name = [
        'detectedLanguage' => 'DetectedLanguage',
        'status'           => 'Status',
        'translatedText'   => 'TranslatedText',
        'wordCount'        => 'WordCount',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
