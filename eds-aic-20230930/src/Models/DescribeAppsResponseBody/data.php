<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAppsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The version of the application.
     *
     * @example 1.0.0
     *
     * @var string
     */
    public $androidAppVersion;

    /**
     * @description Apk size.
     *
     * @example 10244893
     *
     * @var string
     */
    public $apkSize;

    /**
     * @description The ID of the application.
     *
     * @example 10404
     *
     * @var int
     */
    public $appId;

    /**
     * @description The name of the application.
     *
     * @example testapp
     *
     * @var string
     */
    public $appName;

    /**
     * @description Region id.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $bizRegionId;

    /**
     * @description The description of the application.
     *
     * @example default description.
     *
     * @var string
     */
    public $description;

    /**
     * @description The time when the application was created.
     *
     * @example 2022-08-11 17:45:03
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the application was last modified.
     *
     * @example 2022-08-11 17:45:03
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The icon URL of the application.
     *
     * @example https://test.png
     *
     * @var string
     */
    public $iconUrl;

    /**
     * @description The installation/uninstallation status of the application.
     *
     * Valid values:
     *
     *   INSTALLFAILED: The application failed to be installed.
     *   UNINSTALLING: The application is being uninstalled.
     *   INSTALLING: The application is being installed.
     *   UNINSTALLED: The application is uninstalled.
     *   INSTALLED: The application is installed.
     *   UNINSTALLFAILED: The application failed to be uninstalled.
     *
     * @example INSTALLING
     *
     * @var string
     */
    public $installationStatus;

    /**
     * @description The list of instance groups where the application is installed.
     *
     * @var string[]
     */
    public $instanceGroupList;

    /**
     * @description The value of MD5.
     *
     * @example THCIEH73KEK3334
     *
     * @var string
     */
    public $MD5;

    /**
     * @description The name of the application package.
     *
     * @example cn.rdstar.rdstarandroid
     *
     * @var string
     */
    public $packageName;

    /**
     * @description The status of the application.
     *
     * Valid values:
     *
     *   FAILED: The application failed to be created.
     *   NORMAL: The application is available.
     *   CREATING: The application is being created.
     *
     * @example NORMAL
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'androidAppVersion' => 'AndroidAppVersion',
        'apkSize' => 'ApkSize',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'bizRegionId' => 'BizRegionId',
        'description' => 'Description',
        'gmtCreate' => 'GmtCreate',
        'gmtModified' => 'GmtModified',
        'iconUrl' => 'IconUrl',
        'installationStatus' => 'InstallationStatus',
        'instanceGroupList' => 'InstanceGroupList',
        'MD5' => 'MD5',
        'packageName' => 'PackageName',
        'status' => 'Status',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->androidAppVersion) {
            $res['AndroidAppVersion'] = $this->androidAppVersion;
        }
        if (null !== $this->apkSize) {
            $res['ApkSize'] = $this->apkSize;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->bizRegionId) {
            $res['BizRegionId'] = $this->bizRegionId;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->iconUrl) {
            $res['IconUrl'] = $this->iconUrl;
        }
        if (null !== $this->installationStatus) {
            $res['InstallationStatus'] = $this->installationStatus;
        }
        if (null !== $this->instanceGroupList) {
            $res['InstanceGroupList'] = $this->instanceGroupList;
        }
        if (null !== $this->MD5) {
            $res['MD5'] = $this->MD5;
        }
        if (null !== $this->packageName) {
            $res['PackageName'] = $this->packageName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AndroidAppVersion'])) {
            $model->androidAppVersion = $map['AndroidAppVersion'];
        }
        if (isset($map['ApkSize'])) {
            $model->apkSize = $map['ApkSize'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BizRegionId'])) {
            $model->bizRegionId = $map['BizRegionId'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['IconUrl'])) {
            $model->iconUrl = $map['IconUrl'];
        }
        if (isset($map['InstallationStatus'])) {
            $model->installationStatus = $map['InstallationStatus'];
        }
        if (isset($map['InstanceGroupList'])) {
            if (!empty($map['InstanceGroupList'])) {
                $model->instanceGroupList = $map['InstanceGroupList'];
            }
        }
        if (isset($map['MD5'])) {
            $model->MD5 = $map['MD5'];
        }
        if (isset($map['PackageName'])) {
            $model->packageName = $map['PackageName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
