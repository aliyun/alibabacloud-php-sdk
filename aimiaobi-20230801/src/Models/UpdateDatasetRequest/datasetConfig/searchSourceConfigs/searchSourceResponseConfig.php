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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetRequest\datasetConfig\searchSourceConfigs;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\UpdateDatasetRequest\datasetConfig\searchSourceConfigs\searchSourceResponseConfig\jqNodes;
use AlibabaCloud\Tea\Model;

class searchSourceResponseConfig extends Model
{
    /**
     * @var jqNodes[]
     */
    public $jqNodes;
    protected $_name = [
        'jqNodes' => 'JqNodes',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->jqNodes) {
            $res['JqNodes'] = [];
            if (null !== $this->jqNodes && \is_array($this->jqNodes)) {
                $n = 0;
                foreach ($this->jqNodes as $item) {
                    $res['JqNodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return searchSourceResponseConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JqNodes'])) {
            if (!empty($map['JqNodes'])) {
                $model->jqNodes = [];
                $n = 0;
                foreach ($map['JqNodes'] as $item) {
                    $model->jqNodes[$n++] = null !== $item ? jqNodes::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
