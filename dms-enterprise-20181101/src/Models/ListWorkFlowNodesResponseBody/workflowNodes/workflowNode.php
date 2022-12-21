<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowNodesResponseBody\workflowNodes;

use AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListWorkFlowNodesResponseBody\workflowNodes\workflowNode\auditUsers;
use AlibabaCloud\Tea\Model;

class workflowNode extends Model
{
    /**
     * @var auditUsers
     */
    public $auditUsers;

    /**
     * @example test
     *
     * @var string
     */
    public $comment;

    /**
     * @example 123
     *
     * @var int
     */
    public $createUserId;

    /**
     * @example test
     *
     * @var string
     */
    public $createUserNickName;

    /**
     * @example 123
     *
     * @var int
     */
    public $nodeId;

    /**
     * @example test
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
        'auditUsers'         => 'AuditUsers',
        'comment'            => 'Comment',
        'createUserId'       => 'CreateUserId',
        'createUserNickName' => 'CreateUserNickName',
        'nodeId'             => 'NodeId',
        'nodeName'           => 'NodeName',
        'nodeType'           => 'NodeType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->auditUsers) {
            $res['AuditUsers'] = null !== $this->auditUsers ? $this->auditUsers->toMap() : null;
        }
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->createUserId) {
            $res['CreateUserId'] = $this->createUserId;
        }
        if (null !== $this->createUserNickName) {
            $res['CreateUserNickName'] = $this->createUserNickName;
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
        if (isset($map['AuditUsers'])) {
            $model->auditUsers = auditUsers::fromMap($map['AuditUsers']);
        }
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['CreateUserId'])) {
            $model->createUserId = $map['CreateUserId'];
        }
        if (isset($map['CreateUserNickName'])) {
            $model->createUserNickName = $map['CreateUserNickName'];
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

        return $model;
    }
}
