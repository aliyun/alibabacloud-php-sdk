<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetAuthorityTemplateItemResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetAuthorityTemplateItemResponseBody\authorityTemplateItemList\authorityTemplateItem;

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
        if (\is_array($this->authorityTemplateItem)) {
            Model::validateArray($this->authorityTemplateItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authorityTemplateItem) {
            if (\is_array($this->authorityTemplateItem)) {
                $res['AuthorityTemplateItem'] = [];
                $n1 = 0;
                foreach ($this->authorityTemplateItem as $item1) {
                    $res['AuthorityTemplateItem'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthorityTemplateItem'])) {
            if (!empty($map['AuthorityTemplateItem'])) {
                $model->authorityTemplateItem = [];
                $n1 = 0;
                foreach ($map['AuthorityTemplateItem'] as $item1) {
                    $model->authorityTemplateItem[$n1] = authorityTemplateItem::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
