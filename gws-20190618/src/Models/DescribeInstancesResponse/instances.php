<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Gws\V20190618\Models\DescribeInstancesResponse;

use AlibabaCloud\SDK\Gws\V20190618\Models\DescribeInstancesResponse\instances\appList;
use AlibabaCloud\Tea\Model;

class instances extends Model
{
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
    public $clusterId;

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
    public $stoppedMode;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $instanceChargeType;

    /**
     * @var string
     */
    public $instanceType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $expireTime;

    /**
     * @var int
     */
    public $userUid;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $domainName;

    /**
     * @var int
     */
    public $maxBandwidthIn;

    /**
     * @var int
     */
    public $maxBandwidthOut;

    /**
     * @var bool
     */
    public $isBoundUser;

    /**
     * @var appList[]
     */
    public $appList;
    protected $_name = [
        'instanceId'         => 'InstanceId',
        'name'               => 'Name',
        'clusterId'          => 'ClusterId',
        'status'             => 'Status',
        'workMode'           => 'WorkMode',
        'stoppedMode'        => 'StoppedMode',
        'imageId'            => 'ImageId',
        'instanceChargeType' => 'InstanceChargeType',
        'instanceType'       => 'InstanceType',
        'createTime'         => 'CreateTime',
        'expireTime'         => 'ExpireTime',
        'userUid'            => 'UserUid',
        'userName'           => 'UserName',
        'domainName'         => 'DomainName',
        'maxBandwidthIn'     => 'MaxBandwidthIn',
        'maxBandwidthOut'    => 'MaxBandwidthOut',
        'isBoundUser'        => 'IsBoundUser',
        'appList'            => 'AppList',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('clusterId', $this->clusterId, true);
        Model::validateRequired('status', $this->status, true);
        Model::validateRequired('workMode', $this->workMode, true);
        Model::validateRequired('stoppedMode', $this->stoppedMode, true);
        Model::validateRequired('imageId', $this->imageId, true);
        Model::validateRequired('instanceChargeType', $this->instanceChargeType, true);
        Model::validateRequired('instanceType', $this->instanceType, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('expireTime', $this->expireTime, true);
        Model::validateRequired('userUid', $this->userUid, true);
        Model::validateRequired('userName', $this->userName, true);
        Model::validateRequired('domainName', $this->domainName, true);
        Model::validateRequired('maxBandwidthIn', $this->maxBandwidthIn, true);
        Model::validateRequired('maxBandwidthOut', $this->maxBandwidthOut, true);
        Model::validateRequired('isBoundUser', $this->isBoundUser, true);
        Model::validateRequired('appList', $this->appList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
        }
        if (null !== $this->stoppedMode) {
            $res['StoppedMode'] = $this->stoppedMode;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->instanceChargeType) {
            $res['InstanceChargeType'] = $this->instanceChargeType;
        }
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->expireTime) {
            $res['ExpireTime'] = $this->expireTime;
        }
        if (null !== $this->userUid) {
            $res['UserUid'] = $this->userUid;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->maxBandwidthIn) {
            $res['MaxBandwidthIn'] = $this->maxBandwidthIn;
        }
        if (null !== $this->maxBandwidthOut) {
            $res['MaxBandwidthOut'] = $this->maxBandwidthOut;
        }
        if (null !== $this->isBoundUser) {
            $res['IsBoundUser'] = $this->isBoundUser;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }
        if (isset($map['StoppedMode'])) {
            $model->stoppedMode = $map['StoppedMode'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['InstanceChargeType'])) {
            $model->instanceChargeType = $map['InstanceChargeType'];
        }
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ExpireTime'])) {
            $model->expireTime = $map['ExpireTime'];
        }
        if (isset($map['UserUid'])) {
            $model->userUid = $map['UserUid'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['MaxBandwidthIn'])) {
            $model->maxBandwidthIn = $map['MaxBandwidthIn'];
        }
        if (isset($map['MaxBandwidthOut'])) {
            $model->maxBandwidthOut = $map['MaxBandwidthOut'];
        }
        if (isset($map['IsBoundUser'])) {
            $model->isBoundUser = $map['IsBoundUser'];
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

        return $model;
    }
}
