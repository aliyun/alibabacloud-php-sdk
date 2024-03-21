<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class UnbindUserDesktopRequest extends Model
{
    /**
     * @example 58f96f67-7944-4f97-9342-****
     *
     * @var string
     */
    public $clientId;

    /**
     * @example windows
     *
     * @var string
     */
    public $clientType;

    /**
     * @example true
     *
     * @var bool
     */
    public $force;

    /**
     * @example v12307f5e0****
     *
     * @var string
     */
    public $loginToken;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 3b053331-dc98-43d8-b247-****
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example ud-sdfs****
     *
     * @var string
     */
    public $userDesktopId;
    protected $_name = [
        'clientId'      => 'ClientId',
        'clientType'    => 'ClientType',
        'force'         => 'Force',
        'loginToken'    => 'LoginToken',
        'regionId'      => 'RegionId',
        'sessionId'     => 'SessionId',
        'userDesktopId' => 'UserDesktopId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->force) {
            $res['Force'] = $this->force;
        }
        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->userDesktopId) {
            $res['UserDesktopId'] = $this->userDesktopId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UnbindUserDesktopRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['Force'])) {
            $model->force = $map['Force'];
        }
        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['UserDesktopId'])) {
            $model->userDesktopId = $map['UserDesktopId'];
        }

        return $model;
    }
}
