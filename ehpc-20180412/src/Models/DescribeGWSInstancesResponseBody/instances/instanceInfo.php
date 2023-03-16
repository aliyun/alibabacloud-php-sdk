<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeGWSInstancesResponseBody\instances;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeGWSInstancesResponseBody\instances\instanceInfo\appList;
use AlibabaCloud\Tea\Model;

class instanceInfo extends Model
{
    /**
     * @description The list of application information.
     *
     * >  If the WorkMode parameter is set to Desktop, an empty value is returned in this parameter.
     * @var appList
     */
    public $appList;

    /**
     * @description The ID of the visualizatio service.
     *
     * @example gws-rhz99q8rc****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The time when the visualization instance was created.
     *
     * @example 2020-02-03T14:03Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the visualization instance expires.
     *
     * @example 2099-12-31T15:59Z
     *
     * @var string
     */
    public $expireTime;

    /**
     * @description The ID of the visualization instance.
     *
     * @example i-bp1bzqq1ddeemuddn****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The type of the visualization instance.
     *
     * @example ecs.g6.large
     *
     * @var string
     */
    public $instanceType;

    /**
     * @description The name of the visualization instance.
     *
     * @example c0-i01-1-g6-2c8g
     *
     * @var string
     */
    public $name;

    /**
     * @description The status of the visualization instance. Valid values:
     *
     *   Creating: The instance is being created.
     *   Starting: The instance is being started.
     *   Stopping: The instance is being stopped.
     *   Stopped: The instance is stopped.
     *   Initializing: The instance is being initialized.
     *   Unregistered: The instance is not registered.
     *   Registered: The instance is registered.
     *   InUse: The instance is in use.
     *   Missing: The instance cannot be found.
     *   Cloning: An image is being generated based on the instance.
     *
     * @example Creating
     *
     * @var string
     */
    public $status;

    /**
     * @description The username of the entity to which the visualization instance is assigned.
     *
     * >  If the instance is not assigned to a specified user, this parameter is empty.
     * @example user-****
     *
     * @var string
     */
    public $userName;

    /**
     * @description The working mode of the visualization instance. Valid values:
     *
     *   Desktop
     *   Application
     *
     * @example Desktop
     *
     * @var string
     */
    public $workMode;
    protected $_name = [
        'appList'      => 'AppList',
        'clusterId'    => 'ClusterId',
        'createTime'   => 'CreateTime',
        'expireTime'   => 'ExpireTime',
        'instanceId'   => 'InstanceId',
        'instanceType' => 'InstanceType',
        'name'         => 'Name',
        'status'       => 'Status',
        'userName'     => 'UserName',
        'workMode'     => 'WorkMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appList) {
            $res['AppList'] = null !== $this->appList ? $this->appList->toMap() : null;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppList'])) {
            $model->appList = appList::fromMap($map['AppList']);
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }

        return $model;
    }
}
