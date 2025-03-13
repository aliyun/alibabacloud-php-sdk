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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowConstantsResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowConstantsResponseBody\dagConstants\dagConstant;
use AlibabaCloud\Tea\Model;

class dagConstants extends Model
{
    /**
     * @var dagConstant[]
     */
    public $dagConstant;
    protected $_name = [
        'dagConstant' => 'DagConstant',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagConstant) {
            $res['DagConstant'] = [];
            if (null !== $this->dagConstant && \is_array($this->dagConstant)) {
                $n = 0;
                foreach ($this->dagConstant as $item) {
                    $res['DagConstant'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return dagConstants
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DagConstant'])) {
            if (!empty($map['DagConstant'])) {
                $model->dagConstant = [];
                $n = 0;
                foreach ($map['DagConstant'] as $item) {
                    $model->dagConstant[$n++] = null !== $item ? dagConstant::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
