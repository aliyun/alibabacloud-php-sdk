<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\InstallAddonResponseBody;

use AlibabaCloud\SDK\ARMS\V20190808\Models\InstallAddonResponseBody\data\conditions;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The name of the add-on.
     *
     * @example mysql
     *
     * @var string
     */
    public $addonName;

    /**
     * @description The number of alert rules.
     *
     * @example 1
     *
     * @var int
     */
    public $alertRuleCount;

    /**
     * @description The installation phase.
     *
     * @var conditions[]
     */
    public $conditions;

    /**
     * @description The time when the add-on was created.
     *
     * @example 2023-09-22T16:56:29+08:00
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The number of dashboards.
     *
     * @example 1
     *
     * @var int
     */
    public $dashboardCount;

    /**
     * @description The environment ID.
     *
     * @example env-xxxx
     *
     * @var string
     */
    public $environmentId;

    /**
     * @description The number of exporters.
     *
     * @example 2
     *
     * @var int
     */
    public $exporterCount;

    /**
     * @description Indicates whether the configuration is available.
     *
     * @example true
     *
     * @var bool
     */
    public $haveConfig;

    /**
     * @description The user ID.
     *
     * @example 123456
     *
     * @var string
     */
    public $installUserId;

    /**
     * @description The language.
     *
     * @example zh
     *
     * @var string
     */
    public $language;

    /**
     * @description Indicates whether the component is fully managed.
     *
     * @var bool
     */
    public $managed;

    /**
     * @description The region ID.
     *
     * @example cn-heyuan
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The release ID after installation.
     *
     * @example be29c093-3fd6-4fb6-9430-797030cc183a
     *
     * @var string
     */
    public $releaseId;

    /**
     * @description The name of the release.
     *
     * @example mysql-1695372983039
     *
     * @var string
     */
    public $releaseName;

    /**
     * @description The scenario.
     *
     * @example database
     *
     * @var string
     */
    public $scene;

    /**
     * @description The status.
     *
     * @example 0
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the add-on was updated.
     *
     * @example 2023-09-22T16:56:29+08:00
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The user ID.
     *
     * @example 111
     *
     * @var string
     */
    public $userId;

    /**
     * @description The version of the add-on.
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
        'managed'        => 'Managed',
        'regionId'       => 'RegionId',
        'releaseId'      => 'ReleaseId',
        'releaseName'    => 'ReleaseName',
        'scene'          => 'Scene',
        'status'         => 'Status',
        'updateTime'     => 'UpdateTime',
        'userId'         => 'UserId',
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
        if (null !== $this->managed) {
            $res['Managed'] = $this->managed;
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
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['Managed'])) {
            $model->managed = $map['Managed'];
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
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
