<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class CreateTaskRequest extends Model
{
    /**
     * @description The ID of the task flow. You can call the [ListTaskFlow](https://help.aliyun.com/document_detail/424565.html) or [ListLhTaskFlowAndScenario](https://help.aliyun.com/document_detail/426672.html) operation to query the task flow ID.
     *
     * This parameter is required.
     * @example 7***
     *
     * @var int
     */
    public $dagId;

    /**
     * @description The position of the node on the Directed Acyclic Graph (DAG).
     *
     * @example test
     *
     * @var string
     */
    public $graphParam;

    /**
     * @description The configuration of the node.
     *
     * @example test
     *
     * @var string
     */
    public $nodeContent;

    /**
     * @description The name of the node that you want to create.
     *
     * This parameter is required.
     * @example zhttest
     *
     * @var string
     */
    public $nodeName;

    /**
     * @description The output variables configured for the task.
     *
     * @example test
     *
     * @var string
     */
    public $nodeOutput;

    /**
     * @description The type of the node that you want to create. For more information about the valid values for this parameter, see [NodeType parameter](https://help.aliyun.com/document_detail/424705.html).
     *
     * This parameter is required.
     * @example 36
     *
     * @var string
     */
    public $nodeType;

    /**
     * @description The tenant ID.
     *
     * >  To view the tenant ID, move the pointer over the profile picture in the upper-right corner of the Data Management (DMS) console. For more information, see the "View information about the current tenant" section of the [Manage DMS tenants](https://help.aliyun.com/document_detail/181330.html) topic.
     * @example 3***
     *
     * @var int
     */
    public $tid;

    /**
     * @description The time variables configured for the node.
     *
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
