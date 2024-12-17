<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAppsResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1.0.0
     *
     * @var string
     */
    public $androidAppVersion;

    /**
     * @var string
     */
    public $apkSize;

    /**
     * @example 10404
     *
     * @var int
     */
    public $appId;

    /**
     * @example testapp
     *
     * @var string
     */
    public $appName;

    /**
     * @var string
     */
    public $bizRegionId;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 2022-08-11 17:45:03
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @example 2022-08-11 17:45:03
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example https://test.png
     *
     * @var string
     */
    public $iconUrl;

    /**
     * @example INSTALLING
     *
     * @var string
     */
    public $installationStatus;

    /**
     * @var string[]
     */
    public $instanceGroupList;

    /**
     * @var string
     */
    public $MD5;

    /**
     * @var string
     */
    public $packageName;

    /**
     * @example NORMAL
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'androidAppVersion'  => 'AndroidAppVersion',
        'apkSize'            => 'ApkSize',
        'appId'              => 'AppId',
        'appName'            => 'AppName',
        'bizRegionId'        => 'BizRegionId',
        'description'        => 'Description',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'iconUrl'            => 'IconUrl',
        'installationStatus' => 'InstallationStatus',
        'instanceGroupList'  => 'InstanceGroupList',
        'MD5'                => 'MD5',
        'packageName'        => 'PackageName',
        'status'             => 'Status',
    ];

    public function validate()
    {
    }

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
