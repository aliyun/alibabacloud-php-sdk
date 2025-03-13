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

namespace AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListHotTopicSummariesResponseBody\data;

use AlibabaCloud\SDK\QuanMiaoLightApp\V20240801\Models\ListHotTopicSummariesResponseBody\data\summary\summaries;
use AlibabaCloud\Tea\Model;

class summary extends Model
{
    /**
     * @var summaries[]
     */
    public $summaries;
    protected $_name = [
        'summaries' => 'summaries',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->summaries) {
            $res['summaries'] = [];
            if (null !== $this->summaries && \is_array($this->summaries)) {
                $n = 0;
                foreach ($this->summaries as $item) {
                    $res['summaries'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return summary
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['summaries'])) {
            if (!empty($map['summaries'])) {
                $model->summaries = [];
                $n = 0;
                foreach ($map['summaries'] as $item) {
                    $model->summaries[$n++] = null !== $item ? summaries::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
