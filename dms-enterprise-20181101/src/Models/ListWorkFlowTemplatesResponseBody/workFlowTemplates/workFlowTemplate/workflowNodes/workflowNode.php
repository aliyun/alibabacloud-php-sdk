<?php

declare(strict_types=1);

/*
 * This file is part of PHP CS Fixer.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *     Dariusz Rumiński <dariusz.ruminski@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowTemplatesResponseBody\workFlowTemplates\workFlowTemplate\workflowNodes;

use AlibabaCloud\Tea\Model;

class workflowNode extends Model
{
    /**
     * @description The description of the approval node.
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
     * @description The ID of the approval node.
     *
     * @example 123
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The name of the approval node.
     *
     * @example test
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The type of the approval node. Valid values:
     *
     *   SYS: The approval node is predefined by the system.
     *   USER_LIST: The approval node is created by a user.
     *
     * @example SYS
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The position of the approval node.
     *
     * @example 1
     *
     * @var int
     */
    public $position;

    /**
     * @description The ID of the template.
     *
     * @example 12345
     *
     * @var int
     */
    public $templateId;
    protected $_name = [
        'comment' => 'Comment',
        'createUserId' => 'CreateUserId',
        'nodeId' => 'NodeId',
        'nodeName' => 'NodeName',
        'nodeType' => 'NodeType',
        'position' => 'Position',
        'templateId' => 'TemplateId',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->position) {
            $res['Position'] = $this->position;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['Position'])) {
            $model->position = $map['Position'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
