<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceStatusRequest extends Model
{
    /**
     * @description The ID of the Anti-DDoS Proxy instance to query.
     *
     * This parameter is required.
     * @example ddoscoo-cn-6ja1y6p5****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the Anti-DDoS Proxy instance to query. Valid values:
     *
     *   **1**: an Anti-DDoS Proxy (Chinese Mainland) instance
     *   **2**: an Anti-DDoS Proxy (Outside Chinese Mainland) instance
     *
     * This parameter is required.
     * @example 1
     *
     * @var int
     */
    public $productType;
    protected $_name = [
        'instanceId'  => 'InstanceId',
        'productType' => 'ProductType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        return $model;
    }
}
