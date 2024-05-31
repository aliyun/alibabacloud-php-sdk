<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Tea\Model;

class Task extends Model
{
    /**
     * @var string[]
     */
    public $archives;

    /**
     * @var string
     */
    public $artifactUrl;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $categoryBizId;

    /**
     * @var string
     */
    public $content;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $creator;

    /**
     * @var string
     */
    public $defaultCatalogId;

    /**
     * @var string
     */
    public $defaultDatabase;

    /**
     * @var string
     */
    public $defaultResourceQueueId;

    /**
     * @var string
     */
    public $defaultSqlComputeId;

    /**
     * @var string
     */
    public $deploymentId;

    /**
     * @var string[]
     */
    public $extraArtifactIds;

    /**
     * @var string
     */
    public $extraSparkSubmitParams;

    /**
     * @var string[]
     */
    public $files;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $gmtCreated;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @var bool
     */
    public $hasChanged;

    /**
     * @description This parameter is required.
     *
     * @var bool
     */
    public $hasCommited;

    /**
     * @var bool
     */
    public $isStreaming;

    /**
     * @var string[]
     */
    public $jars;

    /**
     * @var string
     */
    public $lastRunResourceQueueId;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $modifier;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $pyFiles;

    /**
     * @example 100
     *
     * @var string
     */
    public $sparkArgs;

    /**
     * @var SparkConf[]
     */
    public $sparkConf;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $sparkDriverCores;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $sparkDriverMemory;

    /**
     * @var string
     */
    public $sparkEntrypoint;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $sparkExecutorCores;

    /**
     * @description This parameter is required.
     *
     * @var int
     */
    public $sparkExecutorMemory;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $sparkLogLevel;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $sparkLogPath;

    /**
     * @var string
     */
    public $sparkSubmitClause;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $sparkVersion;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'archives'               => 'archives',
        'artifactUrl'            => 'artifactUrl',
        'bizId'                  => 'bizId',
        'categoryBizId'          => 'categoryBizId',
        'content'                => 'content',
        'creator'                => 'creator',
        'defaultCatalogId'       => 'defaultCatalogId',
        'defaultDatabase'        => 'defaultDatabase',
        'defaultResourceQueueId' => 'defaultResourceQueueId',
        'defaultSqlComputeId'    => 'defaultSqlComputeId',
        'deploymentId'           => 'deploymentId',
        'extraArtifactIds'       => 'extraArtifactIds',
        'extraSparkSubmitParams' => 'extraSparkSubmitParams',
        'files'                  => 'files',
        'gmtCreated'             => 'gmtCreated',
        'gmtModified'            => 'gmtModified',
        'hasChanged'             => 'hasChanged',
        'hasCommited'            => 'hasCommited',
        'isStreaming'            => 'isStreaming',
        'jars'                   => 'jars',
        'lastRunResourceQueueId' => 'lastRunResourceQueueId',
        'modifier'               => 'modifier',
        'name'                   => 'name',
        'pyFiles'                => 'pyFiles',
        'sparkArgs'              => 'sparkArgs',
        'sparkConf'              => 'sparkConf',
        'sparkDriverCores'       => 'sparkDriverCores',
        'sparkDriverMemory'      => 'sparkDriverMemory',
        'sparkEntrypoint'        => 'sparkEntrypoint',
        'sparkExecutorCores'     => 'sparkExecutorCores',
        'sparkExecutorMemory'    => 'sparkExecutorMemory',
        'sparkLogLevel'          => 'sparkLogLevel',
        'sparkLogPath'           => 'sparkLogPath',
        'sparkSubmitClause'      => 'sparkSubmitClause',
        'sparkVersion'           => 'sparkVersion',
        'tags'                   => 'tags',
        'type'                   => 'type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->archives) {
            $res['archives'] = $this->archives;
        }
        if (null !== $this->artifactUrl) {
            $res['artifactUrl'] = $this->artifactUrl;
        }
        if (null !== $this->bizId) {
            $res['bizId'] = $this->bizId;
        }
        if (null !== $this->categoryBizId) {
            $res['categoryBizId'] = $this->categoryBizId;
        }
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }
        if (null !== $this->creator) {
            $res['creator'] = $this->creator;
        }
        if (null !== $this->defaultCatalogId) {
            $res['defaultCatalogId'] = $this->defaultCatalogId;
        }
        if (null !== $this->defaultDatabase) {
            $res['defaultDatabase'] = $this->defaultDatabase;
        }
        if (null !== $this->defaultResourceQueueId) {
            $res['defaultResourceQueueId'] = $this->defaultResourceQueueId;
        }
        if (null !== $this->defaultSqlComputeId) {
            $res['defaultSqlComputeId'] = $this->defaultSqlComputeId;
        }
        if (null !== $this->deploymentId) {
            $res['deploymentId'] = $this->deploymentId;
        }
        if (null !== $this->extraArtifactIds) {
            $res['extraArtifactIds'] = $this->extraArtifactIds;
        }
        if (null !== $this->extraSparkSubmitParams) {
            $res['extraSparkSubmitParams'] = $this->extraSparkSubmitParams;
        }
        if (null !== $this->files) {
            $res['files'] = $this->files;
        }
        if (null !== $this->gmtCreated) {
            $res['gmtCreated'] = $this->gmtCreated;
        }
        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }
        if (null !== $this->hasChanged) {
            $res['hasChanged'] = $this->hasChanged;
        }
        if (null !== $this->hasCommited) {
            $res['hasCommited'] = $this->hasCommited;
        }
        if (null !== $this->isStreaming) {
            $res['isStreaming'] = $this->isStreaming;
        }
        if (null !== $this->jars) {
            $res['jars'] = $this->jars;
        }
        if (null !== $this->lastRunResourceQueueId) {
            $res['lastRunResourceQueueId'] = $this->lastRunResourceQueueId;
        }
        if (null !== $this->modifier) {
            $res['modifier'] = $this->modifier;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->pyFiles) {
            $res['pyFiles'] = $this->pyFiles;
        }
        if (null !== $this->sparkArgs) {
            $res['sparkArgs'] = $this->sparkArgs;
        }
        if (null !== $this->sparkConf) {
            $res['sparkConf'] = [];
            if (null !== $this->sparkConf && \is_array($this->sparkConf)) {
                $n = 0;
                foreach ($this->sparkConf as $item) {
                    $res['sparkConf'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sparkDriverCores) {
            $res['sparkDriverCores'] = $this->sparkDriverCores;
        }
        if (null !== $this->sparkDriverMemory) {
            $res['sparkDriverMemory'] = $this->sparkDriverMemory;
        }
        if (null !== $this->sparkEntrypoint) {
            $res['sparkEntrypoint'] = $this->sparkEntrypoint;
        }
        if (null !== $this->sparkExecutorCores) {
            $res['sparkExecutorCores'] = $this->sparkExecutorCores;
        }
        if (null !== $this->sparkExecutorMemory) {
            $res['sparkExecutorMemory'] = $this->sparkExecutorMemory;
        }
        if (null !== $this->sparkLogLevel) {
            $res['sparkLogLevel'] = $this->sparkLogLevel;
        }
        if (null !== $this->sparkLogPath) {
            $res['sparkLogPath'] = $this->sparkLogPath;
        }
        if (null !== $this->sparkSubmitClause) {
            $res['sparkSubmitClause'] = $this->sparkSubmitClause;
        }
        if (null !== $this->sparkVersion) {
            $res['sparkVersion'] = $this->sparkVersion;
        }
        if (null !== $this->tags) {
            $res['tags'] = $this->tags;
        }
        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return Task
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['archives'])) {
            if (!empty($map['archives'])) {
                $model->archives = $map['archives'];
            }
        }
        if (isset($map['artifactUrl'])) {
            $model->artifactUrl = $map['artifactUrl'];
        }
        if (isset($map['bizId'])) {
            $model->bizId = $map['bizId'];
        }
        if (isset($map['categoryBizId'])) {
            $model->categoryBizId = $map['categoryBizId'];
        }
        if (isset($map['content'])) {
            $model->content = $map['content'];
        }
        if (isset($map['creator'])) {
            $model->creator = $map['creator'];
        }
        if (isset($map['defaultCatalogId'])) {
            $model->defaultCatalogId = $map['defaultCatalogId'];
        }
        if (isset($map['defaultDatabase'])) {
            $model->defaultDatabase = $map['defaultDatabase'];
        }
        if (isset($map['defaultResourceQueueId'])) {
            $model->defaultResourceQueueId = $map['defaultResourceQueueId'];
        }
        if (isset($map['defaultSqlComputeId'])) {
            $model->defaultSqlComputeId = $map['defaultSqlComputeId'];
        }
        if (isset($map['deploymentId'])) {
            $model->deploymentId = $map['deploymentId'];
        }
        if (isset($map['extraArtifactIds'])) {
            if (!empty($map['extraArtifactIds'])) {
                $model->extraArtifactIds = $map['extraArtifactIds'];
            }
        }
        if (isset($map['extraSparkSubmitParams'])) {
            $model->extraSparkSubmitParams = $map['extraSparkSubmitParams'];
        }
        if (isset($map['files'])) {
            if (!empty($map['files'])) {
                $model->files = $map['files'];
            }
        }
        if (isset($map['gmtCreated'])) {
            $model->gmtCreated = $map['gmtCreated'];
        }
        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }
        if (isset($map['hasChanged'])) {
            $model->hasChanged = $map['hasChanged'];
        }
        if (isset($map['hasCommited'])) {
            $model->hasCommited = $map['hasCommited'];
        }
        if (isset($map['isStreaming'])) {
            $model->isStreaming = $map['isStreaming'];
        }
        if (isset($map['jars'])) {
            if (!empty($map['jars'])) {
                $model->jars = $map['jars'];
            }
        }
        if (isset($map['lastRunResourceQueueId'])) {
            $model->lastRunResourceQueueId = $map['lastRunResourceQueueId'];
        }
        if (isset($map['modifier'])) {
            $model->modifier = $map['modifier'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['pyFiles'])) {
            if (!empty($map['pyFiles'])) {
                $model->pyFiles = $map['pyFiles'];
            }
        }
        if (isset($map['sparkArgs'])) {
            $model->sparkArgs = $map['sparkArgs'];
        }
        if (isset($map['sparkConf'])) {
            if (!empty($map['sparkConf'])) {
                $model->sparkConf = [];
                $n                = 0;
                foreach ($map['sparkConf'] as $item) {
                    $model->sparkConf[$n++] = null !== $item ? SparkConf::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['sparkDriverCores'])) {
            $model->sparkDriverCores = $map['sparkDriverCores'];
        }
        if (isset($map['sparkDriverMemory'])) {
            $model->sparkDriverMemory = $map['sparkDriverMemory'];
        }
        if (isset($map['sparkEntrypoint'])) {
            $model->sparkEntrypoint = $map['sparkEntrypoint'];
        }
        if (isset($map['sparkExecutorCores'])) {
            $model->sparkExecutorCores = $map['sparkExecutorCores'];
        }
        if (isset($map['sparkExecutorMemory'])) {
            $model->sparkExecutorMemory = $map['sparkExecutorMemory'];
        }
        if (isset($map['sparkLogLevel'])) {
            $model->sparkLogLevel = $map['sparkLogLevel'];
        }
        if (isset($map['sparkLogPath'])) {
            $model->sparkLogPath = $map['sparkLogPath'];
        }
        if (isset($map['sparkSubmitClause'])) {
            $model->sparkSubmitClause = $map['sparkSubmitClause'];
        }
        if (isset($map['sparkVersion'])) {
            $model->sparkVersion = $map['sparkVersion'];
        }
        if (isset($map['tags'])) {
            $model->tags = $map['tags'];
        }
        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
