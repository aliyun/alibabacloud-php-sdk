<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models;

use AlibabaCloud\Tea\Model;

class RefreshLoginTokenRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example f4a0dc8e-1702-4728-9a60-95b27a35****
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
     * @example alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example Alibaba****
     *
     * @var string
     */
    public $loginIdentifier;

    /**
     * @description This parameter is required.
     *
     * @example v1046341d8d4e2f05c4aa168196009613594aaf451499bfc75e54699efa7230bc968e1debb1fa4063b01e5d327b467****
     *
     * @var string
     */
    public $loginToken;

    /**
     * @example cn-shenzhen+dir-436909****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $profileRegion;

    /**
     * @description This parameter is required.
     *
     * @example 6442b2fd-ed3e-423a-8e6e-352d26a4****
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 2943802884B27030B6759F9132B2****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'clientId'        => 'ClientId',
        'clientType'      => 'ClientType',
        'endUserId'       => 'EndUserId',
        'loginIdentifier' => 'LoginIdentifier',
        'loginToken'      => 'LoginToken',
        'officeSiteId'    => 'OfficeSiteId',
        'profileRegion'   => 'ProfileRegion',
        'sessionId'       => 'SessionId',
        'uuid'            => 'Uuid',
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

    /**
     * @param array $map
     *
     * @return RefreshLoginTokenRequest
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
