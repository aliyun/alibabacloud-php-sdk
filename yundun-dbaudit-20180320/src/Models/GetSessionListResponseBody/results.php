<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetSessionListResponseBody;

use AlibabaCloud\Dara\Model;

class results extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $captureTime;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var string
     */
    public $clientIpAlias;

    /**
     * @var string
     */
    public $clientMac;

    /**
     * @var string
     */
    public $clientOsUser;

    /**
     * @var int
     */
    public $clientPort;

    /**
     * @var string
     */
    public $clientProgram;

    /**
     * @var int
     */
    public $dbId;

    /**
     * @var string
     */
    public $dbUser;

    /**
     * @var int
     */
    public $loginCode;

    /**
     * @var string
     */
    public $loginMessage;

    /**
     * @var string
     */
    public $serverIp;

    /**
     * @var string
     */
    public $serverMac;

    /**
     * @var int
     */
    public $serverPort;

    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'action' => 'Action',
        'captureTime' => 'CaptureTime',
        'clientIp' => 'ClientIp',
        'clientIpAlias' => 'ClientIpAlias',
        'clientMac' => 'ClientMac',
        'clientOsUser' => 'ClientOsUser',
        'clientPort' => 'ClientPort',
        'clientProgram' => 'ClientProgram',
        'dbId' => 'DbId',
        'dbUser' => 'DbUser',
        'loginCode' => 'LoginCode',
        'loginMessage' => 'LoginMessage',
        'serverIp' => 'ServerIp',
        'serverMac' => 'ServerMac',
        'serverPort' => 'ServerPort',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->captureTime) {
            $res['CaptureTime'] = $this->captureTime;
        }

        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }

        if (null !== $this->clientIpAlias) {
            $res['ClientIpAlias'] = $this->clientIpAlias;
        }

        if (null !== $this->clientMac) {
            $res['ClientMac'] = $this->clientMac;
        }

        if (null !== $this->clientOsUser) {
            $res['ClientOsUser'] = $this->clientOsUser;
        }

        if (null !== $this->clientPort) {
            $res['ClientPort'] = $this->clientPort;
        }

        if (null !== $this->clientProgram) {
            $res['ClientProgram'] = $this->clientProgram;
        }

        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }

        if (null !== $this->dbUser) {
            $res['DbUser'] = $this->dbUser;
        }

        if (null !== $this->loginCode) {
            $res['LoginCode'] = $this->loginCode;
        }

        if (null !== $this->loginMessage) {
            $res['LoginMessage'] = $this->loginMessage;
        }

        if (null !== $this->serverIp) {
            $res['ServerIp'] = $this->serverIp;
        }

        if (null !== $this->serverMac) {
            $res['ServerMac'] = $this->serverMac;
        }

        if (null !== $this->serverPort) {
            $res['ServerPort'] = $this->serverPort;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['CaptureTime'])) {
            $model->captureTime = $map['CaptureTime'];
        }

        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }

        if (isset($map['ClientIpAlias'])) {
            $model->clientIpAlias = $map['ClientIpAlias'];
        }

        if (isset($map['ClientMac'])) {
            $model->clientMac = $map['ClientMac'];
        }

        if (isset($map['ClientOsUser'])) {
            $model->clientOsUser = $map['ClientOsUser'];
        }

        if (isset($map['ClientPort'])) {
            $model->clientPort = $map['ClientPort'];
        }

        if (isset($map['ClientProgram'])) {
            $model->clientProgram = $map['ClientProgram'];
        }

        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }

        if (isset($map['DbUser'])) {
            $model->dbUser = $map['DbUser'];
        }

        if (isset($map['LoginCode'])) {
            $model->loginCode = $map['LoginCode'];
        }

        if (isset($map['LoginMessage'])) {
            $model->loginMessage = $map['LoginMessage'];
        }

        if (isset($map['ServerIp'])) {
            $model->serverIp = $map['ServerIp'];
        }

        if (isset($map['ServerMac'])) {
            $model->serverMac = $map['ServerMac'];
        }

        if (isset($map['ServerPort'])) {
            $model->serverPort = $map['ServerPort'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
