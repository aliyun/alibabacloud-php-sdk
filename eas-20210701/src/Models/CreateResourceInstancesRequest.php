<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Tea\Model;

class CreateResourceInstancesRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $autoRenewal;

    /**
     * @example PrePaid
     *
     * @var string
     */
    public $chargeType;

    /**
     * @example 5
     *
     * @var int
     */
    public $ecsInstanceCount;

    /**
     * @example ecs.s6-c1m2.xlarge
     *
     * @var string
     */
    public $ecsInstanceType;

    /**
     * @example 200
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @example x112223333
     *
     * @var string
     */
    public $userData;

    /**
     * @example cn-shanghai-f
     *
     * @var string
     */
    public $zone;
    protected $_name = [
        'autoRenewal'      => 'AutoRenewal',
        'chargeType'       => 'ChargeType',
        'ecsInstanceCount' => 'EcsInstanceCount',
        'ecsInstanceType'  => 'EcsInstanceType',
        'systemDiskSize'   => 'SystemDiskSize',
        'userData'         => 'UserData',
        'zone'             => 'Zone',
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
        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateResourceInstancesRequest
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
        if (isset($map['SystemDiskSize'])) {
            $model->systemDiskSize = $map['SystemDiskSize'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['Zone'])) {
            $model->zone = $map['Zone'];
        }

        return $model;
    }
}
