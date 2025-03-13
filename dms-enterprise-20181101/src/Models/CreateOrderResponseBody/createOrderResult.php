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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateOrderResponseBody;

use AlibabaCloud\Tea\Model;

class createOrderResult extends Model
{
    /**
     * @var int[]
     */
    public $orderIds;
    protected $_name = [
        'orderIds' => 'OrderIds',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderIds) {
            $res['OrderIds'] = $this->orderIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createOrderResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderIds'])) {
            if (!empty($map['OrderIds'])) {
                $model->orderIds = $map['OrderIds'];
            }
        }

        return $model;
    }
}
