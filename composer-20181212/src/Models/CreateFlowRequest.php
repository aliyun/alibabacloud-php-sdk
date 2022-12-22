<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Composer\V20181212\Models;

use AlibabaCloud\Tea\Model;

class CreateFlowRequest extends Model
{
    /**
     * @description The definition of the workflow, which must be a JSON string.
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
     * @description The name of the workflow.
     *
     * @example test
     *
     * @var string
     */
    public $flowName;

    /**
     * @description The source of the workflow. Valid values:
     *
     *   Default: Create the workflow in the console.
     *   CloudConfig: Create the workflow by using Cloud Config.
     *   Solution: Create the workflow by using Logic Composer.
     *
     * @example Default
     *
     * @var string
     */
    public $flowSource;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-aekzmrjn4nsszna
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The ID of the template.
     *
     * @example tp-uf6tbvhheciyxl
     *
     * @var string
     */
    public $templateId;
    protected $_name = [
        'definition'      => 'Definition',
        'flowDescription' => 'FlowDescription',
        'flowName'        => 'FlowName',
        'flowSource'      => 'FlowSource',
        'resourceGroupId' => 'ResourceGroupId',
        'templateId'      => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->flowDescription) {
            $res['FlowDescription'] = $this->flowDescription;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->flowSource) {
            $res['FlowSource'] = $this->flowSource;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFlowRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['FlowDescription'])) {
            $model->flowDescription = $map['FlowDescription'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['FlowSource'])) {
            $model->flowSource = $map['FlowSource'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
