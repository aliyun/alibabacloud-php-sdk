<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class CreateKillInstanceSessionTaskWithMaintainUserRequest extends Model
{
    /**
     * @var string
     */
    public $ignoredUsers;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $killAllSessions;

    /**
     * @var string
     */
    public $nodeId;

    /**
     * @var string
     */
    public $sessionIds;
    protected $_name = [
        'ignoredUsers'    => 'IgnoredUsers',
        'instanceId'      => 'InstanceId',
        'killAllSessions' => 'KillAllSessions',
        'nodeId'          => 'NodeId',
        'sessionIds'      => 'SessionIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ignoredUsers) {
            $res['IgnoredUsers'] = $this->ignoredUsers;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->killAllSessions) {
            $res['KillAllSessions'] = $this->killAllSessions;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->sessionIds) {
            $res['SessionIds'] = $this->sessionIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateKillInstanceSessionTaskWithMaintainUserRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IgnoredUsers'])) {
            $model->ignoredUsers = $map['IgnoredUsers'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['KillAllSessions'])) {
            $model->killAllSessions = $map['KillAllSessions'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['SessionIds'])) {
            $model->sessionIds = $map['SessionIds'];
        }

        return $model;
    }
}
