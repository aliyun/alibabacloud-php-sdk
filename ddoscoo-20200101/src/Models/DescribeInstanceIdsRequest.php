<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Tea\Model;

class DescribeInstanceIdsRequest extends Model
{
    /**
     * @description The type of the instance to query. Valid values:
     *
     *   **0**: Anti-DDoS Proxy (Outside Chinese Mainland) instance of the Insurance mitigation plan
     *   **1**: Anti-DDoS Proxy (Outside Chinese Mainland) instance of the Unlimited mitigation plan
     *   **2**: Anti-DDoS Proxy (Outside Chinese Mainland) instance of the Chinese Mainland Acceleration (CMA) mitigation plan
     *   **3**: Anti-DDoS Proxy (Outside Chinese Mainland) instance of the Secure Chinese Mainland Acceleration (Sec-CMA) mitigation plan
     *   **9**: Anti-DDoS Proxy (Chinese Mainland) instance of the Profession mitigation plan
     *
     * @example 9
     *
     * @var int
     */
    public $edition;

    /**
     * @description The IDs of instances to query.
     *
     * @example ddoscoo-cn-mp91j1ao****
     *
     * @var string[]
     */
    public $instanceIds;

    /**
     * @example rg-acfm2pz25js****
     *
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'edition'         => 'Edition',
        'instanceIds'     => 'InstanceIds',
        'resourceGroupId' => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->edition) {
            $res['Edition'] = $this->edition;
        }
        if (null !== $this->instanceIds) {
            $res['InstanceIds'] = $this->instanceIds;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeInstanceIdsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Edition'])) {
            $model->edition = $map['Edition'];
        }
        if (isset($map['InstanceIds'])) {
            if (!empty($map['InstanceIds'])) {
                $model->instanceIds = $map['InstanceIds'];
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
