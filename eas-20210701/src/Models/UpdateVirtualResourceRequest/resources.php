<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models\UpdateVirtualResourceRequest;

use AlibabaCloud\Tea\Model;

class resources extends Model
{
    /**
     * @description The instance type of the public resource group.
     *
     * >  You must specify one and only one of the InstanceType, ResourceId, and QuotaId parameters.
     * @example ecs.s6-c1m2.xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The priority of resource scheduling. A greater number specifies a higher priority.
     *
     * @example 6
     *
     * @var int
     */
    public $priority;

    /**
     * @description The Lingjun resource quota ID.
     *
     * >  You must specify one and only one of the InstanceType, ResourceId, and QuotaId parameters.
     * @example quota185lqf994k6
     *
     * @var string
     */
    public $quotaId;

    /**
     * @description The region where the resource resides.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $region;

    /**
     * @description The ID of the dedicated resource group. For information about how to query the ID of a dedicated resource group, see [ListResources](https://help.aliyun.com/document_detail/412133.html).
     *
     * >  You must specify one and only one of the InstanceType, ResourceId, and QuotaId parameters.
     * @example eas-r-g55ieatgg3butwrn7a
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The maximum price of preemptible instances in a public resource group.
     *
     * >  If you do not specify this parameter, preemptible instances are not used.
     * @example 10.05
     *
     * @var float
     */
    public $spotPriceLimit;
    protected $_name = [
        'instanceType'   => 'InstanceType',
        'priority'       => 'Priority',
        'quotaId'        => 'QuotaId',
        'region'         => 'Region',
        'resourceId'     => 'ResourceId',
        'spotPriceLimit' => 'SpotPriceLimit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->quotaId) {
            $res['QuotaId'] = $this->quotaId;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->spotPriceLimit) {
            $res['SpotPriceLimit'] = $this->spotPriceLimit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resources
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['QuotaId'])) {
            $model->quotaId = $map['QuotaId'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['SpotPriceLimit'])) {
            $model->spotPriceLimit = $map['SpotPriceLimit'];
        }

        return $model;
    }
}
