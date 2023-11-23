<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobsResponseBody\trainingJobs;

use AlibabaCloud\SDK\PaiStudio\V20220112\Models\ListTrainingJobsResponseBody\trainingJobs\computeResource\instanceSpec;
use AlibabaCloud\Tea\Model;

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
    protected $_name = [
        'ecsCount'      => 'EcsCount',
        'ecsSpec'       => 'EcsSpec',
        'instanceCount' => 'InstanceCount',
        'instanceSpec'  => 'InstanceSpec',
        'resourceId'    => 'ResourceId',
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

        return $model;
    }
}
