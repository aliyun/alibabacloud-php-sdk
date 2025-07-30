<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class SendTokenCodeRequest extends Model
{
    /**
     * @description The client ID. The system generates a unique ID for each client.
     *
     * This parameter is required.
     *
     * @example f4a0dc8e-1702-4728-9a60-95b27a35****
     *
     * @var string
     */
    public $clientId;

    /**
     * @description The operating system on which the client runs.
     *
     * @example Windows_NT 10.0.18363 x64
     *
     * @var string
     */
    public $clientOS;

    /**
     * @description The client version. If you use an Alibaba Cloud Workspace client, you can view the client version in the "About" dialog box on the client logon page.
     *
     * @example 2.1.0-R-20210731.151756
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description The username of the account.
     *
     * @example alice
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The logon token.
     *
     * @example v28101ac6a9e69c66b04a163031680463660b4b216cd758f34b60b9ad6a7c7f7334b83dd8f75eef4209c68f9f1080b****
     *
     * @var string
     */
    public $loginToken;

    /**
     * @description The office network ID.
     *
     * @example cn-hangzhou+dir-2925105532
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The session ID.
     *
     * @example cd45e873-650d-4d70-acb9-f996187a****
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description If two-factor authentication is enabled for clients in the Elastic Desktop Service (EDS) Enterprise console, the system will send a verification code to the user\\"s email address if it detects that the current logged-on user is at risk. This parameter is required if you set `CurrentStage` to `TokenVerify`.
     *
     * @example 63****
     *
     * @var string
     */
    public $tokenCode;
    protected $_name = [
        'clientId' => 'ClientId',
        'clientOS' => 'ClientOS',
        'clientVersion' => 'ClientVersion',
        'endUserId' => 'EndUserId',
        'loginToken' => 'LoginToken',
        'officeSiteId' => 'OfficeSiteId',
        'sessionId' => 'SessionId',
        'tokenCode' => 'TokenCode',
    ];

    public function validate() {}

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
