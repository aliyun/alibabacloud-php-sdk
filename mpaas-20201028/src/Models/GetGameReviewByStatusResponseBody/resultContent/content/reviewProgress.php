<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\MPaaS\V20201028\Models\GetGameReviewByStatusResponseBody\resultContent\content;

use AlibabaCloud\Dara\Model;

class reviewProgress extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var int
     */
    public $flowNodeId;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var int
     */
    public $nodeIndex;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @var string
     */
    public $nodeStatus;

    /**
     * @var int
     */
    public $nodeStatusId;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $remark;

    /**
     * @var int
     */
    public $roleId;
    protected $_name = [
        'description' => 'Description',
        'flowNodeId' => 'FlowNodeId',
        'gmtModified' => 'GmtModified',
        'nodeIndex' => 'NodeIndex',
        'nodeName' => 'NodeName',
        'nodeStatus' => 'NodeStatus',
        'nodeStatusId' => 'NodeStatusId',
        'operator' => 'Operator',
        'remark' => 'Remark',
        'roleId' => 'RoleId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->flowNodeId) {
            $res['FlowNodeId'] = $this->flowNodeId;
        }

        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }

        if (null !== $this->nodeIndex) {
            $res['NodeIndex'] = $this->nodeIndex;
        }

        if (null !== $this->nodeName) {
            $res['NodeName'] = $this->nodeName;
        }

        if (null !== $this->nodeStatus) {
            $res['NodeStatus'] = $this->nodeStatus;
        }

        if (null !== $this->nodeStatusId) {
            $res['NodeStatusId'] = $this->nodeStatusId;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->remark) {
            $res['Remark'] = $this->remark;
        }

        if (null !== $this->roleId) {
            $res['RoleId'] = $this->roleId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['FlowNodeId'])) {
            $model->flowNodeId = $map['FlowNodeId'];
        }

        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }

        if (isset($map['NodeIndex'])) {
            $model->nodeIndex = $map['NodeIndex'];
        }

        if (isset($map['NodeName'])) {
            $model->nodeName = $map['NodeName'];
        }

        if (isset($map['NodeStatus'])) {
            $model->nodeStatus = $map['NodeStatus'];
        }

        if (isset($map['NodeStatusId'])) {
            $model->nodeStatusId = $map['NodeStatusId'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['Remark'])) {
            $model->remark = $map['Remark'];
        }

        if (isset($map['RoleId'])) {
            $model->roleId = $map['RoleId'];
        }

        return $model;
    }
}
