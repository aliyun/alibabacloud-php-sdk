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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetAuthorityTemplateItemResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetAuthorityTemplateItemResponseBody\authorityTemplateItemList\authorityTemplateItem;
use AlibabaCloud\Tea\Model;

class authorityTemplateItemList extends Model
{
    /**
     * @var authorityTemplateItem[]
     */
    public $authorityTemplateItem;
    protected $_name = [
        'authorityTemplateItem' => 'AuthorityTemplateItem',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorityTemplateItem) {
            $res['AuthorityTemplateItem'] = [];
            if (null !== $this->authorityTemplateItem && \is_array($this->authorityTemplateItem)) {
                $n = 0;
                foreach ($this->authorityTemplateItem as $item) {
                    $res['AuthorityTemplateItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorityTemplateItemList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorityTemplateItem'])) {
            if (!empty($map['AuthorityTemplateItem'])) {
                $model->authorityTemplateItem = [];
                $n = 0;
                foreach ($map['AuthorityTemplateItem'] as $item) {
                    $model->authorityTemplateItem[$n++] = null !== $item ? authorityTemplateItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
