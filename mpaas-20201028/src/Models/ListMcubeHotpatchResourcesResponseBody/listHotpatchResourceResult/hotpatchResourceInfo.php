<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\ListMcubeHotpatchResourcesResponseBody\listHotpatchResourceResult;

use AlibabaCloud\Dara\Model;

class hotpatchResourceInfo extends Model
{
    /**
     * @var string
     */
    public $appCode;

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
    public $fileSize;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $hotpatchVersion;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $memo;

    /**
     * @var string
     */
    public $modifier;

    /**
     * @var int
     */
    public $packageId;

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
    public $productVersion;

    /**
     * @var int
     */
    public $publishPeriod;

    /**
     * @var string
     */
    public $releaseVersion;

    /**
     * @var string
     */
    public $sourceName;
    protected $_name = [
        'appCode' => 'AppCode',
        'creator' => 'Creator',
        'downloadUrl' => 'DownloadUrl',
        'fileSize' => 'FileSize',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'hotpatchVersion' => 'HotpatchVersion',
        'id' => 'Id',
        'md5' => 'Md5',
        'memo' => 'Memo',
        'modifier' => 'Modifier',
        'packageId' => 'PackageId',
        'platform' => 'Platform',
        'productId' => 'ProductId',
        'productVersion' => 'ProductVersion',
        'publishPeriod' => 'PublishPeriod',
        'releaseVersion' => 'ReleaseVersion',
        'sourceName' => 'SourceName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appCode) {
            $res['AppCode'] = $this->appCode;
        }

        if (null !== $this->creator) {
            $res['Creator'] = $this->creator;
        }

        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->hotpatchVersion) {
            $res['HotpatchVersion'] = $this->hotpatchVersion;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }

        if (null !== $this->memo) {
            $res['Memo'] = $this->memo;
        }

        if (null !== $this->modifier) {
            $res['Modifier'] = $this->modifier;
        }

        if (null !== $this->packageId) {
            $res['PackageId'] = $this->packageId;
        }

        if (null !== $this->platform) {
            $res['Platform'] = $this->platform;
        }

        if (null !== $this->productId) {
            $res['ProductId'] = $this->productId;
        }

        if (null !== $this->productVersion) {
            $res['ProductVersion'] = $this->productVersion;
        }

        if (null !== $this->publishPeriod) {
            $res['PublishPeriod'] = $this->publishPeriod;
        }

        if (null !== $this->releaseVersion) {
            $res['ReleaseVersion'] = $this->releaseVersion;
        }

        if (null !== $this->sourceName) {
            $res['SourceName'] = $this->sourceName;
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
        if (isset($map['AppCode'])) {
            $model->appCode = $map['AppCode'];
        }

        if (isset($map['Creator'])) {
            $model->creator = $map['Creator'];
        }

        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['HotpatchVersion'])) {
            $model->hotpatchVersion = $map['HotpatchVersion'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }

        if (isset($map['Memo'])) {
            $model->memo = $map['Memo'];
        }

        if (isset($map['Modifier'])) {
            $model->modifier = $map['Modifier'];
        }

        if (isset($map['PackageId'])) {
            $model->packageId = $map['PackageId'];
        }

        if (isset($map['Platform'])) {
            $model->platform = $map['Platform'];
        }

        if (isset($map['ProductId'])) {
            $model->productId = $map['ProductId'];
        }

        if (isset($map['ProductVersion'])) {
            $model->productVersion = $map['ProductVersion'];
        }

        if (isset($map['PublishPeriod'])) {
            $model->publishPeriod = $map['PublishPeriod'];
        }

        if (isset($map['ReleaseVersion'])) {
            $model->releaseVersion = $map['ReleaseVersion'];
        }

        if (isset($map['SourceName'])) {
            $model->sourceName = $map['SourceName'];
        }

        return $model;
    }
}
