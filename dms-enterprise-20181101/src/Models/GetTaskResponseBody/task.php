<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskResponseBody;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @example 7321
     *
     * @var int
     */
    public $dagId;

    /**
     * @example {"{\"x\":0,\"y\":0,\"layoutType\":\"Horizontal\"}",  "id": 51***}
     *
     * @var string
     */
    public $graphParam;

    /**
     * @var string
     */
    public $nodeConfig;

    /**
     * @example {\"dbList\":[{\"instanceId\":177****}"   }
     *
     * @var string
     */
    public $nodeContent;

    /**
     * @var string
     */
    public $nodeName;

    /**
     * @example { "outputs":[ "extractMethod":"json" , "variableName":"var",   "description":"demo desc" } ] }
     *
     * @var string
     */
    public $nodeOutput;

    /**
     * @example SPARK_SQL
     *
     * @var string
     */
    public $nodeType;

    /**
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
