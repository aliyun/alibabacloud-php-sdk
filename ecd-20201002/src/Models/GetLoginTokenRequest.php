<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Dara\Model;

class GetLoginTokenRequest extends Model
{
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
    public $endUserId;

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
    public $regionId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $tokenCode;

    /**
     * @var string
     */
    public $uuid;
    protected $_name = [
        'authenticationCode' => 'AuthenticationCode',
        'availableFeatures' => 'AvailableFeatures',
        'clientId' => 'ClientId',
        'clientName' => 'ClientName',
        'clientOS' => 'ClientOS',
        'clientType' => 'ClientType',
        'clientVersion' => 'ClientVersion',
        'currentStage' => 'CurrentStage',
        'directoryId' => 'DirectoryId',
        'endUserId' => 'EndUserId',
        'keepAlive' => 'KeepAlive',
        'keepAliveToken' => 'KeepAliveToken',
        'newPassword' => 'NewPassword',
        'officeSiteId' => 'OfficeSiteId',
        'oldPassword' => 'OldPassword',
        'password' => 'Password',
        'regionId' => 'RegionId',
        'sessionId' => 'SessionId',
        'tokenCode' => 'TokenCode',
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

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->keepAlive) {
            $res['KeepAlive'] = $this->keepAlive;
        }

        if (null !== $this->keepAliveToken) {
            $res['KeepAliveToken'] = $this->keepAliveToken;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->tokenCode) {
            $res['TokenCode'] = $this->tokenCode;
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

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['KeepAlive'])) {
            $model->keepAlive = $map['KeepAlive'];
        }

        if (isset($map['KeepAliveToken'])) {
            $model->keepAliveToken = $map['KeepAliveToken'];
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['TokenCode'])) {
            $model->tokenCode = $map['TokenCode'];
        }

        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
