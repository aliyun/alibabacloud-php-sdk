<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAddressPoolAvailableConfigResponseBody\attributeInfos;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmAddressPoolAvailableConfigResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var attributeInfos[]
     */
    public $attributeInfos;
    protected $_name = [
        'requestId'      => 'RequestId',
        'attributeInfos' => 'AttributeInfos',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->attributeInfos) {
            $res['AttributeInfos'] = [];
            if (null !== $this->attributeInfos && \is_array($this->attributeInfos)) {
                $n = 0;
                foreach ($this->attributeInfos as $item) {
                    $res['AttributeInfos'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmAddressPoolAvailableConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AttributeInfos'])) {
            if (!empty($map['AttributeInfos'])) {
                $model->attributeInfos = [];
                $n                     = 0;
                foreach ($map['AttributeInfos'] as $item) {
                    $model->attributeInfos[$n++] = null !== $item ? attributeInfos::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
