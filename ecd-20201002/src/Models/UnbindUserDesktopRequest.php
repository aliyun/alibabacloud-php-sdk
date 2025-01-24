<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Dara\Model;

class UnbindUserDesktopRequest extends Model
{
    /**
     * @var string
     */
    public $clientId;
    /**
     * @var string
     */
    public $clientType;
    /**
     * @var bool
     */
    public $force;
    /**
     * @var string
     */
    public $loginToken;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $sessionId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
