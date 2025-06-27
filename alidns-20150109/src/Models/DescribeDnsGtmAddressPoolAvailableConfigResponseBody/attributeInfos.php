<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAddressPoolAvailableConfigResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAddressPoolAvailableConfigResponseBody\attributeInfos\attributeInfo;

class attributeInfos extends Model
{
    /**
     * @var attributeInfo[]
     */
    public $attributeInfo;
    protected $_name = [
        'attributeInfo' => 'AttributeInfo',
    ];

    public function validate()
    {
        if (\is_array($this->attributeInfo)) {
            Model::validateArray($this->attributeInfo);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeInfo) {
            if (\is_array($this->attributeInfo)) {
                $res['AttributeInfo'] = [];
                $n1 = 0;
                foreach ($this->attributeInfo as $item1) {
                    $res['AttributeInfo'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['AttributeInfo'])) {
            if (!empty($map['AttributeInfo'])) {
                $model->attributeInfo = [];
                $n1 = 0;
                foreach ($map['AttributeInfo'] as $item1) {
                    $model->attributeInfo[$n1] = attributeInfo::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
