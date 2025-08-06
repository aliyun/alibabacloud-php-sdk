<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTerminalSessionsResponseBody\sessions;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeTerminalSessionsResponseBody\sessions\session\connections;

class session extends Model
{
    /**
     * @var string
     */
    public $clientIP;

    /**
     * @var connections
     */
    public $connections;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $identityType;

    /**
     * @var int
     */
    public $portNumber;

    /**
     * @var string
     */
    public $principalId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $targetServer;

    /**
     * @var string
     */
    public $username;
    protected $_name = [
        'clientIP' => 'ClientIP',
        'connections' => 'Connections',
        'creationTime' => 'CreationTime',
        'identityType' => 'IdentityType',
        'portNumber' => 'PortNumber',
        'principalId' => 'PrincipalId',
        'sessionId' => 'SessionId',
        'targetServer' => 'TargetServer',
        'username' => 'Username',
    ];

    public function validate()
    {
        if (null !== $this->connections) {
            $this->connections->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clientIP) {
            $res['ClientIP'] = $this->clientIP;
        }

        if (null !== $this->connections) {
            $res['Connections'] = null !== $this->connections ? $this->connections->toArray($noStream) : $this->connections;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
