<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210220\Models\FindIdpListByLoginIdentifierResponseBody;

use AlibabaCloud\Dara\Model;

class idpInfos extends Model
{
    /**
     * @var string
     */
    public $accountType;

    /**
     * @var string
     */
    public $cookies;

    /**
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
    public $idpNameEN;

    /**
     * @var string
     */
    public $idpProvider;

    /**
     * @var string
     */
    public $jumpSwitch;

    /**
     * @var string
     */
    public $ssoProtocol;

    /**
     * @var string
     */
    public $ssoServiceUrl;
    protected $_name = [
        'accountType' => 'AccountType',
        'cookies' => 'Cookies',
        'idpId' => 'IdpId',
        'idpName' => 'IdpName',
        'idpNameEN' => 'IdpNameEN',
        'idpProvider' => 'IdpProvider',
        'jumpSwitch' => 'JumpSwitch',
        'ssoProtocol' => 'SsoProtocol',
        'ssoServiceUrl' => 'SsoServiceUrl',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->idpNameEN) {
            $res['IdpNameEN'] = $this->idpNameEN;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['IdpNameEN'])) {
            $model->idpNameEN = $map['IdpNameEN'];
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
