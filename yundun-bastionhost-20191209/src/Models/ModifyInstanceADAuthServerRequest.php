<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Yundunbastionhost\V20191209\Models;

use AlibabaCloud\Dara\Model;

class ModifyInstanceADAuthServerRequest extends Model
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
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $isDefault;

    /**
     * @var string
     */
    public $isSSL;

    /**
     * @var string
     */
    public $isSyncEmailAttr;

    /**
     * @var string
     */
    public $isSyncMobileAttr;

    /**
     * @var string
     */
    public $isSyncNameAttr;

    /**
     * @var string
     */
    public $isSyncOuAsUserGroup;

    /**
     * @var string
     */
    public $mobileMapping;

    /**
     * @var string
     */
    public $nameMapping;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $port;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $server;

    /**
     * @var string
     */
    public $serverName;

    /**
     * @var string
     */
    public $standbyServer;

    /**
     * @var string
     */
    public $syncInterval;

    /**
     * @var string
     */
    public $userSourceId;
    protected $_name = [
        'account' => 'Account',
        'baseDN' => 'BaseDN',
        'domain' => 'Domain',
        'emailMapping' => 'EmailMapping',
        'filter' => 'Filter',
        'instanceId' => 'InstanceId',
        'isDefault' => 'IsDefault',
        'isSSL' => 'IsSSL',
        'isSyncEmailAttr' => 'IsSyncEmailAttr',
        'isSyncMobileAttr' => 'IsSyncMobileAttr',
        'isSyncNameAttr' => 'IsSyncNameAttr',
        'isSyncOuAsUserGroup' => 'IsSyncOuAsUserGroup',
        'mobileMapping' => 'MobileMapping',
        'nameMapping' => 'NameMapping',
        'password' => 'Password',
        'port' => 'Port',
        'regionId' => 'RegionId',
        'server' => 'Server',
        'serverName' => 'ServerName',
        'standbyServer' => 'StandbyServer',
        'syncInterval' => 'SyncInterval',
        'userSourceId' => 'UserSourceId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->isDefault) {
            $res['IsDefault'] = $this->isDefault;
        }

        if (null !== $this->isSSL) {
            $res['IsSSL'] = $this->isSSL;
        }

        if (null !== $this->isSyncEmailAttr) {
            $res['IsSyncEmailAttr'] = $this->isSyncEmailAttr;
        }

        if (null !== $this->isSyncMobileAttr) {
            $res['IsSyncMobileAttr'] = $this->isSyncMobileAttr;
        }

        if (null !== $this->isSyncNameAttr) {
            $res['IsSyncNameAttr'] = $this->isSyncNameAttr;
        }

        if (null !== $this->isSyncOuAsUserGroup) {
            $res['IsSyncOuAsUserGroup'] = $this->isSyncOuAsUserGroup;
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

        if (null !== $this->serverName) {
            $res['ServerName'] = $this->serverName;
        }

        if (null !== $this->standbyServer) {
            $res['StandbyServer'] = $this->standbyServer;
        }

        if (null !== $this->syncInterval) {
            $res['SyncInterval'] = $this->syncInterval;
        }

        if (null !== $this->userSourceId) {
            $res['UserSourceId'] = $this->userSourceId;
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

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['IsDefault'])) {
            $model->isDefault = $map['IsDefault'];
        }

        if (isset($map['IsSSL'])) {
            $model->isSSL = $map['IsSSL'];
        }

        if (isset($map['IsSyncEmailAttr'])) {
            $model->isSyncEmailAttr = $map['IsSyncEmailAttr'];
        }

        if (isset($map['IsSyncMobileAttr'])) {
            $model->isSyncMobileAttr = $map['IsSyncMobileAttr'];
        }

        if (isset($map['IsSyncNameAttr'])) {
            $model->isSyncNameAttr = $map['IsSyncNameAttr'];
        }

        if (isset($map['IsSyncOuAsUserGroup'])) {
            $model->isSyncOuAsUserGroup = $map['IsSyncOuAsUserGroup'];
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

        if (isset($map['ServerName'])) {
            $model->serverName = $map['ServerName'];
        }

        if (isset($map['StandbyServer'])) {
            $model->standbyServer = $map['StandbyServer'];
        }

        if (isset($map['SyncInterval'])) {
            $model->syncInterval = $map['SyncInterval'];
        }

        if (isset($map['UserSourceId'])) {
            $model->userSourceId = $map['UserSourceId'];
        }

        return $model;
    }
}
