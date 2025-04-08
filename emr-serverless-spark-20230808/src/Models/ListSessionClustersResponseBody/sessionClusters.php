<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSessionClustersResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSessionClustersResponseBody\sessionClusters\applicationConfigs;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSessionClustersResponseBody\sessionClusters\autoStartConfiguration;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSessionClustersResponseBody\sessionClusters\autoStopConfiguration;
use AlibabaCloud\SDK\Emrserverlessspark\V20230808\Models\ListSessionClustersResponseBody\sessionClusters\stateChangeReason;

class sessionClusters extends Model
{
    /**
     * @var applicationConfigs[]
     */
    public $applicationConfigs;

    /**
     * @var autoStartConfiguration
     */
    public $autoStartConfiguration;

    /**
     * @var autoStopConfiguration
     */
    public $autoStopConfiguration;

    /**
     * @var string
     */
    public $displayReleaseVersion;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $domainInner;

    /**
     * @var string
     */
    public $draftId;

    /**
     * @var string
     */
    public $extra;

    /**
     * @var bool
     */
    public $fusion;

    /**
     * @var int
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $kind;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $queueName;

    /**
     * @var string
     */
    public $releaseVersion;

    /**
     * @var string
     */
    public $sessionClusterId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $state;

    /**
     * @var stateChangeReason
     */
    public $stateChangeReason;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var string
     */
    public $webUI;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'applicationConfigs' => 'applicationConfigs',
        'autoStartConfiguration' => 'autoStartConfiguration',
        'autoStopConfiguration' => 'autoStopConfiguration',
        'displayReleaseVersion' => 'displayReleaseVersion',
        'domain' => 'domain',
        'domainInner' => 'domainInner',
        'draftId' => 'draftId',
        'extra' => 'extra',
        'fusion' => 'fusion',
        'gmtCreate' => 'gmtCreate',
        'kind' => 'kind',
        'name' => 'name',
        'queueName' => 'queueName',
        'releaseVersion' => 'releaseVersion',
        'sessionClusterId' => 'sessionClusterId',
        'startTime' => 'startTime',
        'state' => 'state',
        'stateChangeReason' => 'stateChangeReason',
        'userId' => 'userId',
        'userName' => 'userName',
        'webUI' => 'webUI',
        'workspaceId' => 'workspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->applicationConfigs)) {
            Model::validateArray($this->applicationConfigs);
        }
        if (null !== $this->autoStartConfiguration) {
            $this->autoStartConfiguration->validate();
        }
        if (null !== $this->autoStopConfiguration) {
            $this->autoStopConfiguration->validate();
        }
        if (null !== $this->stateChangeReason) {
            $this->stateChangeReason->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicationConfigs) {
            if (\is_array($this->applicationConfigs)) {
                $res['applicationConfigs'] = [];
                $n1 = 0;
                foreach ($this->applicationConfigs as $item1) {
                    $res['applicationConfigs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->autoStartConfiguration) {
            $res['autoStartConfiguration'] = null !== $this->autoStartConfiguration ? $this->autoStartConfiguration->toArray($noStream) : $this->autoStartConfiguration;
        }

        if (null !== $this->autoStopConfiguration) {
            $res['autoStopConfiguration'] = null !== $this->autoStopConfiguration ? $this->autoStopConfiguration->toArray($noStream) : $this->autoStopConfiguration;
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

        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
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
            $res['stateChangeReason'] = null !== $this->stateChangeReason ? $this->stateChangeReason->toArray($noStream) : $this->stateChangeReason;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['applicationConfigs'])) {
            if (!empty($map['applicationConfigs'])) {
                $model->applicationConfigs = [];
                $n1 = 0;
                foreach ($map['applicationConfigs'] as $item1) {
                    $model->applicationConfigs[$n1++] = applicationConfigs::fromMap($item1);
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

        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
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
