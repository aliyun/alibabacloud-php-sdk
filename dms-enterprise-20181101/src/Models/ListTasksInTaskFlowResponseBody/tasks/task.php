<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\ListTasksInTaskFlowResponseBody\tasks;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @description The position of the node on the Directed Acyclic Graph (DAG).
     *
     * @example {\"x\":435,\"y\":192,\"layoutType\":\"Horizontal\"}
     *
     * @var string
     */
    public $graphParam;

    /**
     * @description The advanced configuration for the node.
     *
     * @example {     "rerun":{    "rerunEnable":true,      "rerunCount":1,   "rerunInterval":10 //  }}
     *
     * @var string
     */
    public $nodeConfig;

    /**
     * @description The configuration for the node.
     *
     * @example {     "dbId":123***,  "sql":"",    "dbType":"polardb" }
     *
     * @var string
     */
    public $nodeContent;

    /**
     * @description The ID of the node.
     *
     * @example 92***
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The name of the node.
     *
     * @example Cross-Database Spark SQL-1
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The output variables for the task.
     *
     * @example {  "outputs":[{ { "row":0, "column":-1,                  "combiner":"," }            "extractMethod":"{\"row\":0,\"column\":-1,\"combiner\":\",\"}",         "variableName":"var",    "description":"For demo"} ] }
     *
     * @var string
     */
    public $nodeOutput;

    /**
     * @description The type of the node. For more information about the valid values for this parameter, see [NodeType parameter](~~424705~~).
     *
     * @example SPARK_SQL
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The time variables configured for the node.
     *
     * @example {\"variables\":[{\"name\":\"test1\",\"pattern\":\"yyyy-MM-dd
     *
     * @var string
     */
    public $timeVariables;
    protected $_name = [
        'graphParam'    => 'GraphParam',
        'nodeConfig'    => 'NodeConfig',
        'nodeContent'   => 'NodeContent',
        'nodeId'        => 'NodeId',
        'nodeName'      => 'NodeName',
        'nodeOutput'    => 'NodeOutput',
        'nodeType'      => 'NodeType',
        'timeVariables' => 'TimeVariables',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->nodeOutput) {
            $res['NodeOutput'] = $this->nodeOutput;
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
     * @return task
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['NodeOutput'])) {
            $model->nodeOutput = $map['NodeOutput'];
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
