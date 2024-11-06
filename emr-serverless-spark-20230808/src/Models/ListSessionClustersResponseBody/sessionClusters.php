<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSessionClustersResponseBody;

use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSessionClustersResponseBody\sessionClusters\applicationConfigs;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSessionClustersResponseBody\sessionClusters\autoStartConfiguration;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSessionClustersResponseBody\sessionClusters\autoStopConfiguration;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSessionClustersResponseBody\sessionClusters\stateChangeReason;
use AlibabaCloud\Tea\Model;

class sessionClusters extends Model
{
    /**
     * @description The session configurations, which are equivalent to the configurations of the Spark job.
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
     * @description The configurations of automatic termination.
     *
     * @var autoStopConfiguration
     */
    public $autoStopConfiguration;

    /**
     * @description The version of the Spark engine.
     *
     * @var string
     */
    public $displayReleaseVersion;

    /**
     * @var string
     */
    public $domain;

    /**
     * @description The ID of the job that is associated with the session.
     *
     * @example TSK-xxxxxxxxx
     *
     * @var string
     */
    public $draftId;

    /**
     * @description Indicates whether the Fusion engine is used for acceleration.
     *
     * @example false
     *
     * @var bool
     */
    public $fusion;

    /**
     * @description The session type.
     *
     * Valid values:
     *
     *   NOTEBOOK
     *   THRIFT
     *   SQL
     *
     * @example SQL
     *
     * @var string
     */
    public $kind;

    /**
     * @description The name of the session.
     *
     * @example adhoc_query
     *
     * @var string
     */
    public $name;

    /**
     * @description The name of the queue that is used to run the session.
     *
     * @example dev_queue
     *
     * @var string
     */
    public $queueName;

    /**
     * @description The version of EMR Serverless Spark.
     *
     * @example esr-2.1
     *
     * @var string
     */
    public $releaseVersion;

    /**
     * @description The session ID.
     *
     * @example sc-123131
     *
     * @var string
     */
    public $sessionClusterId;

    /**
     * @description The status of the session.
     *
     * @example Running
     *
     * @var string
     */
    public $state;

    /**
     * @description The details of the most recent status change of the session.
     *
     * @var stateChangeReason
     */
    public $stateChangeReason;

    /**
     * @description The user ID.
     *
     * @example 123131
     *
     * @var string
     */
    public $userId;

    /**
     * @description The name of the user.
     *
     * @example test_user
     *
     * @var string
     */
    public $userName;

    /**
     * @description The Spark UI of the session.
     *
     * @example http://spark-ui-xxxx
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
        'draftId'                => 'draftId',
        'fusion'                 => 'fusion',
        'kind'                   => 'kind',
        'name'                   => 'name',
        'queueName'              => 'queueName',
        'releaseVersion'         => 'releaseVersion',
        'sessionClusterId'       => 'sessionClusterId',
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
        if (null !== $this->draftId) {
            $res['draftId'] = $this->draftId;
        }
        if (null !== $this->fusion) {
            $res['fusion'] = $this->fusion;
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
     * @return sessionClusters
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
        if (isset($map['draftId'])) {
            $model->draftId = $map['draftId'];
        }
        if (isset($map['fusion'])) {
            $model->fusion = $map['fusion'];
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
