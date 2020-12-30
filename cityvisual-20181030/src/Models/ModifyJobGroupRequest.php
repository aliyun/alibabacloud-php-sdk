<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models;

use AlibabaCloud\SDK\Cityvisual\V20181030\Models\ModifyJobGroupRequest\jobGroupParams;
use AlibabaCloud\Tea\Model;

class ModifyJobGroupRequest extends Model
{
    /**
     * @var string
     */
    public $jobGroupName;

    /**
     * @var string
     */
    public $resourceProfileId;

    /**
     * @var string
     */
    public $algoLibId;

    /**
     * @var int
     */
    public $planedJobCount;

    /**
     * @var int
     */
    public $streamPerJob;

    /**
     * @var int
     */
    public $jobCount;

    /**
     * @var string
     */
    public $jobGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var jobGroupParams[]
     */
    public $jobGroupParams;
    protected $_name = [
        'jobGroupName'      => 'JobGroupName',
        'resourceProfileId' => 'ResourceProfileId',
        'algoLibId'         => 'AlgoLibId',
        'planedJobCount'    => 'PlanedJobCount',
        'streamPerJob'      => 'StreamPerJob',
        'jobCount'          => 'JobCount',
        'jobGroupId'        => 'JobGroupId',
        'status'            => 'Status',
        'regionId'          => 'RegionId',
        'instanceId'        => 'InstanceId',
        'jobGroupParams'    => 'JobGroupParams',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobGroupName) {
            $res['JobGroupName'] = $this->jobGroupName;
        }
        if (null !== $this->resourceProfileId) {
            $res['ResourceProfileId'] = $this->resourceProfileId;
        }
        if (null !== $this->algoLibId) {
            $res['AlgoLibId'] = $this->algoLibId;
        }
        if (null !== $this->planedJobCount) {
            $res['PlanedJobCount'] = $this->planedJobCount;
        }
        if (null !== $this->streamPerJob) {
            $res['StreamPerJob'] = $this->streamPerJob;
        }
        if (null !== $this->jobCount) {
            $res['JobCount'] = $this->jobCount;
        }
        if (null !== $this->jobGroupId) {
            $res['JobGroupId'] = $this->jobGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobGroupParams) {
            $res['JobGroupParams'] = [];
            if (null !== $this->jobGroupParams && \is_array($this->jobGroupParams)) {
                $n = 0;
                foreach ($this->jobGroupParams as $item) {
                    $res['JobGroupParams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyJobGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobGroupName'])) {
            $model->jobGroupName = $map['JobGroupName'];
        }
        if (isset($map['ResourceProfileId'])) {
            $model->resourceProfileId = $map['ResourceProfileId'];
        }
        if (isset($map['AlgoLibId'])) {
            $model->algoLibId = $map['AlgoLibId'];
        }
        if (isset($map['PlanedJobCount'])) {
            $model->planedJobCount = $map['PlanedJobCount'];
        }
        if (isset($map['StreamPerJob'])) {
            $model->streamPerJob = $map['StreamPerJob'];
        }
        if (isset($map['JobCount'])) {
            $model->jobCount = $map['JobCount'];
        }
        if (isset($map['JobGroupId'])) {
            $model->jobGroupId = $map['JobGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobGroupParams'])) {
            if (!empty($map['JobGroupParams'])) {
                $model->jobGroupParams = [];
                $n                     = 0;
                foreach ($map['JobGroupParams'] as $item) {
                    $model->jobGroupParams[$n++] = null !== $item ? jobGroupParams::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
