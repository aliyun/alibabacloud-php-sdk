<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Dara\Model;

class SetFingerPrintTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $clientId;

    /**
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $encryptedFingerPrintTemplate;

    /**
     * @var string
     */
    public $encryptedKey;

    /**
     * @var string
     */
    public $fingerPrintTemplate;

    /**
     * @var string
     */
    public $loginToken;

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
    protected $_name = [
        'clientId' => 'ClientId',
        'clientToken' => 'ClientToken',
        'description' => 'Description',
        'encryptedFingerPrintTemplate' => 'EncryptedFingerPrintTemplate',
        'encryptedKey' => 'EncryptedKey',
        'fingerPrintTemplate' => 'FingerPrintTemplate',
        'loginToken' => 'LoginToken',
        'password' => 'Password',
        'regionId' => 'RegionId',
        'sessionId' => 'SessionId',
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

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->encryptedFingerPrintTemplate) {
            $res['EncryptedFingerPrintTemplate'] = $this->encryptedFingerPrintTemplate;
        }

        if (null !== $this->encryptedKey) {
            $res['EncryptedKey'] = $this->encryptedKey;
        }

        if (null !== $this->fingerPrintTemplate) {
            $res['FingerPrintTemplate'] = $this->fingerPrintTemplate;
        }

        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
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

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['EncryptedFingerPrintTemplate'])) {
            $model->encryptedFingerPrintTemplate = $map['EncryptedFingerPrintTemplate'];
        }

        if (isset($map['EncryptedKey'])) {
            $model->encryptedKey = $map['EncryptedKey'];
        }

        if (isset($map['FingerPrintTemplate'])) {
            $model->fingerPrintTemplate = $map['FingerPrintTemplate'];
        }

        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
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

        return $model;
    }
}
