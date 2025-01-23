<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody\computeResource\instanceSpec;
use AlibabaCloud\SDK\PaiStudio\V20220112\Models\GetTrainingJobResponseBody\computeResource\spotSpec;

class computeResource extends Model
{
    /**
     * @var int
     */
    public $ecsCount;
    /**
     * @var string
     */
    public $ecsSpec;
    /**
     * @var int
     */
    public $instanceCount;
    /**
     * @var instanceSpec
     */
    public $instanceSpec;
    /**
     * @var string
     */
    public $resourceId;
    /**
     * @var string
     */
    public $resourceName;
    /**
     * @var spotSpec
     */
    public $spotSpec;
    /**
     * @var bool
     */
    public $useSpotInstance;
    protected $_name = [
        'ecsCount'        => 'EcsCount',
        'ecsSpec'         => 'EcsSpec',
        'instanceCount'   => 'InstanceCount',
        'instanceSpec'    => 'InstanceSpec',
        'resourceId'      => 'ResourceId',
        'resourceName'    => 'ResourceName',
        'spotSpec'        => 'SpotSpec',
        'useSpotInstance' => 'UseSpotInstance',
    ];

    public function validate()
    {
        if (null !== $this->instanceSpec) {
            $this->instanceSpec->validate();
        }
        if (null !== $this->spotSpec) {
            $this->spotSpec->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['InstanceSpec'] = null !== $this->instanceSpec ? $this->instanceSpec->toArray($noStream) : $this->instanceSpec;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }

        if (null !== $this->spotSpec) {
            $res['SpotSpec'] = null !== $this->spotSpec ? $this->spotSpec->toArray($noStream) : $this->spotSpec;
        }

        if (null !== $this->useSpotInstance) {
            $res['UseSpotInstance'] = $this->useSpotInstance;
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

        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
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
