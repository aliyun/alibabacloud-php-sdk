<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models\ListCommitsResponseBody\data;

use AlibabaCloud\Tea\Model;

class items extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $commitDigest;

    /**
     * @var string
     */
    public $commitId;

    /**
     * @var string
     */
    public $commitLog;

    /**
     * @var string
     */
    public $commitType;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $mainModuleCommitId;

    /**
     * @var string
     */
    public $mainModuleId;

    /**
     * @var string
     */
    public $modelDataPath;

    /**
     * @var string[]
     */
    public $modelDigest;

    /**
     * @var string
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $moduleId;

    /**
     * @var string
     */
    public $resourceDataPath;

    /**
     * @var string[]
     */
    public $resourceDigest;

    /**
     * @var string
     */
    public $rollbackToCommitId;

    /**
     * @var string
     */
    public $rollbackType;

    /**
     * @var string
     */
    public $schemaVersion;
    protected $_name = [
        'appId'              => 'AppId',
        'commitDigest'       => 'CommitDigest',
        'commitId'           => 'CommitId',
        'commitLog'          => 'CommitLog',
        'commitType'         => 'CommitType',
        'createTime'         => 'CreateTime',
        'mainModuleCommitId' => 'MainModuleCommitId',
        'mainModuleId'       => 'MainModuleId',
        'modelDataPath'      => 'ModelDataPath',
        'modelDigest'        => 'ModelDigest',
        'modifiedTime'       => 'ModifiedTime',
        'moduleId'           => 'ModuleId',
        'resourceDataPath'   => 'ResourceDataPath',
        'resourceDigest'     => 'ResourceDigest',
        'rollbackToCommitId' => 'RollbackToCommitId',
        'rollbackType'       => 'RollbackType',
        'schemaVersion'      => 'SchemaVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->commitDigest) {
            $res['CommitDigest'] = $this->commitDigest;
        }
        if (null !== $this->commitId) {
            $res['CommitId'] = $this->commitId;
        }
        if (null !== $this->commitLog) {
            $res['CommitLog'] = $this->commitLog;
        }
        if (null !== $this->commitType) {
            $res['CommitType'] = $this->commitType;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->mainModuleCommitId) {
            $res['MainModuleCommitId'] = $this->mainModuleCommitId;
        }
        if (null !== $this->mainModuleId) {
            $res['MainModuleId'] = $this->mainModuleId;
        }
        if (null !== $this->modelDataPath) {
            $res['ModelDataPath'] = $this->modelDataPath;
        }
        if (null !== $this->modelDigest) {
            $res['ModelDigest'] = $this->modelDigest;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
        }
        if (null !== $this->resourceDataPath) {
            $res['ResourceDataPath'] = $this->resourceDataPath;
        }
        if (null !== $this->resourceDigest) {
            $res['ResourceDigest'] = $this->resourceDigest;
        }
        if (null !== $this->rollbackToCommitId) {
            $res['RollbackToCommitId'] = $this->rollbackToCommitId;
        }
        if (null !== $this->rollbackType) {
            $res['RollbackType'] = $this->rollbackType;
        }
        if (null !== $this->schemaVersion) {
            $res['SchemaVersion'] = $this->schemaVersion;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return items
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CommitDigest'])) {
            $model->commitDigest = $map['CommitDigest'];
        }
        if (isset($map['CommitId'])) {
            $model->commitId = $map['CommitId'];
        }
        if (isset($map['CommitLog'])) {
            $model->commitLog = $map['CommitLog'];
        }
        if (isset($map['CommitType'])) {
            $model->commitType = $map['CommitType'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['MainModuleCommitId'])) {
            $model->mainModuleCommitId = $map['MainModuleCommitId'];
        }
        if (isset($map['MainModuleId'])) {
            $model->mainModuleId = $map['MainModuleId'];
        }
        if (isset($map['ModelDataPath'])) {
            $model->modelDataPath = $map['ModelDataPath'];
        }
        if (isset($map['ModelDigest'])) {
            $model->modelDigest = $map['ModelDigest'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
        }
        if (isset($map['ResourceDataPath'])) {
            $model->resourceDataPath = $map['ResourceDataPath'];
        }
        if (isset($map['ResourceDigest'])) {
            $model->resourceDigest = $map['ResourceDigest'];
        }
        if (isset($map['RollbackToCommitId'])) {
            $model->rollbackToCommitId = $map['RollbackToCommitId'];
        }
        if (isset($map['RollbackType'])) {
            $model->rollbackType = $map['RollbackType'];
        }
        if (isset($map['SchemaVersion'])) {
            $model->schemaVersion = $map['SchemaVersion'];
        }

        return $model;
    }
}
