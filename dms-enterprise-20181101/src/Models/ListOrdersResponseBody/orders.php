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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListOrdersResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListOrdersResponseBody\orders\order;
use AlibabaCloud\Tea\Model;

class orders extends Model
{
    /**
     * @var order[]
     */
    public $order;
    protected $_name = [
        'order' => 'Order',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->order) {
            $res['Order'] = [];
            if (null !== $this->order && \is_array($this->order)) {
                $n = 0;
                foreach ($this->order as $item) {
                    $res['Order'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return orders
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Order'])) {
            if (!empty($map['Order'])) {
                $model->order = [];
                $n = 0;
                foreach ($map['Order'] as $item) {
                    $model->order[$n++] = null !== $item ? order::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
