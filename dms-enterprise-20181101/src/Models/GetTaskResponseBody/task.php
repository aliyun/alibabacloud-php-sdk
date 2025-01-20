<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\GetTaskResponseBody;

use AlibabaCloud\Dara\Model;

class task extends Model
{
    /**
     * @var int
     */
    public $dagId;
    /**
     * @var string
     */
    public $graphParam;
    /**
     * @var string
     */
    public $nodeConfig;
    /**
     * @var string
     */
    public $nodeContent;
    /**
     * @var string
     */
    public $nodeName;
    /**
     * @var string
     */
    public $nodeOutput;
    /**
     * @var string
     */
    public $nodeType;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
