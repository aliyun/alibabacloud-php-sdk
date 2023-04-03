<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAddrAttributeInfoResponseBody\addr;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAddrAttributeInfoResponseBody\addr\addr\attributeInfo;
use AlibabaCloud\Tea\Model;

class addr extends Model
{
    /**
     * @description The address that was queried.
     *
     * @example 1.1.1.1
     *
     * @var string
     */
    public $addr;

    /**
     * @description The source region of the address.
     *
     * @var attributeInfo
     */
    public $attributeInfo;
    protected $_name = [
        'addr'          => 'Addr',
        'attributeInfo' => 'AttributeInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addr) {
            $res['Addr'] = $this->addr;
        }
        if (null !== $this->attributeInfo) {
            $res['AttributeInfo'] = null !== $this->attributeInfo ? $this->attributeInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return addr
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Addr'])) {
            $model->addr = $map['Addr'];
        }
        if (isset($map['AttributeInfo'])) {
            $model->attributeInfo = attributeInfo::fromMap($map['AttributeInfo']);
        }

        return $model;
    }
}
