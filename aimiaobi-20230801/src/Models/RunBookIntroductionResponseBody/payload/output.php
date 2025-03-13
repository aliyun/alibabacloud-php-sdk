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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunBookIntroductionResponseBody\payload;

use AlibabaCloud\Tea\Model;

class output extends Model
{
    /**
     * @var string
     */
    public $keyPoint;

    /**
     * @var string
     */
    public $summary;
    protected $_name = [
        'keyPoint' => 'KeyPoint',
        'summary' => 'Summary',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyPoint) {
            $res['KeyPoint'] = $this->keyPoint;
        }
        if (null !== $this->summary) {
            $res['Summary'] = $this->summary;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return output
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyPoint'])) {
            $model->keyPoint = $map['KeyPoint'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}
