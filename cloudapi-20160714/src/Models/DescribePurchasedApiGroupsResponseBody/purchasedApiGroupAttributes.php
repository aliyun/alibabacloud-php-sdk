<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribePurchasedApiGroupsResponseBody\purchasedApiGroupAttributes\purchasedApiGroupAttribute;

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
        if (\is_array($this->purchasedApiGroupAttribute)) {
            Model::validateArray($this->purchasedApiGroupAttribute);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->purchasedApiGroupAttribute) {
            if (\is_array($this->purchasedApiGroupAttribute)) {
                $res['PurchasedApiGroupAttribute'] = [];
                $n1                                = 0;
                foreach ($this->purchasedApiGroupAttribute as $item1) {
                    $res['PurchasedApiGroupAttribute'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['PurchasedApiGroupAttribute'])) {
            if (!empty($map['PurchasedApiGroupAttribute'])) {
                $model->purchasedApiGroupAttribute = [];
                $n1                                = 0;
                foreach ($map['PurchasedApiGroupAttribute'] as $item1) {
                    $model->purchasedApiGroupAttribute[$n1++] = purchasedApiGroupAttribute::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
