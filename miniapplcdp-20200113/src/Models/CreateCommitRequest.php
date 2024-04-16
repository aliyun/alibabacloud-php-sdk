<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Miniapplcdp\V20200113\Models;

use AlibabaCloud\Tea\Model;

class CreateCommitRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $clientToken;

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
    public $mainModuleCommitId;

    /**
     * @var string
     */
    public $moduleId;

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

    /**
     * @var string
     */
    public $source;
    protected $_name = [
        'appId'              => 'AppId',
        'clientToken'        => 'ClientToken',
        'commitLog'          => 'CommitLog',
        'commitType'         => 'CommitType',
        'mainModuleCommitId' => 'MainModuleCommitId',
        'moduleId'           => 'ModuleId',
        'rollbackToCommitId' => 'RollbackToCommitId',
        'rollbackType'       => 'RollbackType',
        'schemaVersion'      => 'SchemaVersion',
        'source'             => 'Source',
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
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->commitLog) {
            $res['CommitLog'] = $this->commitLog;
        }
        if (null !== $this->commitType) {
            $res['CommitType'] = $this->commitType;
        }
        if (null !== $this->mainModuleCommitId) {
            $res['MainModuleCommitId'] = $this->mainModuleCommitId;
        }
        if (null !== $this->moduleId) {
            $res['ModuleId'] = $this->moduleId;
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
        if (null !== $this->source) {
            $res['Source'] = $this->source;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCommitRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['CommitLog'])) {
            $model->commitLog = $map['CommitLog'];
        }
        if (isset($map['CommitType'])) {
            $model->commitType = $map['CommitType'];
        }
        if (isset($map['MainModuleCommitId'])) {
            $model->mainModuleCommitId = $map['MainModuleCommitId'];
        }
        if (isset($map['ModuleId'])) {
            $model->moduleId = $map['ModuleId'];
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
        if (isset($map['Source'])) {
            $model->source = $map['Source'];
        }

        return $model;
    }
}
