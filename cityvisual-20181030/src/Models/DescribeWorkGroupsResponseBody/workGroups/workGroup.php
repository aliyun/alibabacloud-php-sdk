<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cityvisual\V20181030\Models\DescribeWorkGroupsResponseBody\workGroups;

use AlibabaCloud\Tea\Model;

class workGroup extends Model
{
    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $protocol;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $theoryCutStatus;

    /**
     * @var string
     */
    public $workGroupId;

    /**
     * @var string
     */
    public $workGroupName;
    protected $_name = [
        'updateTime'      => 'UpdateTime',
        'description'     => 'Description',
        'protocol'        => 'Protocol',
        'createTime'      => 'CreateTime',
        'instanceId'      => 'InstanceId',
        'theoryCutStatus' => 'TheoryCutStatus',
        'workGroupId'     => 'WorkGroupId',
        'workGroupName'   => 'WorkGroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->protocol) {
            $res['Protocol'] = $this->protocol;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->theoryCutStatus) {
            $res['TheoryCutStatus'] = $this->theoryCutStatus;
        }
        if (null !== $this->workGroupId) {
            $res['WorkGroupId'] = $this->workGroupId;
        }
        if (null !== $this->workGroupName) {
            $res['WorkGroupName'] = $this->workGroupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Protocol'])) {
            $model->protocol = $map['Protocol'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TheoryCutStatus'])) {
            $model->theoryCutStatus = $map['TheoryCutStatus'];
        }
        if (isset($map['WorkGroupId'])) {
            $model->workGroupId = $map['WorkGroupId'];
        }
        if (isset($map['WorkGroupName'])) {
            $model->workGroupName = $map['WorkGroupName'];
        }

        return $model;
    }
}
