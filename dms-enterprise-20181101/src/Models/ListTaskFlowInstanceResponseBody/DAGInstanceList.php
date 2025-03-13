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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowInstanceResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowInstanceResponseBody\DAGInstanceList\DAGInstance;
use AlibabaCloud\Tea\Model;

class DAGInstanceList extends Model
{
    /**
     * @var DAGInstance[]
     */
    public $DAGInstance;
    protected $_name = [
        'DAGInstance' => 'DAGInstance',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->DAGInstance) {
            $res['DAGInstance'] = [];
            if (null !== $this->DAGInstance && \is_array($this->DAGInstance)) {
                $n = 0;
                foreach ($this->DAGInstance as $item) {
                    $res['DAGInstance'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DAGInstanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DAGInstance'])) {
            if (!empty($map['DAGInstance'])) {
                $model->DAGInstance = [];
                $n = 0;
                foreach ($map['DAGInstance'] as $item) {
                    $model->DAGInstance[$n++] = null !== $item ? DAGInstance::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
