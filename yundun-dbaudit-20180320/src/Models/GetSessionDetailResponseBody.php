<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models;

use AlibabaCloud\Tea\Model;

class GetSessionDetailResponseBody extends Model
{
    /**
     * @var string
     */
    public $loginTime;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var int
     */
    public $loginCode;

    /**
     * @var int
     */
    public $clientPort;

    /**
     * @var string
     */
    public $loginMessage;

    /**
     * @var string
     */
    public $dbUser;

    /**
     * @var string
     */
    public $logoutTime;

    /**
     * @var int
     */
    public $serverPort;

    /**
     * @var string
     */
    public $clientOsUser;

    /**
     * @var string
     */
    public $serverMac;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $clientProgram;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $serverIp;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $clientMac;
    protected $_name = [
        'loginTime'     => 'LoginTime',
        'dbId'          => 'DbId',
        'loginCode'     => 'LoginCode',
        'clientPort'    => 'ClientPort',
        'loginMessage'  => 'LoginMessage',
        'dbUser'        => 'DbUser',
        'logoutTime'    => 'LogoutTime',
        'serverPort'    => 'ServerPort',
        'clientOsUser'  => 'ClientOsUser',
        'serverMac'     => 'ServerMac',
        'requestId'     => 'RequestId',
        'clientProgram' => 'ClientProgram',
        'clientIp'      => 'ClientIp',
        'serverIp'      => 'ServerIp',
        'sessionId'     => 'SessionId',
        'clientMac'     => 'ClientMac',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->loginTime) {
            $res['LoginTime'] = $this->loginTime;
        }
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->loginCode) {
            $res['LoginCode'] = $this->loginCode;
        }
        if (null !== $this->clientPort) {
            $res['ClientPort'] = $this->clientPort;
        }
        if (null !== $this->loginMessage) {
            $res['LoginMessage'] = $this->loginMessage;
        }
        if (null !== $this->dbUser) {
            $res['DbUser'] = $this->dbUser;
        }
        if (null !== $this->logoutTime) {
            $res['LogoutTime'] = $this->logoutTime;
        }
        if (null !== $this->serverPort) {
            $res['ServerPort'] = $this->serverPort;
        }
        if (null !== $this->clientOsUser) {
            $res['ClientOsUser'] = $this->clientOsUser;
        }
        if (null !== $this->serverMac) {
            $res['ServerMac'] = $this->serverMac;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->clientProgram) {
            $res['ClientProgram'] = $this->clientProgram;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->clientMac) {
            $res['ClientMac'] = $this->clientMac;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetSessionDetailResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LoginTime'])) {
            $model->loginTime = $map['LoginTime'];
        }
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['LoginCode'])) {
            $model->loginCode = $map['LoginCode'];
        }
        if (isset($map['ClientPort'])) {
            $model->clientPort = $map['ClientPort'];
        }
        if (isset($map['LoginMessage'])) {
            $model->loginMessage = $map['LoginMessage'];
        }
        if (isset($map['DbUser'])) {
            $model->dbUser = $map['DbUser'];
        }
        if (isset($map['LogoutTime'])) {
            $model->logoutTime = $map['LogoutTime'];
        }
        if (isset($map['ServerPort'])) {
            $model->serverPort = $map['ServerPort'];
        }
        if (isset($map['ClientOsUser'])) {
            $model->clientOsUser = $map['ClientOsUser'];
        }
        if (isset($map['ServerMac'])) {
            $model->serverMac = $map['ServerMac'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ClientProgram'])) {
            $model->clientProgram = $map['ClientProgram'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['ClientMac'])) {
            $model->clientMac = $map['ClientMac'];
        }

        return $model;
    }
}
