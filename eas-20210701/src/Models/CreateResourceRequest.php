<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\CreateResourceRequest\nodeTolerations;
use AlibabaCloud\Tea\Model;

class CreateResourceRequest extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $autoRenewal;

    /**
     * @example PostPaid
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
     * @example ecs.c6.8xlarge
     *
     * @var string
     */
    public $ecsInstanceType;

    /**
     * @var string
     */
    public $externalClusterId;

    /**
     * @var string[]
     */
    public $nodeMatchLabels;

    /**
     * @var nodeTolerations[]
     */
    public $nodeTolerations;

    /**
     * @var string
     */
    public $resourceType;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @example 200
     *
     * @var int
     */
    public $systemDiskSize;

    /**
     * @example cn-shanghai-f
     *
     * @var string
     */
    public $zone;
    protected $_name = [
        'autoRenewal'       => 'AutoRenewal',
        'chargeType'        => 'ChargeType',
        'ecsInstanceCount'  => 'EcsInstanceCount',
        'ecsInstanceType'   => 'EcsInstanceType',
        'externalClusterId' => 'ExternalClusterId',
        'nodeMatchLabels'   => 'NodeMatchLabels',
        'nodeTolerations'   => 'NodeTolerations',
        'resourceType'      => 'ResourceType',
        'roleName'          => 'RoleName',
        'systemDiskSize'    => 'SystemDiskSize',
        'zone'              => 'Zone',
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
        if (null !== $this->externalClusterId) {
            $res['ExternalClusterId'] = $this->externalClusterId;
        }
        if (null !== $this->nodeMatchLabels) {
            $res['NodeMatchLabels'] = $this->nodeMatchLabels;
        }
        if (null !== $this->nodeTolerations) {
            $res['NodeTolerations'] = [];
            if (null !== $this->nodeTolerations && \is_array($this->nodeTolerations)) {
                $n = 0;
                foreach ($this->nodeTolerations as $item) {
                    $res['NodeTolerations'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
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
        if (isset($map['ExternalClusterId'])) {
            $model->externalClusterId = $map['ExternalClusterId'];
        }
        if (isset($map['NodeMatchLabels'])) {
            $model->nodeMatchLabels = $map['NodeMatchLabels'];
        }
        if (isset($map['NodeTolerations'])) {
            if (!empty($map['NodeTolerations'])) {
                $model->nodeTolerations = [];
                $n                      = 0;
                foreach ($map['NodeTolerations'] as $item) {
                    $model->nodeTolerations[$n++] = null !== $item ? nodeTolerations::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
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
