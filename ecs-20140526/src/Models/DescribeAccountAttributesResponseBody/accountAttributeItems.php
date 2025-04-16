<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeAccountAttributesResponseBody\accountAttributeItems\accountAttributeItem;

class accountAttributeItems extends Model
{
    /**
     * @var accountAttributeItem[]
     */
    public $accountAttributeItem;
    protected $_name = [
        'accountAttributeItem' => 'AccountAttributeItem',
    ];

    public function validate()
    {
        if (\is_array($this->accountAttributeItem)) {
            Model::validateArray($this->accountAttributeItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountAttributeItem) {
            if (\is_array($this->accountAttributeItem)) {
                $res['AccountAttributeItem'] = [];
                $n1 = 0;
                foreach ($this->accountAttributeItem as $item1) {
                    $res['AccountAttributeItem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AccountAttributeItem'])) {
            if (!empty($map['AccountAttributeItem'])) {
                $model->accountAttributeItem = [];
                $n1 = 0;
                foreach ($map['AccountAttributeItem'] as $item1) {
                    $model->accountAttributeItem[$n1++] = accountAttributeItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
