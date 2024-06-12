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
     * @example NORMAL
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'androidAppVersion'  => 'AndroidAppVersion',
        'appId'              => 'AppId',
        'appName'            => 'AppName',
        'description'        => 'Description',
        'gmtCreate'          => 'GmtCreate',
        'gmtModified'        => 'GmtModified',
        'iconUrl'            => 'IconUrl',
        'installationStatus' => 'InstallationStatus',
        'instanceGroupList'  => 'InstanceGroupList',
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
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
