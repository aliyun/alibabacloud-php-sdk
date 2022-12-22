<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class GetFlowResponseBody extends Model
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
     * @description The version ID of the workflow.
     *
     * @example 1
     *
     * @var string
     */
    public $currentVersionId;

    /**
     * @description The definition of the workflow.
     *
     * @example {\"schemaVersion\":\"2018-12-12\",\"actions\":{},\"version\":\"1.0.0\",\"triggers\":{}}
     *
     * @var string
     */
    public $definition;

    /**
     * @description The description of the workflow.
     *
     * @example This is a workflow.
     *
     * @var string
     */
    public $flowDescription;

    /**
     * @description The edit mode of the workflow.
     *
     * @example Locked
     *
     * @var string
     */
    public $flowEditMode;

    /**
     * @description The ID of the workflow.
     *
     * @example lc-uf6pvud38xl0ia
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
     * @example CloudConfig
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
     * @description The ID of the region where the workflow resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the request.
     *
     * @example ADB97A33-50E7-48A5-963D-ACBAE36D0BEC
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmzyxxxxxxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The template ID.
     *
     * @example tp-uf6tbvhheciyxl
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
    protected $_name = [
        'createTime'       => 'CreateTime',
        'currentVersionId' => 'CurrentVersionId',
        'definition'       => 'Definition',
        'flowDescription'  => 'FlowDescription',
        'flowEditMode'     => 'FlowEditMode',
        'flowId'           => 'FlowId',
        'flowName'         => 'FlowName',
        'flowSource'       => 'FlowSource',
        'flowStatus'       => 'FlowStatus',
        'regionId'         => 'RegionId',
        'requestId'        => 'RequestId',
        'resourceGroupId'  => 'ResourceGroupId',
        'templateId'       => 'TemplateId',
        'updateTime'       => 'UpdateTime',
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
        if (null !== $this->currentVersionId) {
            $res['CurrentVersionId'] = $this->currentVersionId;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetFlowResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['CurrentVersionId'])) {
            $model->currentVersionId = $map['CurrentVersionId'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
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

        return $model;
    }
}
