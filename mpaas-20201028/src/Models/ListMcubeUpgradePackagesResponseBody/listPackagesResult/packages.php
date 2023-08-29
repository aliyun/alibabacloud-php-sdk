<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeUpgradePackagesResponseBody\listPackagesResult;

use AlibabaCloud\Tea\Model;

class packages extends Model
{
    /**
     * @var bool
     */
    public $allowCreateTask;

    /**
     * @var string
     */
    public $appCode;

    /**
     * @var string
     */
    public $appstoreUrl;

    /**
     * @var string
     */
    public $backLog;

    /**
     * @var string
     */
    public $changeLog;

    /**
     * @var int
     */
    public $clientFileSize;

    /**
     * @var string
     */
    public $clientName;

    /**
     * @var string
     */
    public $cpId;

    /**
     * @var string
     */
    public $creator;

    /**
     * @var string
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $globalVariables;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtCreateStr;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $gmtModifiedStr;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $innerVersion;

    /**
     * @var string
     */
    public $iosSymbol;

    /**
     * @var int
     */
    public $isEnterprise;

    /**
     * @var int
     */
    public $isRc;

    /**
     * @var int
     */
    public $isRelease;

    /**
     * @var string
     */
    public $maxVersion;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var int
     */
    public $needCheck;

    /**
     * @var string
     */
    public $ossPath;

    /**
     * @var string
     */
    public $packageType;

    /**
     * @var string
     */
    public $platform;

    /**
     * @var string
     */
    public $productId;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $productVersion;

    /**
     * @var int
     */
    public $publishPeriod;

    /**
     * @var string
     */
    public $qrcodeUrl;

    /**
     * @var string
     */
    public $releaseType;

    /**
     * @var string
     */
    public $releaseWindow;

    /**
     * @var string
     */
    public $scmDownloadUrl;

    /**
     * @var int
     */
    public $serverVersion;

    /**
     * @var string
     */
    public $verificationCode;

    /**
     * @var int
     */
    public $verifyResult;

    /**
     * @var string
     */
    public $versionCode;
    protected $_name = [
        'allowCreateTask'  => 'AllowCreateTask',
        'appCode'          => 'AppCode',
        'appstoreUrl'      => 'AppstoreUrl',
        'backLog'          => 'BackLog',
        'changeLog'        => 'ChangeLog',
        'clientFileSize'   => 'ClientFileSize',
        'clientName'       => 'ClientName',
        'cpId'             => 'CpId',
        'creator'          => 'Creator',
        'downloadUrl'      => 'DownloadUrl',
        'globalVariables'  => 'GlobalVariables',
        'gmtCreate'        => 'GmtCreate',
        'gmtCreateStr'     => 'GmtCreateStr',
        'gmtModified'      => 'GmtModified',
        'gmtModifiedStr'   => 'GmtModifiedStr',
        'id'               => 'Id',
        'innerVersion'     => 'InnerVersion',
        'iosSymbol'        => 'IosSymbol',
        'isEnterprise'     => 'IsEnterprise',
        'isRc'             => 'IsRc',
        'isRelease'        => 'IsRelease',
        'maxVersion'       => 'MaxVersion',
        'md5'              => 'Md5',
        'modifier'         => 'Modifier',
        'needCheck'        => 'NeedCheck',
        'ossPath'          => 'OssPath',
        'packageType'      => 'PackageType',
        'platform'         => 'Platform',
        'productId'        => 'ProductId',
        'productName'      => 'ProductName',
        'productVersion'   => 'ProductVersion',
        'publishPeriod'    => 'PublishPeriod',
        'qrcodeUrl'        => 'QrcodeUrl',
        'releaseType'      => 'ReleaseType',
        'releaseWindow'    => 'ReleaseWindow',
        'scmDownloadUrl'   => 'ScmDownloadUrl',
        'serverVersion'    => 'ServerVersion',
        'verificationCode' => 'VerificationCode',
        'verifyResult'     => 'VerifyResult',
        'versionCode'      => 'VersionCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->allowCreateTask) {
            $res['AllowCreateTask'] = $this->allowCreateTask;
        }
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }
        if (null !== $this->appstoreUrl) {
            $res['AppstoreUrl'] = $this->appstoreUrl;
        }
        if (null !== $this->backLog) {
            $res['BackLog'] = $this->backLog;
        }
        if (null !== $this->changeLog) {
            $res['ChangeLog'] = $this->changeLog;
        }
        if (null !== $this->clientFileSize) {
            $res['ClientFileSize'] = $this->clientFileSize;
        }
        if (null !== $this->clientName) {
            $res['ClientName'] = $this->clientName;
        }
        if (null !== $this->cpId) {
            $res['CpId'] = $this->cpId;
        }
        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->globalVariables) {
            $res['GlobalVariables'] = $this->globalVariables;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtCreateStr) {
            $res['GmtCreateStr'] = $this->gmtCreateStr;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->gmtModifiedStr) {
            $res['GmtModifiedStr'] = $this->gmtModifiedStr;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->innerVersion) {
            $res['InnerVersion'] = $this->innerVersion;
        }
        if (null !== $this->iosSymbol) {
            $res['IosSymbol'] = $this->iosSymbol;
        }
        if (null !== $this->isEnterprise) {
            $res['IsEnterprise'] = $this->isEnterprise;
        }
        if (null !== $this->isRc) {
            $res['IsRc'] = $this->isRc;
        }
        if (null !== $this->isRelease) {
            $res['IsRelease'] = $this->isRelease;
        }
        if (null !== $this->maxVersion) {
            $res['MaxVersion'] = $this->maxVersion;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }
        if (null !== $this->needCheck) {
            $res['NeedCheck'] = $this->needCheck;
        }
        if (null !== $this->ossPath) {
            $res['OssPath'] = $this->ossPath;
        }
        if (null !== $this->packageType) {
            $res['PackageType'] = $this->packageType;
        }
        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }
        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->productVersion) {
            $res['ProductVersion'] = $this->productVersion;
        }
        if (null !== $this->publishPeriod) {
            $res['PublishPeriod'] = $this->publishPeriod;
        }
        if (null !== $this->qrcodeUrl) {
            $res['QrcodeUrl'] = $this->qrcodeUrl;
        }
        if (null !== $this->releaseType) {
            $res['ReleaseType'] = $this->releaseType;
        }
        if (null !== $this->releaseWindow) {
            $res['ReleaseWindow'] = $this->releaseWindow;
        }
        if (null !== $this->scmDownloadUrl) {
            $res['ScmDownloadUrl'] = $this->scmDownloadUrl;
        }
        if (null !== $this->serverVersion) {
            $res['ServerVersion'] = $this->serverVersion;
        }
        if (null !== $this->verificationCode) {
            $res['VerificationCode'] = $this->verificationCode;
        }
        if (null !== $this->verifyResult) {
            $res['VerifyResult'] = $this->verifyResult;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return packages
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AllowCreateTask'])) {
            $model->allowCreateTask = $map['AllowCreateTask'];
        }
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }
        if (isset($map['AppstoreUrl'])) {
            $model->appstoreUrl = $map['AppstoreUrl'];
        }
        if (isset($map['BackLog'])) {
            $model->backLog = $map['BackLog'];
        }
        if (isset($map['ChangeLog'])) {
            $model->changeLog = $map['ChangeLog'];
        }
        if (isset($map['ClientFileSize'])) {
            $model->clientFileSize = $map['ClientFileSize'];
        }
        if (isset($map['ClientName'])) {
            $model->clientName = $map['ClientName'];
        }
        if (isset($map['CpId'])) {
            $model->cpId = $map['CpId'];
        }
        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['GlobalVariables'])) {
            $model->globalVariables = $map['GlobalVariables'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtCreateStr'])) {
            $model->gmtCreateStr = $map['GmtCreateStr'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['GmtModifiedStr'])) {
            $model->gmtModifiedStr = $map['GmtModifiedStr'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['InnerVersion'])) {
            $model->innerVersion = $map['InnerVersion'];
        }
        if (isset($map['IosSymbol'])) {
            $model->iosSymbol = $map['IosSymbol'];
        }
        if (isset($map['IsEnterprise'])) {
            $model->isEnterprise = $map['IsEnterprise'];
        }
        if (isset($map['IsRc'])) {
            $model->isRc = $map['IsRc'];
        }
        if (isset($map['IsRelease'])) {
            $model->isRelease = $map['IsRelease'];
        }
        if (isset($map['MaxVersion'])) {
            $model->maxVersion = $map['MaxVersion'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }
        if (isset($map['NeedCheck'])) {
            $model->needCheck = $map['NeedCheck'];
        }
        if (isset($map['OssPath'])) {
            $model->ossPath = $map['OssPath'];
        }
        if (isset($map['PackageType'])) {
            $model->packageType = $map['PackageType'];
        }
        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }
        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['ProductVersion'])) {
            $model->productVersion = $map['ProductVersion'];
        }
        if (isset($map['PublishPeriod'])) {
            $model->publishPeriod = $map['PublishPeriod'];
        }
        if (isset($map['QrcodeUrl'])) {
            $model->qrcodeUrl = $map['QrcodeUrl'];
        }
        if (isset($map['ReleaseType'])) {
            $model->releaseType = $map['ReleaseType'];
        }
        if (isset($map['ReleaseWindow'])) {
            $model->releaseWindow = $map['ReleaseWindow'];
        }
        if (isset($map['ScmDownloadUrl'])) {
            $model->scmDownloadUrl = $map['ScmDownloadUrl'];
        }
        if (isset($map['ServerVersion'])) {
            $model->serverVersion = $map['ServerVersion'];
        }
        if (isset($map['VerificationCode'])) {
            $model->verificationCode = $map['VerificationCode'];
        }
        if (isset($map['VerifyResult'])) {
            $model->verifyResult = $map['VerifyResult'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }

        return $model;
    }
}
