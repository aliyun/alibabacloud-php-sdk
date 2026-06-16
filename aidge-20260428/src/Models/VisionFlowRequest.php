<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models;

use AlibabaCloud\Dara\Model;

class VisionFlowRequest extends Model
{
    /**
     * @var int[]
     */
    public $ability;

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
     * @var int[]
     */
    public $nonobjectDetectElements;

    /**
     * @var int[]
     */
    public $nonobjectRemoveElements;

    /**
     * @var int[]
     */
    public $objectDetectElements;

    /**
     * @var int[]
     */
    public $objectRemoveElements;

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
        'ability' => 'Ability',
        'backGroundType' => 'BackGroundType',
        'glossary' => 'Glossary',
        'imageUrl' => 'ImageUrl',
        'includingProductArea' => 'IncludingProductArea',
        'isFilter' => 'IsFilter',
        'mask' => 'Mask',
        'nonobjectDetectElements' => 'NonobjectDetectElements',
        'nonobjectRemoveElements' => 'NonobjectRemoveElements',
        'objectDetectElements' => 'ObjectDetectElements',
        'objectRemoveElements' => 'ObjectRemoveElements',
        'sourceLanguage' => 'SourceLanguage',
        'targetHeight' => 'TargetHeight',
        'targetLanguage' => 'TargetLanguage',
        'targetWidth' => 'TargetWidth',
        'translatingBrandInTheProduct' => 'TranslatingBrandInTheProduct',
        'upscaleFactor' => 'UpscaleFactor',
    ];

    public function validate()
    {
        if (\is_array($this->ability)) {
            Model::validateArray($this->ability);
        }
        if (\is_array($this->nonobjectDetectElements)) {
            Model::validateArray($this->nonobjectDetectElements);
        }
        if (\is_array($this->nonobjectRemoveElements)) {
            Model::validateArray($this->nonobjectRemoveElements);
        }
        if (\is_array($this->objectDetectElements)) {
            Model::validateArray($this->objectDetectElements);
        }
        if (\is_array($this->objectRemoveElements)) {
            Model::validateArray($this->objectRemoveElements);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ability) {
            if (\is_array($this->ability)) {
                $res['Ability'] = [];
                $n1 = 0;
                foreach ($this->ability as $item1) {
                    $res['Ability'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->nonobjectDetectElements) {
            if (\is_array($this->nonobjectDetectElements)) {
                $res['NonobjectDetectElements'] = [];
                $n1 = 0;
                foreach ($this->nonobjectDetectElements as $item1) {
                    $res['NonobjectDetectElements'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nonobjectRemoveElements) {
            if (\is_array($this->nonobjectRemoveElements)) {
                $res['NonobjectRemoveElements'] = [];
                $n1 = 0;
                foreach ($this->nonobjectRemoveElements as $item1) {
                    $res['NonobjectRemoveElements'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->objectDetectElements) {
            if (\is_array($this->objectDetectElements)) {
                $res['ObjectDetectElements'] = [];
                $n1 = 0;
                foreach ($this->objectDetectElements as $item1) {
                    $res['ObjectDetectElements'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->objectRemoveElements) {
            if (\is_array($this->objectRemoveElements)) {
                $res['ObjectRemoveElements'] = [];
                $n1 = 0;
                foreach ($this->objectRemoveElements as $item1) {
                    $res['ObjectRemoveElements'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['Ability'])) {
                $model->ability = [];
                $n1 = 0;
                foreach ($map['Ability'] as $item1) {
                    $model->ability[$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['NonobjectDetectElements'])) {
                $model->nonobjectDetectElements = [];
                $n1 = 0;
                foreach ($map['NonobjectDetectElements'] as $item1) {
                    $model->nonobjectDetectElements[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['NonobjectRemoveElements'])) {
            if (!empty($map['NonobjectRemoveElements'])) {
                $model->nonobjectRemoveElements = [];
                $n1 = 0;
                foreach ($map['NonobjectRemoveElements'] as $item1) {
                    $model->nonobjectRemoveElements[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ObjectDetectElements'])) {
            if (!empty($map['ObjectDetectElements'])) {
                $model->objectDetectElements = [];
                $n1 = 0;
                foreach ($map['ObjectDetectElements'] as $item1) {
                    $model->objectDetectElements[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['ObjectRemoveElements'])) {
            if (!empty($map['ObjectRemoveElements'])) {
                $model->objectRemoveElements = [];
                $n1 = 0;
                foreach ($map['ObjectRemoveElements'] as $item1) {
                    $model->objectRemoveElements[$n1] = $item1;
                    ++$n1;
                }
            }
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
