<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateTaskRequest extends Model
{
    /**
     * @example 7***
     *
     * @var int
     */
    public $dagId;

    /**
     * @example test
     *
     * @var string
     */
    public $graphParam;

    /**
     * @example test
     *
     * @var string
     */
    public $nodeContent;

    /**
     * @example zhttest
     *
     * @var string
     */
    public $nodeName;

    /**
     * @example test
     *
     * @var string
     */
    public $nodeOutput;

    /**
     * @example 36
     *
     * @var string
     */
    public $nodeType;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @example test
     *
     * @var string
     */
    public $timeVariables;
    protected $_name = [
        'dagId'         => 'DagId',
        'graphParam'    => 'GraphParam',
        'nodeContent'   => 'NodeContent',
        'nodeName'      => 'NodeName',
        'nodeOutput'    => 'NodeOutput',
        'nodeType'      => 'NodeType',
        'tid'           => 'Tid',
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
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }
        if (null !== $this->timeVariables) {
            $res['TimeVariables'] = $this->timeVariables;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTaskRequest
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
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }
        if (isset($map['TimeVariables'])) {
            $model->timeVariables = $map['TimeVariables'];
        }

        return $model;
    }
}
