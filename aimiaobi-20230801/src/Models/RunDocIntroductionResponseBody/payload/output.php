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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocIntroductionResponseBody\payload;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\RunDocIntroductionResponseBody\payload\output\introductions;
use AlibabaCloud\Tea\Model;

class output extends Model
{
    /**
     * @var introductions[]
     */
    public $introductions;

    /**
     * @var string
     */
    public $keyPoint;

    /**
     * @var string
     */
    public $summary;
    protected $_name = [
        'introductions' => 'Introductions',
        'keyPoint' => 'KeyPoint',
        'summary' => 'Summary',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->introductions) {
            $res['Introductions'] = [];
            if (null !== $this->introductions && \is_array($this->introductions)) {
                $n = 0;
                foreach ($this->introductions as $item) {
                    $res['Introductions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
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
        if (isset($map['Introductions'])) {
            if (!empty($map['Introductions'])) {
                $model->introductions = [];
                $n = 0;
                foreach ($map['Introductions'] as $item) {
                    $model->introductions[$n++] = null !== $item ? introductions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['KeyPoint'])) {
            $model->keyPoint = $map['KeyPoint'];
        }
        if (isset($map['Summary'])) {
            $model->summary = $map['Summary'];
        }

        return $model;
    }
}
