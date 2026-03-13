<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pai\V20240521\Models;

use AlibabaCloud\Dara\Model;

class QuickStartModel extends Model
{
    /**
     * @var string
     */
    public $accessibility;

    /**
     * @var int
     */
    public $deploymentCount;

    /**
     * @var string
     */
    public $domain;

    /**
     * @var mixed[]
     */
    public $extraInfo;

    /**
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @var Label[]
     */
    public $labels;

    /**
     * @var ModelVersion
     */
    public $latestVersion;

    /**
     * @var string
     */
    public $modelDescription;

    /**
     * @var string
     */
    public $modelDoc;

    /**
     * @var string
     */
    public $modelId;

    /**
     * @var string
     */
    public $modelName;

    /**
     * @var int
     */
    public $orderNumber;

    /**
     * @var string
     */
    public $origin;

    /**
     * @var string
     */
    public $ownerId;

    /**
     * @var string
     */
    public $provider;

    /**
     * @var mixed[]
     */
    public $quickStartModelDescription;

    /**
     * @var mixed[]
     */
    public $quickStartModelName;

    /**
     * @var string
     */
    public $relatedModelId;

    /**
     * @var string
     */
    public $task;

    /**
     * @var int
     */
    public $trainingCount;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $viewCount;

    /**
     * @var int
     */
    public $viewCount7Days;

    /**
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility' => 'Accessibility',
        'deploymentCount' => 'DeploymentCount',
        'domain' => 'Domain',
        'extraInfo' => 'ExtraInfo',
        'gmtCreateTime' => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'labels' => 'Labels',
        'latestVersion' => 'LatestVersion',
        'modelDescription' => 'ModelDescription',
        'modelDoc' => 'ModelDoc',
        'modelId' => 'ModelId',
        'modelName' => 'ModelName',
        'orderNumber' => 'OrderNumber',
        'origin' => 'Origin',
        'ownerId' => 'OwnerId',
        'provider' => 'Provider',
        'quickStartModelDescription' => 'QuickStartModelDescription',
        'quickStartModelName' => 'QuickStartModelName',
        'relatedModelId' => 'RelatedModelId',
        'task' => 'Task',
        'trainingCount' => 'TrainingCount',
        'userId' => 'UserId',
        'viewCount' => 'ViewCount',
        'viewCount7Days' => 'ViewCount7Days',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->extraInfo)) {
            Model::validateArray($this->extraInfo);
        }
        if (\is_array($this->labels)) {
            Model::validateArray($this->labels);
        }
        if (null !== $this->latestVersion) {
            $this->latestVersion->validate();
        }
        if (\is_array($this->quickStartModelDescription)) {
            Model::validateArray($this->quickStartModelDescription);
        }
        if (\is_array($this->quickStartModelName)) {
            Model::validateArray($this->quickStartModelName);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }

        if (null !== $this->deploymentCount) {
            $res['DeploymentCount'] = $this->deploymentCount;
        }

        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }

        if (null !== $this->extraInfo) {
            if (\is_array($this->extraInfo)) {
                $res['ExtraInfo'] = [];
                foreach ($this->extraInfo as $key1 => $value1) {
                    $res['ExtraInfo'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }

        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }

        if (null !== $this->labels) {
            if (\is_array($this->labels)) {
                $res['Labels'] = [];
                $n1 = 0;
                foreach ($this->labels as $item1) {
                    $res['Labels'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->latestVersion) {
            $res['LatestVersion'] = null !== $this->latestVersion ? $this->latestVersion->toArray($noStream) : $this->latestVersion;
        }

        if (null !== $this->modelDescription) {
            $res['ModelDescription'] = $this->modelDescription;
        }

        if (null !== $this->modelDoc) {
            $res['ModelDoc'] = $this->modelDoc;
        }

        if (null !== $this->modelId) {
            $res['ModelId'] = $this->modelId;
        }

        if (null !== $this->modelName) {
            $res['ModelName'] = $this->modelName;
        }

        if (null !== $this->orderNumber) {
            $res['OrderNumber'] = $this->orderNumber;
        }

        if (null !== $this->origin) {
            $res['Origin'] = $this->origin;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->provider) {
            $res['Provider'] = $this->provider;
        }

        if (null !== $this->quickStartModelDescription) {
            if (\is_array($this->quickStartModelDescription)) {
                $res['QuickStartModelDescription'] = [];
                foreach ($this->quickStartModelDescription as $key1 => $value1) {
                    $res['QuickStartModelDescription'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->quickStartModelName) {
            if (\is_array($this->quickStartModelName)) {
                $res['QuickStartModelName'] = [];
                foreach ($this->quickStartModelName as $key1 => $value1) {
                    $res['QuickStartModelName'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->relatedModelId) {
            $res['RelatedModelId'] = $this->relatedModelId;
        }

        if (null !== $this->task) {
            $res['Task'] = $this->task;
        }

        if (null !== $this->trainingCount) {
            $res['TrainingCount'] = $this->trainingCount;
        }

        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        if (null !== $this->viewCount) {
            $res['ViewCount'] = $this->viewCount;
        }

        if (null !== $this->viewCount7Days) {
            $res['ViewCount7Days'] = $this->viewCount7Days;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }

        if (isset($map['DeploymentCount'])) {
            $model->deploymentCount = $map['DeploymentCount'];
        }

        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }

        if (isset($map['ExtraInfo'])) {
            if (!empty($map['ExtraInfo'])) {
                $model->extraInfo = [];
                foreach ($map['ExtraInfo'] as $key1 => $value1) {
                    $model->extraInfo[$key1] = $value1;
                }
            }
        }

        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }

        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }

        if (isset($map['Labels'])) {
            if (!empty($map['Labels'])) {
                $model->labels = [];
                $n1 = 0;
                foreach ($map['Labels'] as $item1) {
                    $model->labels[$n1] = Label::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['LatestVersion'])) {
            $model->latestVersion = ModelVersion::fromMap($map['LatestVersion']);
        }

        if (isset($map['ModelDescription'])) {
            $model->modelDescription = $map['ModelDescription'];
        }

        if (isset($map['ModelDoc'])) {
            $model->modelDoc = $map['ModelDoc'];
        }

        if (isset($map['ModelId'])) {
            $model->modelId = $map['ModelId'];
        }

        if (isset($map['ModelName'])) {
            $model->modelName = $map['ModelName'];
        }

        if (isset($map['OrderNumber'])) {
            $model->orderNumber = $map['OrderNumber'];
        }

        if (isset($map['Origin'])) {
            $model->origin = $map['Origin'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Provider'])) {
            $model->provider = $map['Provider'];
        }

        if (isset($map['QuickStartModelDescription'])) {
            if (!empty($map['QuickStartModelDescription'])) {
                $model->quickStartModelDescription = [];
                foreach ($map['QuickStartModelDescription'] as $key1 => $value1) {
                    $model->quickStartModelDescription[$key1] = $value1;
                }
            }
        }

        if (isset($map['QuickStartModelName'])) {
            if (!empty($map['QuickStartModelName'])) {
                $model->quickStartModelName = [];
                foreach ($map['QuickStartModelName'] as $key1 => $value1) {
                    $model->quickStartModelName[$key1] = $value1;
                }
            }
        }

        if (isset($map['RelatedModelId'])) {
            $model->relatedModelId = $map['RelatedModelId'];
        }

        if (isset($map['Task'])) {
            $model->task = $map['Task'];
        }

        if (isset($map['TrainingCount'])) {
            $model->trainingCount = $map['TrainingCount'];
        }

        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        if (isset($map['ViewCount'])) {
            $model->viewCount = $map['ViewCount'];
        }

        if (isset($map['ViewCount7Days'])) {
            $model->viewCount7Days = $map['ViewCount7Days'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
