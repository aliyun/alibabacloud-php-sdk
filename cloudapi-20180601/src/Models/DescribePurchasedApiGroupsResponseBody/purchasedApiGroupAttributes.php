<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribePurchasedApiGroupsResponseBody;

use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribePurchasedApiGroupsResponseBody\purchasedApiGroupAttributes\purchasedApiGroupAttribute;
use AlibabaCloud\Tea\Model;

class purchasedApiGroupAttributes extends Model
{
    /**
     * @var purchasedApiGroupAttribute[]
     */
    public $purchasedApiGroupAttribute;
    protected $_name = [
        'purchasedApiGroupAttribute' => 'PurchasedApiGroupAttribute',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->purchasedApiGroupAttribute) {
            $res['PurchasedApiGroupAttribute'] = [];
            if (null !== $this->purchasedApiGroupAttribute && \is_array($this->purchasedApiGroupAttribute)) {
                $n = 0;
                foreach ($this->purchasedApiGroupAttribute as $item) {
                    $res['PurchasedApiGroupAttribute'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return purchasedApiGroupAttributes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PurchasedApiGroupAttribute'])) {
            if (!empty($map['PurchasedApiGroupAttribute'])) {
                $model->purchasedApiGroupAttribute = [];
                $n                                 = 0;
                foreach ($map['PurchasedApiGroupAttribute'] as $item) {
                    $model->purchasedApiGroupAttribute[$n++] = null !== $item ? purchasedApiGroupAttribute::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
