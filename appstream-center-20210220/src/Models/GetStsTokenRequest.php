<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models;

use AlibabaCloud\Tea\Model;

class GetStsTokenRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example e4e169bea1cc48e8afac53**********
     *
     * @var string
     */
    public $authCode;

    /**
     * @example eac19bef-1e45-4190-a03a-4ea74b69****
     *
     * @var string
     */
    public $clientId;

    /**
     * @example 22.21.2.**
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
     * @example 6.3.0-R-20231106.210000
     *
     * @var string
     */
    public $clientVersion;

    /**
     * @example 2943802884B27030B6759F9132B2****
     *
     * @var string
     */
    public $uuid;
    protected $_name = [
        'authCode'      => 'AuthCode',
        'clientId'      => 'ClientId',
        'clientIp'      => 'ClientIp',
        'clientOS'      => 'ClientOS',
        'clientVersion' => 'ClientVersion',
        'uuid'          => 'Uuid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->authCode) {
            $res['AuthCode'] = $this->authCode;
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
        if (null !== $this->uuid) {
            $res['Uuid'] = $this->uuid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetStsTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AuthCode'])) {
            $model->authCode = $map['AuthCode'];
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
        if (isset($map['Uuid'])) {
            $model->uuid = $map['Uuid'];
        }

        return $model;
    }
}
