<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\RealTranslationAgent\V20260622\Models\SubmitTranslationTaskRequest;

use AlibabaCloud\Dara\Model;

class config extends Model
{
    /**
     * @var string
     */
    public $font;

    /**
     * @var string
     */
    public $sourceLanguage;

    /**
     * @var string
     */
    public $style;

    /**
     * @var string
     */
    public $targetLanguage;
    protected $_name = [
        'font' => 'Font',
        'sourceLanguage' => 'SourceLanguage',
        'style' => 'Style',
        'targetLanguage' => 'TargetLanguage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->font) {
            $res['Font'] = $this->font;
        }

        if (null !== $this->sourceLanguage) {
            $res['SourceLanguage'] = $this->sourceLanguage;
        }

        if (null !== $this->style) {
            $res['Style'] = $this->style;
        }

        if (null !== $this->targetLanguage) {
            $res['TargetLanguage'] = $this->targetLanguage;
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
        if (isset($map['Font'])) {
            $model->font = $map['Font'];
        }

        if (isset($map['SourceLanguage'])) {
            $model->sourceLanguage = $map['SourceLanguage'];
        }

        if (isset($map['Style'])) {
            $model->style = $map['Style'];
        }

        if (isset($map['TargetLanguage'])) {
            $model->targetLanguage = $map['TargetLanguage'];
        }

        return $model;
    }
}
