<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class RunStyleWritingShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $learningSamplesShrink;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $referenceMaterialsShrink;

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
        'learningSamplesShrink'    => 'learningSamples',
        'referenceMaterialsShrink' => 'referenceMaterials',
        'styleFeature'             => 'styleFeature',
        'writingTheme'             => 'writingTheme',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->learningSamplesShrink) {
            $res['learningSamples'] = $this->learningSamplesShrink;
        }
        if (null !== $this->referenceMaterialsShrink) {
            $res['referenceMaterials'] = $this->referenceMaterialsShrink;
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
     * @return RunStyleWritingShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['learningSamples'])) {
            $model->learningSamplesShrink = $map['learningSamples'];
        }
        if (isset($map['referenceMaterials'])) {
            $model->referenceMaterialsShrink = $map['referenceMaterials'];
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
