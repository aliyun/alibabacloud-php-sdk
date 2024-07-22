<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\FindIdpListByLoginIdentifierResponseBody;

use AlibabaCloud\Tea\Model;

class idpInfos extends Model
{
    /**
     * @example simple
     *
     * @var string
     */
    public $accountType;

    /**
     * @example null
     *
     * @var string
     */
    public $cookies;

    /**
     * @example idp-hlyexfvwert9m8****
     *
     * @var string
     */
    public $idpId;

    /**
     * @var string
     */
    public $idpName;

    /**
     * @var string
     */
    public $idpProvider;

    /**
     * @example true
     *
     * @var string
     */
    public $jumpSwitch;

    /**
     * @example SAML
     *
     * @var string
     */
    public $ssoProtocol;

    /**
     * @var string
     */
    public $ssoServiceUrl;
    protected $_name = [
        'accountType'   => 'AccountType',
        'cookies'       => 'Cookies',
        'idpId'         => 'IdpId',
        'idpName'       => 'IdpName',
        'idpProvider'   => 'IdpProvider',
        'jumpSwitch'    => 'JumpSwitch',
        'ssoProtocol'   => 'SsoProtocol',
        'ssoServiceUrl' => 'SsoServiceUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountType) {
            $res['AccountType'] = $this->accountType;
        }
        if (null !== $this->cookies) {
            $res['Cookies'] = $this->cookies;
        }
        if (null !== $this->idpId) {
            $res['IdpId'] = $this->idpId;
        }
        if (null !== $this->idpName) {
            $res['IdpName'] = $this->idpName;
        }
        if (null !== $this->idpProvider) {
            $res['IdpProvider'] = $this->idpProvider;
        }
        if (null !== $this->jumpSwitch) {
            $res['JumpSwitch'] = $this->jumpSwitch;
        }
        if (null !== $this->ssoProtocol) {
            $res['SsoProtocol'] = $this->ssoProtocol;
        }
        if (null !== $this->ssoServiceUrl) {
            $res['SsoServiceUrl'] = $this->ssoServiceUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return idpInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountType'])) {
            $model->accountType = $map['AccountType'];
        }
        if (isset($map['Cookies'])) {
            $model->cookies = $map['Cookies'];
        }
        if (isset($map['IdpId'])) {
            $model->idpId = $map['IdpId'];
        }
        if (isset($map['IdpName'])) {
            $model->idpName = $map['IdpName'];
        }
        if (isset($map['IdpProvider'])) {
            $model->idpProvider = $map['IdpProvider'];
        }
        if (isset($map['JumpSwitch'])) {
            $model->jumpSwitch = $map['JumpSwitch'];
        }
        if (isset($map['SsoProtocol'])) {
            $model->ssoProtocol = $map['SsoProtocol'];
        }
        if (isset($map['SsoServiceUrl'])) {
            $model->ssoServiceUrl = $map['SsoServiceUrl'];
        }

        return $model;
    }
}
