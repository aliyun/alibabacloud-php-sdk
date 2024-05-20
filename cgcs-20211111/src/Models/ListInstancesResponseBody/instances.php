<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models\ListInstancesResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @example 2023-12-13T11:12:11Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @example huadong
     *
     * @var string
     */
    public $districtId;

    /**
     * @example gcs-bmt0kbn7e013aedg9
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example gcs.r1c1m1.1xlarge
     *
     * @var string
     */
    public $instanceType;

    /**
     * @example 4820372607851300489003
     *
     * @var string
     */
    public $projectId;

    /**
     * @example CREATING
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'creationTime' => 'CreationTime',
        'districtId'   => 'DistrictId',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'projectId'    => 'ProjectId',
        'status'       => 'Status',
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
        if (null !== $this->districtId) {
            $res['DistrictId'] = $this->districtId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instances
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DistrictId'])) {
            $model->districtId = $map['DistrictId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
