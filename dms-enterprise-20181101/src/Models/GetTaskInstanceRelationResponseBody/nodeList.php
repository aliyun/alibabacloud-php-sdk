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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskInstanceRelationResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskInstanceRelationResponseBody\nodeList\node;
use AlibabaCloud\Tea\Model;

class nodeList extends Model
{
    /**
     * @var node[]
     */
    public $node;
    protected $_name = [
        'node' => 'Node',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->node) {
            $res['Node'] = [];
            if (null !== $this->node && \is_array($this->node)) {
                $n = 0;
                foreach ($this->node as $item) {
                    $res['Node'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Node'])) {
            if (!empty($map['Node'])) {
                $model->node = [];
                $n = 0;
                foreach ($map['Node'] as $item) {
                    $model->node[$n++] = null !== $item ? node::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
