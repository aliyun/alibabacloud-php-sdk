<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSessionClusterResponseBody;

use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSessionClusterResponseBody\sessionCluster\applicationConfigs;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSessionClusterResponseBody\sessionCluster\autoStartConfiguration;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSessionClusterResponseBody\sessionCluster\autoStopConfiguration;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\GetSessionClusterResponseBody\sessionCluster\stateChangeReason;
use AlibabaCloud\Tea\Model;

class sessionCluster extends Model
{
    /**
     * @description The Spark configurations.
     *
     * @var applicationConfigs[]
     */
    public $applicationConfigs;

    /**
     * @description The automatic startup configurations.
     *
     * @var autoStartConfiguration
     */
    public $autoStartConfiguration;

    /**
     * @description The automatic termination configurations.
     *
     * @var autoStopConfiguration
     */
    public $autoStopConfiguration;

    /**
     * @description The version of the Spark engine.
     *
     * @example esr-2.2(Java Runtime)
     *
     * @var string
     */
    public $displayReleaseVersion;

    /**
     * @description The domain name to which the Spark UI of the session belongs.
     *
     * @example your.domain.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The internal endpoint.
     *
     * @example emr-spark-gateway-cn-hangzhou-internal.data.aliyuncs.com
     *
     * @var string
     */
    public $domainInner;

    /**
     * @description The ID of the job that is associated with the session.
     *
     * @example TSK-xxxxxxxx
     *
     * @var string
     */
    public $draftId;

    /**
     * @description The environment ID.
     *
     * @example env-cpv569tlhtgndjl86t40
     *
     * @var string
     */
    public $envId;

    /**
     * @description Indicates whether the Fusion engine is used for acceleration.
     *
     * @example false
     *
     * @var bool
     */
    public $fusion;

    /**
     * @description The creation time.
     *
     * @example 2024-09-01 06:23:01
     *
     * @var int
     */
    public $gmtCreate;

    /**
     * @description The type of the job. This parameter is required and cannot be modified after the deployment is created. Valid values:
     *
     *   SQLSCRIPT
     *   JAR
     *   PYTHON
     *
     * @example SQL
     *
     * @var string
     */
    public $kind;

    /**
     * @description The name of the session.
     *
     * @example test
     *
     * @var string
     */
    public $name;

    /**
     * @description The queue name.
     *
     * @example jobName
     *
     * @var string
     */
    public $queueName;

    /**
     * @description The version of E-MapReduce (EMR) Serverless Spark.
     *
     * @example esr-2.2(Java Runtime)
     *
     * @var string
     */
    public $releaseVersion;

    /**
     * @description The session ID.
     *
     * @example 1234abcd-12ab-34cd-56ef-1234567890ab
     *
     * @var string
     */
    public $sessionClusterId;

    /**
     * @description The start time.
     *
     * @example 2024-09-01 06:23:01
     *
     * @var int
     */
    public $startTime;

    /**
     * @description The job status.
     *
     * @example Running
     *
     * @var string
     */
    public $state;

    /**
     * @description The reason of the job status change.
     *
     * @var stateChangeReason
     */
    public $stateChangeReason;

    /**
     * @description The user ID.
     *
     * @example jr-231231
     *
     * @var string
     */
    public $userId;

    /**
     * @description The name of the account that is used to create the session.
     *
     * @example user1
     *
     * @var string
     */
    public $userName;

    /**
     * @description The Spark UI of the session.
     *
     * @example https://spark-ui/link
     *
     * @var string
     */
    public $webUI;

    /**
     * @description The workspace ID.
     *
     * @example w-1234abcd
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'applicationConfigs'     => 'applicationConfigs',
        'autoStartConfiguration' => 'autoStartConfiguration',
        'autoStopConfiguration'  => 'autoStopConfiguration',
        'displayReleaseVersion'  => 'displayReleaseVersion',
        'domain'                 => 'domain',
        'domainInner'            => 'domainInner',
        'draftId'                => 'draftId',
        'envId'                  => 'envId',
        'fusion'                 => 'fusion',
        'gmtCreate'              => 'gmtCreate',
        'kind'                   => 'kind',
        'name'                   => 'name',
        'queueName'              => 'queueName',
        'releaseVersion'         => 'releaseVersion',
        'sessionClusterId'       => 'sessionClusterId',
        'startTime'              => 'startTime',
        'state'                  => 'state',
        'stateChangeReason'      => 'stateChangeReason',
        'userId'                 => 'userId',
        'userName'               => 'userName',
        'webUI'                  => 'webUI',
        'workspaceId'            => 'workspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationConfigs) {
            $res['applicationConfigs'] = [];
            if (null !== $this->applicationConfigs && \is_array($this->applicationConfigs)) {
                $n = 0;
                foreach ($this->applicationConfigs as $item) {
                    $res['applicationConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->autoStartConfiguration) {
            $res['autoStartConfiguration'] = null !== $this->autoStartConfiguration ? $this->autoStartConfiguration->toMap() : null;
        }
        if (null !== $this->autoStopConfiguration) {
            $res['autoStopConfiguration'] = null !== $this->autoStopConfiguration ? $this->autoStopConfiguration->toMap() : null;
        }
        if (null !== $this->displayReleaseVersion) {
            $res['displayReleaseVersion'] = $this->displayReleaseVersion;
        }
        if (null !== $this->domain) {
            $res['domain'] = $this->domain;
        }
        if (null !== $this->domainInner) {
            $res['domainInner'] = $this->domainInner;
        }
        if (null !== $this->draftId) {
            $res['draftId'] = $this->draftId;
        }
        if (null !== $this->envId) {
            $res['envId'] = $this->envId;
        }
        if (null !== $this->fusion) {
            $res['fusion'] = $this->fusion;
        }
        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->kind) {
            $res['kind'] = $this->kind;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->queueName) {
            $res['queueName'] = $this->queueName;
        }
        if (null !== $this->releaseVersion) {
            $res['releaseVersion'] = $this->releaseVersion;
        }
        if (null !== $this->sessionClusterId) {
            $res['sessionClusterId'] = $this->sessionClusterId;
        }
        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }
        if (null !== $this->state) {
            $res['state'] = $this->state;
        }
        if (null !== $this->stateChangeReason) {
            $res['stateChangeReason'] = null !== $this->stateChangeReason ? $this->stateChangeReason->toMap() : null;
        }
        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['userName'] = $this->userName;
        }
        if (null !== $this->webUI) {
            $res['webUI'] = $this->webUI;
        }
        if (null !== $this->workspaceId) {
            $res['workspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sessionCluster
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['applicationConfigs'])) {
            if (!empty($map['applicationConfigs'])) {
                $model->applicationConfigs = [];
                $n                         = 0;
                foreach ($map['applicationConfigs'] as $item) {
                    $model->applicationConfigs[$n++] = null !== $item ? applicationConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['autoStartConfiguration'])) {
            $model->autoStartConfiguration = autoStartConfiguration::fromMap($map['autoStartConfiguration']);
        }
        if (isset($map['autoStopConfiguration'])) {
            $model->autoStopConfiguration = autoStopConfiguration::fromMap($map['autoStopConfiguration']);
        }
        if (isset($map['displayReleaseVersion'])) {
            $model->displayReleaseVersion = $map['displayReleaseVersion'];
        }
        if (isset($map['domain'])) {
            $model->domain = $map['domain'];
        }
        if (isset($map['domainInner'])) {
            $model->domainInner = $map['domainInner'];
        }
        if (isset($map['draftId'])) {
            $model->draftId = $map['draftId'];
        }
        if (isset($map['envId'])) {
            $model->envId = $map['envId'];
        }
        if (isset($map['fusion'])) {
            $model->fusion = $map['fusion'];
        }
        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }
        if (isset($map['kind'])) {
            $model->kind = $map['kind'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['queueName'])) {
            $model->queueName = $map['queueName'];
        }
        if (isset($map['releaseVersion'])) {
            $model->releaseVersion = $map['releaseVersion'];
        }
        if (isset($map['sessionClusterId'])) {
            $model->sessionClusterId = $map['sessionClusterId'];
        }
        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }
        if (isset($map['state'])) {
            $model->state = $map['state'];
        }
        if (isset($map['stateChangeReason'])) {
            $model->stateChangeReason = stateChangeReason::fromMap($map['stateChangeReason']);
        }
        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }
        if (isset($map['userName'])) {
            $model->userName = $map['userName'];
        }
        if (isset($map['webUI'])) {
            $model->webUI = $map['webUI'];
        }
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
