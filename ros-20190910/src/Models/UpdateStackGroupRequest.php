<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupRequest\autoDeployment;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupRequest\deploymentTargets;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupRequest\parameters;

class UpdateStackGroupRequest extends Model
{
    /**
     * @var string[]
     */
    public $accountIds;
    /**
     * @var string
     */
    public $administrationRoleName;
    /**
     * @var autoDeployment
     */
    public $autoDeployment;
    /**
     * @var string[]
     */
    public $capabilities;
    /**
     * @var string
     */
    public $clientToken;
    /**
     * @var string[]
     */
    public $deploymentOptions;
    /**
     * @var deploymentTargets
     */
    public $deploymentTargets;
    /**
     * @var string
     */
    public $description;
    /**
     * @var string
     */
    public $executionRoleName;
    /**
     * @var string
     */
    public $operationDescription;
    /**
     * @var mixed[]
     */
    public $operationPreferences;
    /**
     * @var parameters[]
     */
    public $parameters;
    /**
     * @var string
     */
    public $permissionModel;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string[]
     */
    public $regionIds;
    /**
     * @var string
     */
    public $stackGroupName;
    /**
     * @var string
     */
    public $templateBody;
    /**
     * @var string
     */
    public $templateId;
    /**
     * @var string
     */
    public $templateURL;
    /**
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'accountIds'             => 'AccountIds',
        'administrationRoleName' => 'AdministrationRoleName',
        'autoDeployment'         => 'AutoDeployment',
        'capabilities'           => 'Capabilities',
        'clientToken'            => 'ClientToken',
        'deploymentOptions'      => 'DeploymentOptions',
        'deploymentTargets'      => 'DeploymentTargets',
        'description'            => 'Description',
        'executionRoleName'      => 'ExecutionRoleName',
        'operationDescription'   => 'OperationDescription',
        'operationPreferences'   => 'OperationPreferences',
        'parameters'             => 'Parameters',
        'permissionModel'        => 'PermissionModel',
        'regionId'               => 'RegionId',
        'regionIds'              => 'RegionIds',
        'stackGroupName'         => 'StackGroupName',
        'templateBody'           => 'TemplateBody',
        'templateId'             => 'TemplateId',
        'templateURL'            => 'TemplateURL',
        'templateVersion'        => 'TemplateVersion',
    ];

    public function validate()
    {
        if (\is_array($this->accountIds)) {
            Model::validateArray($this->accountIds);
        }
        if (null !== $this->autoDeployment) {
            $this->autoDeployment->validate();
        }
        if (\is_array($this->capabilities)) {
            Model::validateArray($this->capabilities);
        }
        if (\is_array($this->deploymentOptions)) {
            Model::validateArray($this->deploymentOptions);
        }
        if (null !== $this->deploymentTargets) {
            $this->deploymentTargets->validate();
        }
        if (\is_array($this->operationPreferences)) {
            Model::validateArray($this->operationPreferences);
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->regionIds)) {
            Model::validateArray($this->regionIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountIds) {
            if (\is_array($this->accountIds)) {
                $res['AccountIds'] = [];
                $n1                = 0;
                foreach ($this->accountIds as $item1) {
                    $res['AccountIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->administrationRoleName) {
            $res['AdministrationRoleName'] = $this->administrationRoleName;
        }

        if (null !== $this->autoDeployment) {
            $res['AutoDeployment'] = null !== $this->autoDeployment ? $this->autoDeployment->toArray($noStream) : $this->autoDeployment;
        }

        if (null !== $this->capabilities) {
            if (\is_array($this->capabilities)) {
                $res['Capabilities'] = [];
                $n1                  = 0;
                foreach ($this->capabilities as $item1) {
                    $res['Capabilities'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }

        if (null !== $this->deploymentOptions) {
            if (\is_array($this->deploymentOptions)) {
                $res['DeploymentOptions'] = [];
                $n1                       = 0;
                foreach ($this->deploymentOptions as $item1) {
                    $res['DeploymentOptions'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->deploymentTargets) {
            $res['DeploymentTargets'] = null !== $this->deploymentTargets ? $this->deploymentTargets->toArray($noStream) : $this->deploymentTargets;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->executionRoleName) {
            $res['ExecutionRoleName'] = $this->executionRoleName;
        }

        if (null !== $this->operationDescription) {
            $res['OperationDescription'] = $this->operationDescription;
        }

        if (null !== $this->operationPreferences) {
            if (\is_array($this->operationPreferences)) {
                $res['OperationPreferences'] = [];
                foreach ($this->operationPreferences as $key1 => $value1) {
                    $res['OperationPreferences'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                $n1                = 0;
                foreach ($this->parameters as $item1) {
                    $res['Parameters'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->permissionModel) {
            $res['PermissionModel'] = $this->permissionModel;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->regionIds) {
            if (\is_array($this->regionIds)) {
                $res['RegionIds'] = [];
                $n1               = 0;
                foreach ($this->regionIds as $item1) {
                    $res['RegionIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }

        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateURL) {
            $res['TemplateURL'] = $this->templateURL;
        }

        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
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
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = [];
                $n1                = 0;
                foreach ($map['AccountIds'] as $item1) {
                    $model->accountIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['AdministrationRoleName'])) {
            $model->administrationRoleName = $map['AdministrationRoleName'];
        }

        if (isset($map['AutoDeployment'])) {
            $model->autoDeployment = autoDeployment::fromMap($map['AutoDeployment']);
        }

        if (isset($map['Capabilities'])) {
            if (!empty($map['Capabilities'])) {
                $model->capabilities = [];
                $n1                  = 0;
                foreach ($map['Capabilities'] as $item1) {
                    $model->capabilities[$n1++] = $item1;
                }
            }
        }

        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }

        if (isset($map['DeploymentOptions'])) {
            if (!empty($map['DeploymentOptions'])) {
                $model->deploymentOptions = [];
                $n1                       = 0;
                foreach ($map['DeploymentOptions'] as $item1) {
                    $model->deploymentOptions[$n1++] = $item1;
                }
            }
        }

        if (isset($map['DeploymentTargets'])) {
            $model->deploymentTargets = deploymentTargets::fromMap($map['DeploymentTargets']);
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['ExecutionRoleName'])) {
            $model->executionRoleName = $map['ExecutionRoleName'];
        }

        if (isset($map['OperationDescription'])) {
            $model->operationDescription = $map['OperationDescription'];
        }

        if (isset($map['OperationPreferences'])) {
            if (!empty($map['OperationPreferences'])) {
                $model->operationPreferences = [];
                foreach ($map['OperationPreferences'] as $key1 => $value1) {
                    $model->operationPreferences[$key1] = $value1;
                }
            }
        }

        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n1                = 0;
                foreach ($map['Parameters'] as $item1) {
                    $model->parameters[$n1++] = parameters::fromMap($item1);
                }
            }
        }

        if (isset($map['PermissionModel'])) {
            $model->permissionModel = $map['PermissionModel'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['RegionIds'])) {
            if (!empty($map['RegionIds'])) {
                $model->regionIds = [];
                $n1               = 0;
                foreach ($map['RegionIds'] as $item1) {
                    $model->regionIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }

        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateURL'])) {
            $model->templateURL = $map['TemplateURL'];
        }

        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        return $model;
    }
}
