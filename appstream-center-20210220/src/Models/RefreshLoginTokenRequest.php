<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models;

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
    public $clientType;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $loginIdentifier;

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
    public $profileRegion;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'clientId' => 'ClientId',
        'clientType' => 'ClientType',
        'endUserId' => 'EndUserId',
        'loginIdentifier' => 'LoginIdentifier',
        'loginToken' => 'LoginToken',
        'officeSiteId' => 'OfficeSiteId',
        'profileRegion' => 'ProfileRegion',
        'sessionId' => 'SessionId',
        'uuid' => 'Uuid',
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

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->loginIdentifier) {
            $res['LoginIdentifier'] = $this->loginIdentifier;
        }

        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }

        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }

        if (null !== $this->profileRegion) {
            $res['ProfileRegion'] = $this->profileRegion;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
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

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['LoginIdentifier'])) {
            $model->loginIdentifier = $map['LoginIdentifier'];
        }

        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }

        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }

        if (isset($map['ProfileRegion'])) {
            $model->profileRegion = $map['ProfileRegion'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
