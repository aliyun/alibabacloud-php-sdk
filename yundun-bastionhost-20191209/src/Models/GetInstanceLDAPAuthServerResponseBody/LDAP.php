<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models\GetInstanceLDAPAuthServerResponseBody;

use AlibabaCloud\Tea\Model;

class LDAP extends Model
{
    /**
     * @description The ID of the bastion host.
     *
     * >  You can call the [DescribeInstances](~~153281~~) operation to query the ID of the bastion host.
     * @example cn=Manager,dc=test,dc=com
     *
     * @var string
     */
    public $account;

    /**
     * @description The field that is used to indicate the logon name of a user on the LDAP server.
     *
     * @example dc=test,dc=com
     *
     * @var string
     */
    public $baseDN;

    /**
     * @description The address of the secondary LDAP server.
     *
     * @example emailAttr
     *
     * @var string
     */
    public $emailMapping;

    /**
     * @description The Base distinguished name (DN).
     *
     * @example (&(objectClass=top))
     *
     * @var string
     */
    public $filter;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example true
     *
     * @var string
     */
    public $hasPassword;

    /**
     * @description The condition that is used to filter users.
     *
     * @example true
     *
     * @var bool
     */
    public $isSSL;

    /**
     * @description The port that is used to access the LDAP server.
     *
     * @example userNameAttr
     *
     * @var string
     */
    public $loginNameMapping;

    /**
     * @description The field that is used to indicate the email address of a user on the LDAP server.
     *
     * @example mobileAttr
     *
     * @var string
     */
    public $mobileMapping;

    /**
     * @description The field that is used to indicate the mobile phone number of a user on the LDAP server.
     *
     * @example nameAttr
     *
     * @var string
     */
    public $nameMapping;

    /**
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
        'account'          => 'Account',
        'baseDN'           => 'BaseDN',
        'emailMapping'     => 'EmailMapping',
        'filter'           => 'Filter',
        'hasPassword'      => 'HasPassword',
        'isSSL'            => 'IsSSL',
        'loginNameMapping' => 'LoginNameMapping',
        'mobileMapping'    => 'MobileMapping',
        'nameMapping'      => 'NameMapping',
        'port'             => 'Port',
        'server'           => 'Server',
        'standbyServer'    => 'StandbyServer',
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
        if (null !== $this->loginNameMapping) {
            $res['LoginNameMapping'] = $this->loginNameMapping;
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
     * @return LDAP
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
        if (isset($map['LoginNameMapping'])) {
            $model->loginNameMapping = $map['LoginNameMapping'];
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
