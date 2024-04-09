<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\CreateResourceRequest\selfManagedResourceOptions;
use AlibabaCloud\Tea\Model;

class CreateResourceRequest extends Model
{
    /**
     * @description Specifies whether to enable auto-renewal. Valid values: false (default)
     *
     *   true
     *
     * @example false
     *
     * @var bool
     */
    public $autoRenewal;

    /**
     * @description The billing method of the instance. Valid values:
     *
     *   PrePaid: the subscription billing method.
     *   PostPaid: the pay-as-you-go billing method.
     *
     * @example PostPaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @description The number of ECS instances.
     *
     * @example 5
     *
     * @var int
     */
    public $ecsInstanceCount;

    /**
     * @description The type of the Elastic Compute Service (ECS) instance.
     *
     * @example ecs.c6.8xlarge
     *
     * @var string
     */
    public $ecsInstanceType;

    /**
     * @example Dedicated
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var selfManagedResourceOptions
     */
    public $selfManagedResourceOptions;

    /**
     * @description The size of the system disk. Unit: GiB. Valid values: 200 to 2000. Default value: 200.
     *
     * @example 200
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @description The zone to which the instance belongs.
     *
     * @example cn-shanghai-f
     *
     * @var string
     */
    public $zone;
    protected $_name = [
        'autoRenewal'                => 'AutoRenewal',
        'chargeType'                 => 'ChargeType',
        'ecsInstanceCount'           => 'EcsInstanceCount',
        'ecsInstanceType'            => 'EcsInstanceType',
        'resourceType'               => 'ResourceType',
        'selfManagedResourceOptions' => 'SelfManagedResourceOptions',
        'systemDiskSize'             => 'SystemDiskSize',
        'zone'                       => 'Zone',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRenewal) {
            $res['AutoRenewal'] = $this->autoRenewal;
        }
        if (null !== $this->chargeType) {
            $res['ChargeType'] = $this->chargeType;
        }
        if (null !== $this->ecsInstanceCount) {
            $res['EcsInstanceCount'] = $this->ecsInstanceCount;
        }
        if (null !== $this->ecsInstanceType) {
            $res['EcsInstanceType'] = $this->ecsInstanceType;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->selfManagedResourceOptions) {
            $res['SelfManagedResourceOptions'] = null !== $this->selfManagedResourceOptions ? $this->selfManagedResourceOptions->toMap() : null;
        }
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRenewal'])) {
            $model->autoRenewal = $map['AutoRenewal'];
        }
        if (isset($map['ChargeType'])) {
            $model->chargeType = $map['ChargeType'];
        }
        if (isset($map['EcsInstanceCount'])) {
            $model->ecsInstanceCount = $map['EcsInstanceCount'];
        }
        if (isset($map['EcsInstanceType'])) {
            $model->ecsInstanceType = $map['EcsInstanceType'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['SelfManagedResourceOptions'])) {
            $model->selfManagedResourceOptions = selfManagedResourceOptions::fromMap($map['SelfManagedResourceOptions']);
        }
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
