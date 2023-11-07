<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskFlowGraphResponseBody\taskFlowGraph\nodes;

use AlibabaCloud\Tea\Model;

class node extends Model
{
    /**
     * @description The ID of the task flow.
     *
     * @example 15***
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The position of the node in the DAG.
     *
     * @example {\"x\":541,\"y\":322,\"layoutType\":\"Horizontal\"}
     *
     * @var string
     */
    public $graphParam;

    /**
     * @description The advanced configuration of the node.
     *
     * @example {\"dbId\":39****,\"dbType\":\"mysql\",\"locale\":\"zh\",\"sql\":\"/*XXXXX*\/\\n\\nCREATE TABLE IF NOT EXISTS `momo_weekGather` (\\n\\t`id` bigint AUTO_INCREMENT DEFAULT \"0\",\\n\\t`age` bit NULL,\\n\\t`action` varchar(150) NULL,\\n\\t`elapse_time` datetime NULL,\\n\\tPRIMARY KEY (`id`)\\n) ENGINE=InnoDB\\nDEFAULT CHARACTER SET=utf8;\"}
     *
     * @var string
     */
    public $nodeConfig;

    /**
     * @description The configuration of the node.
     *
     * @example {ODI3OTNRVC****UHVFT29"}
     *
     * @var string
     */
    public $nodeContent;

    /**
     * @description The ID of the node.
     *
     * @example 44***
     *
     * @var int
     */
    public $nodeId;

    /**
     * @description The name of the node.
     *
     * @example test
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The type of the node. For more information about the valid values for this parameter, see [NodeType parameter](~~424705~~).
     *
     * @example 36
     *
     * @var int
     */
    public $nodeType;

    /**
     * @description The time variables for the node.
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
