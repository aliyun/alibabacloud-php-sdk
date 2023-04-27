<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskInstanceRelationResponseBody\nodeList;

use AlibabaCloud\Tea\Model;

class node extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 2021-11-09 14:37:26
     *
     * @var string
     */
    public $businessTime;

    /**
     * @example 2021-11-11 14:38:57
     *
     * @var string
     */
    public $endTime;

    /**
     * @example 170655
     *
     * @var int
     */
    public $executeTime;

    /**
     * @description The name of the node.
     *
     * @example 14059
     *
     * @var int
     */
    public $id;

    /**
     * @example test
     *
     * @var string
     */
    public $message;

    /**
     * @description The ID of the node.
     *
     * @example 14059
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The information about the nodes in the execution record of the task flow.
     *
     * @example Spark SQL-1
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The ID of the execution record of the task flow.
     *
     * @example 36
     *
     * @var int
     */
    public $nodeType;

    /**
     * @description The type of the node. For more information about the valid values for this parameter, see [NodeType parameter](~~424705~~).
     *
     * @example 4
     *
     * @var int
     */
    public $status;
    protected $_name = [
        'businessTime' => 'BusinessTime',
        'endTime'      => 'EndTime',
        'executeTime'  => 'ExecuteTime',
        'id'           => 'Id',
        'message'      => 'Message',
        'nodeId'       => 'NodeId',
        'nodeName'     => 'NodeName',
        'nodeType'     => 'NodeType',
        'status'       => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessTime) {
            $res['BusinessTime'] = $this->businessTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->executeTime) {
            $res['ExecuteTime'] = $this->executeTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return node
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessTime'])) {
            $model->businessTime = $map['BusinessTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['ExecuteTime'])) {
            $model->executeTime = $map['ExecuteTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
