<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class EncryptPasswordRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 1d40776f-e9cb-4e2b-a8da-308d10e8****
     *
     * @var string
     */
    public $clientId;

    /**
     * @example cn-beijing+dir-131196****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description This parameter is required.
     *
     * @example v1b16dcff3ab21a6c5ec01652238375511cff5a1db59fd4dc49afb37e2ea7a626af6f38109fd0498b6abd9de1af7743****
     *
     * @var string
     */
    public $loginToken;

    /**
     * @example cn-beijing+dir-131196****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description This parameter is required.
     *
     * @example Ab123456
     *
     * @var string
     */
    public $password;

    /**
     * @description This parameter is required.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @example c78e2e52-23d9-4401-a648-e67ac6ff****
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'clientId'     => 'ClientId',
        'directoryId'  => 'DirectoryId',
        'loginToken'   => 'LoginToken',
        'officeSiteId' => 'OfficeSiteId',
        'password'     => 'Password',
        'regionId'     => 'RegionId',
        'sessionId'    => 'SessionId',
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
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }
        if (null !== $this->loginToken) {
            $res['LoginToken'] = $this->loginToken;
        }
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
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
     * @return EncryptPasswordRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }
        if (isset($map['LoginToken'])) {
            $model->loginToken = $map['LoginToken'];
        }
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
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
