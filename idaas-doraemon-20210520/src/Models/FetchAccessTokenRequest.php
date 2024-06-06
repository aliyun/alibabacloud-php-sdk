<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Idaasdoraemon\V20210520\Models;

use AlibabaCloud\Tea\Model;

class FetchAccessTokenRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example secAuthApp
     *
     * @var string
     */
    public $applicationExternalId;

    /**
     * @description This parameter is required.
     *
     * @example eyJhdHRhY2htZW50IjoicGxhdGZvcm0iLCJ1c2VyVmVyaWZpY2F0aW9uIjoicmVxdWlyZWQifQ==
     *
     * @var string
     */
    public $mobileExtendParamsJson;

    /**
     * @description This parameter is required.
     *
     * @example a3984bc27776bb6f65f82276f75d6a12d56e1b41e98ed6975d852b14309b8a20
     *
     * @var string
     */
    public $mobileExtendParamsJsonSign;

    /**
     * @example eyJhdHRhY2htZW50IjoicGxhdGZvcm0iLCJ1c2VyVmVyaWZpY2F0aW9uIjoicmVxdWlyZWQifQ==
     *
     * @var string
     */
    public $serverExtendParamsJson;

    /**
     * @example 6ba923abf6749536b7fd31c6a31360fboOFZQ8WbzmG
     *
     * @var string
     */
    public $userId;

    /**
     * @example 124.127.214.94
     *
     * @var string
     */
    public $XClientIp;
    protected $_name = [
        'applicationExternalId'      => 'ApplicationExternalId',
        'mobileExtendParamsJson'     => 'MobileExtendParamsJson',
        'mobileExtendParamsJsonSign' => 'MobileExtendParamsJsonSign',
        'serverExtendParamsJson'     => 'ServerExtendParamsJson',
        'userId'                     => 'UserId',
        'XClientIp'                  => 'XClientIp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationExternalId) {
            $res['ApplicationExternalId'] = $this->applicationExternalId;
        }
        if (null !== $this->mobileExtendParamsJson) {
            $res['MobileExtendParamsJson'] = $this->mobileExtendParamsJson;
        }
        if (null !== $this->mobileExtendParamsJsonSign) {
            $res['MobileExtendParamsJsonSign'] = $this->mobileExtendParamsJsonSign;
        }
        if (null !== $this->serverExtendParamsJson) {
            $res['ServerExtendParamsJson'] = $this->serverExtendParamsJson;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->XClientIp) {
            $res['XClientIp'] = $this->XClientIp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return FetchAccessTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationExternalId'])) {
            $model->applicationExternalId = $map['ApplicationExternalId'];
        }
        if (isset($map['MobileExtendParamsJson'])) {
            $model->mobileExtendParamsJson = $map['MobileExtendParamsJson'];
        }
        if (isset($map['MobileExtendParamsJsonSign'])) {
            $model->mobileExtendParamsJsonSign = $map['MobileExtendParamsJsonSign'];
        }
        if (isset($map['ServerExtendParamsJson'])) {
            $model->serverExtendParamsJson = $map['ServerExtendParamsJson'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['XClientIp'])) {
            $model->XClientIp = $map['XClientIp'];
        }

        return $model;
    }
}
