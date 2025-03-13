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

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoGenerateResult\usage;
use AlibabaCloud\Tea\Model;

class videoGenerateResult extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $generateFinished;

    /**
     * @var int
     */
    public $index;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var bool
     */
    public $modelReduce;

    /**
     * @var string
     */
    public $reasonText;

    /**
     * @example xxx
     *
     * @var string
     */
    public $text;

    /**
     * @var usage
     */
    public $usage;
    protected $_name = [
        'generateFinished' => 'generateFinished',
        'index' => 'index',
        'modelId' => 'modelId',
        'modelReduce' => 'modelReduce',
        'reasonText' => 'reasonText',
        'text' => 'text',
        'usage' => 'usage',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->generateFinished) {
            $res['generateFinished'] = $this->generateFinished;
        }
        if (null !== $this->index) {
            $res['index'] = $this->index;
        }
        if (null !== $this->modelId) {
            $res['modelId'] = $this->modelId;
        }
        if (null !== $this->modelReduce) {
            $res['modelReduce'] = $this->modelReduce;
        }
        if (null !== $this->reasonText) {
            $res['reasonText'] = $this->reasonText;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }
        if (null !== $this->usage) {
            $res['usage'] = null !== $this->usage ? $this->usage->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoGenerateResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['generateFinished'])) {
            $model->generateFinished = $map['generateFinished'];
        }
        if (isset($map['index'])) {
            $model->index = $map['index'];
        }
        if (isset($map['modelId'])) {
            $model->modelId = $map['modelId'];
        }
        if (isset($map['modelReduce'])) {
            $model->modelReduce = $map['modelReduce'];
        }
        if (isset($map['reasonText'])) {
            $model->reasonText = $map['reasonText'];
        }
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }
        if (isset($map['usage'])) {
            $model->usage = usage::fromMap($map['usage']);
        }

        return $model;
    }
}
