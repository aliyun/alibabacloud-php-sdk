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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class DLOrder extends Model
{
    /**
     * @var string
     */
    public $col;

    /**
     * @var int
     */
    public $order;
    protected $_name = [
        'col' => 'Col',
        'order' => 'Order',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->col) {
            $res['Col'] = $this->col;
        }
        if (null !== $this->order) {
            $res['Order'] = $this->order;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DLOrder
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Col'])) {
            $model->col = $map['Col'];
        }
        if (isset($map['Order'])) {
            $model->order = $map['Order'];
        }

        return $model;
    }
}
