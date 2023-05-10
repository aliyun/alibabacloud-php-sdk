<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupRequest\autoDeployment;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupRequest\deploymentTargets;
use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupRequest\parameters;
use AlibabaCloud\Tea\Model;

class UpdateStackGroupRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must make sure that the token is unique among different requests.
     *
     * For more information, see [Ensure idempotence](~~134212~~).
     * @example ["12****"]
     *
     * @var string[]
     */
    public $accountIds;

    /**
     * @description The value of parameter N.
     *
     * >  The Parameters parameter is optional. If you set the Parameters parameter, you must set the Parameters.N.ParameterValue parameter.
     * @example AliyunROSStackGroupAdministrationRole
     *
     * @var string
     */
    public $administrationRoleName;

    /**
     * @description The IDs of the members in the resource directory. You can specify a maximum of 20 member IDs.
     *
     * >  To view the member IDs, go to the **Overview** page in the **Resource Management** console. For more information, see [View the detailed information of a member](~~111624~~).
     * @example {"Enabled": true, "RetainStacksOnAccountRemoval": true}
     *
     * @var autoDeployment
     */
    public $autoDeployment;

    /**
     * @var string[]
     */
    public $capabilities;

    /**
     * @description The version of the template. If you do not specify a version, the latest version is used.
     *
     * >  This parameter takes effect only if the TemplateId parameter is set.
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the operation.
     *
     * @example {"RdFolderIds": ["fd-4PvlVLOL8v"]}
     *
     * @var deploymentTargets
     */
    public $deploymentTargets;

    /**
     * @description The URL of the file that contains the template body. The URL must point to a template that is located on an HTTP or HTTPS web server or in an Alibaba Cloud Object Storage Service (OSS) bucket. The template body must be 1 to 524,288 bytes in length. Examples: oss://ros/template/demo and oss://ros/template/demo?RegionId=cn-hangzhou. If you do not specify the region ID of the OSS bucket, the value of the RegionId parameter is used.
     *
     * >  You must specify only one of the TemplateBody, TemplateURL, and TemplateId parameters.
     * @example My Stack Group
     *
     * @var string
     */
    public $description;

    /**
     * @description The permission model.
     *
     * Valid values:
     *
     *   SELF_MANAGED: the self-managed permission model. This is the default value. If you use the self-managed model for the stack group, you must create RAM roles for the administrator and execution accounts, and establish a trust relationship between the accounts to deploy stacks within the execution account.
     *   SERVICE_MANAGED: the service-managed permission model. If you use the service-managed model for the stack group, ROS creates service-linked roles for the administrator and execution accounts, and the administrator account uses its role to deploy stacks within the execution account.
     *
     * >
     *   If stack instances have been created in the stack group, you cannot switch the permission mode of the stack group.
     *   If you want to use the service-managed permission model to deploy stacks, your account must be the management account or a delegated administrator account of your resource directory and the trusted access feature is enabled for the account. For more information, see [Step 1: (Optional) Create a delegated administrator account](~~308253~~) and [Step 2: Enable trusted access](~~298229~~).
     *
     * @example AliyunROSStackGroupExecutionRole
     *
     * @var string
     */
    public $executionRoleName;

    /**
     * @description The list of parameters.
     *
     * @example Update stack instances in hangzhou
     *
     * @var string
     */
    public $operationDescription;

    /**
     * @description The key of parameter N. If you do not specify the key and value of the parameter, ROS uses the default key and value in the template.
     *
     * >  The Parameters parameter is optional. If you set the Parameters parameter, you must set the Parameters.N.ParameterKey parameter.
     * @example {"FailureToleranceCount": 1,"MaxConcurrentCount": 2}
     *
     * @var mixed[]
     */
    public $operationPreferences;

    /**
     * @description Specifies whether to retain stacks in a member when you remove the member from the folder.
     *
     * Valid values:
     *
     *   true: retains the stacks.
     *   false: deletes the stacks.
     *
     * >  This parameter is required if the Enabled parameter is set to true.
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description The IDs of the folders in the resource directory. You can specify up to five folder IDs.
     *
     * You can create stacks within all members in the specified folders. If you create stacks in the Root folder, the stacks are created within all members in the resource directory.
     *
     * >  To view the folder IDs, go to the **Overview** page in the **Resource Management** console. For more information, see [View the basic information of a folder](~~111223~~).
     * @example SELF_MANAGED
     *
     * @var string
     */
    public $permissionModel;

    /**
     * @description The region IDs of stack instances. You can specify a maximum of 20 region IDs.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The preferences of the operation to update the stack group.
     *
     * The following parameters are available:
     *
     *   {"FailureToleranceCount": N}
     *
     * If you do not specify a value for the FailureToleranceCount parameter, the default value 0 is used.
     *
     *   {"FailureTolerancePercentage": N}
     *
     * If you do not specify a value for the FailureTolerancePercentage parameter, the default value 0 is used.
     *
     *   {"MaxConcurrentCount": N}
     *
     * If you do not specify a value for the MaxConcurrentCount parameter, the default value 1 is used.
     *
     *   {"MaxConcurrentPercentage": N}
     *
     * If you do not specify a value for the MaxConcurrentPercentage parameter, the default value 1 is used.
     *
     *   {"RegionConcurrencyType": N}
     *
     * Specifies whether stacks can be deployed in multiple regions in parallel. Valid values:
     *
     *   SEQUENTIAL: deploys stacks in the specified regions one by one in sequence. This way, stacks are deployed in only one region at a time. This is the default value.
     *   PARALLEL: deploys stacks in all the specified regions in parallel.
     *
     * >
     *   You can specify only one of the MaxConcurrentCount and MaxConcurrentPercentage parameters.
     *   You can specify only one of the FailureToleranceCount and FailureTolerancePercentage parameters.
     *
     * @example ["cn-hangzhou", "cn-beijing"]
     *
     * @var string[]
     */
    public $regionIds;

    /**
     * @description The structure that contains the template body. The template body must be 1 to 524,288 bytes in length. If the length of the template body exceeds the upper limit, we recommend that you add parameters to the HTTP POST request body to prevent request failures caused by excessively long URLs.
     *
     * >  You must specify only one of the TemplateBody, TemplateURL, and TemplateId parameters.
     * @example MyStackGroup
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @description The name of the RAM role to be assumed by the administrator role AliyunROSStackGroupAdministrationRole. This parameter is required if you want to grant self-managed permissions to the stack group. If you do not specify a value for this parameter, the default value AliyunROSStackGroupExecutionRole is used. You can use this role in ROS to perform operations on the stacks that correspond to stack instances in the stack group.
     *
     * The name must be 1 to 64 characters in length, and can contain letters, digits, and hyphens (-).
     * @example {"ROSTemplateFormatVersion": "2015-09-01"}
     *
     * @var string
     */
    public $templateBody;

    /**
     * @description The information about automatic deployment settings.
     *
     * >  This parameter is required only if the PermissionModel parameter is set to SERVICE_MANAGED.
     * @example 5ecd1e10-b0e9-4389-a565-e4c15efc****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The ID of the template. This parameter applies to shared and private templates.
     *
     * >  You must specify only one of the TemplateBody, TemplateURL, and TemplateId parameters.
     * @example oss://ros-template/demo
     *
     * @var string
     */
    public $templateURL;

    /**
     * @description Specifies whether to enable automatic deployment.
     *
     * Valid values:
     *
     *   true: enables automatic deployment. If you add a member to the folder to which the stack group belongs after you enable automatic deployment, the stack group deploys its stack instances within the member. If you remove a member from the folder, the stack group deletes stack instances that are deployed within the member.
     *   false: disables automatic deployment. After you disable automatic deployment, the stack instances remain unchanged even if members in the folder change.
     *
     * @example v1
     *
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'accountIds'             => 'AccountIds',
        'administrationRoleName' => 'AdministrationRoleName',
        'autoDeployment'         => 'AutoDeployment',
        'capabilities'           => 'Capabilities',
        'clientToken'            => 'ClientToken',
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountIds) {
            $res['AccountIds'] = $this->accountIds;
        }
        if (null !== $this->administrationRoleName) {
            $res['AdministrationRoleName'] = $this->administrationRoleName;
        }
        if (null !== $this->autoDeployment) {
            $res['AutoDeployment'] = null !== $this->autoDeployment ? $this->autoDeployment->toMap() : null;
        }
        if (null !== $this->capabilities) {
            $res['Capabilities'] = $this->capabilities;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deploymentTargets) {
            $res['DeploymentTargets'] = null !== $this->deploymentTargets ? $this->deploymentTargets->toMap() : null;
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
            $res['OperationPreferences'] = $this->operationPreferences;
        }
        if (null !== $this->parameters) {
            $res['Parameters'] = [];
            if (null !== $this->parameters && \is_array($this->parameters)) {
                $n = 0;
                foreach ($this->parameters as $item) {
                    $res['Parameters'][$n++] = null !== $item ? $item->toMap() : $item;
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
            $res['RegionIds'] = $this->regionIds;
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

    /**
     * @param array $map
     *
     * @return UpdateStackGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIds'])) {
            if (!empty($map['AccountIds'])) {
                $model->accountIds = $map['AccountIds'];
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
                $model->capabilities = $map['Capabilities'];
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
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
            $model->operationPreferences = $map['OperationPreferences'];
        }
        if (isset($map['Parameters'])) {
            if (!empty($map['Parameters'])) {
                $model->parameters = [];
                $n                 = 0;
                foreach ($map['Parameters'] as $item) {
                    $model->parameters[$n++] = null !== $item ? parameters::fromMap($item) : $item;
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
                $model->regionIds = $map['RegionIds'];
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
