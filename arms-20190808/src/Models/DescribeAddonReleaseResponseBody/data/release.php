<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeAddonReleaseResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\DescribeAddonReleaseResponseBody\data\release\conditions;

class release extends Model
{
    /**
     * @var string
     */
    public $addonName;

    /**
     * @var int
     */
    public $alertRuleCount;

    /**
     * @var conditions[]
     */
    public $conditions;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $dashboardCount;

    /**
     * @var string
     */
    public $environmentId;

    /**
     * @var int
     */
    public $exporterCount;

    /**
     * @var bool
     */
    public $haveConfig;

    /**
     * @var string
     */
    public $installUserId;

    /**
     * @var string
     */
    public $language;

    /**
     * @var bool
     */
    public $managed;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $releaseId;

    /**
     * @var string
     */
    public $releaseName;

    /**
     * @var string
     */
    public $scene;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $updateTime;

    /**
     * @var string
     */
    public $userID;

    /**
     * @var string
     */
    public $version;
    protected $_name = [
        'addonName' => 'AddonName',
        'alertRuleCount' => 'AlertRuleCount',
        'conditions' => 'Conditions',
        'createTime' => 'CreateTime',
        'dashboardCount' => 'DashboardCount',
        'environmentId' => 'EnvironmentId',
        'exporterCount' => 'ExporterCount',
        'haveConfig' => 'HaveConfig',
        'installUserId' => 'InstallUserId',
        'language' => 'Language',
        'managed' => 'Managed',
        'regionId' => 'RegionId',
        'releaseId' => 'ReleaseId',
        'releaseName' => 'ReleaseName',
        'scene' => 'Scene',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
        'userID' => 'UserID',
        'version' => 'Version',
    ];

    public function validate()
    {
        if (\is_array($this->conditions)) {
            Model::validateArray($this->conditions);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addonName) {
            $res['AddonName'] = $this->addonName;
        }

        if (null !== $this->alertRuleCount) {
            $res['AlertRuleCount'] = $this->alertRuleCount;
        }

        if (null !== $this->conditions) {
            if (\is_array($this->conditions)) {
                $res['Conditions'] = [];
                $n1 = 0;
                foreach ($this->conditions as $item1) {
                    $res['Conditions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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

        if (null !== $this->userID) {
            $res['UserID'] = $this->userID;
        }

        if (null !== $this->version) {
            $res['Version'] = $this->version;
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
        if (isset($map['AddonName'])) {
            $model->addonName = $map['AddonName'];
        }

        if (isset($map['AlertRuleCount'])) {
            $model->alertRuleCount = $map['AlertRuleCount'];
        }

        if (isset($map['Conditions'])) {
            if (!empty($map['Conditions'])) {
                $model->conditions = [];
                $n1 = 0;
                foreach ($map['Conditions'] as $item1) {
                    $model->conditions[$n1] = conditions::fromMap($item1);
                    ++$n1;
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

        if (isset($map['UserID'])) {
            $model->userID = $map['UserID'];
        }

        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
