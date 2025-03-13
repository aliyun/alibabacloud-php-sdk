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

namespace AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCategoriesByTaskIdResponseBody;

use AlibabaCloud\SDK\AiMiaoBi\V20230801\Models\GetCategoriesByTaskIdResponseBody\data\children;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $category;

    /**
     * @var children[]
     */
    public $children;

    /**
     * @example 2
     *
     * @var int
     */
    public $count;
    protected $_name = [
        'category' => 'Category',
        'children' => 'Children',
        'count' => 'Count',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }
        if (null !== $this->children) {
            $res['Children'] = [];
            if (null !== $this->children && \is_array($this->children)) {
                $n = 0;
                foreach ($this->children as $item) {
                    $res['Children'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }
        if (isset($map['Children'])) {
            if (!empty($map['Children'])) {
                $model->children = [];
                $n = 0;
                foreach ($map['Children'] as $item) {
                    $model->children[$n++] = null !== $item ? children::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }

        return $model;
    }
}
