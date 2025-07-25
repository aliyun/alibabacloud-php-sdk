<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAppRequest;

use AlibabaCloud\Tea\Model;

class customAppInfo extends Model
{
    /**
     * @description The size of the .apk file. Unit: MB.
     *
     * @example 10
     *
     * @var string
     */
    public $apkSize;

    /**
     * @description The download URL of the app.
     *
     * @example http://testApp.apk
     *
     * @var string
     */
    public $downloadUrl;

    /**
     * @description The MD5 value of the .apk file.
     *
     * @example df3f46ce5844ddb278f14c5a9cd2****
     *
     * @var string
     */
    public $md5;

    /**
     * @description The name of the app package.
     *
     * @example com.example.demo
     *
     * @var string
     */
    public $packageName;

    /**
     * @description The version of the app.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $version;

    /**
     * @description The code of the app version.
     *
     * @example 10000
     *
     * @var string
     */
    public $versionCode;
    protected $_name = [
        'apkSize' => 'ApkSize',
        'downloadUrl' => 'DownloadUrl',
        'md5' => 'Md5',
        'packageName' => 'PackageName',
        'version' => 'Version',
        'versionCode' => 'VersionCode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->apkSize) {
            $res['ApkSize'] = $this->apkSize;
        }
        if (null !== $this->downloadUrl) {
            $res['DownloadUrl'] = $this->downloadUrl;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }
        if (null !== $this->versionCode) {
            $res['VersionCode'] = $this->versionCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return customAppInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApkSize'])) {
            $model->apkSize = $map['ApkSize'];
        }
        if (isset($map['DownloadUrl'])) {
            $model->downloadUrl = $map['DownloadUrl'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }
        if (isset($map['VersionCode'])) {
            $model->versionCode = $map['VersionCode'];
        }

        return $model;
    }
}
