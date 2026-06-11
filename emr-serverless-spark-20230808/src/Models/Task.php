<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\Task\credential;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\Task\rayHeadSpec;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\Task\rayWorkerSpec;

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
     * @var int
     */
    public $creator;

    /**
     * @var credential
     */
    public $credential;

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
     * @var string
     */
    public $environmentId;

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
     * @var bool
     */
    public $fusion;

    /**
     * @var string
     */
    public $gmtCreated;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var bool
     */
    public $hasChanged;

    /**
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
    public $kernelId;

    /**
     * @var string
     */
    public $lastRunResourceQueueId;

    /**
     * @var int
     */
    public $modifier;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string[]
     */
    public $params;

    /**
     * @var string[]
     */
    public $pyFiles;

    /**
     * @var int
     */
    public $rayActiveDeadlineSeconds;

    /**
     * @var int
     */
    public $rayBackoffLimit;

    /**
     * @var string
     */
    public $rayEntrypoint;

    /**
     * @var string
     */
    public $rayEntrypointMemory;

    /**
     * @var string
     */
    public $rayEntrypointNumCpus;

    /**
     * @var string
     */
    public $rayEntrypointNumGpus;

    /**
     * @var string
     */
    public $rayEntrypointResources;

    /**
     * @var string
     */
    public $rayExtraParam;

    /**
     * @var rayHeadSpec
     */
    public $rayHeadSpec;

    /**
     * @var string
     */
    public $rayMetadataJson;

    /**
     * @var string
     */
    public $rayNetworkServiceName;

    /**
     * @var string
     */
    public $rayRuntimeEnvJson;

    /**
     * @var bool
     */
    public $rayShutdownAfterJobFinishes;

    /**
     * @var string
     */
    public $raySubmissionMode;

    /**
     * @var int
     */
    public $rayTtlSecondsAfterFinished;

    /**
     * @var string
     */
    public $rayVersion;

    /**
     * @var string[]
     */
    public $rayVolumeIds;

    /**
     * @var rayWorkerSpec[]
     */
    public $rayWorkerSpec;

    /**
     * @var string
     */
    public $rayWorkingDir;

    /**
     * @var string
     */
    public $sessionClusterId;

    /**
     * @var string
     */
    public $sparkArgs;

    /**
     * @var SparkConf[]
     */
    public $sparkConf;

    /**
     * @var int
     */
    public $sparkDriverCores;

    /**
     * @var int
     */
    public $sparkDriverMemory;

    /**
     * @var string
     */
    public $sparkEntrypoint;

    /**
     * @var int
     */
    public $sparkExecutorCores;

    /**
     * @var int
     */
    public $sparkExecutorMemory;

    /**
     * @var string
     */
    public $sparkLogLevel;

    /**
     * @var string
     */
    public $sparkLogPath;

    /**
     * @var string
     */
    public $sparkSubmitClause;

    /**
     * @var string
     */
    public $sparkVersion;

    /**
     * @var string[]
     */
    public $tags;

    /**
     * @var int
     */
    public $timeout;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'archives' => 'archives',
        'artifactUrl' => 'artifactUrl',
        'bizId' => 'bizId',
        'categoryBizId' => 'categoryBizId',
        'content' => 'content',
        'creator' => 'creator',
        'credential' => 'credential',
        'defaultCatalogId' => 'defaultCatalogId',
        'defaultDatabase' => 'defaultDatabase',
        'defaultResourceQueueId' => 'defaultResourceQueueId',
        'defaultSqlComputeId' => 'defaultSqlComputeId',
        'deploymentId' => 'deploymentId',
        'environmentId' => 'environmentId',
        'extraArtifactIds' => 'extraArtifactIds',
        'extraSparkSubmitParams' => 'extraSparkSubmitParams',
        'files' => 'files',
        'fusion' => 'fusion',
        'gmtCreated' => 'gmtCreated',
        'gmtModified' => 'gmtModified',
        'hasChanged' => 'hasChanged',
        'hasCommited' => 'hasCommited',
        'isStreaming' => 'isStreaming',
        'jars' => 'jars',
        'kernelId' => 'kernelId',
        'lastRunResourceQueueId' => 'lastRunResourceQueueId',
        'modifier' => 'modifier',
        'name' => 'name',
        'params' => 'params',
        'pyFiles' => 'pyFiles',
        'rayActiveDeadlineSeconds' => 'rayActiveDeadlineSeconds',
        'rayBackoffLimit' => 'rayBackoffLimit',
        'rayEntrypoint' => 'rayEntrypoint',
        'rayEntrypointMemory' => 'rayEntrypointMemory',
        'rayEntrypointNumCpus' => 'rayEntrypointNumCpus',
        'rayEntrypointNumGpus' => 'rayEntrypointNumGpus',
        'rayEntrypointResources' => 'rayEntrypointResources',
        'rayExtraParam' => 'rayExtraParam',
        'rayHeadSpec' => 'rayHeadSpec',
        'rayMetadataJson' => 'rayMetadataJson',
        'rayNetworkServiceName' => 'rayNetworkServiceName',
        'rayRuntimeEnvJson' => 'rayRuntimeEnvJson',
        'rayShutdownAfterJobFinishes' => 'rayShutdownAfterJobFinishes',
        'raySubmissionMode' => 'raySubmissionMode',
        'rayTtlSecondsAfterFinished' => 'rayTtlSecondsAfterFinished',
        'rayVersion' => 'rayVersion',
        'rayVolumeIds' => 'rayVolumeIds',
        'rayWorkerSpec' => 'rayWorkerSpec',
        'rayWorkingDir' => 'rayWorkingDir',
        'sessionClusterId' => 'sessionClusterId',
        'sparkArgs' => 'sparkArgs',
        'sparkConf' => 'sparkConf',
        'sparkDriverCores' => 'sparkDriverCores',
        'sparkDriverMemory' => 'sparkDriverMemory',
        'sparkEntrypoint' => 'sparkEntrypoint',
        'sparkExecutorCores' => 'sparkExecutorCores',
        'sparkExecutorMemory' => 'sparkExecutorMemory',
        'sparkLogLevel' => 'sparkLogLevel',
        'sparkLogPath' => 'sparkLogPath',
        'sparkSubmitClause' => 'sparkSubmitClause',
        'sparkVersion' => 'sparkVersion',
        'tags' => 'tags',
        'timeout' => 'timeout',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->archives)) {
            Model::validateArray($this->archives);
        }
        if (null !== $this->credential) {
            $this->credential->validate();
        }
        if (\is_array($this->extraArtifactIds)) {
            Model::validateArray($this->extraArtifactIds);
        }
        if (\is_array($this->files)) {
            Model::validateArray($this->files);
        }
        if (\is_array($this->jars)) {
            Model::validateArray($this->jars);
        }
        if (\is_array($this->params)) {
            Model::validateArray($this->params);
        }
        if (\is_array($this->pyFiles)) {
            Model::validateArray($this->pyFiles);
        }
        if (null !== $this->rayHeadSpec) {
            $this->rayHeadSpec->validate();
        }
        if (\is_array($this->rayVolumeIds)) {
            Model::validateArray($this->rayVolumeIds);
        }
        if (\is_array($this->rayWorkerSpec)) {
            Model::validateArray($this->rayWorkerSpec);
        }
        if (\is_array($this->sparkConf)) {
            Model::validateArray($this->sparkConf);
        }
        if (\is_array($this->tags)) {
            Model::validateArray($this->tags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->archives) {
            if (\is_array($this->archives)) {
                $res['archives'] = [];
                $n1 = 0;
                foreach ($this->archives as $item1) {
                    $res['archives'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->credential) {
            $res['credential'] = null !== $this->credential ? $this->credential->toArray($noStream) : $this->credential;
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

        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }

        if (null !== $this->extraArtifactIds) {
            if (\is_array($this->extraArtifactIds)) {
                $res['extraArtifactIds'] = [];
                $n1 = 0;
                foreach ($this->extraArtifactIds as $item1) {
                    $res['extraArtifactIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->extraSparkSubmitParams) {
            $res['extraSparkSubmitParams'] = $this->extraSparkSubmitParams;
        }

        if (null !== $this->files) {
            if (\is_array($this->files)) {
                $res['files'] = [];
                $n1 = 0;
                foreach ($this->files as $item1) {
                    $res['files'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->fusion) {
            $res['fusion'] = $this->fusion;
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
            if (\is_array($this->jars)) {
                $res['jars'] = [];
                $n1 = 0;
                foreach ($this->jars as $item1) {
                    $res['jars'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->kernelId) {
            $res['kernelId'] = $this->kernelId;
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

        if (null !== $this->params) {
            if (\is_array($this->params)) {
                $res['params'] = [];
                foreach ($this->params as $key1 => $value1) {
                    $res['params'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->pyFiles) {
            if (\is_array($this->pyFiles)) {
                $res['pyFiles'] = [];
                $n1 = 0;
                foreach ($this->pyFiles as $item1) {
                    $res['pyFiles'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rayActiveDeadlineSeconds) {
            $res['rayActiveDeadlineSeconds'] = $this->rayActiveDeadlineSeconds;
        }

        if (null !== $this->rayBackoffLimit) {
            $res['rayBackoffLimit'] = $this->rayBackoffLimit;
        }

        if (null !== $this->rayEntrypoint) {
            $res['rayEntrypoint'] = $this->rayEntrypoint;
        }

        if (null !== $this->rayEntrypointMemory) {
            $res['rayEntrypointMemory'] = $this->rayEntrypointMemory;
        }

        if (null !== $this->rayEntrypointNumCpus) {
            $res['rayEntrypointNumCpus'] = $this->rayEntrypointNumCpus;
        }

        if (null !== $this->rayEntrypointNumGpus) {
            $res['rayEntrypointNumGpus'] = $this->rayEntrypointNumGpus;
        }

        if (null !== $this->rayEntrypointResources) {
            $res['rayEntrypointResources'] = $this->rayEntrypointResources;
        }

        if (null !== $this->rayExtraParam) {
            $res['rayExtraParam'] = $this->rayExtraParam;
        }

        if (null !== $this->rayHeadSpec) {
            $res['rayHeadSpec'] = null !== $this->rayHeadSpec ? $this->rayHeadSpec->toArray($noStream) : $this->rayHeadSpec;
        }

        if (null !== $this->rayMetadataJson) {
            $res['rayMetadataJson'] = $this->rayMetadataJson;
        }

        if (null !== $this->rayNetworkServiceName) {
            $res['rayNetworkServiceName'] = $this->rayNetworkServiceName;
        }

        if (null !== $this->rayRuntimeEnvJson) {
            $res['rayRuntimeEnvJson'] = $this->rayRuntimeEnvJson;
        }

        if (null !== $this->rayShutdownAfterJobFinishes) {
            $res['rayShutdownAfterJobFinishes'] = $this->rayShutdownAfterJobFinishes;
        }

        if (null !== $this->raySubmissionMode) {
            $res['raySubmissionMode'] = $this->raySubmissionMode;
        }

        if (null !== $this->rayTtlSecondsAfterFinished) {
            $res['rayTtlSecondsAfterFinished'] = $this->rayTtlSecondsAfterFinished;
        }

        if (null !== $this->rayVersion) {
            $res['rayVersion'] = $this->rayVersion;
        }

        if (null !== $this->rayVolumeIds) {
            if (\is_array($this->rayVolumeIds)) {
                $res['rayVolumeIds'] = [];
                $n1 = 0;
                foreach ($this->rayVolumeIds as $item1) {
                    $res['rayVolumeIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rayWorkerSpec) {
            if (\is_array($this->rayWorkerSpec)) {
                $res['rayWorkerSpec'] = [];
                $n1 = 0;
                foreach ($this->rayWorkerSpec as $item1) {
                    $res['rayWorkerSpec'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->rayWorkingDir) {
            $res['rayWorkingDir'] = $this->rayWorkingDir;
        }

        if (null !== $this->sessionClusterId) {
            $res['sessionClusterId'] = $this->sessionClusterId;
        }

        if (null !== $this->sparkArgs) {
            $res['sparkArgs'] = $this->sparkArgs;
        }

        if (null !== $this->sparkConf) {
            if (\is_array($this->sparkConf)) {
                $res['sparkConf'] = [];
                $n1 = 0;
                foreach ($this->sparkConf as $item1) {
                    $res['sparkConf'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
            if (\is_array($this->tags)) {
                $res['tags'] = [];
                foreach ($this->tags as $key1 => $value1) {
                    $res['tags'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->timeout) {
            $res['timeout'] = $this->timeout;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['archives'])) {
            if (!empty($map['archives'])) {
                $model->archives = [];
                $n1 = 0;
                foreach ($map['archives'] as $item1) {
                    $model->archives[$n1] = $item1;
                    ++$n1;
                }
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

        if (isset($map['credential'])) {
            $model->credential = credential::fromMap($map['credential']);
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

        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }

        if (isset($map['extraArtifactIds'])) {
            if (!empty($map['extraArtifactIds'])) {
                $model->extraArtifactIds = [];
                $n1 = 0;
                foreach ($map['extraArtifactIds'] as $item1) {
                    $model->extraArtifactIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['extraSparkSubmitParams'])) {
            $model->extraSparkSubmitParams = $map['extraSparkSubmitParams'];
        }

        if (isset($map['files'])) {
            if (!empty($map['files'])) {
                $model->files = [];
                $n1 = 0;
                foreach ($map['files'] as $item1) {
                    $model->files[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['fusion'])) {
            $model->fusion = $map['fusion'];
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
                $model->jars = [];
                $n1 = 0;
                foreach ($map['jars'] as $item1) {
                    $model->jars[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['kernelId'])) {
            $model->kernelId = $map['kernelId'];
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

        if (isset($map['params'])) {
            if (!empty($map['params'])) {
                $model->params = [];
                foreach ($map['params'] as $key1 => $value1) {
                    $model->params[$key1] = $value1;
                }
            }
        }

        if (isset($map['pyFiles'])) {
            if (!empty($map['pyFiles'])) {
                $model->pyFiles = [];
                $n1 = 0;
                foreach ($map['pyFiles'] as $item1) {
                    $model->pyFiles[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['rayActiveDeadlineSeconds'])) {
            $model->rayActiveDeadlineSeconds = $map['rayActiveDeadlineSeconds'];
        }

        if (isset($map['rayBackoffLimit'])) {
            $model->rayBackoffLimit = $map['rayBackoffLimit'];
        }

        if (isset($map['rayEntrypoint'])) {
            $model->rayEntrypoint = $map['rayEntrypoint'];
        }

        if (isset($map['rayEntrypointMemory'])) {
            $model->rayEntrypointMemory = $map['rayEntrypointMemory'];
        }

        if (isset($map['rayEntrypointNumCpus'])) {
            $model->rayEntrypointNumCpus = $map['rayEntrypointNumCpus'];
        }

        if (isset($map['rayEntrypointNumGpus'])) {
            $model->rayEntrypointNumGpus = $map['rayEntrypointNumGpus'];
        }

        if (isset($map['rayEntrypointResources'])) {
            $model->rayEntrypointResources = $map['rayEntrypointResources'];
        }

        if (isset($map['rayExtraParam'])) {
            $model->rayExtraParam = $map['rayExtraParam'];
        }

        if (isset($map['rayHeadSpec'])) {
            $model->rayHeadSpec = rayHeadSpec::fromMap($map['rayHeadSpec']);
        }

        if (isset($map['rayMetadataJson'])) {
            $model->rayMetadataJson = $map['rayMetadataJson'];
        }

        if (isset($map['rayNetworkServiceName'])) {
            $model->rayNetworkServiceName = $map['rayNetworkServiceName'];
        }

        if (isset($map['rayRuntimeEnvJson'])) {
            $model->rayRuntimeEnvJson = $map['rayRuntimeEnvJson'];
        }

        if (isset($map['rayShutdownAfterJobFinishes'])) {
            $model->rayShutdownAfterJobFinishes = $map['rayShutdownAfterJobFinishes'];
        }

        if (isset($map['raySubmissionMode'])) {
            $model->raySubmissionMode = $map['raySubmissionMode'];
        }

        if (isset($map['rayTtlSecondsAfterFinished'])) {
            $model->rayTtlSecondsAfterFinished = $map['rayTtlSecondsAfterFinished'];
        }

        if (isset($map['rayVersion'])) {
            $model->rayVersion = $map['rayVersion'];
        }

        if (isset($map['rayVolumeIds'])) {
            if (!empty($map['rayVolumeIds'])) {
                $model->rayVolumeIds = [];
                $n1 = 0;
                foreach ($map['rayVolumeIds'] as $item1) {
                    $model->rayVolumeIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['rayWorkerSpec'])) {
            if (!empty($map['rayWorkerSpec'])) {
                $model->rayWorkerSpec = [];
                $n1 = 0;
                foreach ($map['rayWorkerSpec'] as $item1) {
                    $model->rayWorkerSpec[$n1] = rayWorkerSpec::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['rayWorkingDir'])) {
            $model->rayWorkingDir = $map['rayWorkingDir'];
        }

        if (isset($map['sessionClusterId'])) {
            $model->sessionClusterId = $map['sessionClusterId'];
        }

        if (isset($map['sparkArgs'])) {
            $model->sparkArgs = $map['sparkArgs'];
        }

        if (isset($map['sparkConf'])) {
            if (!empty($map['sparkConf'])) {
                $model->sparkConf = [];
                $n1 = 0;
                foreach ($map['sparkConf'] as $item1) {
                    $model->sparkConf[$n1] = SparkConf::fromMap($item1);
                    ++$n1;
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
            if (!empty($map['tags'])) {
                $model->tags = [];
                foreach ($map['tags'] as $key1 => $value1) {
                    $model->tags[$key1] = $value1;
                }
            }
        }

        if (isset($map['timeout'])) {
            $model->timeout = $map['timeout'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
