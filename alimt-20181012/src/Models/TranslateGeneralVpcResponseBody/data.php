<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models\TranslateGeneralVpcResponseBody;

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
    public $translated;

    /**
     * @var string
     */
    public $wordCount;
    protected $_name = [
        'detectedLanguage' => 'DetectedLanguage',
        'translated' => 'Translated',
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

        if (null !== $this->translated) {
            $res['Translated'] = $this->translated;
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

        if (isset($map['Translated'])) {
            $model->translated = $map['Translated'];
        }

        if (isset($map['WordCount'])) {
            $model->wordCount = $map['WordCount'];
        }

        return $model;
    }
}
