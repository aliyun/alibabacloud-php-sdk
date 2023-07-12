<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryEdgeInstanceResponse\data;

use AlibabaCloud\Tea\Model;

class instanceList extends Model
{
    /**
     * @var bool
     */
    public $bizEnable;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var int
     */
    public $gmtCreateTimestamp;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $gmtModifiedTimestamp;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $latestDeploymentStatus;

    /**
     * @var string
     */
    public $latestDeploymentType;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $roleArn;

    /**
     * @var string
     */
    public $roleAttachTime;

    /**
     * @var int
     */
    public $roleAttachTimestamp;

    /**
     * @var string
     */
    public $roleName;

    /**
     * @var int
     */
    public $spec;

    /**
     * @var string
     */
    public $tags;

    /**
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
        Model::validateRequired('bizEnable', $this->bizEnable, true);
        Model::validateRequired('gmtCreate', $this->gmtCreate, true);
        Model::validateRequired('gmtCreateTimestamp', $this->gmtCreateTimestamp, true);
        Model::validateRequired('gmtModified', $this->gmtModified, true);
        Model::validateRequired('gmtModifiedTimestamp', $this->gmtModifiedTimestamp, true);
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('latestDeploymentStatus', $this->latestDeploymentStatus, true);
        Model::validateRequired('latestDeploymentType', $this->latestDeploymentType, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('roleArn', $this->roleArn, true);
        Model::validateRequired('roleAttachTime', $this->roleAttachTime, true);
        Model::validateRequired('roleAttachTimestamp', $this->roleAttachTimestamp, true);
        Model::validateRequired('roleName', $this->roleName, true);
        Model::validateRequired('spec', $this->spec, true);
        Model::validateRequired('tags', $this->tags, true);
        Model::validateRequired('type', $this->type, true);
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
