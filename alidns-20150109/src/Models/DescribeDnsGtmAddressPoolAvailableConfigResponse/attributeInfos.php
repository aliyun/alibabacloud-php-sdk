<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAddressPoolAvailableConfigResponse;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAddressPoolAvailableConfigResponse\attributeInfos\attributeInfo;
use AlibabaCloud\Tea\Model;

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
        Model::validateRequired('attributeInfo', $this->attributeInfo, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeInfo) {
            $res['AttributeInfo'] = [];
            if (null !== $this->attributeInfo && \is_array($this->attributeInfo)) {
                $n = 0;
                foreach ($this->attributeInfo as $item) {
                    $res['AttributeInfo'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return attributeInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttributeInfo'])) {
            if (!empty($map['AttributeInfo'])) {
                $model->attributeInfo = [];
                $n                    = 0;
                foreach ($map['AttributeInfo'] as $item) {
                    $model->attributeInfo[$n++] = null !== $item ? attributeInfo::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
