<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models;

use AlibabaCloud\Tea\Model;

class RunStyleWritingShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $learningSamplesShrink;

    /**
     * @var string
     */
    public $processStage;

    /**
     * @var string
     */
    public $referenceMaterialsShrink;

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
        'learningSamplesShrink' => 'learningSamples',
        'processStage' => 'processStage',
        'referenceMaterialsShrink' => 'referenceMaterials',
        'styleFeature' => 'styleFeature',
        'useSearch' => 'useSearch',
        'writingTheme' => 'writingTheme',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->learningSamplesShrink) {
            $res['learningSamples'] = $this->learningSamplesShrink;
        }
        if (null !== $this->processStage) {
            $res['processStage'] = $this->processStage;
        }
        if (null !== $this->referenceMaterialsShrink) {
            $res['referenceMaterials'] = $this->referenceMaterialsShrink;
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
        if (isset($map['processStage'])) {
            $model->processStage = $map['processStage'];
        }
        if (isset($map['referenceMaterials'])) {
            $model->referenceMaterialsShrink = $map['referenceMaterials'];
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
