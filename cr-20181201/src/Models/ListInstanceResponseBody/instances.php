<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cr\V20181201\Models\ListInstanceResponseBody;

use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @example 1562849679000
     *
     * @var string
     */
    public $createTime;

    /**
     * @example cri-sgedpenzw80e****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceIssue;

    /**
     * @example test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @example Enterprise_Basic
     *
     * @var string
     */
    public $instanceSpecification;

    /**
     * @example RUNNING
     *
     * @var string
     */
    public $instanceStatus;

    /**
     * @example 1562849760000
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceGroupId;
    protected $_name = [
        'createTime'            => 'CreateTime',
        'instanceId'            => 'InstanceId',
        'instanceIssue'         => 'InstanceIssue',
        'instanceName'          => 'InstanceName',
        'instanceSpecification' => 'InstanceSpecification',
        'instanceStatus'        => 'InstanceStatus',
        'modifiedTime'          => 'ModifiedTime',
        'regionId'              => 'RegionId',
        'resourceGroupId'       => 'ResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceIssue) {
            $res['InstanceIssue'] = $this->instanceIssue;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->instanceSpecification) {
            $res['InstanceSpecification'] = $this->instanceSpecification;
        }
        if (null !== $this->instanceStatus) {
            $res['InstanceStatus'] = $this->instanceStatus;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceIssue'])) {
            $model->instanceIssue = $map['InstanceIssue'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['InstanceSpecification'])) {
            $model->instanceSpecification = $map['InstanceSpecification'];
        }
        if (isset($map['InstanceStatus'])) {
            $model->instanceStatus = $map['InstanceStatus'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }

        return $model;
    }
}
