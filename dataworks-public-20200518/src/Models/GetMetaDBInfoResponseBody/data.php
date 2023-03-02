<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaDBInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the compute engine instance. The ID is in the Engine type.Engine name format.
     *
     * @example odps.engine_name
     *
     * @var string
     */
    public $appGuid;

    /**
     * @description The ID of the EMR cluster. This parameter is returned only for an EMR compute engine instance.
     *
     * @example abc
     *
     * @var string
     */
    public $clusterBizId;

    /**
     * @description The comment.
     *
     * @example test table
     *
     * @var string
     */
    public $comment;

    /**
     * @description The time when the compute engine instance was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1541576644000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The endpoint of the service.
     *
     * @example http://service.odpsstg.aliyun-inc.com/
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The type of the environment. Valid values: 0 and 1. The value 0 indicates the development environment. The value 1 indicates the production environment.
     *
     * @example 1
     *
     * @var int
     */
    public $envType;

    /**
     * @description The storage path of the metadatabase of the EMR cluster.
     *
     * @example hdfs://
     *
     * @var string
     */
    public $location;

    /**
     * @description The time when the compute engine instance was modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1541576644000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @description The name of the metadatabase.
     *
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @description The ID of the Alibaba Cloud account used by the workspace owner.
     *
     * @example 23
     *
     * @var string
     */
    public $ownerId;

    /**
     * @description The name of the workspace owner.
     *
     * @example 323
     *
     * @var string
     */
    public $ownerName;

    /**
     * @description The ID of the workspace.
     *
     * @example 22
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The name of the workspace.
     *
     * @example test
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The display name of the workspace.
     *
     * @example Test items
     *
     * @var string
     */
    public $projectNameCn;

    /**
     * @description The ID of the tenant.
     *
     * @example 233
     *
     * @var int
     */
    public $tenantId;

    /**
     * @description The type of the metadatabase. Only hive is supported.
     *
     * @example hive
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'appGuid'       => 'AppGuid',
        'clusterBizId'  => 'ClusterBizId',
        'comment'       => 'Comment',
        'createTime'    => 'CreateTime',
        'endpoint'      => 'Endpoint',
        'envType'       => 'EnvType',
        'location'      => 'Location',
        'modifyTime'    => 'ModifyTime',
        'name'          => 'Name',
        'ownerId'       => 'OwnerId',
        'ownerName'     => 'OwnerName',
        'projectId'     => 'ProjectId',
        'projectName'   => 'ProjectName',
        'projectNameCn' => 'ProjectNameCn',
        'tenantId'      => 'TenantId',
        'type'          => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appGuid) {
            $res['AppGuid'] = $this->appGuid;
        }
        if (null !== $this->clusterBizId) {
            $res['ClusterBizId'] = $this->clusterBizId;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->envType) {
            $res['EnvType'] = $this->envType;
        }
        if (null !== $this->location) {
            $res['Location'] = $this->location;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->ownerName) {
            $res['OwnerName'] = $this->ownerName;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->projectNameCn) {
            $res['ProjectNameCn'] = $this->projectNameCn;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['ClusterBizId'])) {
            $model->clusterBizId = $map['ClusterBizId'];
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['EnvType'])) {
            $model->envType = $map['EnvType'];
        }
        if (isset($map['Location'])) {
            $model->location = $map['Location'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['OwnerName'])) {
            $model->ownerName = $map['OwnerName'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['ProjectNameCn'])) {
            $model->projectNameCn = $map['ProjectNameCn'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
