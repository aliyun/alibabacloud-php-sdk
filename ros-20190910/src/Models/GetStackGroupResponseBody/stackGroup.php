<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponseBody\stackGroup\autoDeployment;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponseBody\stackGroup\parameters;
use AlibabaCloud\SDK\ROS\V20190910\Models\GetStackGroupResponseBody\stackGroup\stackGroupDriftDetectionDetail;

class stackGroup extends Model
{
    /**
     * @var string
     */
    public $administrationRoleName;

    /**
     * @var autoDeployment
     */
    public $autoDeployment;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $executionRoleName;

    /**
     * @var parameters[]
     */
    public $parameters;

    /**
     * @var string
     */
    public $permissionModel;

    /**
     * @var string[]
     */
    public $rdFolderIds;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var stackGroupDriftDetectionDetail
     */
    public $stackGroupDriftDetectionDetail;

    /**
     * @var string
     */
    public $stackGroupId;

    /**
     * @var string
     */
    public $stackGroupName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateBody;

    /**
     * @var string
     */
    public $templateContent;

    /**
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'administrationRoleName' => 'AdministrationRoleName',
        'autoDeployment' => 'AutoDeployment',
        'createTime' => 'CreateTime',
        'description' => 'Description',
        'executionRoleName' => 'ExecutionRoleName',
        'parameters' => 'Parameters',
        'permissionModel' => 'PermissionModel',
        'rdFolderIds' => 'RdFolderIds',
        'resourceGroupId' => 'ResourceGroupId',
        'stackGroupDriftDetectionDetail' => 'StackGroupDriftDetectionDetail',
        'stackGroupId' => 'StackGroupId',
        'stackGroupName' => 'StackGroupName',
        'status' => 'Status',
        'templateBody' => 'TemplateBody',
        'templateContent' => 'TemplateContent',
        'updateTime' => 'UpdateTime',
    ];

    public function validate()
    {
        if (null !== $this->autoDeployment) {
            $this->autoDeployment->validate();
        }
        if (\is_array($this->parameters)) {
            Model::validateArray($this->parameters);
        }
        if (\is_array($this->rdFolderIds)) {
            Model::validateArray($this->rdFolderIds);
        }
        if (null !== $this->stackGroupDriftDetectionDetail) {
            $this->stackGroupDriftDetectionDetail->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->administrationRoleName) {
            $res['AdministrationRoleName'] = $this->administrationRoleName;
        }

        if (null !== $this->autoDeployment) {
            $res['AutoDeployment'] = null !== $this->autoDeployment ? $this->autoDeployment->toArray($noStream) : $this->autoDeployment;
        }

        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->executionRoleName) {
            $res['ExecutionRoleName'] = $this->executionRoleName;
        }

        if (null !== $this->parameters) {
            if (\is_array($this->parameters)) {
                $res['Parameters'] = [];
                $n1 = 0;
                foreach ($this->parameters as $item1) {
                    $res['Parameters'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->permissionModel) {
            $res['PermissionModel'] = $this->permissionModel;
        }

        if (null !== $this->rdFolderIds) {
            if (\is_array($this->rdFolderIds)) {
                $res['RdFolderIds'] = [];
                $n1 = 0;
                foreach ($this->rdFolderIds as $item1) {
                    $res['RdFolderIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }

        if (null !== $this->stackGroupDriftDetectionDetail) {
            $res['StackGroupDriftDetectionDetail'] = null !== $this->stackGroupDriftDetectionDetail ? $this->stackGroupDriftDetectionDetail->toArray($noStream) : $this->stackGroupDriftDetectionDetail;
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

        if (null !== $this->templateContent) {
            $res['TemplateContent'] = $this->templateContent;
        }

        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
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
        if (isset($map['AdministrationRoleName'])) {
            $model->administrationRoleName = $map['AdministrationRoleName'];
        }

        if (isset($map['AutoDeployment'])) {
            $model->autoDeployment = autoDeployment::fromMap($map['AutoDeployment']);
        }

        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
                $n1 = 0;
                foreach ($map['Parameters'] as $item1) {
                    $model->parameters[$n1] = parameters::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['PermissionModel'])) {
            $model->permissionModel = $map['PermissionModel'];
        }

        if (isset($map['RdFolderIds'])) {
            if (!empty($map['RdFolderIds'])) {
                $model->rdFolderIds = [];
                $n1 = 0;
                foreach ($map['RdFolderIds'] as $item1) {
                    $model->rdFolderIds[$n1] = $item1;
                    ++$n1;
                }
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

        if (isset($map['TemplateContent'])) {
            $model->templateContent = $map['TemplateContent'];
        }

        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
