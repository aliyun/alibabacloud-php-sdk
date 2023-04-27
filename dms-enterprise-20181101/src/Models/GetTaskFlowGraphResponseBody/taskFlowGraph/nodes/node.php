<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskFlowGraphResponseBody\taskFlowGraph\nodes;

use AlibabaCloud\Tea\Model;

class node extends Model
{
    /**
     * @description The name of the node.
     *
     * @example 15***
     *
     * @var int
     */
    public $dagId;

    /**
     * @example {\"x\":541,\"y\":322,\"layoutType\":\"Horizontal\"}
     *
     * @var string
     */
    public $graphParam;

    /**
     * @var string
     */
    public $nodeConfig;

    /**
     * @description The ID of the request.
     *
     * @example {ODI3OTNRVC****UHVFT29"}
     *
     * @var string
     */
    public $nodeContent;

    /**
     * @description The type of the node. For more information about the valid values for this parameter, see [NodeType parameter](~~424705~~).
     *
     * @example 44***
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The position of the node in the DAG.
     *
     * @example test
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The list of DAG variables of the task flow.
     *
     * @example 36
     *
     * @var int
     */
    public $nodeType;

    /**
     * @description Queries the Directed Acyclic Graph (DAG) of a task flow.
     *
     * @example {\"variables\":[{\"name\":\"Today\",\"pattern\":\"yyyy-MM-dd|+1d\"}]}
     *
     * @var string
     */
    public $timeVariables;
    protected $_name = [
        'dagId'         => 'DagId',
        'graphParam'    => 'GraphParam',
        'nodeConfig'    => 'NodeConfig',
        'nodeContent'   => 'NodeContent',
        'nodeId'        => 'NodeId',
        'nodeName'      => 'NodeName',
        'nodeType'      => 'NodeType',
        'timeVariables' => 'TimeVariables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dagId) {
            $res['DagId'] = $this->dagId;
        }
        if (null !== $this->graphParam) {
            $res['GraphParam'] = $this->graphParam;
        }
        if (null !== $this->nodeConfig) {
            $res['NodeConfig'] = $this->nodeConfig;
        }
        if (null !== $this->nodeContent) {
            $res['NodeContent'] = $this->nodeContent;
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
        if (null !== $this->timeVariables) {
            $res['TimeVariables'] = $this->timeVariables;
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
        if (isset($map['DagId'])) {
            $model->dagId = $map['DagId'];
        }
        if (isset($map['GraphParam'])) {
            $model->graphParam = $map['GraphParam'];
        }
        if (isset($map['NodeConfig'])) {
            $model->nodeConfig = $map['NodeConfig'];
        }
        if (isset($map['NodeContent'])) {
            $model->nodeContent = $map['NodeContent'];
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
        if (isset($map['TimeVariables'])) {
            $model->timeVariables = $map['TimeVariables'];
        }

        return $model;
    }
}
