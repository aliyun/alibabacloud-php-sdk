<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data\DBInstanceEndpoints\DBInstanceEndpoint;

use AlibabaCloud\SDK\Rds\V20140815\Models\DescribeDBInstanceEndpointsResponseBody\data\DBInstanceEndpoints\DBInstanceEndpoint\addressItems\addressItem;
use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addressItem) {
            $res['AddressItem'] = [];
            if (null !== $this->addressItem && \is_array($this->addressItem)) {
                $n = 0;
                foreach ($this->addressItem as $item) {
                    $res['AddressItem'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addressItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddressItem'])) {
            if (!empty($map['AddressItem'])) {
                $model->addressItem = [];
                $n                  = 0;
                foreach ($map['AddressItem'] as $item) {
                    $model->addressItem[$n++] = null !== $item ? addressItem::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
