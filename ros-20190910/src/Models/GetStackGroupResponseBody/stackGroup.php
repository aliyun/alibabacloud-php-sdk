<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponseBody;

use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponseBody\stackGroup\autoDeployment;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponseBody\stackGroup\parameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponseBody\stackGroup\stackGroupDriftDetectionDetail;
use AlibabaCloud\Tea\Model;

class stackGroup extends Model
{
    /**
     * @description The name of the RAM role that is specified for the administrator account in Resource Orchestration Service (ROS) when you create the self-managed stack group. If this parameter is not specified, the default value AliyunROSStackGroupAdministrationRole is returned.
     *
     * @example AliyunROSStackGroupAdministrationRole
     *
     * @var string
     */
    public $administrationRoleName;

    /**
     * @description The information about automatic deployment settings.
     *
     * >  This parameter is returned only when the PermissionModel parameter is set to SERVICE_MANAGED.
     * @var autoDeployment
     */
    public $autoDeployment;

    /**
     * @description The description of the stack group.
     *
     * @example StackGroup Description
     *
     * @var string
     */
    public $description;

    /**
     * @description The name of the RAM role that is specified for the execution account when you create the self-managed stack group. The administrator role AliyunROSStackGroupAdministrationRole assumes the execution role. If this parameter is not specified, the default value AliyunROSStackGroupExecutionRole is returned.
     *
     * @example AliyunROSStackGroupExecutionRole
     *
     * @var string
     */
    public $executionRoleName;

    /**
     * @description The parameters of the stack group.
     *
     * @var parameters[]
     */
    public $parameters;

    /**
     * @description The permission model.
     *
     * Valid values:
     *
     *   SELF_MANAGED: the self-managed permission model
     *   SERVICE_MANAGED: the service-managed permission model
     *
     * >  For more information about the permission models of stack groups, see [Overview](~~154578~~).
     * @example SELF_MANAGED
     *
     * @var string
     */
    public $permissionModel;

    /**
     * @description The folder IDs of the resource directory. This parameter is used to deploy stack instances within all the accounts in the folders.
     *
     * >  This parameter is returned only when the PermissionModel parameter is set to SERVICE_MANAGED.
     * @var string[]
     */
    public $rdFolderIds;

    /**
     * @description The ID of the resource group. This parameter is specified when you create the stack group.
     *
     * @example rg-acfmxazb4ph6aiy****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The details of the last drift detection that was performed on the stack group.
     *
     * @var stackGroupDriftDetectionDetail
     */
    public $stackGroupDriftDetectionDetail;

    /**
     * @description The ID of the stack group.
     *
     * @example fd0ddef9-9540-4b42-a464-94f77835****
     *
     * @var string
     */
    public $stackGroupId;

    /**
     * @description The name of the stack group.
     *
     * @example MyStackGroup
     *
     * @var string
     */
    public $stackGroupName;

    /**
     * @description The status of the stack group.
     *
     * Valid values:
     *
     *   ACTIVE
     *   DELETED
     *
     * @example ACTIVE
     *
     * @var string
     */
    public $status;

    /**
     * @description The template body.
     *
     * @example {"ROSTemplateFormatVersion": "2015-09-01"}
     *
     * @var string
     */
    public $templateBody;
    protected $_name = [
        'administrationRoleName'         => 'AdministrationRoleName',
        'autoDeployment'                 => 'AutoDeployment',
        'description'                    => 'Description',
        'executionRoleName'              => 'ExecutionRoleName',
        'parameters'                     => 'Parameters',
        'permissionModel'                => 'PermissionModel',
        'rdFolderIds'                    => 'RdFolderIds',
        'resourceGroupId'                => 'ResourceGroupId',
        'stackGroupDriftDetectionDetail' => 'StackGroupDriftDetectionDetail',
        'stackGroupId'                   => 'StackGroupId',
        'stackGroupName'                 => 'StackGroupName',
        'status'                         => 'Status',
        'templateBody'                   => 'TemplateBody',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->administrationRoleName) {
            $res['AdministrationRoleName'] = $this->administrationRoleName;
        }
        if (null !== $this->autoDeployment) {
            $res['AutoDeployment'] = null !== $this->autoDeployment ? $this->autoDeployment->toMap() : null;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->executionRoleName) {
            $res['ExecutionRoleName'] = $this->executionRoleName;
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
        if (null !== $this->rdFolderIds) {
            $res['RdFolderIds'] = $this->rdFolderIds;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->stackGroupDriftDetectionDetail) {
            $res['StackGroupDriftDetectionDetail'] = null !== $this->stackGroupDriftDetectionDetail ? $this->stackGroupDriftDetectionDetail->toMap() : null;
        }
        if (null !== $this->stackGroupId) {
            $res['StackGroupId'] = $this->stackGroupId;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return stackGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AdministrationRoleName'])) {
            $model->administrationRoleName = $map['AdministrationRoleName'];
        }
        if (isset($map['AutoDeployment'])) {
            $model->autoDeployment = autoDeployment::fromMap($map['AutoDeployment']);
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['ExecutionRoleName'])) {
            $model->executionRoleName = $map['ExecutionRoleName'];
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
        if (isset($map['RdFolderIds'])) {
            if (!empty($map['RdFolderIds'])) {
                $model->rdFolderIds = $map['RdFolderIds'];
            }
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['StackGroupDriftDetectionDetail'])) {
            $model->stackGroupDriftDetectionDetail = stackGroupDriftDetectionDetail::fromMap($map['StackGroupDriftDetectionDetail']);
        }
        if (isset($map['StackGroupId'])) {
            $model->stackGroupId = $map['StackGroupId'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }

        return $model;
    }
}
