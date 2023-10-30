<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Tea\Model;

class ModifyInstanceLDAPAuthServerRequest extends Model
{
    /**
     * @description The username of the account that is used for the LDAP server.
     *
     * @example cn=Manager,dc=test,dc=com
     *
     * @var string
     */
    public $account;

    /**
     * @description The Base distinguished name (DN).
     *
     * @example dc=test,dc=com
     *
     * @var string
     */
    public $baseDN;

    /**
     * @description The field that is used to indicate the email address of a user on the LDAP server.
     *
     * @example emailAttr
     *
     * @var string
     */
    public $emailMapping;

    /**
     * @description The condition that is used to filter users.
     *
     * @example (objectClass=top)
     *
     * @var string
     */
    public $filter;

    /**
     * @description The ID of the bastion host. You can call the [DescribeInstances](~~153281~~) operation to query the ID of the bastion host.
     *
     * @example bastionhost-cn-st220aw****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description Specifies whether to support SSL. Valid values:
     *
     *   **true**
     *   **false**
     *
     * @example true
     *
     * @var string
     */
    public $isSSL;

    /**
     * @description The field that is used to indicate the logon name of a user on the LDAP server.
     *
     * @example userNameAttr
     *
     * @var string
     */
    public $loginNameMapping;

    /**
     * @description The field that is used to indicate the mobile phone number of a user on the LDAP server.
     *
     * @example mobileAttr
     *
     * @var string
     */
    public $mobileMapping;

    /**
     * @description The field that is used to indicate the name of a user on the LDAP server.
     *
     * @example nameAttr
     *
     * @var string
     */
    public $nameMapping;

    /**
     * @description The password of the account that is used for the LDAP server. You must configure a password when you configure LDAP authentication. If you leave this parameter empty when you modify the settings of LDAP authentication, the current password is used.
     *
     * @example ******
     *
     * @var string
     */
    public $password;

    /**
     * @description The port that is used to access the LDAP server.
     *
     * @example 389
     *
     * @var string
     */
    public $port;

    /**
     * @description The region ID of the bastion host. For more information about the mapping between region IDs and region names, see [Regions and zones](~~40654~~).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The address of the LDAP server.
     *
     * @example 192.168.XX.XX
     *
     * @var string
     */
    public $server;

    /**
     * @description The address of the secondary LDAP server.
     *
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
        'instanceId'       => 'InstanceId',
        'isSSL'            => 'IsSSL',
        'loginNameMapping' => 'LoginNameMapping',
        'mobileMapping'    => 'MobileMapping',
        'nameMapping'      => 'NameMapping',
        'password'         => 'Password',
        'port'             => 'Port',
        'regionId'         => 'RegionId',
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
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
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
     * @return ModifyInstanceLDAPAuthServerRequest
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
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
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
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
