<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAddressPoolAvailableConfigResponseBody\attributeInfos;

class DescribeDnsGtmAddressPoolAvailableConfigResponseBody extends Model
{
    /**
     * @var attributeInfos
     */
    public $attributeInfos;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attributeInfos' => 'AttributeInfos',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->attributeInfos) {
            $this->attributeInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->attributeInfos) {
            $res['AttributeInfos'] = null !== $this->attributeInfos ? $this->attributeInfos->toArray($noStream) : $this->attributeInfos;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AttributeInfos'])) {
            $model->attributeInfos = attributeInfos::fromMap($map['AttributeInfos']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
