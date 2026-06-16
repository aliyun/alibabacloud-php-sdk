<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class AssetOptimizeProShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $columnNameListShrink;

    /**
     * @var string
     */
    public $glossary;

    /**
     * @var bool
     */
    public $includingProductArea;

    /**
     * @var string
     */
    public $languageModel;

    /**
     * @var bool
     */
    public $needTrans;

    /**
     * @var string
     */
    public $productUrl;

    /**
     * @var string
     */
    public $sourceLanguage;

    /**
     * @var string
     */
    public $sourcePlatform;

    /**
     * @var string
     */
    public $targetLanguage;

    /**
     * @var string
     */
    public $targetPlatform;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var bool
     */
    public $translatingBrandInTheProduct;
    protected $_name = [
        'columnNameListShrink' => 'ColumnNameList',
        'glossary' => 'Glossary',
        'includingProductArea' => 'IncludingProductArea',
        'languageModel' => 'LanguageModel',
        'needTrans' => 'NeedTrans',
        'productUrl' => 'ProductUrl',
        'sourceLanguage' => 'SourceLanguage',
        'sourcePlatform' => 'SourcePlatform',
        'targetLanguage' => 'TargetLanguage',
        'targetPlatform' => 'TargetPlatform',
        'threshold' => 'Threshold',
        'translatingBrandInTheProduct' => 'TranslatingBrandInTheProduct',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->columnNameListShrink) {
            $res['ColumnNameList'] = $this->columnNameListShrink;
        }

        if (null !== $this->glossary) {
            $res['Glossary'] = $this->glossary;
        }

        if (null !== $this->includingProductArea) {
            $res['IncludingProductArea'] = $this->includingProductArea;
        }

        if (null !== $this->languageModel) {
            $res['LanguageModel'] = $this->languageModel;
        }

        if (null !== $this->needTrans) {
            $res['NeedTrans'] = $this->needTrans;
        }

        if (null !== $this->productUrl) {
            $res['ProductUrl'] = $this->productUrl;
        }

        if (null !== $this->sourceLanguage) {
            $res['SourceLanguage'] = $this->sourceLanguage;
        }

        if (null !== $this->sourcePlatform) {
            $res['SourcePlatform'] = $this->sourcePlatform;
        }

        if (null !== $this->targetLanguage) {
            $res['TargetLanguage'] = $this->targetLanguage;
        }

        if (null !== $this->targetPlatform) {
            $res['TargetPlatform'] = $this->targetPlatform;
        }

        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        if (null !== $this->translatingBrandInTheProduct) {
            $res['TranslatingBrandInTheProduct'] = $this->translatingBrandInTheProduct;
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
        if (isset($map['ColumnNameList'])) {
            $model->columnNameListShrink = $map['ColumnNameList'];
        }

        if (isset($map['Glossary'])) {
            $model->glossary = $map['Glossary'];
        }

        if (isset($map['IncludingProductArea'])) {
            $model->includingProductArea = $map['IncludingProductArea'];
        }

        if (isset($map['LanguageModel'])) {
            $model->languageModel = $map['LanguageModel'];
        }

        if (isset($map['NeedTrans'])) {
            $model->needTrans = $map['NeedTrans'];
        }

        if (isset($map['ProductUrl'])) {
            $model->productUrl = $map['ProductUrl'];
        }

        if (isset($map['SourceLanguage'])) {
            $model->sourceLanguage = $map['SourceLanguage'];
        }

        if (isset($map['SourcePlatform'])) {
            $model->sourcePlatform = $map['SourcePlatform'];
        }

        if (isset($map['TargetLanguage'])) {
            $model->targetLanguage = $map['TargetLanguage'];
        }

        if (isset($map['TargetPlatform'])) {
            $model->targetPlatform = $map['TargetPlatform'];
        }

        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        if (isset($map['TranslatingBrandInTheProduct'])) {
            $model->translatingBrandInTheProduct = $map['TranslatingBrandInTheProduct'];
        }

        return $model;
    }
}
