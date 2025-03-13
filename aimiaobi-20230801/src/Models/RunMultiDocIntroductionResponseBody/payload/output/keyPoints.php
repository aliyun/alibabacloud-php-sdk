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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunMultiDocIntroductionResponseBody\payload\output;

use AlibabaCloud\Tea\Model;

class keyPoints extends Model
{
    /**
     * @var string
     */
    public $keyPoint;

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'keyPoint' => 'KeyPoint',
        'source' => 'Source',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyPoint) {
            $res['KeyPoint'] = $this->keyPoint;
        }
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return keyPoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyPoint'])) {
            $model->keyPoint = $map['KeyPoint'];
        }
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
