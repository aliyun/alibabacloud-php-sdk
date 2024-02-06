<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGDeploymentStatusResponseBody;

use AlibabaCloud\Tea\Model;

class deploymentStatus extends Model
{
    /**
     * @description The ID of the instance
     *
     * @example aic-xxxx
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The deployment type.
     *
     * Valid values:
     *
     *   overlay
     *
     * .
     *
     *   common
     *
     * .
     * @example overlay
     *
     * @var string
     */
    public $mountType;

    /**
     * @description The ID of the node.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The deployment status of the SDG.
     *
     * Valid values:
     *
     *   sdg_deploying
     *
     * <!-- -->
     *
     *   success
     *
     * <!-- -->
     *
     *   failed
     *
     * <!-- -->
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the status was last updated.
     *
     * @example 2023-02-17T02:44:31Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'mountType'  => 'MountType',
        'regionId'   => 'RegionId',
        'status'     => 'Status',
        'updateTime' => 'UpdateTime',
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
        if (null !== $this->mountType) {
            $res['MountType'] = $this->mountType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deploymentStatus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MountType'])) {
            $model->mountType = $map['MountType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
