<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsaic\V20230930\Models\DescribeAppsResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $androidAppVersion;

    /**
     * @var string
     */
    public $apkSize;

    /**
     * @var int
     */
    public $appId;

    /**
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
    public $iconUrl;

    /**
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

    public function validate()
    {
        if (\is_array($this->instanceGroupList)) {
            Model::validateArray($this->instanceGroupList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->instanceGroupList)) {
                $res['InstanceGroupList'] = [];
                $n1 = 0;
                foreach ($this->instanceGroupList as $item1) {
                    $res['InstanceGroupList'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
                $model->instanceGroupList = [];
                $n1 = 0;
                foreach ($map['InstanceGroupList'] as $item1) {
                    $model->instanceGroupList[$n1++] = $item1;
                }
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
