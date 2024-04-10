<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTerminalSessionsResponseBody\sessions;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTerminalSessionsResponseBody\sessions\session\connections;
use AlibabaCloud\Tea\Model;

class session extends Model
{
    /**
     * @description The IP address of the client used to establish connections.
     *
     * @example 192.168.1.1
     *
     * @var string
     */
    public $clientIP;

    /**
     * @description The information of the connections.
     *
     * @var connections
     */
    public $connections;

    /**
     * @description The time when the session was created.
     *
     * @example 2024-01-19T09:15:46Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The principal type. Valid values:
     *
     *   Account: an Alibaba Cloud account
     *   RAMUser: a RAM user
     *   AssumedRoleUser: a RAM role
     *
     * @example RAMUser
     *
     * @var string
     */
    public $identityType;

    /**
     * @description The port number of the instance, which is used for data forwarding. If no port number was specified for data forwarding when the session was created, this parameter is empty.
     *
     * @example 22
     *
     * @var int
     */
    public $portNumber;

    /**
     * @description The ID of the principal. Valid values based on the `IdentityType` value:
     *
     *   If the requester uses an Alibaba Cloud account to call the operation, the ID of the Alibaba Cloud account is returned.
     *   If the requester uses a Resource Access Management (RAM) user to call the operation, the ID of the RAM user is returned.
     *   If the requester uses a RAM role to call the operation, the ID of the principal that actually calls the operation is returned.
     *
     * @example 123456xxxx
     *
     * @var string
     */
    public $principalId;

    /**
     * @description The session ID.
     *
     * @example s-hz023od0x9****
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description The address of the service that was accessed in a virtual private cloud (VPC) from the instance.
     *
     * @example 192.168.0.246
     *
     * @var string
     */
    public $targetServer;

    /**
     * @description The username used to establish connections.
     *
     * @example root
     *
     * @var string
     */
    public $username;
    protected $_name = [
        'clientIP'     => 'ClientIP',
        'connections'  => 'Connections',
        'creationTime' => 'CreationTime',
        'identityType' => 'IdentityType',
        'portNumber'   => 'PortNumber',
        'principalId'  => 'PrincipalId',
        'sessionId'    => 'SessionId',
        'targetServer' => 'TargetServer',
        'username'     => 'Username',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientIP) {
            $res['ClientIP'] = $this->clientIP;
        }
        if (null !== $this->connections) {
            $res['Connections'] = null !== $this->connections ? $this->connections->toMap() : null;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->identityType) {
            $res['IdentityType'] = $this->identityType;
        }
        if (null !== $this->portNumber) {
            $res['PortNumber'] = $this->portNumber;
        }
        if (null !== $this->principalId) {
            $res['PrincipalId'] = $this->principalId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->targetServer) {
            $res['TargetServer'] = $this->targetServer;
        }
        if (null !== $this->username) {
            $res['Username'] = $this->username;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return session
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientIP'])) {
            $model->clientIP = $map['ClientIP'];
        }
        if (isset($map['Connections'])) {
            $model->connections = connections::fromMap($map['Connections']);
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['IdentityType'])) {
            $model->identityType = $map['IdentityType'];
        }
        if (isset($map['PortNumber'])) {
            $model->portNumber = $map['PortNumber'];
        }
        if (isset($map['PrincipalId'])) {
            $model->principalId = $map['PrincipalId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['TargetServer'])) {
            $model->targetServer = $map['TargetServer'];
        }
        if (isset($map['Username'])) {
            $model->username = $map['Username'];
        }

        return $model;
    }
}
