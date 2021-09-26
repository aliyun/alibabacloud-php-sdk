<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundundbaudit\V20180320\Models\GetSessionListResponseBody;

use AlibabaCloud\Tea\Model;

class results extends Model
{
    /**
     * @var int
     */
    public $dbId;

    /**
     * @var int
     */
    public $loginCode;

    /**
     * @var string
     */
    public $action;

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
    public $clientProgram;

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
        'dbId'          => 'DbId',
        'loginCode'     => 'LoginCode',
        'action'        => 'Action',
        'clientPort'    => 'ClientPort',
        'loginMessage'  => 'LoginMessage',
        'dbUser'        => 'DbUser',
        'serverPort'    => 'ServerPort',
        'clientOsUser'  => 'ClientOsUser',
        'serverMac'     => 'ServerMac',
        'clientProgram' => 'ClientProgram',
        'captureTime'   => 'CaptureTime',
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
        if (null !== $this->dbId) {
            $res['DbId'] = $this->dbId;
        }
        if (null !== $this->loginCode) {
            $res['LoginCode'] = $this->loginCode;
        }
        if (null !== $this->action) {
            $res['Action'] = $this->action;
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
        if (null !== $this->serverPort) {
            $res['ServerPort'] = $this->serverPort;
        }
        if (null !== $this->clientOsUser) {
            $res['ClientOsUser'] = $this->clientOsUser;
        }
        if (null !== $this->serverMac) {
            $res['ServerMac'] = $this->serverMac;
        }
        if (null !== $this->clientProgram) {
            $res['ClientProgram'] = $this->clientProgram;
        }
        if (null !== $this->captureTime) {
            $res['CaptureTime'] = $this->captureTime;
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
     * @return results
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DbId'])) {
            $model->dbId = $map['DbId'];
        }
        if (isset($map['LoginCode'])) {
            $model->loginCode = $map['LoginCode'];
        }
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
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
        if (isset($map['ServerPort'])) {
            $model->serverPort = $map['ServerPort'];
        }
        if (isset($map['ClientOsUser'])) {
            $model->clientOsUser = $map['ClientOsUser'];
        }
        if (isset($map['ServerMac'])) {
            $model->serverMac = $map['ServerMac'];
        }
        if (isset($map['ClientProgram'])) {
            $model->clientProgram = $map['ClientProgram'];
        }
        if (isset($map['CaptureTime'])) {
            $model->captureTime = $map['CaptureTime'];
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
