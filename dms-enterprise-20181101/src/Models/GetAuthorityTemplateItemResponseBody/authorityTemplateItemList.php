<?php

// This file is auto-generated, don't edit it. Thanks.

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

    public function validate()
    {
    }

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
                $n                            = 0;
                foreach ($map['AuthorityTemplateItem'] as $item) {
                    $model->authorityTemplateItem[$n++] = null !== $item ? authorityTemplateItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
