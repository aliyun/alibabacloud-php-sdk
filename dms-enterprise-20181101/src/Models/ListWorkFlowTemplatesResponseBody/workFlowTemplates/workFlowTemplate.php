<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowTemplatesResponseBody\workFlowTemplates;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowTemplatesResponseBody\workFlowTemplates\workFlowTemplate\workflowNodes;
use AlibabaCloud\Tea\Model;

class workFlowTemplate extends Model
{
    /**
     * @description The description of the approval template.
     *
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @description The ID of the creator.
     *
     * @example 1234
     *
     * @var int
     */
    public $createUserId;

    /**
     * @description Indicates whether the approval template is enabled. Valid values:
     *
     *   Y: The approval template is enabled.
     *   N: The approval template is disabled.
     *
     * @example Y
     *
     * @var string
     */
    public $enabled;

    /**
     * @description Indicates whether the approval template is predefined by the system. Valid values:
     *
     *   1: The approval template is predefined by the system.
     *   0: The approval template is not predefined by the system.
     *
     * @example 1
     *
     * @var int
     */
    public $isSystem;

    /**
     * @description The ID of the approval template.
     *
     * @example 12345
     *
     * @var int
     */
    public $templateId;

    /**
     * @description The name of the approval template.
     *
     * @example Admin
     *
     * @var string
     */
    public $templateName;

    /**
     * @description The details of approval nodes.
     *
     * @var workflowNodes
     */
    public $workflowNodes;
    protected $_name = [
        'comment'       => 'Comment',
        'createUserId'  => 'CreateUserId',
        'enabled'       => 'Enabled',
        'isSystem'      => 'IsSystem',
        'templateId'    => 'TemplateId',
        'templateName'  => 'TemplateName',
        'workflowNodes' => 'WorkflowNodes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->isSystem) {
            $res['IsSystem'] = $this->isSystem;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->workflowNodes) {
            $res['WorkflowNodes'] = null !== $this->workflowNodes ? $this->workflowNodes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workFlowTemplate
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['IsSystem'])) {
            $model->isSystem = $map['IsSystem'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['WorkflowNodes'])) {
            $model->workflowNodes = workflowNodes::fromMap($map['WorkflowNodes']);
        }

        return $model;
    }
}
