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

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\PreviewWorkflowResponseBody\workflowDetail\workflowNodeList;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\PreviewWorkflowResponseBody\workflowDetail\workflowNodeList\workflowNode\auditUserList;
use AlibabaCloud\Tea\Model;

class workflowNode extends Model
{
    /**
     * @var auditUserList
     */
    public $auditUserList;

    /**
     * @var string
     */
    public $comment;

    /**
     * @example Owner
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example SYS
     *
     * @var string
     */
    public $nodeType;
    protected $_name = [
        'auditUserList' => 'AuditUserList',
        'comment' => 'Comment',
        'nodeName' => 'NodeName',
        'nodeType' => 'NodeType',
    ];

    public function validate(): void {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditUserList) {
            $res['AuditUserList'] = null !== $this->auditUserList ? $this->auditUserList->toMap() : null;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
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
        if (isset($map['AuditUserList'])) {
            $model->auditUserList = auditUserList::fromMap($map['AuditUserList']);
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }

        return $model;
    }
}
