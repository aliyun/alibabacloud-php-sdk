<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models;

use AlibabaCloud\Dara\Model;

class GetLoginTokenRequest extends Model
{
    /**
     * @var string
     */
    public $areaSite;

    /**
     * @var string
     */
    public $authenticationCode;

    /**
     * @var string[]
     */
    public $availableFeatures;

    /**
     * @var string
     */
    public $channel;

    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientName;

    /**
     * @var string
     */
    public $clientOS;

    /**
     * @var string
     */
    public $clientType;

    /**
     * @var string
     */
    public $clientVersion;

    /**
     * @var string
     */
    public $currentStage;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $encryptedFingerPrintData;

    /**
     * @var string
     */
    public $encryptedKey;

    /**
     * @var string
     */
    public $encryptedPassword;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $fingerPrintData;

    /**
     * @var string
     */
    public $idpId;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var bool
     */
    public $keepAlive;

    /**
     * @var string
     */
    public $keepAliveToken;

    /**
     * @var string
     */
    public $loginIdentifier;

    /**
     * @var string
     */
    public $loginName;

    /**
     * @var string
     */
    public $mfaType;

    /**
     * @var string
     */
    public $networkType;

    /**
     * @var string
     */
    public $newPassword;

    /**
     * @var string
     */
    public $officeSiteId;

    /**
     * @var string
     */
    public $oldPassword;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $phone;

    /**
     * @var string
     */
    public $phoneVerifyCode;

    /**
     * @var string
     */
    public $profileRegion;

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
    public $ssoExtendsCookies;

    /**
     * @var string
     */
    public $ssoSessionToken;

    /**
     * @var string
     */
    public $tokenCode;

    /**
     * @var string
     */
    public $umidToken;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'areaSite' => 'AreaSite',
        'authenticationCode' => 'AuthenticationCode',
        'availableFeatures' => 'AvailableFeatures',
        'channel' => 'Channel',
        'clientId' => 'ClientId',
        'clientName' => 'ClientName',
        'clientOS' => 'ClientOS',
        'clientType' => 'ClientType',
        'clientVersion' => 'ClientVersion',
        'currentStage' => 'CurrentStage',
        'directoryId' => 'DirectoryId',
        'encryptedFingerPrintData' => 'EncryptedFingerPrintData',
        'encryptedKey' => 'EncryptedKey',
        'encryptedPassword' => 'EncryptedPassword',
        'endUserId' => 'EndUserId',
        'fingerPrintData' => 'FingerPrintData',
        'idpId' => 'IdpId',
        'imageUrl' => 'ImageUrl',
        'keepAlive' => 'KeepAlive',
        'keepAliveToken' => 'KeepAliveToken',
        'loginIdentifier' => 'LoginIdentifier',
        'loginName' => 'LoginName',
        'mfaType' => 'MfaType',
        'networkType' => 'NetworkType',
        'newPassword' => 'NewPassword',
        'officeSiteId' => 'OfficeSiteId',
        'oldPassword' => 'OldPassword',
        'password' => 'Password',
        'phone' => 'Phone',
        'phoneVerifyCode' => 'PhoneVerifyCode',
        'profileRegion' => 'ProfileRegion',
        'regionId' => 'RegionId',
        'sessionId' => 'SessionId',
        'ssoExtendsCookies' => 'SsoExtendsCookies',
        'ssoSessionToken' => 'SsoSessionToken',
        'tokenCode' => 'TokenCode',
        'umidToken' => 'UmidToken',
        'uuid' => 'Uuid',
    ];

    public function validate()
    {
        if (\is_array($this->availableFeatures)) {
            Model::validateArray($this->availableFeatures);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->areaSite) {
            $res['AreaSite'] = $this->areaSite;
        }

        if (null !== $this->authenticationCode) {
            $res['AuthenticationCode'] = $this->authenticationCode;
        }

        if (null !== $this->availableFeatures) {
            if (\is_array($this->availableFeatures)) {
                $res['AvailableFeatures'] = [];
                foreach ($this->availableFeatures as $key1 => $value1) {
                    $res['AvailableFeatures'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->channel) {
            $res['Channel'] = $this->channel;
        }

        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }

        if (null !== $this->clientName) {
            $res['ClientName'] = $this->clientName;
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

        if (null !== $this->mfaType) {
            $res['MfaType'] = $this->mfaType;
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

        if (null !== $this->profileRegion) {
            $res['ProfileRegion'] = $this->profileRegion;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AreaSite'])) {
            $model->areaSite = $map['AreaSite'];
        }

        if (isset($map['AuthenticationCode'])) {
            $model->authenticationCode = $map['AuthenticationCode'];
        }

        if (isset($map['AvailableFeatures'])) {
            if (!empty($map['AvailableFeatures'])) {
                $model->availableFeatures = [];
                foreach ($map['AvailableFeatures'] as $key1 => $value1) {
                    $model->availableFeatures[$key1] = $value1;
                }
            }
        }

        if (isset($map['Channel'])) {
            $model->channel = $map['Channel'];
        }

        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }

        if (isset($map['ClientName'])) {
            $model->clientName = $map['ClientName'];
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

        if (isset($map['MfaType'])) {
            $model->mfaType = $map['MfaType'];
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

        if (isset($map['ProfileRegion'])) {
            $model->profileRegion = $map['ProfileRegion'];
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
