<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models;

use AlibabaCloud\Tea\Model;

class FindIdpListByLoginIdentifierRequest extends Model
{
    /**
     * @example pc
     *
     * @var string
     */
    public $clientChannel;

    /**
     * @example 370b56f8-2812-4b6c-bfa6-2560791c****
     *
     * @var string
     */
    public $clientId;

    /**
     * @example 22.21.XX.XX
     *
     * @var string
     */
    public $clientIp;

    /**
     * @example windows_\\"Windows 10 Enterprise\\" 10.0 (Build 14393)
     *
     * @var string
     */
    public $clientOS;

    /**
     * @example 2.0.1-D-20211008.101607
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @description This parameter is required.
     *
     * @example Aliyun123***
     *
     * @var string
     */
    public $loginIdentifier;

    /**
     * @var string[]
     */
    public $supportTypes;

    /**
     * @example 2943802884B27030B6759F9132B2****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'clientChannel'   => 'ClientChannel',
        'clientId'        => 'ClientId',
        'clientIp'        => 'ClientIp',
        'clientOS'        => 'ClientOS',
        'clientVersion'   => 'ClientVersion',
        'loginIdentifier' => 'LoginIdentifier',
        'supportTypes'    => 'SupportTypes',
        'uuid'            => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientChannel) {
            $res['ClientChannel'] = $this->clientChannel;
        }
        if (null !== $this->clientId) {
            $res['ClientId'] = $this->clientId;
        }
        if (null !== $this->clientIp) {
            $res['ClientIp'] = $this->clientIp;
        }
        if (null !== $this->clientOS) {
            $res['ClientOS'] = $this->clientOS;
        }
        if (null !== $this->clientVersion) {
            $res['ClientVersion'] = $this->clientVersion;
        }
        if (null !== $this->loginIdentifier) {
            $res['LoginIdentifier'] = $this->loginIdentifier;
        }
        if (null !== $this->supportTypes) {
            $res['SupportTypes'] = $this->supportTypes;
        }
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FindIdpListByLoginIdentifierRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientChannel'])) {
            $model->clientChannel = $map['ClientChannel'];
        }
        if (isset($map['ClientId'])) {
            $model->clientId = $map['ClientId'];
        }
        if (isset($map['ClientIp'])) {
            $model->clientIp = $map['ClientIp'];
        }
        if (isset($map['ClientOS'])) {
            $model->clientOS = $map['ClientOS'];
        }
        if (isset($map['ClientVersion'])) {
            $model->clientVersion = $map['ClientVersion'];
        }
        if (isset($map['LoginIdentifier'])) {
            $model->loginIdentifier = $map['LoginIdentifier'];
        }
        if (isset($map['SupportTypes'])) {
            if (!empty($map['SupportTypes'])) {
                $model->supportTypes = $map['SupportTypes'];
            }
        }
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
