<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListIdentityProvidersResponseBody;

use AlibabaCloud\Tea\Model;

class identityProviders extends Model
{
    /**
     * @description 高阶配置能力
     *
     * @example disabled
     *
     * @var string
     */
    public $advancedStatus;

    /**
     * @description IDaaS EIAM 对应的认证来源产品，okta or google or azure ad
     *
     * @example urn:alibaba:idaas:idp:bytedance:lark
     *
     * @var string
     */
    public $authnSourceSupplier;

    /**
     * @description IDaaS EIAM 认证方式类型 oidc or saml
     *
     * @example urn:alibaba:idaas:authntype:oidc
     *
     * @var string
     */
    public $authnSourceType;

    /**
     * @description IDaaS EIAM 对应IdP是否支持认证
     *
     * @example disabled
     *
     * @var string
     */
    public $authnStatus;

    /**
     * @example 1712561597000
     *
     * @var int
     */
    public $createTime;

    /**
     * @description IDaaS EIAM 身份提供方描述
     *
     * @var string
     */
    public $description;

    /**
     * @description IDaaS EIAM 身份提供方外部ID
     *
     * @example test_123
     *
     * @var string
     */
    public $identityProviderExternalId;

    /**
     * @description IDaaS EIAM 身份提供方ID
     *
     * @example idp_m5b5wd5s2hpq4t6iaehhXXX
     *
     * @var string
     */
    public $identityProviderId;

    /**
     * @description IDaaS EIAM 身份提供方名称
     *
     * @var string
     */
    public $identityProviderName;

    /**
     * @description 身份提供方同步类型
     *
     * @example urn:alibaba:idaas:idp:bytedance:lark:pull
     *
     * @var string
     */
    public $identityProviderType;

    /**
     * @description 增量回调状态，是否处理来自IdP的增量回调数据
     *
     * @example enabled
     *
     * @var string
     */
    public $incrementalCallbackStatus;

    /**
     * @description IDaaS EIAM 实例Id
     *
     * @example idaas_pbf4dth34l2qb7mydpntXXX
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example success
     *
     * @var string
     */
    public $lastStatusCheckJobResult;

    /**
     * @description 锁定原因
     *
     * @example financial
     *
     * @var string
     */
    public $lockReason;

    /**
     * @var string
     */
    public $logoUrl;

    /**
     * @description IDaaS EIAM 是否支持UD同步
     *
     * @example disabled
     *
     * @var string
     */
    public $udPullStatus;

    /**
     * @description 当支持ud_pullIDaaS侧UD中的范围
     *
     * @example ou_2buqmxsa3ltyqkjgpwfijurXXX
     *
     * @var string
     */
    public $udPullTargetScope;

    /**
     * @description 同步出能力
     *
     * @example disabled
     *
     * @var string
     */
    public $udPushStatus;

    /**
     * @example 1712561597000
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'advancedStatus'             => 'AdvancedStatus',
        'authnSourceSupplier'        => 'AuthnSourceSupplier',
        'authnSourceType'            => 'AuthnSourceType',
        'authnStatus'                => 'AuthnStatus',
        'createTime'                 => 'CreateTime',
        'description'                => 'Description',
        'identityProviderExternalId' => 'IdentityProviderExternalId',
        'identityProviderId'         => 'IdentityProviderId',
        'identityProviderName'       => 'IdentityProviderName',
        'identityProviderType'       => 'IdentityProviderType',
        'incrementalCallbackStatus'  => 'IncrementalCallbackStatus',
        'instanceId'                 => 'InstanceId',
        'lastStatusCheckJobResult'   => 'LastStatusCheckJobResult',
        'lockReason'                 => 'LockReason',
        'logoUrl'                    => 'LogoUrl',
        'udPullStatus'               => 'UdPullStatus',
        'udPullTargetScope'          => 'UdPullTargetScope',
        'udPushStatus'               => 'UdPushStatus',
        'updateTime'                 => 'UpdateTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->incrementalCallbackStatus) {
            $res['IncrementalCallbackStatus'] = $this->incrementalCallbackStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->lastStatusCheckJobResult) {
            $res['LastStatusCheckJobResult'] = $this->lastStatusCheckJobResult;
        }
        if (null !== $this->lockReason) {
            $res['LockReason'] = $this->lockReason;
        }
        if (null !== $this->logoUrl) {
            $res['LogoUrl'] = $this->logoUrl;
        }
        if (null !== $this->udPullStatus) {
            $res['UdPullStatus'] = $this->udPullStatus;
        }
        if (null !== $this->udPullTargetScope) {
            $res['UdPullTargetScope'] = $this->udPullTargetScope;
        }
        if (null !== $this->udPushStatus) {
            $res['UdPushStatus'] = $this->udPushStatus;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return identityProviders
     */
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
        if (isset($map['IncrementalCallbackStatus'])) {
            $model->incrementalCallbackStatus = $map['IncrementalCallbackStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LastStatusCheckJobResult'])) {
            $model->lastStatusCheckJobResult = $map['LastStatusCheckJobResult'];
        }
        if (isset($map['LockReason'])) {
            $model->lockReason = $map['LockReason'];
        }
        if (isset($map['LogoUrl'])) {
            $model->logoUrl = $map['LogoUrl'];
        }
        if (isset($map['UdPullStatus'])) {
            $model->udPullStatus = $map['UdPullStatus'];
        }
        if (isset($map['UdPullTargetScope'])) {
            $model->udPullTargetScope = $map['UdPullTargetScope'];
        }
        if (isset($map['UdPushStatus'])) {
            $model->udPushStatus = $map['UdPushStatus'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
