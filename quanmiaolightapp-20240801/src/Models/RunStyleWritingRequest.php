<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class RunStyleWritingRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $learningSamples;

    /**
     * @description This parameter is required.
     *
     * @var string[]
     */
    public $referenceMaterials;

    /**
     * @var string
     */
    public $styleFeature;

    /**
     * @description This parameter is required.
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->learningSamples) {
            $res['learningSamples'] = $this->learningSamples;
        }
        if (null !== $this->referenceMaterials) {
            $res['referenceMaterials'] = $this->referenceMaterials;
        }
        if (null !== $this->styleFeature) {
            $res['styleFeature'] = $this->styleFeature;
        }
        if (null !== $this->writingTheme) {
            $res['writingTheme'] = $this->writingTheme;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunStyleWritingRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['learningSamples'])) {
            if (!empty($map['learningSamples'])) {
                $model->learningSamples = $map['learningSamples'];
            }
        }
        if (isset($map['referenceMaterials'])) {
            if (!empty($map['referenceMaterials'])) {
                $model->referenceMaterials = $map['referenceMaterials'];
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
