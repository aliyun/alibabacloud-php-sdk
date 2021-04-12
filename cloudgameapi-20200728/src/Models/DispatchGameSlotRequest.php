<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class DispatchGameSlotRequest extends Model
{
    /**
     * @var string
     */
    public $gameId;

    /**
     * @var string
     */
    public $accessKey;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $bizParam;

    /**
     * @var bool
     */
    public $cancel;

    /**
     * @var string
     */
    public $gameSession;

    /**
     * @var string
     */
    public $gameStartParam;

    /**
     * @var string
     */
    public $gameCommand;

    /**
     * @var string
     */
    public $systemInfo;

    /**
     * @var string
     */
    public $clientIp;

    /**
     * @var bool
     */
    public $reconnect;
    protected $_name = [
        'gameId'         => 'GameId',
        'accessKey'      => 'AccessKey',
        'regionName'     => 'RegionName',
        'userId'         => 'UserId',
        'bizParam'       => 'BizParam',
        'cancel'         => 'Cancel',
        'gameSession'    => 'GameSession',
        'gameStartParam' => 'GameStartParam',
        'gameCommand'    => 'GameCommand',
        'systemInfo'     => 'SystemInfo',
        'clientIp'       => 'ClientIp',
        'reconnect'      => 'Reconnect',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->bizParam) {
            $res['BizParam'] = $this->bizParam;
        }
        if (null !== $this->cancel) {
            $res['Cancel'] = $this->cancel;
        }
        if (null !== $this->gameSession) {
            $res['GameSession'] = $this->gameSession;
        }
        if (null !== $this->gameStartParam) {
            $res['GameStartParam'] = $this->gameStartParam;
        }
        if (null !== $this->gameCommand) {
            $res['GameCommand'] = $this->gameCommand;
        }
        if (null !== $this->systemInfo) {
            $res['SystemInfo'] = $this->systemInfo;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->reconnect) {
            $res['Reconnect'] = $this->reconnect;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DispatchGameSlotRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['BizParam'])) {
            $model->bizParam = $map['BizParam'];
        }
        if (isset($map['Cancel'])) {
            $model->cancel = $map['Cancel'];
        }
        if (isset($map['GameSession'])) {
            $model->gameSession = $map['GameSession'];
        }
        if (isset($map['GameStartParam'])) {
            $model->gameStartParam = $map['GameStartParam'];
        }
        if (isset($map['GameCommand'])) {
            $model->gameCommand = $map['GameCommand'];
        }
        if (isset($map['SystemInfo'])) {
            $model->systemInfo = $map['SystemInfo'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['Reconnect'])) {
            $model->reconnect = $map['Reconnect'];
        }

        return $model;
    }
}
