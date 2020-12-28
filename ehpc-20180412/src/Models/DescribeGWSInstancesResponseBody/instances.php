<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeGWSInstancesResponseBody;

use AlibabaCloud\SDK\EHPC\V20180412\Models\DescribeGWSInstancesResponseBody\instances\appList;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var appList[]
     */
    public $appList;

    /**
     * @var string
     */
    public $workMode;

    /**
     * @var string
     */
    public $expireTime;

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
    public $name;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'status'       => 'Status',
        'appList'      => 'AppList',
        'workMode'     => 'WorkMode',
        'expireTime'   => 'ExpireTime',
        'createTime'   => 'CreateTime',
        'instanceId'   => 'InstanceId',
        'name'         => 'Name',
        'instanceType' => 'InstanceType',
        'userName'     => 'UserName',
        'clusterId'    => 'ClusterId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->appList) {
            $res['AppList'] = [];
            if (null !== $this->appList && \is_array($this->appList)) {
                $n = 0;
                foreach ($this->appList as $item) {
                    $res['AppList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['AppList'])) {
            if (!empty($map['AppList'])) {
                $model->appList = [];
                $n              = 0;
                foreach ($map['AppList'] as $item) {
                    $model->appList[$n++] = null !== $item ? appList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
