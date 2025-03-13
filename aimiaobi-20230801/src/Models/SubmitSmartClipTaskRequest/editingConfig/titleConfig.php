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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\SubmitSmartClipTaskRequest\editingConfig;

use AlibabaCloud\Tea\Model;

class titleConfig extends Model
{
    /**
     * @example TopLeft
     *
     * @var string
     */
    public $alignment;

    /**
     * @example 2
     *
     * @var float
     */
    public $timelineIn;

    /**
     * @example 3
     *
     * @var float
     */
    public $timelineOut;

    /**
     * @example 100
     *
     * @var float
     */
    public $x;

    /**
     * @example 100
     *
     * @var float
     */
    public $y;
    protected $_name = [
        'alignment' => 'Alignment',
        'timelineIn' => 'TimelineIn',
        'timelineOut' => 'TimelineOut',
        'x' => 'X',
        'y' => 'Y',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->alignment) {
            $res['Alignment'] = $this->alignment;
        }
        if (null !== $this->timelineIn) {
            $res['TimelineIn'] = $this->timelineIn;
        }
        if (null !== $this->timelineOut) {
            $res['TimelineOut'] = $this->timelineOut;
        }
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return titleConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Alignment'])) {
            $model->alignment = $map['Alignment'];
        }
        if (isset($map['TimelineIn'])) {
            $model->timelineIn = $map['TimelineIn'];
        }
        if (isset($map['TimelineOut'])) {
            $model->timelineOut = $map['TimelineOut'];
        }
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }

        return $model;
    }
}
