<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class GenerateProductContentRequest extends Model
{
    /**
     * @var int
     */
    public $bulletPointCount;

    /**
     * @var string
     */
    public $contentType;

    /**
     * @var bool
     */
    public $enableTranslation;

    /**
     * @var int
     */
    public $maxLength;

    /**
     * @var int
     */
    public $minLength;

    /**
     * @var string
     */
    public $operation;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $productAttributes;

    /**
     * @var string
     */
    public $productCategory;

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
        'bulletPointCount' => 'BulletPointCount',
        'contentType' => 'ContentType',
        'enableTranslation' => 'EnableTranslation',
        'maxLength' => 'MaxLength',
        'minLength' => 'MinLength',
        'operation' => 'Operation',
        'platform' => 'Platform',
        'productAttributes' => 'ProductAttributes',
        'productCategory' => 'ProductCategory',
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
        if (null !== $this->bulletPointCount) {
            $res['BulletPointCount'] = $this->bulletPointCount;
        }

        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->enableTranslation) {
            $res['EnableTranslation'] = $this->enableTranslation;
        }

        if (null !== $this->maxLength) {
            $res['MaxLength'] = $this->maxLength;
        }

        if (null !== $this->minLength) {
            $res['MinLength'] = $this->minLength;
        }

        if (null !== $this->operation) {
            $res['Operation'] = $this->operation;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->productAttributes) {
            $res['ProductAttributes'] = $this->productAttributes;
        }

        if (null !== $this->productCategory) {
            $res['ProductCategory'] = $this->productCategory;
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
        if (isset($map['BulletPointCount'])) {
            $model->bulletPointCount = $map['BulletPointCount'];
        }

        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['EnableTranslation'])) {
            $model->enableTranslation = $map['EnableTranslation'];
        }

        if (isset($map['MaxLength'])) {
            $model->maxLength = $map['MaxLength'];
        }

        if (isset($map['MinLength'])) {
            $model->minLength = $map['MinLength'];
        }

        if (isset($map['Operation'])) {
            $model->operation = $map['Operation'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['ProductAttributes'])) {
            $model->productAttributes = $map['ProductAttributes'];
        }

        if (isset($map['ProductCategory'])) {
            $model->productCategory = $map['ProductCategory'];
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
