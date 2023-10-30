<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceADAuthServerResponseBody;

use AlibabaCloud\Tea\Model;

class AD extends Model
{
    /**
     * @description The port that is used to access the AD server.
     *
     * @example cn=Manager,dc=test,dc=com
     *
     * @var string
     */
    public $account;

    /**
     * @description The ID of the bastion host to query.
     *
     * You can call the [DescribeInstances](~~153281~~) operation to query the ID of the bastion host.
     * @example dc=test,dc=com
     *
     * @var string
     */
    public $baseDN;

    /**
     * @description The settings of AD authentication.
     *
     * @example domain
     *
     * @var string
     */
    public $domain;

    /**
     * @description The address of the secondary AD server.
     *
     * @example emailAttr
     *
     * @var string
     */
    public $emailMapping;

    /**
     * @description The field that is used to indicate the mobile phone number of a user on the AD server.
     *
     * @example (&(objectClass=top))
     *
     * @var string
     */
    public $filter;

    /**
     * @description The address of the AD server.
     *
     * @example true
     *
     * @var bool
     */
    public $hasPassword;

    /**
     * @description The Base DN of the AD server.
     *
     * @example true
     *
     * @var bool
     */
    public $isSSL;

    /**
     * @description The field that is used to indicate the name of a user on the AD server.
     *
     * @example mobileAttr
     *
     * @var string
     */
    public $mobileMapping;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example nameAttr
     *
     * @var string
     */
    public $nameMapping;

    /**
     * @description Queries the settings of Active Directory (AD) authentication on a bastion host.
     *
     * @example 389
     *
     * @var int
     */
    public $port;

    /**
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $server;

    /**
     * @example 192.168.XX.XX
     *
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
