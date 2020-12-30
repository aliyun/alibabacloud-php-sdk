<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowTemplatesResponseBody\workFlowTemplates;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowTemplatesResponseBody\workFlowTemplates\workFlowTemplate\workflowNodes;
use AlibabaCloud\Tea\Model;

class workFlowTemplate extends Model
{
    /**
     * @var int
     */
    public $isSystem;

    /**
     * @var workflowNodes
     */
    public $workflowNodes;

    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $enabled;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var int
     */
    public $createUserId;
    protected $_name = [
        'isSystem'      => 'IsSystem',
        'workflowNodes' => 'WorkflowNodes',
        'comment'       => 'Comment',
        'enabled'       => 'Enabled',
        'templateName'  => 'TemplateName',
        'templateId'    => 'TemplateId',
        'createUserId'  => 'CreateUserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isSystem) {
            $res['IsSystem'] = $this->isSystem;
        }
        if (null !== $this->workflowNodes) {
            $res['WorkflowNodes'] = null !== $this->workflowNodes ? $this->workflowNodes->toMap() : null;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->enabled) {
            $res['Enabled'] = $this->enabled;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
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
        if (isset($map['IsSystem'])) {
            $model->isSystem = $map['IsSystem'];
        }
        if (isset($map['WorkflowNodes'])) {
            $model->workflowNodes = workflowNodes::fromMap($map['WorkflowNodes']);
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Enabled'])) {
            $model->enabled = $map['Enabled'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }

        return $model;
    }
}
