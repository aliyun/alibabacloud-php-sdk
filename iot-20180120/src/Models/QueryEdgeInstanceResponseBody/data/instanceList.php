<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceResponseBody\data;

use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @description The time when the edge instance was created.
     *
     * @example true
     *
     * @var bool
     */
    public $bizEnable;

    /**
     * @description The name of the edge instance.
     *
     * @example 2019-07-17 14:34:28
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 1581912859713
     *
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @description The type of the latest deployment task.
     *
     *   deploy: deploys the edge instance.
     *   Reset: resets the edge instance.
     *
     * @example 2019-07-17 14:51:38
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 1581912859713
     *
     * @var int
     */
    public $gmtModifiedTimestamp;

    /**
     * @description The name of the RAM role.
     *
     * @example 9iqyQAKDb2aYGVKa****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Indicates whether the edge instance was enabled.
     *
     *   true: enabled
     *   false: disabled
     *
     * @example 1
     *
     * @var int
     */
    public $latestDeploymentStatus;

    /**
     * @description The status of the latest deployment task.
     *
     *   0: The task has not started.
     *   1: The task is being processed.
     *   2: The task was successful.
     *   3: The task failed.
     *
     * @example deploy
     *
     * @var string
     */
    public $latestDeploymentType;

    /**
     * @example test_le1
     *
     * @var string
     */
    public $name;

    /**
     * @description The time when the RAM role was attached to IoT Platform.
     *
     * @example acs:ram::1473922805******:role/aliyuniotaccessingfcrole
     *
     * @var string
     */
    public $roleArn;

    /**
     * @description The specification of the edge instance.
     *
     *   10: Lite Edition.
     *   20: Standard Edition.
     *   30: Pro Edition.
     *
     * @example 2020-02-19 11:25:48
     *
     * @var string
     */
    public $roleAttachTime;

    /**
     * @example 1581912859713
     *
     * @var int
     */
    public $roleAttachTimestamp;

    /**
     * @description The time when the edge instance was last updated.
     *
     * @example AliyunIOTAccessingFCRole
     *
     * @var string
     */
    public $roleName;

    /**
     * @description The tags of the edge instance.
     *
     * @example 30
     *
     * @var int
     */
    public $spec;

    /**
     * @description The ID of the edge instance.
     *
     * @example k1:v1,k2:v2
     *
     * @var string
     */
    public $tags;

    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the RAM role.
     *
     * @example 0
     *
     * @var int
     */
    public $type;
    protected $_name = [
        'bizEnable'              => 'BizEnable',
        'gmtCreate'              => 'GmtCreate',
        'gmtCreateTimestamp'     => 'GmtCreateTimestamp',
        'gmtModified'            => 'GmtModified',
        'gmtModifiedTimestamp'   => 'GmtModifiedTimestamp',
        'instanceId'             => 'InstanceId',
        'latestDeploymentStatus' => 'LatestDeploymentStatus',
        'latestDeploymentType'   => 'LatestDeploymentType',
        'name'                   => 'Name',
        'roleArn'                => 'RoleArn',
        'roleAttachTime'         => 'RoleAttachTime',
        'roleAttachTimestamp'    => 'RoleAttachTimestamp',
        'roleName'               => 'RoleName',
        'spec'                   => 'Spec',
        'tags'                   => 'Tags',
        'type'                   => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizEnable) {
            $res['BizEnable'] = $this->bizEnable;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtCreateTimestamp) {
            $res['GmtCreateTimestamp'] = $this->gmtCreateTimestamp;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtModifiedTimestamp) {
            $res['GmtModifiedTimestamp'] = $this->gmtModifiedTimestamp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->latestDeploymentStatus) {
            $res['LatestDeploymentStatus'] = $this->latestDeploymentStatus;
        }
        if (null !== $this->latestDeploymentType) {
            $res['LatestDeploymentType'] = $this->latestDeploymentType;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->roleArn) {
            $res['RoleArn'] = $this->roleArn;
        }
        if (null !== $this->roleAttachTime) {
            $res['RoleAttachTime'] = $this->roleAttachTime;
        }
        if (null !== $this->roleAttachTimestamp) {
            $res['RoleAttachTimestamp'] = $this->roleAttachTimestamp;
        }
        if (null !== $this->roleName) {
            $res['RoleName'] = $this->roleName;
        }
        if (null !== $this->spec) {
            $res['Spec'] = $this->spec;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizEnable'])) {
            $model->bizEnable = $map['BizEnable'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtCreateTimestamp'])) {
            $model->gmtCreateTimestamp = $map['GmtCreateTimestamp'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GmtModifiedTimestamp'])) {
            $model->gmtModifiedTimestamp = $map['GmtModifiedTimestamp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LatestDeploymentStatus'])) {
            $model->latestDeploymentStatus = $map['LatestDeploymentStatus'];
        }
        if (isset($map['LatestDeploymentType'])) {
            $model->latestDeploymentType = $map['LatestDeploymentType'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RoleArn'])) {
            $model->roleArn = $map['RoleArn'];
        }
        if (isset($map['RoleAttachTime'])) {
            $model->roleAttachTime = $map['RoleAttachTime'];
        }
        if (isset($map['RoleAttachTimestamp'])) {
            $model->roleAttachTimestamp = $map['RoleAttachTimestamp'];
        }
        if (isset($map['RoleName'])) {
            $model->roleName = $map['RoleName'];
        }
        if (isset($map['Spec'])) {
            $model->spec = $map['Spec'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
