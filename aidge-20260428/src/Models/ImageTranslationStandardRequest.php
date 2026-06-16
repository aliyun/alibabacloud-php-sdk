<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class ImageTranslationStandardRequest extends Model
{
    /**
     * @var string
     */
    public $glossary;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var bool
     */
    public $includingProductArea;

    /**
     * @var string
     */
    public $sourceLanguage;

    /**
     * @var string
     */
    public $targetLanguage;

    /**
     * @var bool
     */
    public $translatingBrandInTheProduct;
    protected $_name = [
        'glossary' => 'Glossary',
        'imageUrl' => 'ImageUrl',
        'includingProductArea' => 'IncludingProductArea',
        'sourceLanguage' => 'SourceLanguage',
        'targetLanguage' => 'TargetLanguage',
        'translatingBrandInTheProduct' => 'TranslatingBrandInTheProduct',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->glossary) {
            $res['Glossary'] = $this->glossary;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->includingProductArea) {
            $res['IncludingProductArea'] = $this->includingProductArea;
        }

        if (null !== $this->sourceLanguage) {
            $res['SourceLanguage'] = $this->sourceLanguage;
        }

        if (null !== $this->targetLanguage) {
            $res['TargetLanguage'] = $this->targetLanguage;
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
        if (isset($map['Glossary'])) {
            $model->glossary = $map['Glossary'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['IncludingProductArea'])) {
            $model->includingProductArea = $map['IncludingProductArea'];
        }

        if (isset($map['SourceLanguage'])) {
            $model->sourceLanguage = $map['SourceLanguage'];
        }

        if (isset($map['TargetLanguage'])) {
            $model->targetLanguage = $map['TargetLanguage'];
        }

        if (isset($map['TranslatingBrandInTheProduct'])) {
            $model->translatingBrandInTheProduct = $map['TranslatingBrandInTheProduct'];
        }

        return $model;
    }
}
