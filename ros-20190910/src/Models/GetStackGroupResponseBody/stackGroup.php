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
     * @var string
     */
    public $stackGroupId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $administrationRoleName;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $stackGroupName;

    /**
     * @var string
     */
    public $executionRoleName;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @var stackGroupDriftDetectionDetail
     */
    public $stackGroupDriftDetectionDetail;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $permissionModel;

    /**
     * @var autoDeployment
     */
    public $autoDeployment;

    /**
     * @var string[]
     */
    public $rdFolderIds;
    protected $_name = [
        'stackGroupId'                   => 'StackGroupId',
        'status'                         => 'Status',
        'administrationRoleName'         => 'AdministrationRoleName',
        'parameters'                     => 'Parameters',
        'description'                    => 'Description',
        'stackGroupName'                 => 'StackGroupName',
        'executionRoleName'              => 'ExecutionRoleName',
        'templateBody'                   => 'TemplateBody',
        'stackGroupDriftDetectionDetail' => 'StackGroupDriftDetectionDetail',
        'resourceGroupId'                => 'ResourceGroupId',
        'permissionModel'                => 'PermissionModel',
        'autoDeployment'                 => 'AutoDeployment',
        'rdFolderIds'                    => 'RdFolderIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->stackGroupId) {
            $res['StackGroupId'] = $this->stackGroupId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->administrationRoleName) {
            $res['AdministrationRoleName'] = $this->administrationRoleName;
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
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->stackGroupName) {
            $res['StackGroupName'] = $this->stackGroupName;
        }
        if (null !== $this->executionRoleName) {
            $res['ExecutionRoleName'] = $this->executionRoleName;
        }
        if (null !== $this->templateBody) {
            $res['TemplateBody'] = $this->templateBody;
        }
        if (null !== $this->stackGroupDriftDetectionDetail) {
            $res['StackGroupDriftDetectionDetail'] = null !== $this->stackGroupDriftDetectionDetail ? $this->stackGroupDriftDetectionDetail->toMap() : null;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->permissionModel) {
            $res['PermissionModel'] = $this->permissionModel;
        }
        if (null !== $this->autoDeployment) {
            $res['AutoDeployment'] = null !== $this->autoDeployment ? $this->autoDeployment->toMap() : null;
        }
        if (null !== $this->rdFolderIds) {
            $res['RdFolderIds'] = $this->rdFolderIds;
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
        if (isset($map['StackGroupId'])) {
            $model->stackGroupId = $map['StackGroupId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['AdministrationRoleName'])) {
            $model->administrationRoleName = $map['AdministrationRoleName'];
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
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['StackGroupName'])) {
            $model->stackGroupName = $map['StackGroupName'];
        }
        if (isset($map['ExecutionRoleName'])) {
            $model->executionRoleName = $map['ExecutionRoleName'];
        }
        if (isset($map['TemplateBody'])) {
            $model->templateBody = $map['TemplateBody'];
        }
        if (isset($map['StackGroupDriftDetectionDetail'])) {
            $model->stackGroupDriftDetectionDetail = stackGroupDriftDetectionDetail::fromMap($map['StackGroupDriftDetectionDetail']);
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['PermissionModel'])) {
            $model->permissionModel = $map['PermissionModel'];
        }
        if (isset($map['AutoDeployment'])) {
            $model->autoDeployment = autoDeployment::fromMap($map['AutoDeployment']);
        }
        if (isset($map['RdFolderIds'])) {
            if (!empty($map['RdFolderIds'])) {
                $model->rdFolderIds = $map['RdFolderIds'];
            }
        }

        return $model;
    }
}
