<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateGeneralResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $detectedLanguage;

    /**
     * @example Hello
     *
     * @var string
     */
    public $translated;

    /**
     * @example 10
     *
     * @var string
     */
    public $wordCount;
    protected $_name = [
        'detectedLanguage' => 'DetectedLanguage',
        'translated'       => 'Translated',
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
        if (null !== $this->translated) {
            $res['Translated'] = $this->translated;
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
        if (isset($map['Translated'])) {
            $model->translated = $map['Translated'];
        }
        if (isset($map['WordCount'])) {
            $model->wordCount = $map['WordCount'];
        }

        return $model;
    }
}
