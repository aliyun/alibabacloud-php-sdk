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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListColumnsResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListColumnsResponseBody\columnList\column;
use AlibabaCloud\Tea\Model;

class columnList extends Model
{
    /**
     * @var column[]
     */
    public $column;
    protected $_name = [
        'column' => 'Column',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->column) {
            $res['Column'] = [];
            if (null !== $this->column && \is_array($this->column)) {
                $n = 0;
                foreach ($this->column as $item) {
                    $res['Column'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return columnList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Column'])) {
            if (!empty($map['Column'])) {
                $model->column = [];
                $n = 0;
                foreach ($map['Column'] as $item) {
                    $model->column[$n++] = null !== $item ? column::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
