<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Dara\Model;

class RefreshLoginTokenRequest extends Model
{
    /**
     * @var string
     */
    public $clientId;
    /**
     * @var string
     */
    public $directoryId;
    /**
     * @var string
     */
    public $endUserId;
    /**
     * @var string
     */
    public $loginToken;
    /**
     * @var string
     */
    public $officeSiteId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'clientId'     => 'ClientId',
        'directoryId'  => 'DirectoryId',
        'endUserId'    => 'EndUserId',
        'loginToken'   => 'LoginToken',
        'officeSiteId' => 'OfficeSiteId',
        'regionId'     => 'RegionId',
        'sessionId'    => 'SessionId',
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

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
