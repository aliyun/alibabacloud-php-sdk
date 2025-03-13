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

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\GetVideoAnalysisTaskResponseBody\data\payload\output\videoCaptionResult;

use AlibabaCloud\Tea\Model;

class videoCaptions extends Model
{
    /**
     * @example 1736129678000
     *
     * @var int
     */
    public $endTime;

    /**
     * @example 00:01
     *
     * @var string
     */
    public $endTimeFormat;

    /**
     * @example 00:01
     *
     * @var int
     */
    public $startTime;

    /**
     * @example 2025-01-07 11:52:06
     *
     * @var string
     */
    public $startTimeFormat;

    /**
     * @example xxxx
     *
     * @var string
     */
    public $text;
    protected $_name = [
        'endTime' => 'endTime',
        'endTimeFormat' => 'endTimeFormat',
        'startTime' => 'startTime',
        'startTimeFormat' => 'startTimeFormat',
        'text' => 'text',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }
        if (null !== $this->endTimeFormat) {
            $res['endTimeFormat'] = $this->endTimeFormat;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->startTimeFormat) {
            $res['startTimeFormat'] = $this->startTimeFormat;
        }
        if (null !== $this->text) {
            $res['text'] = $this->text;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return videoCaptions
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }
        if (isset($map['endTimeFormat'])) {
            $model->endTimeFormat = $map['endTimeFormat'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['startTimeFormat'])) {
            $model->startTimeFormat = $map['startTimeFormat'];
        }
        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
