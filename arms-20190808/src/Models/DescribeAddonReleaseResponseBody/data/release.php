<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeAddonReleaseResponseBody\data;

use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeAddonReleaseResponseBody\data\release\conditions;
use AlibabaCloud\Tea\Model;

class release extends Model
{
    /**
     * @description Name of Addon.
     *
     * @example mysql
     *
     * @var string
     */
    public $addonName;

    /**
     * @description Number of alarm groups.
     *
     * @example 1
     *
     * @var int
     */
    public $alertRuleCount;

    /**
     * @description Condition list.
     *
     * @var conditions[]
     */
    public $conditions;

    /**
     * @description Create time.
     *
     * @example 2023-09-22T16:56:29+08:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Number of dashboard.
     *
     * @example 1
     *
     * @var int
     */
    public $dashboardCount;

    /**
     * @description Environment ID.
     *
     * @example env-xxxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description Number of Exporter.
     *
     * @example 2
     *
     * @var int
     */
    public $exporterCount;

    /**
     * @description Whether there is configuration.
     *
     * @example true
     *
     * @var bool
     */
    public $haveConfig;

    /**
     * @description User ID of the installation.
     *
     * @example 23810923891
     *
     * @var string
     */
    public $installUserId;

    /**
     * @description Language.
     *
     * @example zh
     *
     * @var string
     */
    public $language;

    /**
     * @description The region ID.
     *
     * @example cn-heyuan
     *
     * @var string
     */
    public $regionId;

    /**
     * @description Release ID.
     *
     * @example be29c093-3fd6-4fb6-9430-797030cc183a
     *
     * @var string
     */
    public $releaseId;

    /**
     * @description Name of Release.
     *
     * @example mysql-1695372983039
     *
     * @var string
     */
    public $releaseName;

    /**
     * @description Scene.
     *
     * @example database
     *
     * @var string
     */
    public $scene;

    /**
     * @description Status of Release.
     *
     * @example 0
     *
     * @var string
     */
    public $status;

    /**
     * @description Update time.
     *
     * @example 2023-09-22T16:56:29+08:00
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description User ID.
     *
     * @example 13818734031
     *
     * @var string
     */
    public $userID;

    /**
     * @description Version of Addon.
     *
     * @example 0.0.1
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'addonName'      => 'AddonName',
        'alertRuleCount' => 'AlertRuleCount',
        'conditions'     => 'Conditions',
        'createTime'     => 'CreateTime',
        'dashboardCount' => 'DashboardCount',
        'environmentId'  => 'EnvironmentId',
        'exporterCount'  => 'ExporterCount',
        'haveConfig'     => 'HaveConfig',
        'installUserId'  => 'InstallUserId',
        'language'       => 'Language',
        'regionId'       => 'RegionId',
        'releaseId'      => 'ReleaseId',
        'releaseName'    => 'ReleaseName',
        'scene'          => 'Scene',
        'status'         => 'Status',
        'updateTime'     => 'UpdateTime',
        'userID'         => 'UserID',
        'version'        => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->addonName) {
            $res['AddonName'] = $this->addonName;
        }
        if (null !== $this->alertRuleCount) {
            $res['AlertRuleCount'] = $this->alertRuleCount;
        }
        if (null !== $this->conditions) {
            $res['Conditions'] = [];
            if (null !== $this->conditions && \is_array($this->conditions)) {
                $n = 0;
                foreach ($this->conditions as $item) {
                    $res['Conditions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->dashboardCount) {
            $res['DashboardCount'] = $this->dashboardCount;
        }
        if (null !== $this->environmentId) {
            $res['EnvironmentId'] = $this->environmentId;
        }
        if (null !== $this->exporterCount) {
            $res['ExporterCount'] = $this->exporterCount;
        }
        if (null !== $this->haveConfig) {
            $res['HaveConfig'] = $this->haveConfig;
        }
        if (null !== $this->installUserId) {
            $res['InstallUserId'] = $this->installUserId;
        }
        if (null !== $this->language) {
            $res['Language'] = $this->language;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->releaseId) {
            $res['ReleaseId'] = $this->releaseId;
        }
        if (null !== $this->releaseName) {
            $res['ReleaseName'] = $this->releaseName;
        }
        if (null !== $this->scene) {
            $res['Scene'] = $this->scene;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->userID) {
            $res['UserID'] = $this->userID;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return release
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AddonName'])) {
            $model->addonName = $map['AddonName'];
        }
        if (isset($map['AlertRuleCount'])) {
            $model->alertRuleCount = $map['AlertRuleCount'];
        }
        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n                 = 0;
                foreach ($map['Conditions'] as $item) {
                    $model->conditions[$n++] = null !== $item ? conditions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DashboardCount'])) {
            $model->dashboardCount = $map['DashboardCount'];
        }
        if (isset($map['EnvironmentId'])) {
            $model->environmentId = $map['EnvironmentId'];
        }
        if (isset($map['ExporterCount'])) {
            $model->exporterCount = $map['ExporterCount'];
        }
        if (isset($map['HaveConfig'])) {
            $model->haveConfig = $map['HaveConfig'];
        }
        if (isset($map['InstallUserId'])) {
            $model->installUserId = $map['InstallUserId'];
        }
        if (isset($map['Language'])) {
            $model->language = $map['Language'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ReleaseId'])) {
            $model->releaseId = $map['ReleaseId'];
        }
        if (isset($map['ReleaseName'])) {
            $model->releaseName = $map['ReleaseName'];
        }
        if (isset($map['Scene'])) {
            $model->scene = $map['Scene'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['UserID'])) {
            $model->userID = $map['UserID'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
