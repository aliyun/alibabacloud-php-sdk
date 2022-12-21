<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowTemplatesResponseBody\workFlowTemplates;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowTemplatesResponseBody\workFlowTemplates\workFlowTemplate\workflowNodes;
use AlibabaCloud\Tea\Model;

class workFlowTemplate extends Model
{
    /**
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @example 1234
     *
     * @var int
     */
    public $createUserId;

    /**
     * @example Y
     *
     * @var string
     */
    public $enabled;

    /**
     * @example 1
     *
     * @var int
     */
    public $isSystem;

    /**
     * @example 12345
     *
     * @var int
     */
    public $templateId;

    /**
     * @example Admin
     *
     * @var string
     */
    public $templateName;

    /**
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
