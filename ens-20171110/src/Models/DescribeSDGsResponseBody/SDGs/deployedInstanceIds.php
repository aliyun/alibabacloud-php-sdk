<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeSDGsResponseBody\SDGs;

use AlibabaCloud\Tea\Model;

class deployedInstanceIds extends Model
{
    /**
     * @description The time when the SDG was deployed on the instance.
     *
     * @example 2023-02-27 16:48:43
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The deployment type of the SDG. Valid values:
     *
     *   common: common deployment.
     *   overlay: read/write splitting deployment.
     *
     * @example overlay
     *
     * @var string
     */
    public $deploymentType;

    /**
     * @description The ID of the instance.
     *
     * @example aic-5x20dyeos****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The deployment status. Valid values:
     *
     *   **sdg_deploying**
     *   **failed**
     *   **success**
     *
     * @example sdg_deploying
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'creationTime'   => 'CreationTime',
        'deploymentType' => 'DeploymentType',
        'instanceId'     => 'InstanceId',
        'status'         => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->deploymentType) {
            $res['DeploymentType'] = $this->deploymentType;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return deployedInstanceIds
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DeploymentType'])) {
            $model->deploymentType = $map['DeploymentType'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
