<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAddressPoolAvailableConfigResponseBody\attributeInfos;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmAddressPoolAvailableConfigResponseBody extends Model
{
    /**
     * @description The supported source regions.
     *
     * @var attributeInfos
     */
    public $attributeInfos;

    /**
     * @description The ID of the request.
     *
     * @example 199C3699-9A7B-41A1-BB5A-F1E862D3CB38
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'attributeInfos' => 'AttributeInfos',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->attributeInfos) {
            $res['AttributeInfos'] = null !== $this->attributeInfos ? $this->attributeInfos->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['AttributeInfos'])) {
            $model->attributeInfos = attributeInfos::fromMap($map['AttributeInfos']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
