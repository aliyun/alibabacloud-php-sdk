<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaDBInfoResponse;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $appGuid;

    /**
     * @var int
     */
    public $tenantId;

    /**
     * @var string
     */
    public $endpoint;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var int
     */
    public $envType;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $projectNameCn;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $ownerName;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $location;

    /**
     * @var string
     */
    public $clusterBizId;
    protected $_name = [
        'appGuid'       => 'AppGuid',
        'tenantId'      => 'TenantId',
        'endpoint'      => 'Endpoint',
        'projectId'     => 'ProjectId',
        'envType'       => 'EnvType',
        'projectName'   => 'ProjectName',
        'projectNameCn' => 'ProjectNameCn',
        'createTime'    => 'CreateTime',
        'modifyTime'    => 'ModifyTime',
        'ownerId'       => 'OwnerId',
        'ownerName'     => 'OwnerName',
        'name'          => 'Name',
        'type'          => 'Type',
        'comment'       => 'Comment',
        'location'      => 'Location',
        'clusterBizId'  => 'ClusterBizId',
    ];

    public function validate()
    {
        Model::validateRequired('appGuid', $this->appGuid, true);
        Model::validateRequired('tenantId', $this->tenantId, true);
        Model::validateRequired('endpoint', $this->endpoint, true);
        Model::validateRequired('projectId', $this->projectId, true);
        Model::validateRequired('envType', $this->envType, true);
        Model::validateRequired('projectName', $this->projectName, true);
        Model::validateRequired('projectNameCn', $this->projectNameCn, true);
        Model::validateRequired('createTime', $this->createTime, true);
        Model::validateRequired('modifyTime', $this->modifyTime, true);
        Model::validateRequired('ownerId', $this->ownerId, true);
        Model::validateRequired('ownerName', $this->ownerName, true);
        Model::validateRequired('name', $this->name, true);
        Model::validateRequired('type', $this->type, true);
        Model::validateRequired('comment', $this->comment, true);
        Model::validateRequired('location', $this->location, true);
        Model::validateRequired('clusterBizId', $this->clusterBizId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGuid) {
            $res['AppGuid'] = $this->appGuid;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectNameCn) {
            $res['ProjectNameCn'] = $this->projectNameCn;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->clusterBizId) {
            $res['ClusterBizId'] = $this->clusterBizId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppGuid'])) {
            $model->appGuid = $map['AppGuid'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectNameCn'])) {
            $model->projectNameCn = $map['ProjectNameCn'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['ClusterBizId'])) {
            $model->clusterBizId = $map['ClusterBizId'];
        }

        return $model;
    }
}
