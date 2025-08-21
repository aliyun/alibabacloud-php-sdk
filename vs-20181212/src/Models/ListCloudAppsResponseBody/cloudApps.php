<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models\ListCloudAppsResponseBody;

use AlibabaCloud\Dara\Model;

class cloudApps extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $appVersion;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $pkgFormat;

    /**
     * @var string
     */
    public $pkgType;

    /**
     * @var string
     */
    public $stablePatchId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $statusDescription;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $uploadTime;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'appVersion' => 'AppVersion',
        'description' => 'Description',
        'pkgFormat' => 'PkgFormat',
        'pkgType' => 'PkgType',
        'stablePatchId' => 'StablePatchId',
        'status' => 'Status',
        'statusDescription' => 'StatusDescription',
        'updateTime' => 'UpdateTime',
        'uploadTime' => 'UploadTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->pkgFormat) {
            $res['PkgFormat'] = $this->pkgFormat;
        }

        if (null !== $this->pkgType) {
            $res['PkgType'] = $this->pkgType;
        }

        if (null !== $this->stablePatchId) {
            $res['StablePatchId'] = $this->stablePatchId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->statusDescription) {
            $res['StatusDescription'] = $this->statusDescription;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        if (null !== $this->uploadTime) {
            $res['UploadTime'] = $this->uploadTime;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['PkgFormat'])) {
            $model->pkgFormat = $map['PkgFormat'];
        }

        if (isset($map['PkgType'])) {
            $model->pkgType = $map['PkgType'];
        }

        if (isset($map['StablePatchId'])) {
            $model->stablePatchId = $map['StablePatchId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['StatusDescription'])) {
            $model->statusDescription = $map['StatusDescription'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        if (isset($map['UploadTime'])) {
            $model->uploadTime = $map['UploadTime'];
        }

        return $model;
    }
}
