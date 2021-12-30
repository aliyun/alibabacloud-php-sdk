<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceADAuthServerResponseBody;

use AlibabaCloud\Tea\Model;

class AD extends Model
{
    /**
     * @var string
     */
    public $account;

    /**
     * @var string
     */
    public $baseDN;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var string
     */
    public $emailMapping;

    /**
     * @var string
     */
    public $filter;

    /**
     * @var bool
     */
    public $hasPassword;

    /**
     * @var bool
     */
    public $isSSL;

    /**
     * @var string
     */
    public $mobileMapping;

    /**
     * @var string
     */
    public $nameMapping;

    /**
     * @var int
     */
    public $port;

    /**
     * @var string
     */
    public $server;

    /**
     * @var string
     */
    public $standbyServer;
    protected $_name = [
        'account'       => 'Account',
        'baseDN'        => 'BaseDN',
        'domain'        => 'Domain',
        'emailMapping'  => 'EmailMapping',
        'filter'        => 'Filter',
        'hasPassword'   => 'HasPassword',
        'isSSL'         => 'IsSSL',
        'mobileMapping' => 'MobileMapping',
        'nameMapping'   => 'NameMapping',
        'port'          => 'Port',
        'server'        => 'Server',
        'standbyServer' => 'StandbyServer',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->account) {
            $res['Account'] = $this->account;
        }
        if (null !== $this->baseDN) {
            $res['BaseDN'] = $this->baseDN;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->emailMapping) {
            $res['EmailMapping'] = $this->emailMapping;
        }
        if (null !== $this->filter) {
            $res['Filter'] = $this->filter;
        }
        if (null !== $this->hasPassword) {
            $res['HasPassword'] = $this->hasPassword;
        }
        if (null !== $this->isSSL) {
            $res['IsSSL'] = $this->isSSL;
        }
        if (null !== $this->mobileMapping) {
            $res['MobileMapping'] = $this->mobileMapping;
        }
        if (null !== $this->nameMapping) {
            $res['NameMapping'] = $this->nameMapping;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->server) {
            $res['Server'] = $this->server;
        }
        if (null !== $this->standbyServer) {
            $res['StandbyServer'] = $this->standbyServer;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AD
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Account'])) {
            $model->account = $map['Account'];
        }
        if (isset($map['BaseDN'])) {
            $model->baseDN = $map['BaseDN'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['EmailMapping'])) {
            $model->emailMapping = $map['EmailMapping'];
        }
        if (isset($map['Filter'])) {
            $model->filter = $map['Filter'];
        }
        if (isset($map['HasPassword'])) {
            $model->hasPassword = $map['HasPassword'];
        }
        if (isset($map['IsSSL'])) {
            $model->isSSL = $map['IsSSL'];
        }
        if (isset($map['MobileMapping'])) {
            $model->mobileMapping = $map['MobileMapping'];
        }
        if (isset($map['NameMapping'])) {
            $model->nameMapping = $map['NameMapping'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Server'])) {
            $model->server = $map['Server'];
        }
        if (isset($map['StandbyServer'])) {
            $model->standbyServer = $map['StandbyServer'];
        }

        return $model;
    }
}
