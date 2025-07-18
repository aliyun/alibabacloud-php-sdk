<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class IdpConfig extends Model
{
    /**
     * @var IdpAttrMapConfig
     */
    public $attrMapConfig;

    /**
     * @var IdpConnectConfig
     */
    public $connectConfig;

    /**
     * @var string
     */
    public $description;

    /**
     * @var IdpDingtalkSubConfig
     */
    public $dingtalkConfig;

    /**
     * @var bool
     */
    public $enabled;

    /**
     * @var IdpFeishuSubConfig
     */
    public $feishuConfig;

    /**
     * @var IdpIdaas2SubConfig
     */
    public $idaasConfig;

    /**
     * @var string
     */
    public $idpConfigId;

    /**
     * @var int
     */
    public $lastSyncTimeUnix;

    /**
     * @var IdpLdapSubConfig
     */
    public $ldapConfig;

    /**
     * @var IdpLoginConfig
     */
    public $loginConfig;

    /**
     * @var string
     */
    public $name;

    /**
     * @var IdpSyncConfig
     */
    public $syncConfig;

    /**
     * @var string
     */
    public $syncStatus;

    /**
     * @var string
     */
    public $type;

    /**
     * @var IdpWeixin2SubConfig
     */
    public $weixinConfig;

    /**
     * @var OpenStructIdpWuyingSubConfig
     */
    public $wuyingConfig;
    protected $_name = [
        'attrMapConfig' => 'AttrMapConfig',
        'connectConfig' => 'ConnectConfig',
        'description' => 'Description',
        'dingtalkConfig' => 'DingtalkConfig',
        'enabled' => 'Enabled',
        'feishuConfig' => 'FeishuConfig',
        'idaasConfig' => 'IdaasConfig',
        'idpConfigId' => 'IdpConfigId',
        'lastSyncTimeUnix' => 'LastSyncTimeUnix',
        'ldapConfig' => 'LdapConfig',
        'loginConfig' => 'LoginConfig',
        'name' => 'Name',
        'syncConfig' => 'SyncConfig',
        'syncStatus' => 'SyncStatus',
        'type' => 'Type',
        'weixinConfig' => 'WeixinConfig',
        'wuyingConfig' => 'WuyingConfig',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->attrMapConfig) {
            $res['AttrMapConfig'] = null !== $this->attrMapConfig ? $this->attrMapConfig->toMap() : null;
        }
        if (null !== $this->connectConfig) {
            $res['ConnectConfig'] = null !== $this->connectConfig ? $this->connectConfig->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->dingtalkConfig) {
            $res['DingtalkConfig'] = null !== $this->dingtalkConfig ? $this->dingtalkConfig->toMap() : null;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->feishuConfig) {
            $res['FeishuConfig'] = null !== $this->feishuConfig ? $this->feishuConfig->toMap() : null;
        }
        if (null !== $this->idaasConfig) {
            $res['IdaasConfig'] = null !== $this->idaasConfig ? $this->idaasConfig->toMap() : null;
        }
        if (null !== $this->idpConfigId) {
            $res['IdpConfigId'] = $this->idpConfigId;
        }
        if (null !== $this->lastSyncTimeUnix) {
            $res['LastSyncTimeUnix'] = $this->lastSyncTimeUnix;
        }
        if (null !== $this->ldapConfig) {
            $res['LdapConfig'] = null !== $this->ldapConfig ? $this->ldapConfig->toMap() : null;
        }
        if (null !== $this->loginConfig) {
            $res['LoginConfig'] = null !== $this->loginConfig ? $this->loginConfig->toMap() : null;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->syncConfig) {
            $res['SyncConfig'] = null !== $this->syncConfig ? $this->syncConfig->toMap() : null;
        }
        if (null !== $this->syncStatus) {
            $res['SyncStatus'] = $this->syncStatus;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }
        if (null !== $this->weixinConfig) {
            $res['WeixinConfig'] = null !== $this->weixinConfig ? $this->weixinConfig->toMap() : null;
        }
        if (null !== $this->wuyingConfig) {
            $res['WuyingConfig'] = null !== $this->wuyingConfig ? $this->wuyingConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IdpConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AttrMapConfig'])) {
            $model->attrMapConfig = IdpAttrMapConfig::fromMap($map['AttrMapConfig']);
        }
        if (isset($map['ConnectConfig'])) {
            $model->connectConfig = IdpConnectConfig::fromMap($map['ConnectConfig']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['DingtalkConfig'])) {
            $model->dingtalkConfig = IdpDingtalkSubConfig::fromMap($map['DingtalkConfig']);
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['FeishuConfig'])) {
            $model->feishuConfig = IdpFeishuSubConfig::fromMap($map['FeishuConfig']);
        }
        if (isset($map['IdaasConfig'])) {
            $model->idaasConfig = IdpIdaas2SubConfig::fromMap($map['IdaasConfig']);
        }
        if (isset($map['IdpConfigId'])) {
            $model->idpConfigId = $map['IdpConfigId'];
        }
        if (isset($map['LastSyncTimeUnix'])) {
            $model->lastSyncTimeUnix = $map['LastSyncTimeUnix'];
        }
        if (isset($map['LdapConfig'])) {
            $model->ldapConfig = IdpLdapSubConfig::fromMap($map['LdapConfig']);
        }
        if (isset($map['LoginConfig'])) {
            $model->loginConfig = IdpLoginConfig::fromMap($map['LoginConfig']);
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['SyncConfig'])) {
            $model->syncConfig = IdpSyncConfig::fromMap($map['SyncConfig']);
        }
        if (isset($map['SyncStatus'])) {
            $model->syncStatus = $map['SyncStatus'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }
        if (isset($map['WeixinConfig'])) {
            $model->weixinConfig = IdpWeixin2SubConfig::fromMap($map['WeixinConfig']);
        }
        if (isset($map['WuyingConfig'])) {
            $model->wuyingConfig = OpenStructIdpWuyingSubConfig::fromMap($map['WuyingConfig']);
        }

        return $model;
    }
}
