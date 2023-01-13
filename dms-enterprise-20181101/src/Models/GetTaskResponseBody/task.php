<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskResponseBody;

use AlibabaCloud\Tea\Model;

class task extends Model
{
    /**
     * @description The ID of the task flow to which the node belongs.
     *
     * @example 7321
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The position of the node on the Directed Acyclic Graph (DAG).
     *
     * @example {"{\"x\":0,\"y\":0,\"layoutType\":\"Horizontal\"}",  "id": 51***}
     *
     * @var string
     */
    public $graphParam;

    /**
     * @description The advanced configuration for the node.
     *
     * @example {\\"dbId\\":39\*\*\*\*,\\"dbType\\":\\"mysql\\",\\"locale\\":\\"zh\\",\\"sql\\":\\"/\* Make sure that the following SQL statements meet your business requirements before submitting the SQL statements for execution. \*\/\\\n\\\nCREATE TABLE IF NOT EXISTS \`momo_weekGather\` (\\\n\\\t\`id\` bigint AUTO_INCREMENT DEFAULT \"0\",\\\n\\\t\`age\` bit NULL,\\\n\\\t\`action\` varchar(150) NULL,\\\n\\\t\`elapse_time\` datetime NULL,\\\n\\\tPRIMARY KEY (\`id\`)\\\n) ENGINE=InnoDB\\\nDEFAULT CHARACTER SET=utf8;\\"}
     *
     * @var string
     */
    public $nodeConfig;

    /**
     * @description The configuration for the node.
     *
     * @example {\"dbList\":[{\"instanceId\":177****}"   }
     *
     * @var string
     */
    public $nodeContent;

    /**
     * @description The name of the node.
     *
     * @example Cross-database Spark SQL-1
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The output variables for the node. This parameter is available only for some types of nodes.
     *
     * @example { "outputs":[ "extractMethod":"json" , "variableName":"var",   "description":"demo desc" } ] }
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
