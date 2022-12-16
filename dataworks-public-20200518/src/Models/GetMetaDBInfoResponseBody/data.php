<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models\GetMetaDBInfoResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example odps.engine_name
     *
     * @var string
     */
    public $appGuid;

    /**
     * @example abc
     *
     * @var string
     */
    public $clusterBizId;

    /**
     * @var string
     */
    public $comment;

    /**
     * @example 1541576644000
     *
     * @var int
     */
    public $createTime;

    /**
     * @example http://service.odpsstg.aliyun-inc.com/
     *
     * @var string
     */
    public $endpoint;

    /**
     * @example 1
     *
     * @var int
     */
    public $envType;

    /**
     * @example hdfs://
     *
     * @var string
     */
    public $location;

    /**
     * @example 1541576644000
     *
     * @var int
     */
    public $modifyTime;

    /**
     * @example abc
     *
     * @var string
     */
    public $name;

    /**
     * @example 23
     *
     * @var string
     */
    public $ownerId;

    /**
     * @example 323
     *
     * @var string
     */
    public $ownerName;

    /**
     * @example 22
     *
     * @var int
     */
    public $projectId;

    /**
     * @example test
     *
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $projectNameCn;

    /**
     * @example 233
     *
     * @var int
     */
    public $tenantId;

    /**
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
