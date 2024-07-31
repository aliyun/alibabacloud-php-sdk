<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class CreateManualDagRequest extends Model
{
    /**
     * @description The data timestamp. The value of the data timestamp must be one or more days before the current date. For example, if the current date is November 11, 2020, set the value to 2020-11-10 00:00:00 or earlier. Configure this parameter in the YYYY-MM-DD 00:00:00 format.
     *
     * This parameter is required.
     * @example 2020-11-11 00:00:00
     *
     * @var string
     */
    public $bizDate;

    /**
     * @description The parameters of the manually triggered workflow, which are synchronized to all the instances in the directed acyclic graph (DAG) of the workflow. If a workflow parameter specified in DagParameters is referenced as a scheduling parameter of a node, the value of the scheduling parameter is replaced with the value of the workflow parameter.
     *
     * @example {"kaaaa": "vaaaaa", "kbbbb": "vbbbbb"}
     *
     * @var string
     */
    public $dagParameters;

    /**
     * @description The IDs of the nodes that do not need to be run.
     *
     * @example 123,456
     *
     * @var string
     */
    public $excludeNodeIds;

    /**
     * @description The name of the manually triggered workflow.
     *
     * This parameter is required.
     * @example test_workflow
     *
     * @var string
     */
    public $flowName;

    /**
     * @description The IDs of the nodes that you want to run.
     *
     * @example 74324,74325
     *
     * @var string
     */
    public $includeNodeIds;

    /**
     * @description The parameters transmitted between nodes in the manually triggered workflow. The parameters are in the following JSON format: `{ "<ID of a node in the manually triggered workflow>": "Scheduling parameter settings of the node, which are in the same format as the parameters in the Scheduling Parameter section on the Properties tab of the DataStudio page", "<ID of a node in the manually triggered workflow>": "Scheduling parameter settings of the node, which are in the same format as the parameters in the Scheduling Parameter section on the Properties tab of the DataStudio page" }`
     *
     * @example {"20000123121": "key1=val2 key2=val2", "20000123124": "kkkk=vvvvv aaaa=bbbb"}
     *
     * @var string
     */
    public $nodeParameters;

    /**
     * @description The environment type of Operation Center. Valid values: PROD and DEV.
     *
     * This parameter is required.
     * @var string
     */
    public $projectEnv;

    /**
     * @description The name of the workspace to which the manually triggered workflow belongs.
     *
     * This parameter is required.
     * @example test_workspace
     *
     * @var string
     */
    public $projectName;
    protected $_name = [
        'bizDate'        => 'BizDate',
        'dagParameters'  => 'DagParameters',
        'excludeNodeIds' => 'ExcludeNodeIds',
        'flowName'       => 'FlowName',
        'includeNodeIds' => 'IncludeNodeIds',
        'nodeParameters' => 'NodeParameters',
        'projectEnv'     => 'ProjectEnv',
        'projectName'    => 'ProjectName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizDate) {
            $res['BizDate'] = $this->bizDate;
        }
        if (null !== $this->dagParameters) {
            $res['DagParameters'] = $this->dagParameters;
        }
        if (null !== $this->excludeNodeIds) {
            $res['ExcludeNodeIds'] = $this->excludeNodeIds;
        }
        if (null !== $this->flowName) {
            $res['FlowName'] = $this->flowName;
        }
        if (null !== $this->includeNodeIds) {
            $res['IncludeNodeIds'] = $this->includeNodeIds;
        }
        if (null !== $this->nodeParameters) {
            $res['NodeParameters'] = $this->nodeParameters;
        }
        if (null !== $this->projectEnv) {
            $res['ProjectEnv'] = $this->projectEnv;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateManualDagRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizDate'])) {
            $model->bizDate = $map['BizDate'];
        }
        if (isset($map['DagParameters'])) {
            $model->dagParameters = $map['DagParameters'];
        }
        if (isset($map['ExcludeNodeIds'])) {
            $model->excludeNodeIds = $map['ExcludeNodeIds'];
        }
        if (isset($map['FlowName'])) {
            $model->flowName = $map['FlowName'];
        }
        if (isset($map['IncludeNodeIds'])) {
            $model->includeNodeIds = $map['IncludeNodeIds'];
        }
        if (isset($map['NodeParameters'])) {
            $model->nodeParameters = $map['NodeParameters'];
        }
        if (isset($map['ProjectEnv'])) {
            $model->projectEnv = $map['ProjectEnv'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }

        return $model;
    }
}
