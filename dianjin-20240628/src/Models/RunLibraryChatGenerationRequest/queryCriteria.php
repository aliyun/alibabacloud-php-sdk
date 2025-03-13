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

namespace AlibabaCloud\SDK\DianJin\V20240628\Models\RunLibraryChatGenerationRequest;

use AlibabaCloud\SDK\DianJin\V20240628\Models\RunLibraryChatGenerationRequest\queryCriteria\and_;
use AlibabaCloud\SDK\DianJin\V20240628\Models\RunLibraryChatGenerationRequest\queryCriteria\or_;
use AlibabaCloud\Tea\Model;

class queryCriteria extends Model
{
    /**
     * @var and_[]
     */
    public $and;

    /**
     * @var or_[]
     */
    public $or;
    protected $_name = [
        'and' => 'and',
        'or' => 'or',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->and) {
            $res['and'] = [];
            if (null !== $this->and && \is_array($this->and)) {
                $n = 0;
                foreach ($this->and as $item) {
                    $res['and'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->or) {
            $res['or'] = [];
            if (null !== $this->or && \is_array($this->or)) {
                $n = 0;
                foreach ($this->or as $item) {
                    $res['or'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return queryCriteria
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['and'])) {
            if (!empty($map['and'])) {
                $model->and = [];
                $n = 0;
                foreach ($map['and'] as $item) {
                    $model->and[$n++] = null !== $item ? and_::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['or'])) {
            if (!empty($map['or'])) {
                $model->or = [];
                $n = 0;
                foreach ($map['or'] as $item) {
                    $model->or[$n++] = null !== $item ? or_::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
