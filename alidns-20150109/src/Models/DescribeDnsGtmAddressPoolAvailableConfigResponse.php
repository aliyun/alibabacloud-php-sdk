<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alidns\V20150109\Models;

use AlibabaCloud\SDK\Alidns\V20150109\Models\DescribeDnsGtmAddressPoolAvailableConfigResponse\attributeInfos;
use AlibabaCloud\Tea\Model;

class DescribeDnsGtmAddressPoolAvailableConfigResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var attributeInfos
     */
    public $attributeInfos;
    protected $_name = [
        'requestId'      => 'RequestId',
        'attributeInfos' => 'AttributeInfos',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('attributeInfos', $this->attributeInfos, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->attributeInfos) {
            $res['AttributeInfos'] = null !== $this->attributeInfos ? $this->attributeInfos->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDnsGtmAddressPoolAvailableConfigResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['AttributeInfos'])) {
            $model->attributeInfos = attributeInfos::fromMap($map['AttributeInfos']);
        }

        return $model;
    }
}
