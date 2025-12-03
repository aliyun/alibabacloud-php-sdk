<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alimt\V20181012\Models;

use AlibabaCloud\Dara\Model;

class TranslateGeneralRequest extends Model
{
    /**
     * @var string
     */
    public $context;

    /**
     * @var string
     */
    public $formatType;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $sourceLanguage;

    /**
     * @var string
     */
    public $sourceText;

    /**
     * @var string
     */
    public $targetLanguage;
    protected $_name = [
        'context' => 'Context',
        'formatType' => 'FormatType',
        'scene' => 'Scene',
        'sourceLanguage' => 'SourceLanguage',
        'sourceText' => 'SourceText',
        'targetLanguage' => 'TargetLanguage',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context) {
            $res['Context'] = $this->context;
        }

        if (null !== $this->formatType) {
            $res['FormatType'] = $this->formatType;
        }

        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }

        if (null !== $this->sourceLanguage) {
            $res['SourceLanguage'] = $this->sourceLanguage;
        }

        if (null !== $this->sourceText) {
            $res['SourceText'] = $this->sourceText;
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
        if (isset($map['Context'])) {
            $model->context = $map['Context'];
        }

        if (isset($map['FormatType'])) {
            $model->formatType = $map['FormatType'];
        }

        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }

        if (isset($map['SourceLanguage'])) {
            $model->sourceLanguage = $map['SourceLanguage'];
        }

        if (isset($map['SourceText'])) {
            $model->sourceText = $map['SourceText'];
        }

        if (isset($map['TargetLanguage'])) {
            $model->targetLanguage = $map['TargetLanguage'];
        }

        return $model;
    }
}
