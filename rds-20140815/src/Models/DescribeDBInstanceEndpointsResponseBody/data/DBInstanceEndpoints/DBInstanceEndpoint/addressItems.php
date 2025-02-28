<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data\DBInstanceEndpoints\DBInstanceEndpoint;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data\DBInstanceEndpoints\DBInstanceEndpoint\addressItems\addressItem;

class addressItems extends Model
{
    /**
     * @var addressItem[]
     */
    public $addressItem;
    protected $_name = [
        'addressItem' => 'AddressItem',
    ];

    public function validate()
    {
        if (\is_array($this->addressItem)) {
            Model::validateArray($this->addressItem);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addressItem) {
            if (\is_array($this->addressItem)) {
                $res['AddressItem'] = [];
                $n1                 = 0;
                foreach ($this->addressItem as $item1) {
                    $res['AddressItem'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AddressItem'])) {
            if (!empty($map['AddressItem'])) {
                $model->addressItem = [];
                $n1                 = 0;
                foreach ($map['AddressItem'] as $item1) {
                    $model->addressItem[$n1++] = addressItem::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
