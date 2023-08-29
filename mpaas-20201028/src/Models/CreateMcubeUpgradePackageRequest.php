<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models;

use AlibabaCloud\Tea\Model;

class CreateMcubeUpgradePackageRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $appstoreUrl;

    /**
     * @var string
     */
    public $bundleId;

    /**
     * @var string
     */
    public $customDomainName;

    /**
     * @var string
     */
    public $desc;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $fileUrl;

    /**
     * @var string
     */
    public $iconFileUrl;

    /**
     * @var int
     */
    public $installAmount;

    /**
     * @var string
     */
    public $iosSymbolfileUrl;

    /**
     * @var int
     */
    public $isEnterprise;

    /**
     * @var int
     */
    public $needCheck;

    /**
     * @var bool
     */
    public $onexFlag;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var int
     */
    public $validDays;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'appId'            => 'AppId',
        'appVersion'       => 'AppVersion',
        'appstoreUrl'      => 'AppstoreUrl',
        'bundleId'         => 'BundleId',
        'customDomainName' => 'CustomDomainName',
        'desc'             => 'Desc',
        'downloadUrl'      => 'DownloadUrl',
        'fileUrl'          => 'FileUrl',
        'iconFileUrl'      => 'IconFileUrl',
        'installAmount'    => 'InstallAmount',
        'iosSymbolfileUrl' => 'IosSymbolfileUrl',
        'isEnterprise'     => 'IsEnterprise',
        'needCheck'        => 'NeedCheck',
        'onexFlag'         => 'OnexFlag',
        'platform'         => 'Platform',
        'tenantId'         => 'TenantId',
        'validDays'        => 'ValidDays',
        'workspaceId'      => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->appstoreUrl) {
            $res['AppstoreUrl'] = $this->appstoreUrl;
        }
        if (null !== $this->bundleId) {
            $res['BundleId'] = $this->bundleId;
        }
        if (null !== $this->customDomainName) {
            $res['CustomDomainName'] = $this->customDomainName;
        }
        if (null !== $this->desc) {
            $res['Desc'] = $this->desc;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }
        if (null !== $this->iconFileUrl) {
            $res['IconFileUrl'] = $this->iconFileUrl;
        }
        if (null !== $this->installAmount) {
            $res['InstallAmount'] = $this->installAmount;
        }
        if (null !== $this->iosSymbolfileUrl) {
            $res['IosSymbolfileUrl'] = $this->iosSymbolfileUrl;
        }
        if (null !== $this->isEnterprise) {
            $res['IsEnterprise'] = $this->isEnterprise;
        }
        if (null !== $this->needCheck) {
            $res['NeedCheck'] = $this->needCheck;
        }
        if (null !== $this->onexFlag) {
            $res['OnexFlag'] = $this->onexFlag;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->validDays) {
            $res['ValidDays'] = $this->validDays;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMcubeUpgradePackageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['AppstoreUrl'])) {
            $model->appstoreUrl = $map['AppstoreUrl'];
        }
        if (isset($map['BundleId'])) {
            $model->bundleId = $map['BundleId'];
        }
        if (isset($map['CustomDomainName'])) {
            $model->customDomainName = $map['CustomDomainName'];
        }
        if (isset($map['Desc'])) {
            $model->desc = $map['Desc'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }
        if (isset($map['IconFileUrl'])) {
            $model->iconFileUrl = $map['IconFileUrl'];
        }
        if (isset($map['InstallAmount'])) {
            $model->installAmount = $map['InstallAmount'];
        }
        if (isset($map['IosSymbolfileUrl'])) {
            $model->iosSymbolfileUrl = $map['IosSymbolfileUrl'];
        }
        if (isset($map['IsEnterprise'])) {
            $model->isEnterprise = $map['IsEnterprise'];
        }
        if (isset($map['NeedCheck'])) {
            $model->needCheck = $map['NeedCheck'];
        }
        if (isset($map['OnexFlag'])) {
            $model->onexFlag = $map['OnexFlag'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['ValidDays'])) {
            $model->validDays = $map['ValidDays'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
