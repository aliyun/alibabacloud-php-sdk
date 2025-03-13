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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAuthorityTemplateResponseBody;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListAuthorityTemplateResponseBody\authorityTemplateViewList\authorityTemplateView;
use AlibabaCloud\Tea\Model;

class authorityTemplateViewList extends Model
{
    /**
     * @var authorityTemplateView[]
     */
    public $authorityTemplateView;
    protected $_name = [
        'authorityTemplateView' => 'AuthorityTemplateView',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->authorityTemplateView) {
            $res['AuthorityTemplateView'] = [];
            if (null !== $this->authorityTemplateView && \is_array($this->authorityTemplateView)) {
                $n = 0;
                foreach ($this->authorityTemplateView as $item) {
                    $res['AuthorityTemplateView'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return authorityTemplateViewList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorityTemplateView'])) {
            if (!empty($map['AuthorityTemplateView'])) {
                $model->authorityTemplateView = [];
                $n = 0;
                foreach ($map['AuthorityTemplateView'] as $item) {
                    $model->authorityTemplateView[$n++] = null !== $item ? authorityTemplateView::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
