<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models;

use AlibabaCloud\SDK\Edsaic\V20230930\Models\CreateAppRequest\customAppInfo;
use AlibabaCloud\Tea\Model;

class CreateAppRequest extends Model
{
    /**
     * @description The name of the application.
     *
     * @example Application Name 1
     *
     * @var string
     */
    public $appName;

    /**
     * @description The ID of the region.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @description The information about the custom app.
     *
     * >
     *
     *   If you want to pass in a custom app, configure the `CustomAppInfo` parameter. Take note that the six fields within it are mandatory.
     *
     *   A custom app has a higher priority than an app from the Alibaba Cloud Workspace Application Center. If you configure the `CustomAppInfo` parameter, the `FileName` and `FilePath` pair or the `OssAppUrl` will not take effect.
     *
     * @var customAppInfo
     */
    public $customAppInfo;

    /**
     * @description The description of the application.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The name used by the app file in Object Storage Service (OSS). This parameter, combined with `FilePath`, uniquely identifies the OSS path of the app file.
     *
     * >
     *
     *   If you want to pass in an app from the Alibaba Cloud Workspace Application Center, configure the `FileName` and `FilePath` parameters. Alternatively, configure the `OssAppUrl` parameter. The FileName and FilePath parameters takes precedence over the OssAppUrl parameter.
     *
     *   Log on to the [Elastic Desktop Service (EDS) Enterprise](https://eds.console.aliyun.com/osshelp) console, upload the app file to the Application Center according to the on-screen instructions, and then retrieve the parameter value.
     *
     * @example testApp.apk
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The OSS bucket path to the app file. This parameter, combined with `FileName`, uniquely identifies the OSS path of the app file.
     *
     * >
     *
     *   If you want to pass in an app from the Alibaba Cloud Workspace Application Center, configure the `FileName` and `FilePath` parameters. Alternatively, configure the `OssAppUrl` parameter. The FileName and FilePath parameters takes precedence over the OssAppUrl parameter.
     *
     *   Log on to the [EDS Enterprise](https://eds.console.aliyun.com/osshelp) console, upload the app file to the Application Center according to the on-screen instructions, and then retrieve the parameter value.
     *
     * @var string
     */
    public $filePath;

    /**
     * @description The icon URL of the application.
     *
     * @example https://www.example.com/icon.png
     *
     * @var string
     */
    public $iconUrl;

    /**
     * @description The parameters used for installing the application. By default, the `-r` parameter is included when you install an application.
     *
     * @example -d
     *
     * @var string
     */
    public $installParam;

    /**
     * @description The OSS bucket endpoint of the app file.
     *
     * >
     *
     *   If you want to pass in an app from the Alibaba Cloud Workspace Application Center, configure the `FileName` and `FilePath` parameters. Alternatively, configure the `OssAppUrl` parameter. The FileName and FilePath parameters takes precedence over the OssAppUrl parameter.
     *
     *   Log on to the [EDS Enterprise](https://eds.console.aliyun.com/osshelp) console, upload the app file to the Application Center according to the on-screen instructions, and then retrieve the parameter value.
     *
     * @example http://testApp.apk
     *
     * @var string
     */
    public $ossAppUrl;

    /**
     * @var string
     */
    public $signApk;
    protected $_name = [
        'appName' => 'AppName',
        'bizRegionId' => 'BizRegionId',
        'customAppInfo' => 'CustomAppInfo',
        'description' => 'Description',
        'fileName' => 'FileName',
        'filePath' => 'FilePath',
        'iconUrl' => 'IconUrl',
        'installParam' => 'InstallParam',
        'ossAppUrl' => 'OssAppUrl',
        'signApk' => 'SignApk',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }
        if (null !== $this->customAppInfo) {
            $res['CustomAppInfo'] = null !== $this->customAppInfo ? $this->customAppInfo->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->iconUrl) {
            $res['IconUrl'] = $this->iconUrl;
        }
        if (null !== $this->installParam) {
            $res['InstallParam'] = $this->installParam;
        }
        if (null !== $this->ossAppUrl) {
            $res['OssAppUrl'] = $this->ossAppUrl;
        }
        if (null !== $this->signApk) {
            $res['SignApk'] = $this->signApk;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateAppRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }
        if (isset($map['CustomAppInfo'])) {
            $model->customAppInfo = customAppInfo::fromMap($map['CustomAppInfo']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['IconUrl'])) {
            $model->iconUrl = $map['IconUrl'];
        }
        if (isset($map['InstallParam'])) {
            $model->installParam = $map['InstallParam'];
        }
        if (isset($map['OssAppUrl'])) {
            $model->ossAppUrl = $map['OssAppUrl'];
        }
        if (isset($map['SignApk'])) {
            $model->signApk = $map['SignApk'];
        }

        return $model;
    }
}
