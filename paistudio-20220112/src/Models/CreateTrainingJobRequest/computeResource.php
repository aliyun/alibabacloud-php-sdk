<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest;

use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest\computeResource\instanceSpec;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\CreateTrainingJobRequest\computeResource\spotSpec;
use AlibabaCloud\Tea\Model;

class computeResource extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $ecsCount;

    /**
     * @example ecs.gn5-c8g1.2xlarge
     *
     * @var string
     */
    public $ecsSpec;

    /**
     * @example 1
     *
     * @var int
     */
    public $instanceCount;

    /**
     * @var instanceSpec
     */
    public $instanceSpec;

    /**
     * @example quotam670lixikcs
     *
     * @var string
     */
    public $resourceId;

    /**
     * @var spotSpec
     */
    public $spotSpec;

    /**
     * @example true
     *
     * @var bool
     */
    public $useSpotInstance;
    protected $_name = [
        'ecsCount'        => 'EcsCount',
        'ecsSpec'         => 'EcsSpec',
        'instanceCount'   => 'InstanceCount',
        'instanceSpec'    => 'InstanceSpec',
        'resourceId'      => 'ResourceId',
        'spotSpec'        => 'SpotSpec',
        'useSpotInstance' => 'UseSpotInstance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ecsCount) {
            $res['EcsCount'] = $this->ecsCount;
        }
        if (null !== $this->ecsSpec) {
            $res['EcsSpec'] = $this->ecsSpec;
        }
        if (null !== $this->instanceCount) {
            $res['InstanceCount'] = $this->instanceCount;
        }
        if (null !== $this->instanceSpec) {
            $res['InstanceSpec'] = null !== $this->instanceSpec ? $this->instanceSpec->toMap() : null;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->spotSpec) {
            $res['SpotSpec'] = null !== $this->spotSpec ? $this->spotSpec->toMap() : null;
        }
        if (null !== $this->useSpotInstance) {
            $res['UseSpotInstance'] = $this->useSpotInstance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return computeResource
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EcsCount'])) {
            $model->ecsCount = $map['EcsCount'];
        }
        if (isset($map['EcsSpec'])) {
            $model->ecsSpec = $map['EcsSpec'];
        }
        if (isset($map['InstanceCount'])) {
            $model->instanceCount = $map['InstanceCount'];
        }
        if (isset($map['InstanceSpec'])) {
            $model->instanceSpec = instanceSpec::fromMap($map['InstanceSpec']);
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['SpotSpec'])) {
            $model->spotSpec = spotSpec::fromMap($map['SpotSpec']);
        }
        if (isset($map['UseSpotInstance'])) {
            $model->useSpotInstance = $map['UseSpotInstance'];
        }

        return $model;
    }
}
