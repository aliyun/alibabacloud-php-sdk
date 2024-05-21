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
     * @example adhoc_query
     *
     * @var string
     */
    public $name;

    /**
     * @description 作业实例名称。
     *
     * @example dev_queue
     *
     * @var string
     */
    public $queueName;

    /**
     * @description SQL Compute id
     *
     * @example sc-123131
     *
     * @var string
     */
    public $sessionClusterId;

    /**
     * @description 作业状态。
     *
     * @example Running
     *
     * @var string
     */
    public $state;

    /**
     * @var stateChangeReason
     */
    public $stateChangeReason;

    /**
     * @description 任务实例ID。
     *
     * @example 123131
     *
     * @var string
     */
    public $userId;

    /**
     * @example test_user
     *
     * @var string
     */
    public $userName;

    /**
     * @description 工作空间id。
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
        'name'                   => 'name',
        'queueName'              => 'queueName',
        'sessionClusterId'       => 'sessionClusterId',
        'state'                  => 'state',
        'stateChangeReason'      => 'stateChangeReason',
        'userId'                 => 'userId',
        'userName'               => 'userName',
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
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->queueName) {
            $res['queueName'] = $this->queueName;
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
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['queueName'])) {
            $model->queueName = $map['queueName'];
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
        if (isset($map['workspaceId'])) {
            $model->workspaceId = $map['workspaceId'];
        }

        return $model;
    }
}
