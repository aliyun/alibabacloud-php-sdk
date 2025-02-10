<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAddrAttributeInfoResponseBody\addr;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAddrAttributeInfoResponseBody\addr\addr\attributeInfo;

class addr extends Model
{
    /**
     * @var string
     */
    public $addr;
    /**
     * @var attributeInfo
     */
    public $attributeInfo;
    protected $_name = [
        'addr'          => 'Addr',
        'attributeInfo' => 'AttributeInfo',
    ];

    public function validate()
    {
        if (null !== $this->attributeInfo) {
            $this->attributeInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addr) {
            $res['Addr'] = $this->addr;
        }

        if (null !== $this->attributeInfo) {
            $res['AttributeInfo'] = null !== $this->attributeInfo ? $this->attributeInfo->toArray($noStream) : $this->attributeInfo;
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
        if (isset($map['Addr'])) {
            $model->addr = $map['Addr'];
        }

        if (isset($map['AttributeInfo'])) {
            $model->attributeInfo = attributeInfo::fromMap($map['AttributeInfo']);
        }

        return $model;
    }
}
