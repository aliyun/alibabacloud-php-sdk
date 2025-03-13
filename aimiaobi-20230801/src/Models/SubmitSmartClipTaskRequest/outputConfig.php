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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest;

use AlibabaCloud\Tea\Model;

class outputConfig extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $count;

    /**
     * @example test_{index}.mp4
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 1080
     *
     * @var int
     */
    public $height;

    /**
     * @example 120
     *
     * @var int
     */
    public $maxDuration;

    /**
     * @example true
     *
     * @var bool
     */
    public $saveToGeneratedContent;

    /**
     * @example 1920
     *
     * @var int
     */
    public $width;
    protected $_name = [
        'count' => 'Count',
        'fileName' => 'FileName',
        'height' => 'Height',
        'maxDuration' => 'MaxDuration',
        'saveToGeneratedContent' => 'SaveToGeneratedContent',
        'width' => 'Width',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->height) {
            $res['Height'] = $this->height;
        }
        if (null !== $this->maxDuration) {
            $res['MaxDuration'] = $this->maxDuration;
        }
        if (null !== $this->saveToGeneratedContent) {
            $res['SaveToGeneratedContent'] = $this->saveToGeneratedContent;
        }
        if (null !== $this->width) {
            $res['Width'] = $this->width;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return outputConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['Height'])) {
            $model->height = $map['Height'];
        }
        if (isset($map['MaxDuration'])) {
            $model->maxDuration = $map['MaxDuration'];
        }
        if (isset($map['SaveToGeneratedContent'])) {
            $model->saveToGeneratedContent = $map['SaveToGeneratedContent'];
        }
        if (isset($map['Width'])) {
            $model->width = $map['Width'];
        }

        return $model;
    }
}
