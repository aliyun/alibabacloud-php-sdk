<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ComputeNestSupplier\V20210521\Models;

use AlibabaCloud\Tea\Model;

class GetServiceEstimateCostResponseBody extends Model
{
    /**
     * @description The subscription duration information about the purchase order of Alibaba Cloud Marketplace.
     *
     * @example {\\"PayPeriodUnit\\":Month,\\"PayPeriod\\":1}
     *
     * @var mixed[]
     */
    public $commodity;

    /**
     * @description The request ID.
     *
     * @example E73F09DC-6C13-5CB1-A10F-7A4E125ABD2C
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The list of resources.
     *
     * @example {
     * }
     * @var mixed[]
     */
    public $resources;
    protected $_name = [
        'commodity' => 'Commodity',
        'requestId' => 'RequestId',
        'resources' => 'Resources',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodity) {
            $res['Commodity'] = $this->commodity;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resources) {
            $res['Resources'] = $this->resources;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetServiceEstimateCostResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Commodity'])) {
            $model->commodity = $map['Commodity'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Resources'])) {
            $model->resources = $map['Resources'];
        }

        return $model;
    }
}
