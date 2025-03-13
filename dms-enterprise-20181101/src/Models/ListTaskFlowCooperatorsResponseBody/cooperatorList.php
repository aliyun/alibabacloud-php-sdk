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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowCooperatorsResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTaskFlowCooperatorsResponseBody\cooperatorList\cooperator;
use AlibabaCloud\Tea\Model;

class cooperatorList extends Model
{
    /**
     * @var cooperator[]
     */
    public $cooperator;
    protected $_name = [
        'cooperator' => 'Cooperator',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cooperator) {
            $res['Cooperator'] = [];
            if (null !== $this->cooperator && \is_array($this->cooperator)) {
                $n = 0;
                foreach ($this->cooperator as $item) {
                    $res['Cooperator'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cooperatorList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cooperator'])) {
            if (!empty($map['Cooperator'])) {
                $model->cooperator = [];
                $n = 0;
                foreach ($map['Cooperator'] as $item) {
                    $model->cooperator[$n++] = null !== $item ? cooperator::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
