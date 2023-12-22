<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210903\Models\ListRunningAppsResponseBody;

use AlibabaCloud\Tea\Model;

class runningCloudApps extends Model
{
    /**
     * @example ca-dln05y44ze6esfl8x
     *
     * @var string
     */
    public $appId;

    /**
     * @example aig-dk8p95irk9xs5xi6a
     *
     * @var string
     */
    public $appInstanceGroupId;

    /**
     * @example ai-gc1gemx6vpa6vlync
     *
     * @var string
     */
    public $appInstanceId;

    /**
     * @example alihealth-keeper
     *
     * @var string
     */
    public $appName;

    /**
     * @example 11.1
     *
     * @var string
     */
    public $appVersion;

    /**
     * @example test1.0
     *
     * @var string
     */
    public $appVersionName;

    /**
     * @example 87
     *
     * @var int
     */
    public $duration;

    /**
     * @example https://app-icon-shanghai.oss-cn-shanghai.aliyuncs.com/tenant/187465/18_bf1.jpg
     *
     * @var string
     */
    public $iconUrl;

    /**
     * @example Windows
     *
     * @var string
     */
    public $osType;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example 1642748400
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'appId'              => 'AppId',
        'appInstanceGroupId' => 'AppInstanceGroupId',
        'appInstanceId'      => 'AppInstanceId',
        'appName'            => 'AppName',
        'appVersion'         => 'AppVersion',
        'appVersionName'     => 'AppVersionName',
        'duration'           => 'Duration',
        'iconUrl'            => 'IconUrl',
        'osType'             => 'OsType',
        'regionId'           => 'RegionId',
        'startTime'          => 'StartTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appInstanceGroupId) {
            $res['AppInstanceGroupId'] = $this->appInstanceGroupId;
        }
        if (null !== $this->appInstanceId) {
            $res['AppInstanceId'] = $this->appInstanceId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->appVersion) {
            $res['AppVersion'] = $this->appVersion;
        }
        if (null !== $this->appVersionName) {
            $res['AppVersionName'] = $this->appVersionName;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->iconUrl) {
            $res['IconUrl'] = $this->iconUrl;
        }
        if (null !== $this->osType) {
            $res['OsType'] = $this->osType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return runningCloudApps
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppInstanceGroupId'])) {
            $model->appInstanceGroupId = $map['AppInstanceGroupId'];
        }
        if (isset($map['AppInstanceId'])) {
            $model->appInstanceId = $map['AppInstanceId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['AppVersion'])) {
            $model->appVersion = $map['AppVersion'];
        }
        if (isset($map['AppVersionName'])) {
            $model->appVersionName = $map['AppVersionName'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['IconUrl'])) {
            $model->iconUrl = $map['IconUrl'];
        }
        if (isset($map['OsType'])) {
            $model->osType = $map['OsType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
