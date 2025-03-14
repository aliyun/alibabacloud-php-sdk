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
     * @description The name used by the application file in OSS. This parameter, combined with `FilePath`, uniquely identifies the OSS path of the application file.
     *
     * >
     *
     *   Log on to the [Cloud Phone console](https://eds.console.aliyun.com/osshelp) and follow the on-screen instructions to upload the application file to Application Center to obtain the value of this parameter.
     *
     *   If you do not specify `OssAppUrl`, you must specify `FileName` and `FilePath`.
     *
     * @example testApp.apk
     *
     * @var string
     */
    public $fileName;

    /**
     * @description The OSS bucket path to the application file. This parameter, combined with `FileName`, uniquely identifies the OSS path of the application file.
     *
     * >
     *
     *   Log on to the [Cloud Phone console](https://eds.console.aliyun.com/osshelp) and follow the on-screen instructions to upload the application file to Application Center to obtain the value of this parameter.
     *
     *   If you do not specify `OssAppUrl`, you must specify `FileName` and `FilePath`.
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
     * @description The endpoint of the OSS bucket to which you want to upload the application file.
     *
     * >
     *
     *   Log on to the [Cloud Phone console](https://eds.console.aliyun.com/osshelp) and follow the on-screen instructions to upload the application file to Application Center to obtain the value of this parameter.
     *
     *   If you do not specify `FileName` or `FilePath`, you must specify this parameter.
     *
     * @example http://testApp.apk
     *
     * @var string
     */
    public $ossAppUrl;
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

        return $model;
    }
}
