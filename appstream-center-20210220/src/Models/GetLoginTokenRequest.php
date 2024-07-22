<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models;

use AlibabaCloud\Tea\Model;

class GetLoginTokenRequest extends Model
{
    /**
     * @example 182901
     *
     * @var string
     */
    public $authenticationCode;

    /**
     * @description This parameter is required.
     *
     * @example 05967f80-6f51-46cb-a27c-****
     *
     * @var string
     */
    public $clientId;

    /**
     * @example windows_\\"Windows 10 Pro\\" 10.0 (Build 22631)
     *
     * @var string
     */
    public $clientOS;

    /**
     * @example windows
     *
     * @var string
     */
    public $clientType;

    /**
     * @example 7.3.0-20240619.143924
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @example SsoTokenLogin
     *
     * @var string
     */
    public $currentStage;

    /**
     * @example cn-beijing+dir-j9dd****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @example null
     *
     * @var string
     */
    public $encryptedFingerPrintData;

    /**
     * @example 4d7****8e90bb0484fc
     *
     * @var string
     */
    public $encryptedKey;

    /**
     * @example 04d7****8e90bb0484fc;gJ1GLca1vQRRqQbRvByU0A==;5kOWZE7AtbQhki+4LAo69A==
     *
     * @var string
     */
    public $encryptedPassword;

    /**
     * @example user01
     *
     * @var string
     */
    public $endUserId;

    /**
     * @example null
     *
     * @var string
     */
    public $fingerPrintData;

    /**
     * @example idp-iwntrlbb98q7v****
     *
     * @var string
     */
    public $idpId;

    /**
     * @example null
     *
     * @var string
     */
    public $imageUrl;

    /**
     * @example true
     *
     * @var bool
     */
    public $keepAlive;

    /**
     * @example 00ugamMAoO1+u1MlhmgCeZJ75q094x3H/4kg7ZaTI3f/joVTVPIpJgfv9JFkPLNxnQjblrvsByNas08mc6FtVWvQPOE68fqmt6QMM4UbRtahm8luxEXvicF58qSPXW1hxOtV/Ev6d92VBz2Bck/N4CYyjD0iLocfN8jkBnt231****
     *
     * @var string
     */
    public $keepAliveToken;

    /**
     * @example Fe04****
     *
     * @var string
     */
    public $loginIdentifier;

    /**
     * @example null
     *
     * @var string
     */
    public $loginName;

    /**
     * @example INTERNET
     *
     * @var string
     */
    public $networkType;

    /**
     * @example Admin@1234****
     *
     * @var string
     */
    public $newPassword;

    /**
     * @example cn-beijing+dir-j9dd****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @example Admin@1234****
     *
     * @var string
     */
    public $oldPassword;

    /**
     * @example Admin@1234****
     *
     * @var string
     */
    public $password;

    /**
     * @example 1822727****
     *
     * @var string
     */
    public $phone;

    /**
     * @example 321123
     *
     * @var string
     */
    public $phoneVerifyCode;

    /**
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @example c6f3cd91-65fc-4c7b-b189-2a73da0****
     *
     * @var string
     */
    public $sessionId;

    /**
     * @example null
     *
     * @var string
     */
    public $ssoExtendsCookies;

    /**
     * @example 04d707a6-fb23-44a7-aae7-8e90****
     *
     * @var string
     */
    public $ssoSessionToken;

    /**
     * @example 1234***
     *
     * @var string
     */
    public $tokenCode;

    /**
     * @example 04d707a6-fb23-44a7-aae7-8e90bb04****
     *
     * @var string
     */
    public $umidToken;

    /**
     * @example C50973691A6D2BE23F2CDD73B85B****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'authenticationCode'       => 'AuthenticationCode',
        'clientId'                 => 'ClientId',
        'clientOS'                 => 'ClientOS',
        'clientType'               => 'ClientType',
        'clientVersion'            => 'ClientVersion',
        'currentStage'             => 'CurrentStage',
        'directoryId'              => 'DirectoryId',
        'encryptedFingerPrintData' => 'EncryptedFingerPrintData',
        'encryptedKey'             => 'EncryptedKey',
        'encryptedPassword'        => 'EncryptedPassword',
        'endUserId'                => 'EndUserId',
        'fingerPrintData'          => 'FingerPrintData',
        'idpId'                    => 'IdpId',
        'imageUrl'                 => 'ImageUrl',
        'keepAlive'                => 'KeepAlive',
        'keepAliveToken'           => 'KeepAliveToken',
        'loginIdentifier'          => 'LoginIdentifier',
        'loginName'                => 'LoginName',
        'networkType'              => 'NetworkType',
        'newPassword'              => 'NewPassword',
        'officeSiteId'             => 'OfficeSiteId',
        'oldPassword'              => 'OldPassword',
        'password'                 => 'Password',
        'phone'                    => 'Phone',
        'phoneVerifyCode'          => 'PhoneVerifyCode',
        'regionId'                 => 'RegionId',
        'sessionId'                => 'SessionId',
        'ssoExtendsCookies'        => 'SsoExtendsCookies',
        'ssoSessionToken'          => 'SsoSessionToken',
        'tokenCode'                => 'TokenCode',
        'umidToken'                => 'UmidToken',
        'uuid'                     => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authenticationCode) {
            $res['AuthenticationCode'] = $this->authenticationCode;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientOS) {
            $res['ClientOS'] = $this->clientOS;
        }
        if (null !== $this->clientType) {
            $res['ClientType'] = $this->clientType;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->currentStage) {
            $res['CurrentStage'] = $this->currentStage;
        }
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->encryptedFingerPrintData) {
            $res['EncryptedFingerPrintData'] = $this->encryptedFingerPrintData;
        }
        if (null !== $this->encryptedKey) {
            $res['EncryptedKey'] = $this->encryptedKey;
        }
        if (null !== $this->encryptedPassword) {
            $res['EncryptedPassword'] = $this->encryptedPassword;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->fingerPrintData) {
            $res['FingerPrintData'] = $this->fingerPrintData;
        }
        if (null !== $this->idpId) {
            $res['IdpId'] = $this->idpId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->keepAlive) {
            $res['KeepAlive'] = $this->keepAlive;
        }
        if (null !== $this->keepAliveToken) {
            $res['KeepAliveToken'] = $this->keepAliveToken;
        }
        if (null !== $this->loginIdentifier) {
            $res['LoginIdentifier'] = $this->loginIdentifier;
        }
        if (null !== $this->loginName) {
            $res['LoginName'] = $this->loginName;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->newPassword) {
            $res['NewPassword'] = $this->newPassword;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->oldPassword) {
            $res['OldPassword'] = $this->oldPassword;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->phone) {
            $res['Phone'] = $this->phone;
        }
        if (null !== $this->phoneVerifyCode) {
            $res['PhoneVerifyCode'] = $this->phoneVerifyCode;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->ssoExtendsCookies) {
            $res['SsoExtendsCookies'] = $this->ssoExtendsCookies;
        }
        if (null !== $this->ssoSessionToken) {
            $res['SsoSessionToken'] = $this->ssoSessionToken;
        }
        if (null !== $this->tokenCode) {
            $res['TokenCode'] = $this->tokenCode;
        }
        if (null !== $this->umidToken) {
            $res['UmidToken'] = $this->umidToken;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetLoginTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthenticationCode'])) {
            $model->authenticationCode = $map['AuthenticationCode'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientOS'])) {
            $model->clientOS = $map['ClientOS'];
        }
        if (isset($map['ClientType'])) {
            $model->clientType = $map['ClientType'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['CurrentStage'])) {
            $model->currentStage = $map['CurrentStage'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['EncryptedFingerPrintData'])) {
            $model->encryptedFingerPrintData = $map['EncryptedFingerPrintData'];
        }
        if (isset($map['EncryptedKey'])) {
            $model->encryptedKey = $map['EncryptedKey'];
        }
        if (isset($map['EncryptedPassword'])) {
            $model->encryptedPassword = $map['EncryptedPassword'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['FingerPrintData'])) {
            $model->fingerPrintData = $map['FingerPrintData'];
        }
        if (isset($map['IdpId'])) {
            $model->idpId = $map['IdpId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['KeepAlive'])) {
            $model->keepAlive = $map['KeepAlive'];
        }
        if (isset($map['KeepAliveToken'])) {
            $model->keepAliveToken = $map['KeepAliveToken'];
        }
        if (isset($map['LoginIdentifier'])) {
            $model->loginIdentifier = $map['LoginIdentifier'];
        }
        if (isset($map['LoginName'])) {
            $model->loginName = $map['LoginName'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['NewPassword'])) {
            $model->newPassword = $map['NewPassword'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['OldPassword'])) {
            $model->oldPassword = $map['OldPassword'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Phone'])) {
            $model->phone = $map['Phone'];
        }
        if (isset($map['PhoneVerifyCode'])) {
            $model->phoneVerifyCode = $map['PhoneVerifyCode'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['SsoExtendsCookies'])) {
            $model->ssoExtendsCookies = $map['SsoExtendsCookies'];
        }
        if (isset($map['SsoSessionToken'])) {
            $model->ssoSessionToken = $map['SsoSessionToken'];
        }
        if (isset($map['TokenCode'])) {
            $model->tokenCode = $map['TokenCode'];
        }
        if (isset($map['UmidToken'])) {
            $model->umidToken = $map['UmidToken'];
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
