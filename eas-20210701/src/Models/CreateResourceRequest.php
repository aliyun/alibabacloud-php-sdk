<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\CreateResourceRequest\selfManagedResourceOptions;

class CreateResourceRequest extends Model
{
    /**
     * @var bool
     */
    public $autoRenewal;
    /**
     * @var string
     */
    public $chargeType;
    /**
     * @var int
     */
    public $ecsInstanceCount;
    /**
     * @var string
     */
    public $ecsInstanceType;
    /**
     * @var string[]
     */
    public $labels;
    /**
     * @var string
     */
    public $resourceType;
    /**
     * @var selfManagedResourceOptions
     */
    public $selfManagedResourceOptions;
    /**
     * @var int
     */
    public $systemDiskSize;
    /**
     * @var string
     */
    public $zone;
    protected $_name = [
        'autoRenewal'                => 'AutoRenewal',
        'chargeType'                 => 'ChargeType',
        'ecsInstanceCount'           => 'EcsInstanceCount',
        'ecsInstanceType'            => 'EcsInstanceType',
        'labels'                     => 'Labels',
        'resourceType'               => 'ResourceType',
        'selfManagedResourceOptions' => 'SelfManagedResourceOptions',
        'systemDiskSize'             => 'SystemDiskSize',
        'zone'                       => 'Zone',
    ];

    public function validate()
    {
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (null !== $this->selfManagedResourceOptions) {
            $this->selfManagedResourceOptions->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                foreach ($this->labels as $key1 => $value1) {
                    $res['Labels'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->selfManagedResourceOptions) {
            $res['SelfManagedResourceOptions'] = null !== $this->selfManagedResourceOptions ? $this->selfManagedResourceOptions->toArray($noStream) : $this->selfManagedResourceOptions;
        }

        if (null !== $this->systemDiskSize) {
            $res['SystemDiskSize'] = $this->systemDiskSize;
        }

        if (null !== $this->zone) {
            $res['Zone'] = $this->zone;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                foreach ($map['Labels'] as $key1 => $value1) {
                    $model->labels[$key1] = $value1;
                }
            }
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
