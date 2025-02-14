<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListIdentityProvidersResponseBody;

use AlibabaCloud\Dara\Model;

class identityProviders extends Model
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
    public $incrementalCallbackStatus;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $lastStatusCheckJobResult;
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
    public $periodicSyncStatus;
    /**
     * @var string
     */
    public $udPullStatus;
    /**
     * @var string
     */
    public $udPullTargetScope;
    /**
     * @var string
     */
    public $udPushStatus;
    /**
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
        'periodicSyncStatus'         => 'PeriodicSyncStatus',
        'udPullStatus'               => 'UdPullStatus',
        'udPullTargetScope'          => 'UdPullTargetScope',
        'udPushStatus'               => 'UdPushStatus',
        'updateTime'                 => 'UpdateTime',
    ];

    public function validate()
    {
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

        if (null !== $this->periodicSyncStatus) {
            $res['PeriodicSyncStatus'] = $this->periodicSyncStatus;
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

        if (isset($map['PeriodicSyncStatus'])) {
            $model->periodicSyncStatus = $map['PeriodicSyncStatus'];
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
