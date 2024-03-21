<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class SendTokenCodeRequest extends Model
{
    /**
     * @example f4a0dc8e-1702-4728-9a60-95b27a35****
     *
     * @var string
     */
    public $clientId;

    /**
     * @example Windows_NT 10.0.18363 x64
     *
     * @var string
     */
    public $clientOS;

    /**
     * @example 2.1.0-R-20210731.151756
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @example alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example v28101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****
     *
     * @var string
     */
    public $loginToken;

    /**
     * @example cn-hangzhou+dir-2925105532
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @example cd45e873-650d-4d70-acb9-f996187a****
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example 63****
     *
     * @var string
     */
    public $tokenCode;
    protected $_name = [
        'clientId'      => 'ClientId',
        'clientOS'      => 'ClientOS',
        'clientVersion' => 'ClientVersion',
        'endUserId'     => 'EndUserId',
        'loginToken'    => 'LoginToken',
        'officeSiteId'  => 'OfficeSiteId',
        'sessionId'     => 'SessionId',
        'tokenCode'     => 'TokenCode',
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
        if (null !== $this->clientOS) {
            $res['ClientOS'] = $this->clientOS;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
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
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->tokenCode) {
            $res['TokenCode'] = $this->tokenCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendTokenCodeRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientOS'])) {
            $model->clientOS = $map['ClientOS'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
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
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['TokenCode'])) {
            $model->tokenCode = $map['TokenCode'];
        }

        return $model;
    }
}
