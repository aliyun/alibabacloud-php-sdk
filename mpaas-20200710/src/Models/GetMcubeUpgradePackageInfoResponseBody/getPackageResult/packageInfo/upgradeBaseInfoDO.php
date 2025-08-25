<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20200710\Models\GetMcubeUpgradePackageInfoResponseBody\getPackageResult\packageInfo;

use AlibabaCloud\Dara\Model;

class upgradeBaseInfoDO extends Model
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
    public $changeLog;

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
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $isEnterprise;

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
    public $verificationCode;
    protected $_name = [
        'allowCreateTask' => 'AllowCreateTask',
        'appCode' => 'AppCode',
        'appstoreUrl' => 'AppstoreUrl',
        'changeLog' => 'ChangeLog',
        'creator' => 'Creator',
        'downloadUrl' => 'DownloadUrl',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'id' => 'Id',
        'isEnterprise' => 'IsEnterprise',
        'modifier' => 'Modifier',
        'needCheck' => 'NeedCheck',
        'packageType' => 'PackageType',
        'platform' => 'Platform',
        'productId' => 'ProductId',
        'productName' => 'ProductName',
        'productVersion' => 'ProductVersion',
        'publishPeriod' => 'PublishPeriod',
        'verificationCode' => 'VerificationCode',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->changeLog) {
            $res['ChangeLog'] = $this->changeLog;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->isEnterprise) {
            $res['IsEnterprise'] = $this->isEnterprise;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }

        if (null !== $this->needCheck) {
            $res['NeedCheck'] = $this->needCheck;
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

        if (null !== $this->verificationCode) {
            $res['VerificationCode'] = $this->verificationCode;
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
        if (isset($map['AllowCreateTask'])) {
            $model->allowCreateTask = $map['AllowCreateTask'];
        }

        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['AppstoreUrl'])) {
            $model->appstoreUrl = $map['AppstoreUrl'];
        }

        if (isset($map['ChangeLog'])) {
            $model->changeLog = $map['ChangeLog'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['IsEnterprise'])) {
            $model->isEnterprise = $map['IsEnterprise'];
        }

        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }

        if (isset($map['NeedCheck'])) {
            $model->needCheck = $map['NeedCheck'];
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

        if (isset($map['VerificationCode'])) {
            $model->verificationCode = $map['VerificationCode'];
        }

        return $model;
    }
}
