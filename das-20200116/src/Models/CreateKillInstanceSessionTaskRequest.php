<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DAS\V20200116\Models;

use AlibabaCloud\Tea\Model;

class CreateKillInstanceSessionTaskRequest extends Model
{
    /**
     * @description The database account that has the permissions to terminate sessions.
     *
     * This parameter is required.
     * @example testUser
     *
     * @var string
     */
    public $dbUser;

    /**
     * @description The password of the database account.
     *
     * This parameter is required.
     * @example testPassword
     *
     * @var string
     */
    public $dbUserPassword;

    /**
     * @description The account whose sessions do not need to be terminated.
     *
     * >  Set this parameter to a JSON array. Separate database accounts with commas (,). Example: [\\"Database account 1\\",\\"Database account 2\\"].
     * @example [\\"db_user1\\",\\"db_user2\\"]
     *
     * @var string
     */
    public $ignoredUsers;

    /**
     * @description The instance ID.
     *
     * This parameter is required.
     * @example rm-2ze8g2am97624****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Specifies whether to terminate all sessions.
     *
     *   **true**
     *   **false**
     *
     * >  If you set this parameter to **true**, sessions of the accounts that are specified by **IgnoredUsers**, sessions of internal O\\&M accounts of Alibaba Cloud, and **Binlog Dump** sessions are not terminated.
     *
     * This parameter is required.
     * @example true
     *
     * @var bool
     */
    public $killAllSessions;

    /**
     * @description The node ID.
     *
     * >  This parameter must be specified if the database instance is a PolarDB for MySQL cluster. If you do not specify a node ID and set **KillAllSessions** to **true**, the system traverses all nodes in the PolarDB for MySQL cluster and terminates the active sessions on each node.
     * @example pi-bp1v203xzzh0a****
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The IDs of sessions that need to be terminated.
     *
     * >  Set this parameter to a JSON array. Separate session IDs with commas (,). Example: [\\"Session ID1\\",\\"Session ID2\\"]. If **KillAllSessions** is set to **true**, this parameter does not take effect.
     * @example [10805639,10805623,10805645,10805553,10805566,10805616]
     *
     * @var string
     */
    public $sessionIds;
    protected $_name = [
        'dbUser'          => 'DbUser',
        'dbUserPassword'  => 'DbUserPassword',
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
        if (null !== $this->dbUser) {
            $res['DbUser'] = $this->dbUser;
        }
        if (null !== $this->dbUserPassword) {
            $res['DbUserPassword'] = $this->dbUserPassword;
        }
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
     * @return CreateKillInstanceSessionTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbUser'])) {
            $model->dbUser = $map['DbUser'];
        }
        if (isset($map['DbUserPassword'])) {
            $model->dbUserPassword = $map['DbUserPassword'];
        }
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
