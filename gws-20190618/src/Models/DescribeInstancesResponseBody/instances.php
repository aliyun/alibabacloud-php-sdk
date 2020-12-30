<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models\DescribeInstancesResponseBody;

use AlibabaCloud\SDK\Gws\V20190618\Models\DescribeInstancesResponseBody\instances\appList;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
    /**
     * @var string
     */
    public $status;

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
    public $stoppedMode;

    /**
     * @var int
     */
    public $userUid;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var appList[]
     */
    public $appList;

    /**
     * @var int
     */
    public $maxBandwidthIn;

    /**
     * @var bool
     */
    public $isBoundUser;

    /**
     * @var int
     */
    public $maxBandwidthOut;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $clusterId;
    protected $_name = [
        'status'             => 'Status',
        'workMode'           => 'WorkMode',
        'expireTime'         => 'ExpireTime',
        'createTime'         => 'CreateTime',
        'stoppedMode'        => 'StoppedMode',
        'userUid'            => 'UserUid',
        'instanceId'         => 'InstanceId',
        'instanceType'       => 'InstanceType',
        'domainName'         => 'DomainName',
        'instanceChargeType' => 'InstanceChargeType',
        'appList'            => 'AppList',
        'maxBandwidthIn'     => 'MaxBandwidthIn',
        'isBoundUser'        => 'IsBoundUser',
        'maxBandwidthOut'    => 'MaxBandwidthOut',
        'name'               => 'Name',
        'userName'           => 'UserName',
        'imageId'            => 'ImageId',
        'clusterId'          => 'ClusterId',
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
        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->stoppedMode) {
            $res['StoppedMode'] = $this->stoppedMode;
        }
        if (null !== $this->userUid) {
            $res['UserUid'] = $this->userUid;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
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
        if (null !== $this->maxBandwidthIn) {
            $res['MaxBandwidthIn'] = $this->maxBandwidthIn;
        }
        if (null !== $this->isBoundUser) {
            $res['IsBoundUser'] = $this->isBoundUser;
        }
        if (null !== $this->maxBandwidthOut) {
            $res['MaxBandwidthOut'] = $this->maxBandwidthOut;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
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
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['StoppedMode'])) {
            $model->stoppedMode = $map['StoppedMode'];
        }
        if (isset($map['UserUid'])) {
            $model->userUid = $map['UserUid'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
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
        if (isset($map['MaxBandwidthIn'])) {
            $model->maxBandwidthIn = $map['MaxBandwidthIn'];
        }
        if (isset($map['IsBoundUser'])) {
            $model->isBoundUser = $map['IsBoundUser'];
        }
        if (isset($map['MaxBandwidthOut'])) {
            $model->maxBandwidthOut = $map['MaxBandwidthOut'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }

        return $model;
    }
}
