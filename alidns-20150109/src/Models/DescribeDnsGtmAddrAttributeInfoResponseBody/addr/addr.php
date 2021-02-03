<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAddrAttributeInfoResponseBody\addr;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAddrAttributeInfoResponseBody\addr\addr\attributeInfo;
use AlibabaCloud\Tea\Model;

class addr extends Model
{
    /**
     * @var attributeInfo
     */
    public $attributeInfo;

    /**
     * @var string
     */
    public $addr;
    protected $_name = [
        'attributeInfo' => 'AttributeInfo',
        'addr'          => 'Addr',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeInfo) {
            $res['AttributeInfo'] = null !== $this->attributeInfo ? $this->attributeInfo->toMap() : null;
        }
        if (null !== $this->addr) {
            $res['Addr'] = $this->addr;
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
        if (isset($map['AttributeInfo'])) {
            $model->attributeInfo = attributeInfo::fromMap($map['AttributeInfo']);
        }
        if (isset($map['Addr'])) {
            $model->addr = $map['Addr'];
        }

        return $model;
    }
}
