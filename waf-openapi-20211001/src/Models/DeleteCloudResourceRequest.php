<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DeleteCloudResourceRequest extends Model
{
    /**
     * @description The ID of the WAF instance.
     *
     * This parameter is required.
     * @example waf_v2_public_cn-***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The port of the resource that is added to WAF.
     *
     * This parameter is required.
     * @example 443
     *
     * @var int
     */
    public $port;

    /**
     * @description The region in which the WAF instance is deployed. Valid values:
     *
     *   **cn-hangzhou**: the Chinese mainland.
     *   **ap-southeast-1**: outside the Chinese mainland.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the instance.
     *
     * This parameter is required.
     * @example lb-bp1*****jqnnqk5uj2p
     *
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The cloud service. Valid values:
     *
     *   **clb4**: Layer 4 CLB.
     *   **clb7**: Layer 7 CLB.
     *   **ecs**: ECS.
     *
     * This parameter is required.
     * @example clb7
     *
     * @var string
     */
    public $resourceProduct;
    protected $_name = [
        'instanceId'                     => 'InstanceId',
        'port'                           => 'Port',
        'regionId'                       => 'RegionId',
        'resourceInstanceId'             => 'ResourceInstanceId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'resourceProduct'                => 'ResourceProduct',
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
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceInstanceId) {
            $res['ResourceInstanceId'] = $this->resourceInstanceId;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->resourceProduct) {
            $res['ResourceProduct'] = $this->resourceProduct;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteCloudResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceInstanceId'])) {
            $model->resourceInstanceId = $map['ResourceInstanceId'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['ResourceProduct'])) {
            $model->resourceProduct = $map['ResourceProduct'];
        }

        return $model;
    }
}
