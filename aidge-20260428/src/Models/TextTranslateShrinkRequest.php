<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class TextTranslateShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $bizName;

    /**
     * @var string
     */
    public $formatType;

    /**
     * @var string
     */
    public $glossary;

    /**
     * @var string
     */
    public $sourceLanguage;

    /**
     * @var string
     */
    public $sourceTextListShrink;

    /**
     * @var string
     */
    public $targetLanguage;

    /**
     * @var string
     */
    public $translateScene;
    protected $_name = [
        'bizName' => 'BizName',
        'formatType' => 'FormatType',
        'glossary' => 'Glossary',
        'sourceLanguage' => 'SourceLanguage',
        'sourceTextListShrink' => 'SourceTextList',
        'targetLanguage' => 'TargetLanguage',
        'translateScene' => 'TranslateScene',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizName) {
            $res['BizName'] = $this->bizName;
        }

        if (null !== $this->formatType) {
            $res['FormatType'] = $this->formatType;
        }

        if (null !== $this->glossary) {
            $res['Glossary'] = $this->glossary;
        }

        if (null !== $this->sourceLanguage) {
            $res['SourceLanguage'] = $this->sourceLanguage;
        }

        if (null !== $this->sourceTextListShrink) {
            $res['SourceTextList'] = $this->sourceTextListShrink;
        }

        if (null !== $this->targetLanguage) {
            $res['TargetLanguage'] = $this->targetLanguage;
        }

        if (null !== $this->translateScene) {
            $res['TranslateScene'] = $this->translateScene;
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
        if (isset($map['BizName'])) {
            $model->bizName = $map['BizName'];
        }

        if (isset($map['FormatType'])) {
            $model->formatType = $map['FormatType'];
        }

        if (isset($map['Glossary'])) {
            $model->glossary = $map['Glossary'];
        }

        if (isset($map['SourceLanguage'])) {
            $model->sourceLanguage = $map['SourceLanguage'];
        }

        if (isset($map['SourceTextList'])) {
            $model->sourceTextListShrink = $map['SourceTextList'];
        }

        if (isset($map['TargetLanguage'])) {
            $model->targetLanguage = $map['TargetLanguage'];
        }

        if (isset($map['TranslateScene'])) {
            $model->translateScene = $map['TranslateScene'];
        }

        return $model;
    }
}
