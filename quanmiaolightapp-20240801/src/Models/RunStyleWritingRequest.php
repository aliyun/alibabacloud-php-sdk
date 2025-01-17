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
     * @var string[]
     */
    public $referenceMaterials;
    /**
     * @var string
     */
    public $styleFeature;
    /**
     * @var string
     */
    public $writingTheme;
    protected $_name = [
        'learningSamples'    => 'learningSamples',
        'referenceMaterials' => 'referenceMaterials',
        'styleFeature'       => 'styleFeature',
        'writingTheme'       => 'writingTheme',
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
                $n1                     = 0;
                foreach ($this->learningSamples as $item1) {
                    $res['learningSamples'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->referenceMaterials) {
            if (\is_array($this->referenceMaterials)) {
                $res['referenceMaterials'] = [];
                $n1                        = 0;
                foreach ($this->referenceMaterials as $item1) {
                    $res['referenceMaterials'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->styleFeature) {
            $res['styleFeature'] = $this->styleFeature;
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
                $n1                     = 0;
                foreach ($map['learningSamples'] as $item1) {
                    $model->learningSamples[$n1++] = $item1;
                }
            }
        }

        if (isset($map['referenceMaterials'])) {
            if (!empty($map['referenceMaterials'])) {
                $model->referenceMaterials = [];
                $n1                        = 0;
                foreach ($map['referenceMaterials'] as $item1) {
                    $model->referenceMaterials[$n1++] = $item1;
                }
            }
        }

        if (isset($map['styleFeature'])) {
            $model->styleFeature = $map['styleFeature'];
        }

        if (isset($map['writingTheme'])) {
            $model->writingTheme = $map['writingTheme'];
        }

        return $model;
    }
}
