<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowTemplatesResponseBody\workFlowTemplates\workFlowTemplate\workflowNodes;

use AlibabaCloud\Tea\Model;

class workflowNode extends Model
{
    /**
     * @var string
     */
    public $comment;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var int
     */
    public $position;

    /**
     * @var int
     */
    public $createUserId;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var int
     */
    public $nodeId;
    protected $_name = [
        'comment'      => 'Comment',
        'nodeType'     => 'NodeType',
        'nodeName'     => 'NodeName',
        'position'     => 'Position',
        'createUserId' => 'CreateUserId',
        'templateId'   => 'TemplateId',
        'nodeId'       => 'NodeId',
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
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return workflowNode
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
