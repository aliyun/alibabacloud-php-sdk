<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\dingtalkAppConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\dingtalkProvisioningConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\larkConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\ldapConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\oidcConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\udPullConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\udPushConfig;
use AlibabaCloud\SDK\Eiam\V20211201\Models\GetIdentityProviderResponseBody\identityProviderDetail\weComConfig;

class identityProviderDetail extends Model
{
    /**
     * @var string
     */
    public $advancedStatus;
    /**
     * @var string
     */
    public $authnSourceSupplier;
    /**
     * @var string
     */
    public $authnSourceType;
    /**
     * @var string
     */
    public $authnStatus;
    /**
     * @var int
     */
    public $createTime;
    /**
     * @var string
     */
    public $description;
    /**
     * @var dingtalkAppConfig
     */
    public $dingtalkAppConfig;
    /**
     * @var dingtalkProvisioningConfig
     */
    public $dingtalkProvisioningConfig;
    /**
     * @var string
     */
    public $identityProviderExternalId;
    /**
     * @var string
     */
    public $identityProviderId;
    /**
     * @var string
     */
    public $identityProviderName;
    /**
     * @var string
     */
    public $identityProviderType;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var larkConfig
     */
    public $larkConfig;
    /**
     * @var string
     */
    public $lastStatusCheckJobResult;
    /**
     * @var ldapConfig
     */
    public $ldapConfig;
    /**
     * @var string
     */
    public $lockReason;
    /**
     * @var string
     */
    public $logoUrl;
    /**
     * @var string
     */
    public $networkAccessEndpointId;
    /**
     * @var oidcConfig
     */
    public $oidcConfig;
    /**
     * @var udPullConfig
     */
    public $udPullConfig;
    /**
     * @var string
     */
    public $udPullStatus;
    /**
     * @var udPushConfig
     */
    public $udPushConfig;
    /**
     * @var string
     */
    public $udPushStatus;
    /**
     * @var int
     */
    public $updateTime;
    /**
     * @var weComConfig
     */
    public $weComConfig;
    protected $_name = [
        'advancedStatus'             => 'AdvancedStatus',
        'authnSourceSupplier'        => 'AuthnSourceSupplier',
        'authnSourceType'            => 'AuthnSourceType',
        'authnStatus'                => 'AuthnStatus',
        'createTime'                 => 'CreateTime',
        'description'                => 'Description',
        'dingtalkAppConfig'          => 'DingtalkAppConfig',
        'dingtalkProvisioningConfig' => 'DingtalkProvisioningConfig',
        'identityProviderExternalId' => 'IdentityProviderExternalId',
        'identityProviderId'         => 'IdentityProviderId',
        'identityProviderName'       => 'IdentityProviderName',
        'identityProviderType'       => 'IdentityProviderType',
        'instanceId'                 => 'InstanceId',
        'larkConfig'                 => 'LarkConfig',
        'lastStatusCheckJobResult'   => 'LastStatusCheckJobResult',
        'ldapConfig'                 => 'LdapConfig',
        'lockReason'                 => 'LockReason',
        'logoUrl'                    => 'LogoUrl',
        'networkAccessEndpointId'    => 'NetworkAccessEndpointId',
        'oidcConfig'                 => 'OidcConfig',
        'udPullConfig'               => 'UdPullConfig',
        'udPullStatus'               => 'UdPullStatus',
        'udPushConfig'               => 'UdPushConfig',
        'udPushStatus'               => 'UdPushStatus',
        'updateTime'                 => 'UpdateTime',
        'weComConfig'                => 'WeComConfig',
    ];

    public function validate()
    {
        if (null !== $this->dingtalkAppConfig) {
            $this->dingtalkAppConfig->validate();
        }
        if (null !== $this->dingtalkProvisioningConfig) {
            $this->dingtalkProvisioningConfig->validate();
        }
        if (null !== $this->larkConfig) {
            $this->larkConfig->validate();
        }
        if (null !== $this->ldapConfig) {
            $this->ldapConfig->validate();
        }
        if (null !== $this->oidcConfig) {
            $this->oidcConfig->validate();
        }
        if (null !== $this->udPullConfig) {
            $this->udPullConfig->validate();
        }
        if (null !== $this->udPushConfig) {
            $this->udPushConfig->validate();
        }
        if (null !== $this->weComConfig) {
            $this->weComConfig->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->advancedStatus) {
            $res['AdvancedStatus'] = $this->advancedStatus;
        }

        if (null !== $this->authnSourceSupplier) {
            $res['AuthnSourceSupplier'] = $this->authnSourceSupplier;
        }

        if (null !== $this->authnSourceType) {
            $res['AuthnSourceType'] = $this->authnSourceType;
        }

        if (null !== $this->authnStatus) {
            $res['AuthnStatus'] = $this->authnStatus;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->dingtalkAppConfig) {
            $res['DingtalkAppConfig'] = null !== $this->dingtalkAppConfig ? $this->dingtalkAppConfig->toArray($noStream) : $this->dingtalkAppConfig;
        }

        if (null !== $this->dingtalkProvisioningConfig) {
            $res['DingtalkProvisioningConfig'] = null !== $this->dingtalkProvisioningConfig ? $this->dingtalkProvisioningConfig->toArray($noStream) : $this->dingtalkProvisioningConfig;
        }

        if (null !== $this->identityProviderExternalId) {
            $res['IdentityProviderExternalId'] = $this->identityProviderExternalId;
        }

        if (null !== $this->identityProviderId) {
            $res['IdentityProviderId'] = $this->identityProviderId;
        }

        if (null !== $this->identityProviderName) {
            $res['IdentityProviderName'] = $this->identityProviderName;
        }

        if (null !== $this->identityProviderType) {
            $res['IdentityProviderType'] = $this->identityProviderType;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->larkConfig) {
            $res['LarkConfig'] = null !== $this->larkConfig ? $this->larkConfig->toArray($noStream) : $this->larkConfig;
        }

        if (null !== $this->lastStatusCheckJobResult) {
            $res['LastStatusCheckJobResult'] = $this->lastStatusCheckJobResult;
        }

        if (null !== $this->ldapConfig) {
            $res['LdapConfig'] = null !== $this->ldapConfig ? $this->ldapConfig->toArray($noStream) : $this->ldapConfig;
        }

        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }

        if (null !== $this->logoUrl) {
            $res['LogoUrl'] = $this->logoUrl;
        }

        if (null !== $this->networkAccessEndpointId) {
            $res['NetworkAccessEndpointId'] = $this->networkAccessEndpointId;
        }

        if (null !== $this->oidcConfig) {
            $res['OidcConfig'] = null !== $this->oidcConfig ? $this->oidcConfig->toArray($noStream) : $this->oidcConfig;
        }

        if (null !== $this->udPullConfig) {
            $res['UdPullConfig'] = null !== $this->udPullConfig ? $this->udPullConfig->toArray($noStream) : $this->udPullConfig;
        }

        if (null !== $this->udPullStatus) {
            $res['UdPullStatus'] = $this->udPullStatus;
        }

        if (null !== $this->udPushConfig) {
            $res['UdPushConfig'] = null !== $this->udPushConfig ? $this->udPushConfig->toArray($noStream) : $this->udPushConfig;
        }

        if (null !== $this->udPushStatus) {
            $res['UdPushStatus'] = $this->udPushStatus;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->weComConfig) {
            $res['WeComConfig'] = null !== $this->weComConfig ? $this->weComConfig->toArray($noStream) : $this->weComConfig;
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
        if (isset($map['AdvancedStatus'])) {
            $model->advancedStatus = $map['AdvancedStatus'];
        }

        if (isset($map['AuthnSourceSupplier'])) {
            $model->authnSourceSupplier = $map['AuthnSourceSupplier'];
        }

        if (isset($map['AuthnSourceType'])) {
            $model->authnSourceType = $map['AuthnSourceType'];
        }

        if (isset($map['AuthnStatus'])) {
            $model->authnStatus = $map['AuthnStatus'];
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['DingtalkAppConfig'])) {
            $model->dingtalkAppConfig = dingtalkAppConfig::fromMap($map['DingtalkAppConfig']);
        }

        if (isset($map['DingtalkProvisioningConfig'])) {
            $model->dingtalkProvisioningConfig = dingtalkProvisioningConfig::fromMap($map['DingtalkProvisioningConfig']);
        }

        if (isset($map['IdentityProviderExternalId'])) {
            $model->identityProviderExternalId = $map['IdentityProviderExternalId'];
        }

        if (isset($map['IdentityProviderId'])) {
            $model->identityProviderId = $map['IdentityProviderId'];
        }

        if (isset($map['IdentityProviderName'])) {
            $model->identityProviderName = $map['IdentityProviderName'];
        }

        if (isset($map['IdentityProviderType'])) {
            $model->identityProviderType = $map['IdentityProviderType'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LarkConfig'])) {
            $model->larkConfig = larkConfig::fromMap($map['LarkConfig']);
        }

        if (isset($map['LastStatusCheckJobResult'])) {
            $model->lastStatusCheckJobResult = $map['LastStatusCheckJobResult'];
        }

        if (isset($map['LdapConfig'])) {
            $model->ldapConfig = ldapConfig::fromMap($map['LdapConfig']);
        }

        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }

        if (isset($map['LogoUrl'])) {
            $model->logoUrl = $map['LogoUrl'];
        }

        if (isset($map['NetworkAccessEndpointId'])) {
            $model->networkAccessEndpointId = $map['NetworkAccessEndpointId'];
        }

        if (isset($map['OidcConfig'])) {
            $model->oidcConfig = oidcConfig::fromMap($map['OidcConfig']);
        }

        if (isset($map['UdPullConfig'])) {
            $model->udPullConfig = udPullConfig::fromMap($map['UdPullConfig']);
        }

        if (isset($map['UdPullStatus'])) {
            $model->udPullStatus = $map['UdPullStatus'];
        }

        if (isset($map['UdPushConfig'])) {
            $model->udPushConfig = udPushConfig::fromMap($map['UdPushConfig']);
        }

        if (isset($map['UdPushStatus'])) {
            $model->udPushStatus = $map['UdPushStatus'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['WeComConfig'])) {
            $model->weComConfig = weComConfig::fromMap($map['WeComConfig']);
        }

        return $model;
    }
}
