<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowNodesResponseBody\workflowNodes;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowNodesResponseBody\workflowNodes\workflowNode\auditUsers;
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
    public $createUserNickName;

    /**
     * @var string
     */
    public $nodeType;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var auditUsers
     */
    public $auditUsers;

    /**
     * @var int
     */
    public $createUserId;

    /**
     * @var int
     */
    public $nodeId;
    protected $_name = [
        'comment'            => 'Comment',
        'createUserNickName' => 'CreateUserNickName',
        'nodeType'           => 'NodeType',
        'nodeName'           => 'NodeName',
        'auditUsers'         => 'AuditUsers',
        'createUserId'       => 'CreateUserId',
        'nodeId'             => 'NodeId',
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
        if (null !== $this->createUserNickName) {
            $res['CreateUserNickName'] = $this->createUserNickName;
        }
        if (null !== $this->nodeType) {
            $res['NodeType'] = $this->nodeType;
        }
        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }
        if (null !== $this->auditUsers) {
            $res['AuditUsers'] = null !== $this->auditUsers ? $this->auditUsers->toMap() : null;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
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
        if (isset($map['CreateUserNickName'])) {
            $model->createUserNickName = $map['CreateUserNickName'];
        }
        if (isset($map['NodeType'])) {
            $model->nodeType = $map['NodeType'];
        }
        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }
        if (isset($map['AuditUsers'])) {
            $model->auditUsers = auditUsers::fromMap($map['AuditUsers']);
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }

        return $model;
    }
}
