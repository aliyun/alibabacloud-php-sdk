<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models;

use AlibabaCloud\Tea\Model;

class DispatchGameSlotRequest extends Model
{
    /**
     * @var string
     */
    public $accessKey;

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
    public $clientIp;

    /**
     * @var string
     */
    public $gameCommand;

    /**
     * @var string
     */
    public $gameId;

    /**
     * @var string
     */
    public $gameSession;

    /**
     * @var string
     */
    public $gameStartParam;

    /**
     * @var bool
     */
    public $reconnect;

    /**
     * @var string
     */
    public $regionName;

    /**
     * @var string
     */
    public $systemInfo;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $userLevel;
    protected $_name = [
        'accessKey'      => 'AccessKey',
        'bizParam'       => 'BizParam',
        'cancel'         => 'Cancel',
        'clientIp'       => 'ClientIp',
        'gameCommand'    => 'GameCommand',
        'gameId'         => 'GameId',
        'gameSession'    => 'GameSession',
        'gameStartParam' => 'GameStartParam',
        'reconnect'      => 'Reconnect',
        'regionName'     => 'RegionName',
        'systemInfo'     => 'SystemInfo',
        'tags'           => 'Tags',
        'userId'         => 'UserId',
        'userLevel'      => 'UserLevel',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = $this->accessKey;
        }
        if (null !== $this->bizParam) {
            $res['BizParam'] = $this->bizParam;
        }
        if (null !== $this->cancel) {
            $res['Cancel'] = $this->cancel;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->gameCommand) {
            $res['GameCommand'] = $this->gameCommand;
        }
        if (null !== $this->gameId) {
            $res['GameId'] = $this->gameId;
        }
        if (null !== $this->gameSession) {
            $res['GameSession'] = $this->gameSession;
        }
        if (null !== $this->gameStartParam) {
            $res['GameStartParam'] = $this->gameStartParam;
        }
        if (null !== $this->reconnect) {
            $res['Reconnect'] = $this->reconnect;
        }
        if (null !== $this->regionName) {
            $res['RegionName'] = $this->regionName;
        }
        if (null !== $this->systemInfo) {
            $res['SystemInfo'] = $this->systemInfo;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userLevel) {
            $res['UserLevel'] = $this->userLevel;
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
        if (isset($map['AccessKey'])) {
            $model->accessKey = $map['AccessKey'];
        }
        if (isset($map['BizParam'])) {
            $model->bizParam = $map['BizParam'];
        }
        if (isset($map['Cancel'])) {
            $model->cancel = $map['Cancel'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['GameCommand'])) {
            $model->gameCommand = $map['GameCommand'];
        }
        if (isset($map['GameId'])) {
            $model->gameId = $map['GameId'];
        }
        if (isset($map['GameSession'])) {
            $model->gameSession = $map['GameSession'];
        }
        if (isset($map['GameStartParam'])) {
            $model->gameStartParam = $map['GameStartParam'];
        }
        if (isset($map['Reconnect'])) {
            $model->reconnect = $map['Reconnect'];
        }
        if (isset($map['RegionName'])) {
            $model->regionName = $map['RegionName'];
        }
        if (isset($map['SystemInfo'])) {
            $model->systemInfo = $map['SystemInfo'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserLevel'])) {
            $model->userLevel = $map['UserLevel'];
        }

        return $model;
    }
}
