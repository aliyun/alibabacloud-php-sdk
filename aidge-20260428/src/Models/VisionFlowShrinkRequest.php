<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class VisionFlowShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $abilityShrink;

    /**
     * @var string
     */
    public $backGroundType;

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
     * @var bool
     */
    public $isFilter;

    /**
     * @var string
     */
    public $mask;

    /**
     * @var string
     */
    public $nonobjectDetectElementsShrink;

    /**
     * @var string
     */
    public $nonobjectRemoveElementsShrink;

    /**
     * @var string
     */
    public $objectDetectElementsShrink;

    /**
     * @var string
     */
    public $objectRemoveElementsShrink;

    /**
     * @var string
     */
    public $sourceLanguage;

    /**
     * @var int
     */
    public $targetHeight;

    /**
     * @var string
     */
    public $targetLanguage;

    /**
     * @var int
     */
    public $targetWidth;

    /**
     * @var bool
     */
    public $translatingBrandInTheProduct;

    /**
     * @var int
     */
    public $upscaleFactor;
    protected $_name = [
        'abilityShrink' => 'Ability',
        'backGroundType' => 'BackGroundType',
        'glossary' => 'Glossary',
        'imageUrl' => 'ImageUrl',
        'includingProductArea' => 'IncludingProductArea',
        'isFilter' => 'IsFilter',
        'mask' => 'Mask',
        'nonobjectDetectElementsShrink' => 'NonobjectDetectElements',
        'nonobjectRemoveElementsShrink' => 'NonobjectRemoveElements',
        'objectDetectElementsShrink' => 'ObjectDetectElements',
        'objectRemoveElementsShrink' => 'ObjectRemoveElements',
        'sourceLanguage' => 'SourceLanguage',
        'targetHeight' => 'TargetHeight',
        'targetLanguage' => 'TargetLanguage',
        'targetWidth' => 'TargetWidth',
        'translatingBrandInTheProduct' => 'TranslatingBrandInTheProduct',
        'upscaleFactor' => 'UpscaleFactor',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->abilityShrink) {
            $res['Ability'] = $this->abilityShrink;
        }

        if (null !== $this->backGroundType) {
            $res['BackGroundType'] = $this->backGroundType;
        }

        if (null !== $this->glossary) {
            $res['Glossary'] = $this->glossary;
        }

        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }

        if (null !== $this->includingProductArea) {
            $res['IncludingProductArea'] = $this->includingProductArea;
        }

        if (null !== $this->isFilter) {
            $res['IsFilter'] = $this->isFilter;
        }

        if (null !== $this->mask) {
            $res['Mask'] = $this->mask;
        }

        if (null !== $this->nonobjectDetectElementsShrink) {
            $res['NonobjectDetectElements'] = $this->nonobjectDetectElementsShrink;
        }

        if (null !== $this->nonobjectRemoveElementsShrink) {
            $res['NonobjectRemoveElements'] = $this->nonobjectRemoveElementsShrink;
        }

        if (null !== $this->objectDetectElementsShrink) {
            $res['ObjectDetectElements'] = $this->objectDetectElementsShrink;
        }

        if (null !== $this->objectRemoveElementsShrink) {
            $res['ObjectRemoveElements'] = $this->objectRemoveElementsShrink;
        }

        if (null !== $this->sourceLanguage) {
            $res['SourceLanguage'] = $this->sourceLanguage;
        }

        if (null !== $this->targetHeight) {
            $res['TargetHeight'] = $this->targetHeight;
        }

        if (null !== $this->targetLanguage) {
            $res['TargetLanguage'] = $this->targetLanguage;
        }

        if (null !== $this->targetWidth) {
            $res['TargetWidth'] = $this->targetWidth;
        }

        if (null !== $this->translatingBrandInTheProduct) {
            $res['TranslatingBrandInTheProduct'] = $this->translatingBrandInTheProduct;
        }

        if (null !== $this->upscaleFactor) {
            $res['UpscaleFactor'] = $this->upscaleFactor;
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
        if (isset($map['Ability'])) {
            $model->abilityShrink = $map['Ability'];
        }

        if (isset($map['BackGroundType'])) {
            $model->backGroundType = $map['BackGroundType'];
        }

        if (isset($map['Glossary'])) {
            $model->glossary = $map['Glossary'];
        }

        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }

        if (isset($map['IncludingProductArea'])) {
            $model->includingProductArea = $map['IncludingProductArea'];
        }

        if (isset($map['IsFilter'])) {
            $model->isFilter = $map['IsFilter'];
        }

        if (isset($map['Mask'])) {
            $model->mask = $map['Mask'];
        }

        if (isset($map['NonobjectDetectElements'])) {
            $model->nonobjectDetectElementsShrink = $map['NonobjectDetectElements'];
        }

        if (isset($map['NonobjectRemoveElements'])) {
            $model->nonobjectRemoveElementsShrink = $map['NonobjectRemoveElements'];
        }

        if (isset($map['ObjectDetectElements'])) {
            $model->objectDetectElementsShrink = $map['ObjectDetectElements'];
        }

        if (isset($map['ObjectRemoveElements'])) {
            $model->objectRemoveElementsShrink = $map['ObjectRemoveElements'];
        }

        if (isset($map['SourceLanguage'])) {
            $model->sourceLanguage = $map['SourceLanguage'];
        }

        if (isset($map['TargetHeight'])) {
            $model->targetHeight = $map['TargetHeight'];
        }

        if (isset($map['TargetLanguage'])) {
            $model->targetLanguage = $map['TargetLanguage'];
        }

        if (isset($map['TargetWidth'])) {
            $model->targetWidth = $map['TargetWidth'];
        }

        if (isset($map['TranslatingBrandInTheProduct'])) {
            $model->translatingBrandInTheProduct = $map['TranslatingBrandInTheProduct'];
        }

        if (isset($map['UpscaleFactor'])) {
            $model->upscaleFactor = $map['UpscaleFactor'];
        }

        return $model;
    }
}
