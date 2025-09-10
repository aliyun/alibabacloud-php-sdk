<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonReleaseResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\EntityGroupBase;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonReleaseResponseBody\release\conditions;

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
    public $config;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var int
     */
    public $dashboardCount;

    /**
     * @var EntityGroupBase
     */
    public $entityRules;

    /**
     * @var string
     */
    public $envType;

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
    public $parentAddonReleaseId;

    /**
     * @var string
     */
    public $policyId;

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
    public $userId;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $workspace;
    protected $_name = [
        'addonName' => 'addonName',
        'alertRuleCount' => 'alertRuleCount',
        'conditions' => 'conditions',
        'config' => 'config',
        'createTime' => 'createTime',
        'dashboardCount' => 'dashboardCount',
        'entityRules' => 'entityRules',
        'envType' => 'envType',
        'environmentId' => 'environmentId',
        'exporterCount' => 'exporterCount',
        'haveConfig' => 'haveConfig',
        'installUserId' => 'installUserId',
        'language' => 'language',
        'managed' => 'managed',
        'parentAddonReleaseId' => 'parentAddonReleaseId',
        'policyId' => 'policyId',
        'regionId' => 'regionId',
        'releaseId' => 'releaseId',
        'releaseName' => 'releaseName',
        'scene' => 'scene',
        'status' => 'status',
        'updateTime' => 'updateTime',
        'userId' => 'userId',
        'version' => 'version',
        'workspace' => 'workspace',
    ];

    public function validate()
    {
        if (\is_array($this->conditions)) {
            Model::validateArray($this->conditions);
        }
        if (null !== $this->entityRules) {
            $this->entityRules->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addonName) {
            $res['addonName'] = $this->addonName;
        }

        if (null !== $this->alertRuleCount) {
            $res['alertRuleCount'] = $this->alertRuleCount;
        }

        if (null !== $this->conditions) {
            if (\is_array($this->conditions)) {
                $res['conditions'] = [];
                $n1 = 0;
                foreach ($this->conditions as $item1) {
                    $res['conditions'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->config) {
            $res['config'] = $this->config;
        }

        if (null !== $this->createTime) {
            $res['createTime'] = $this->createTime;
        }

        if (null !== $this->dashboardCount) {
            $res['dashboardCount'] = $this->dashboardCount;
        }

        if (null !== $this->entityRules) {
            $res['entityRules'] = null !== $this->entityRules ? $this->entityRules->toArray($noStream) : $this->entityRules;
        }

        if (null !== $this->envType) {
            $res['envType'] = $this->envType;
        }

        if (null !== $this->environmentId) {
            $res['environmentId'] = $this->environmentId;
        }

        if (null !== $this->exporterCount) {
            $res['exporterCount'] = $this->exporterCount;
        }

        if (null !== $this->haveConfig) {
            $res['haveConfig'] = $this->haveConfig;
        }

        if (null !== $this->installUserId) {
            $res['installUserId'] = $this->installUserId;
        }

        if (null !== $this->language) {
            $res['language'] = $this->language;
        }

        if (null !== $this->managed) {
            $res['managed'] = $this->managed;
        }

        if (null !== $this->parentAddonReleaseId) {
            $res['parentAddonReleaseId'] = $this->parentAddonReleaseId;
        }

        if (null !== $this->policyId) {
            $res['policyId'] = $this->policyId;
        }

        if (null !== $this->regionId) {
            $res['regionId'] = $this->regionId;
        }

        if (null !== $this->releaseId) {
            $res['releaseId'] = $this->releaseId;
        }

        if (null !== $this->releaseName) {
            $res['releaseName'] = $this->releaseName;
        }

        if (null !== $this->scene) {
            $res['scene'] = $this->scene;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->updateTime) {
            $res['updateTime'] = $this->updateTime;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
        }

        if (null !== $this->version) {
            $res['version'] = $this->version;
        }

        if (null !== $this->workspace) {
            $res['workspace'] = $this->workspace;
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
        if (isset($map['addonName'])) {
            $model->addonName = $map['addonName'];
        }

        if (isset($map['alertRuleCount'])) {
            $model->alertRuleCount = $map['alertRuleCount'];
        }

        if (isset($map['conditions'])) {
            if (!empty($map['conditions'])) {
                $model->conditions = [];
                $n1 = 0;
                foreach ($map['conditions'] as $item1) {
                    $model->conditions[$n1] = conditions::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['config'])) {
            $model->config = $map['config'];
        }

        if (isset($map['createTime'])) {
            $model->createTime = $map['createTime'];
        }

        if (isset($map['dashboardCount'])) {
            $model->dashboardCount = $map['dashboardCount'];
        }

        if (isset($map['entityRules'])) {
            $model->entityRules = EntityGroupBase::fromMap($map['entityRules']);
        }

        if (isset($map['envType'])) {
            $model->envType = $map['envType'];
        }

        if (isset($map['environmentId'])) {
            $model->environmentId = $map['environmentId'];
        }

        if (isset($map['exporterCount'])) {
            $model->exporterCount = $map['exporterCount'];
        }

        if (isset($map['haveConfig'])) {
            $model->haveConfig = $map['haveConfig'];
        }

        if (isset($map['installUserId'])) {
            $model->installUserId = $map['installUserId'];
        }

        if (isset($map['language'])) {
            $model->language = $map['language'];
        }

        if (isset($map['managed'])) {
            $model->managed = $map['managed'];
        }

        if (isset($map['parentAddonReleaseId'])) {
            $model->parentAddonReleaseId = $map['parentAddonReleaseId'];
        }

        if (isset($map['policyId'])) {
            $model->policyId = $map['policyId'];
        }

        if (isset($map['regionId'])) {
            $model->regionId = $map['regionId'];
        }

        if (isset($map['releaseId'])) {
            $model->releaseId = $map['releaseId'];
        }

        if (isset($map['releaseName'])) {
            $model->releaseName = $map['releaseName'];
        }

        if (isset($map['scene'])) {
            $model->scene = $map['scene'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['updateTime'])) {
            $model->updateTime = $map['updateTime'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        if (isset($map['version'])) {
            $model->version = $map['version'];
        }

        if (isset($map['workspace'])) {
            $model->workspace = $map['workspace'];
        }

        return $model;
    }
}
