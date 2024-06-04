<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class SetFingerPrintTemplateRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 347431a9-90f6-448e-82c4-42bc84a9****
     *
     * @var string
     */
    public $clientId;

    /**
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @example testDescription
     *
     * @var string
     */
    public $description;

    /**
     * @example AAAAAAAAAAAAAA
     *
     * @var string
     */
    public $encryptedFingerPrintTemplate;

    /**
     * @example drjfspchj
     *
     * @var string
     */
    public $encryptedKey;

    /**
     * @example goG3gG8AAABhujtscn
     *
     * @var string
     */
    public $fingerPrintTemplate;

    /**
     * @description This parameter is required.
     *
     * @example v11c73e7af0cb43ff39301651142485099ffb447085d76c4147519dbaa21c3bd90d53045e327c1f525ee6331c52556****
     *
     * @var string
     */
    public $loginToken;

    /**
     * @description This parameter is required.
     *
     * @example As53328794
     *
     * @var string
     */
    public $password;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @example 8b42538a-246e-45a1-95ea-e5c65b09****
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'clientId'                     => 'ClientId',
        'clientToken'                  => 'ClientToken',
        'description'                  => 'Description',
        'encryptedFingerPrintTemplate' => 'EncryptedFingerPrintTemplate',
        'encryptedKey'                 => 'EncryptedKey',
        'fingerPrintTemplate'          => 'FingerPrintTemplate',
        'loginToken'                   => 'LoginToken',
        'password'                     => 'Password',
        'regionId'                     => 'RegionId',
        'sessionId'                    => 'SessionId',
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

    /**
     * @param array $map
     *
     * @return SetFingerPrintTemplateRequest
     */
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
