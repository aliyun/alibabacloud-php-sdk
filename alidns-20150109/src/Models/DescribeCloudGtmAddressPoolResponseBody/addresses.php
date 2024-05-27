<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressPoolResponseBody;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeCloudGtmAddressPoolResponseBody\addresses\address;
use AlibabaCloud\Tea\Model;

class addresses extends Model
{
    /**
     * @var address[]
     */
    public $address;
    protected $_name = [
        'address' => 'Address',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = [];
            if (null !== $this->address && \is_array($this->address)) {
                $n = 0;
                foreach ($this->address as $item) {
                    $res['Address'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addresses
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            if (!empty($map['Address'])) {
                $model->address = [];
                $n              = 0;
                foreach ($map['Address'] as $item) {
                    $model->address[$n++] = null !== $item ? address::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
