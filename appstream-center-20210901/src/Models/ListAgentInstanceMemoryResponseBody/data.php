<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAgentInstanceMemoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAgentInstanceMemoryResponseBody\data\userGroups;
use AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\ListAgentInstanceMemoryResponseBody\data\userOrgs;

class data extends Model
{
    /**
     * @var string
     */
    public $agentInstanceId;

    /**
     * @var string
     */
    public $agentInstanceStatus;

    /**
     * @var string
     */
    public $agentPlatform;

    /**
     * @var string
     */
    public $agentProvider;

    /**
     * @var int
     */
    public $backupCount;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $lastMemoryUpdatedAt;

    /**
     * @var string
     */
    public $latestBackupAt;

    /**
     * @var int
     */
    public $memoryCount;

    /**
     * @var string
     */
    public $memoryEnabled;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceId;

    /**
     * @var string
     */
    public $runtimeId;

    /**
     * @var string
     */
    public $runtimeName;

    /**
     * @var userGroups[]
     */
    public $userGroups;

    /**
     * @var string
     */
    public $userName;

    /**
     * @var userOrgs[]
     */
    public $userOrgs;

    /**
     * @var string
     */
    public $wyId;
    protected $_name = [
        'agentInstanceId' => 'AgentInstanceId',
        'agentInstanceStatus' => 'AgentInstanceStatus',
        'agentPlatform' => 'AgentPlatform',
        'agentProvider' => 'AgentProvider',
        'backupCount' => 'BackupCount',
        'endUserId' => 'EndUserId',
        'lastMemoryUpdatedAt' => 'LastMemoryUpdatedAt',
        'latestBackupAt' => 'LatestBackupAt',
        'memoryCount' => 'MemoryCount',
        'memoryEnabled' => 'MemoryEnabled',
        'regionId' => 'RegionId',
        'resourceId' => 'ResourceId',
        'runtimeId' => 'RuntimeId',
        'runtimeName' => 'RuntimeName',
        'userGroups' => 'UserGroups',
        'userName' => 'UserName',
        'userOrgs' => 'UserOrgs',
        'wyId' => 'WyId',
    ];

    public function validate()
    {
        if (\is_array($this->userGroups)) {
            Model::validateArray($this->userGroups);
        }
        if (\is_array($this->userOrgs)) {
            Model::validateArray($this->userOrgs);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->agentInstanceId) {
            $res['AgentInstanceId'] = $this->agentInstanceId;
        }

        if (null !== $this->agentInstanceStatus) {
            $res['AgentInstanceStatus'] = $this->agentInstanceStatus;
        }

        if (null !== $this->agentPlatform) {
            $res['AgentPlatform'] = $this->agentPlatform;
        }

        if (null !== $this->agentProvider) {
            $res['AgentProvider'] = $this->agentProvider;
        }

        if (null !== $this->backupCount) {
            $res['BackupCount'] = $this->backupCount;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->lastMemoryUpdatedAt) {
            $res['LastMemoryUpdatedAt'] = $this->lastMemoryUpdatedAt;
        }

        if (null !== $this->latestBackupAt) {
            $res['LatestBackupAt'] = $this->latestBackupAt;
        }

        if (null !== $this->memoryCount) {
            $res['MemoryCount'] = $this->memoryCount;
        }

        if (null !== $this->memoryEnabled) {
            $res['MemoryEnabled'] = $this->memoryEnabled;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }

        if (null !== $this->runtimeId) {
            $res['RuntimeId'] = $this->runtimeId;
        }

        if (null !== $this->runtimeName) {
            $res['RuntimeName'] = $this->runtimeName;
        }

        if (null !== $this->userGroups) {
            if (\is_array($this->userGroups)) {
                $res['UserGroups'] = [];
                $n1 = 0;
                foreach ($this->userGroups as $item1) {
                    $res['UserGroups'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        if (null !== $this->userOrgs) {
            if (\is_array($this->userOrgs)) {
                $res['UserOrgs'] = [];
                $n1 = 0;
                foreach ($this->userOrgs as $item1) {
                    $res['UserOrgs'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->wyId) {
            $res['WyId'] = $this->wyId;
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
        if (isset($map['AgentInstanceId'])) {
            $model->agentInstanceId = $map['AgentInstanceId'];
        }

        if (isset($map['AgentInstanceStatus'])) {
            $model->agentInstanceStatus = $map['AgentInstanceStatus'];
        }

        if (isset($map['AgentPlatform'])) {
            $model->agentPlatform = $map['AgentPlatform'];
        }

        if (isset($map['AgentProvider'])) {
            $model->agentProvider = $map['AgentProvider'];
        }

        if (isset($map['BackupCount'])) {
            $model->backupCount = $map['BackupCount'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['LastMemoryUpdatedAt'])) {
            $model->lastMemoryUpdatedAt = $map['LastMemoryUpdatedAt'];
        }

        if (isset($map['LatestBackupAt'])) {
            $model->latestBackupAt = $map['LatestBackupAt'];
        }

        if (isset($map['MemoryCount'])) {
            $model->memoryCount = $map['MemoryCount'];
        }

        if (isset($map['MemoryEnabled'])) {
            $model->memoryEnabled = $map['MemoryEnabled'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }

        if (isset($map['RuntimeId'])) {
            $model->runtimeId = $map['RuntimeId'];
        }

        if (isset($map['RuntimeName'])) {
            $model->runtimeName = $map['RuntimeName'];
        }

        if (isset($map['UserGroups'])) {
            if (!empty($map['UserGroups'])) {
                $model->userGroups = [];
                $n1 = 0;
                foreach ($map['UserGroups'] as $item1) {
                    $model->userGroups[$n1] = userGroups::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        if (isset($map['UserOrgs'])) {
            if (!empty($map['UserOrgs'])) {
                $model->userOrgs = [];
                $n1 = 0;
                foreach ($map['UserOrgs'] as $item1) {
                    $model->userOrgs[$n1] = userOrgs::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['WyId'])) {
            $model->wyId = $map['WyId'];
        }

        return $model;
    }
}
