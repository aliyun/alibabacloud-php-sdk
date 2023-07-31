<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models;

use AlibabaCloud\SDK\ROS\V20190910\Models\UpdateStackGroupShrinkRequest\parameters;
use AlibabaCloud\Tea\Model;

class UpdateStackGroupShrinkRequest extends Model
{
    /**
     * @description The URL of the file that contains the template body. The URL must point to a template that is located on an HTTP or HTTPS web server or in an Alibaba Cloud Object Storage Service (OSS) bucket. The template body must be 1 to 524,288 bytes in length. Examples: oss://ros/template/demo and oss://ros/template/demo?RegionId=cn-hangzhou. If you do not specify the region ID of the OSS bucket, the value of the RegionId parameter is used.
     *
     * >  You must specify only one of the TemplateBody, TemplateURL, and TemplateId parameters.
     * @example ["12****"]
     *
     * @var string
     */
    public $accountIdsShrink;

    /**
     * @description The key of parameter N. If you do not specify the key and value of the parameter, ROS uses the default key and value in the template.
     *
     * >  The Parameters parameter is optional. If you set the Parameters parameter, you must set the Parameters.N.ParameterKey parameter.
     * @example AliyunROSStackGroupAdministrationRole
     *
     * @var string
     */
    public $administrationRoleName;

    /**
     * @description The IDs of the folders in the resource directory. You can specify up to five folder IDs.
     *
     * You can create stacks within all members in the specified folders. If you create stacks in the Root folder, the stacks are created within all members in the resource directory.
     *
     * >  To view the folder IDs, go to the **Overview** page in the **Resource Management** console. For more information, see [View the basic information of a folder](~~111223~~).
     * @example {"Enabled": true, "RetainStacksOnAccountRemoval": true}
     *
     * @var string
     */
    public $autoDeploymentShrink;

    /**
     * @description The option for the stack group. You can specify up to one option.
     *
     * @var string[]
     */
    public $capabilities;

    /**
     * @description The ID of the template. This parameter applies to shared and private templates.
     *
     * >  You must specify only one of the TemplateBody, TemplateURL, and TemplateId parameters.
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The ID of the request.
     *
     * @example {"RdFolderIds": ["fd-4PvlVLOL8v"]}
     *
     * @var string
     */
    public $deploymentTargetsShrink;

    /**
     * @description The structure that contains the template body. The template body must be 1 to 524,288 bytes in length. If the length of the template body exceeds the upper limit, we recommend that you add parameters to the HTTP POST request body to prevent request failures caused by excessively long URLs.
     *
     * >  You must specify only one of the TemplateBody, TemplateURL, and TemplateId parameters.
     * @example My Stack Group
     *
     * @var string
     */
    public $description;

    /**
     * @description The value of parameter N.
     *
     * >  The Parameters parameter is optional. If you set the Parameters parameter, you must set the Parameters.N.ParameterValue parameter.
     * @example AliyunROSStackGroupExecutionRole
     *
     * @var string
     */
    public $executionRoleName;

    /**
     * @description The version of the template. If you do not specify a version, the latest version is used.
     *
     * >  This parameter takes effect only if the TemplateId parameter is set.
     * @example Update stack instances in hangzhou
     *
     * @var string
     */
    public $operationDescription;

    /**
     * @description The list of parameters.
     *
     * @example {"FailureToleranceCount": 1,"MaxConcurrentCount": 2}
     *
     * @var string
     */
    public $operationPreferencesShrink;

    /**
     * @description Specifies whether to enable automatic deployment.
     *
     * Valid values:
     *
     *   true: enables automatic deployment. If you add a member to the folder to which the stack group belongs after you enable automatic deployment, the stack group deploys its stack instances within the member. If you remove a member from the folder, the stack group deletes stack instances that are deployed within the member.
     *   false: disables automatic deployment. After you disable automatic deployment, the stack instances remain unchanged even if members in the folder change.
     *
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description The folder IDs in the resource directory. You can specify a maximum of five folder IDs.
     *
     * You must set at least one of the RdFolderIds and AccountIds parameters. The parameters are subject to the following items:
     *
     *   If you set only the RdFolderIds parameter, stacks are deployed within all the members in the specified folders. If you specify the Root folder, ROS deploys the stacks within all the members in the resource directory.
     *   If you set only the AccountIds parameter, stacks are deployed within the specified members.
     *   If you set both parameters, the accounts specified by AccountIds must be contained in the folders specified by RdFolderIds.
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
     * @description The description of the operation to update the stack group.
     *
     * @example ["cn-hangzhou", "cn-beijing"]
     *
     * @var string
     */
    public $regionIdsShrink;

    /**
     * @description The region IDs of stack instances. You can specify a maximum of 20 region IDs.
     *
     * @example MyStackGroup
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @description The name of the RAM role to be assumed by the administrator account in ROS. This parameter is required if you want to grant self-managed permissions to the stack group. If you do not specify a value for this parameter, the default value AliyunROSStackGroupAdministrationRole is used. You can use the administrator role in ROS to assume the execution role AliyunROSStackGroupExecutionRole to perform operations on the stacks that correspond to stack instances in the stack group.
     *
     * The name must be 1 to 64 characters in length, and can contain letters, digits, and hyphens (-).
     * @example {"ROSTemplateFormatVersion": "2015-09-01"}
     *
     * @var string
     */
    public $templateBody;

    /**
     * @description The permission model.
     *
     * Valid values:
     *
     *   SELF_MANAGED: the self-managed permission model. This is the default value. If you use the self-managed model for the stack group, you must create RAM roles for the administrator and execution accounts, and establish a trust relationship between the accounts to deploy stacks within the execution account.
     *   SERVICE_MANAGED: the service-managed permission model. If you use the service-managed model for the stack group, ROS creates service-linked roles for the administrator and execution accounts, and the administrator account uses its role to deploy stacks within the execution account.
     *
     * >- If you want to use the service-managed permission model to deploy stacks, your account must be the management account or a delegated administrator account of your resource directory and the trusted access feature is enabled for the account. For more information, see [Step 1: (Optional) Create a delegated administrator account](~~308253~~) and [Step 2: Enable trusted access](~~298229~~).
     * @example 5ecd1e10-b0e9-4389-a565-e4c15efc****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The name of the RAM role to be assumed by the administrator role AliyunROSStackGroupAdministrationRole. This parameter is required if you want to grant self-managed permissions to the stack group. If you do not specify a value for this parameter, the default value AliyunROSStackGroupExecutionRole is used. You can use this role in ROS to perform operations on the stacks that correspond to stack instances in the stack group.
     *
     * The name must be 1 to 64 characters in length, and can contain letters, digits, and hyphens (-).
     * @example oss://ros-template/demo
     *
     * @var string
     */
    public $templateURL;

    /**
     * @description The information about automatic deployment settings.
     *
     * >  This parameter is required only if the PermissionModel parameter is set to SERVICE_MANAGED.
     * @example v1
     *
     * @var string
     */
    public $templateVersion;
    protected $_name = [
        'accountIdsShrink'           => 'AccountIds',
        'administrationRoleName'     => 'AdministrationRoleName',
        'autoDeploymentShrink'       => 'AutoDeployment',
        'capabilities'               => 'Capabilities',
        'clientToken'                => 'ClientToken',
        'deploymentTargetsShrink'    => 'DeploymentTargets',
        'description'                => 'Description',
        'executionRoleName'          => 'ExecutionRoleName',
        'operationDescription'       => 'OperationDescription',
        'operationPreferencesShrink' => 'OperationPreferences',
        'parameters'                 => 'Parameters',
        'permissionModel'            => 'PermissionModel',
        'regionId'                   => 'RegionId',
        'regionIdsShrink'            => 'RegionIds',
        'stackGroupName'             => 'StackGroupName',
        'templateBody'               => 'TemplateBody',
        'templateId'                 => 'TemplateId',
        'templateURL'                => 'TemplateURL',
        'templateVersion'            => 'TemplateVersion',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountIdsShrink) {
            $res['AccountIds'] = $this->accountIdsShrink;
        }
        if (null !== $this->administrationRoleName) {
            $res['AdministrationRoleName'] = $this->administrationRoleName;
        }
        if (null !== $this->autoDeploymentShrink) {
            $res['AutoDeployment'] = $this->autoDeploymentShrink;
        }
        if (null !== $this->capabilities) {
            $res['Capabilities'] = $this->capabilities;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->deploymentTargetsShrink) {
            $res['DeploymentTargets'] = $this->deploymentTargetsShrink;
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
        if (null !== $this->operationPreferencesShrink) {
            $res['OperationPreferences'] = $this->operationPreferencesShrink;
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
        if (null !== $this->regionIdsShrink) {
            $res['RegionIds'] = $this->regionIdsShrink;
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
     * @return UpdateStackGroupShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountIds'])) {
            $model->accountIdsShrink = $map['AccountIds'];
        }
        if (isset($map['AdministrationRoleName'])) {
            $model->administrationRoleName = $map['AdministrationRoleName'];
        }
        if (isset($map['AutoDeployment'])) {
            $model->autoDeploymentShrink = $map['AutoDeployment'];
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
            $model->deploymentTargetsShrink = $map['DeploymentTargets'];
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
            $model->operationPreferencesShrink = $map['OperationPreferences'];
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
            $model->regionIdsShrink = $map['RegionIds'];
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
