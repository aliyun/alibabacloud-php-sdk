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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunSearchGenerationResponseBody\payload\output\agentContext\bizContext\generatedContent\timelineResult\generateTraceability\coordinates;

use AlibabaCloud\Tea\Model;

class newsCoordinate extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $x;

    /**
     * @example 1
     *
     * @var int
     */
    public $y;

    /**
     * @example 1
     *
     * @var int
     */
    public $z;
    protected $_name = [
        'x' => 'X',
        'y' => 'Y',
        'z' => 'Z',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->x) {
            $res['X'] = $this->x;
        }
        if (null !== $this->y) {
            $res['Y'] = $this->y;
        }
        if (null !== $this->z) {
            $res['Z'] = $this->z;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return newsCoordinate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['X'])) {
            $model->x = $map['X'];
        }
        if (isset($map['Y'])) {
            $model->y = $map['Y'];
        }
        if (isset($map['Z'])) {
            $model->z = $map['Z'];
        }

        return $model;
    }
}
