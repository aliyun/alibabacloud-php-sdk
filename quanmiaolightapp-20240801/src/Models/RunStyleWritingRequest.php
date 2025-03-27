<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Dara\Model;

class RunStyleWritingRequest extends Model
{
    /**
     * @var string[]
     */
    public $learningSamples;

    /**
     * @var string
     */
    public $processStage;

    /**
     * @var string[]
     */
    public $referenceMaterials;

    /**
     * @var string
     */
    public $styleFeature;

    /**
     * @var bool
     */
    public $useSearch;

    /**
     * @var string
     */
    public $writingTheme;
    protected $_name = [
        'learningSamples' => 'learningSamples',
        'processStage' => 'processStage',
        'referenceMaterials' => 'referenceMaterials',
        'styleFeature' => 'styleFeature',
        'useSearch' => 'useSearch',
        'writingTheme' => 'writingTheme',
    ];

    public function validate()
    {
        if (\is_array($this->learningSamples)) {
            Model::validateArray($this->learningSamples);
        }
        if (\is_array($this->referenceMaterials)) {
            Model::validateArray($this->referenceMaterials);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->learningSamples) {
            if (\is_array($this->learningSamples)) {
                $res['learningSamples'] = [];
                $n1 = 0;
                foreach ($this->learningSamples as $item1) {
                    $res['learningSamples'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->processStage) {
            $res['processStage'] = $this->processStage;
        }

        if (null !== $this->referenceMaterials) {
            if (\is_array($this->referenceMaterials)) {
                $res['referenceMaterials'] = [];
                $n1 = 0;
                foreach ($this->referenceMaterials as $item1) {
                    $res['referenceMaterials'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->styleFeature) {
            $res['styleFeature'] = $this->styleFeature;
        }

        if (null !== $this->useSearch) {
            $res['useSearch'] = $this->useSearch;
        }

        if (null !== $this->writingTheme) {
            $res['writingTheme'] = $this->writingTheme;
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
        if (isset($map['learningSamples'])) {
            if (!empty($map['learningSamples'])) {
                $model->learningSamples = [];
                $n1 = 0;
                foreach ($map['learningSamples'] as $item1) {
                    $model->learningSamples[$n1++] = $item1;
                }
            }
        }

        if (isset($map['processStage'])) {
            $model->processStage = $map['processStage'];
        }

        if (isset($map['referenceMaterials'])) {
            if (!empty($map['referenceMaterials'])) {
                $model->referenceMaterials = [];
                $n1 = 0;
                foreach ($map['referenceMaterials'] as $item1) {
                    $model->referenceMaterials[$n1++] = $item1;
                }
            }
        }

        if (isset($map['styleFeature'])) {
            $model->styleFeature = $map['styleFeature'];
        }

        if (isset($map['useSearch'])) {
            $model->useSearch = $map['useSearch'];
        }

        if (isset($map['writingTheme'])) {
            $model->writingTheme = $map['writingTheme'];
        }

        return $model;
    }
}
