<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models\ListFlowsResponseBody;

use AlibabaCloud\Tea\Model;

class flows extends Model
{
    /**
     * @description The time when the workflow was created.
     *
     * @example 2019-07-19T05:43:16.783Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the workflow.
     *
     * @example test flow
     *
     * @var string
     */
    public $flowDescription;

    /**
     * @description The edit mode of the workflow.
     *
     * @example Normal
     *
     * @var string
     */
    public $flowEditMode;

    /**
     * @description The ID of the workflow.
     *
     * @example lc-uf6axpwfcw4ubx
     *
     * @var string
     */
    public $flowId;

    /**
     * @description The name of the workflow.
     *
     * @example test
     *
     * @var string
     */
    public $flowName;

    /**
     * @description The source of the workflow.
     *
     * @example Solution
     *
     * @var string
     */
    public $flowSource;

    /**
     * @description The status of the workflow. Valid values:
     *
     *   **Enabled**: The workflow is enabled.
     *   **Disabled**: The workflow is disabled.
     *
     * @example Enabled
     *
     * @var string
     */
    public $flowStatus;

    /**
     * @description The region to which the workflow belongs.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-acfmzyxxxxxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The template ID. You can call the ListTemplates operation to obtain the template ID.
     *
     * @example tp-uf6lzhzywy28bs
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The time when the workflow was last updated.
     *
     * @example 2019-07-19T05:43:16.783Z
     *
     * @var string
     */
    public $updateTime;

    /**
     * @description The latest version of the workflow.
     *
     * @example 1
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'flowDescription' => 'FlowDescription',
        'flowEditMode'    => 'FlowEditMode',
        'flowId'          => 'FlowId',
        'flowName'        => 'FlowName',
        'flowSource'      => 'FlowSource',
        'flowStatus'      => 'FlowStatus',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'templateId'      => 'TemplateId',
        'updateTime'      => 'UpdateTime',
        'versionId'       => 'VersionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->flowDescription) {
            $res['FlowDescription'] = $this->flowDescription;
        }
        if (null !== $this->flowEditMode) {
            $res['FlowEditMode'] = $this->flowEditMode;
        }
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->flowSource) {
            $res['FlowSource'] = $this->flowSource;
        }
        if (null !== $this->flowStatus) {
            $res['FlowStatus'] = $this->flowStatus;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return flows
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['FlowDescription'])) {
            $model->flowDescription = $map['FlowDescription'];
        }
        if (isset($map['FlowEditMode'])) {
            $model->flowEditMode = $map['FlowEditMode'];
        }
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['FlowSource'])) {
            $model->flowSource = $map['FlowSource'];
        }
        if (isset($map['FlowStatus'])) {
            $model->flowStatus = $map['FlowStatus'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
