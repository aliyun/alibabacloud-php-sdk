<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class RunManualDagNodesRequest extends Model
{
    /**
     * @description The data timestamp. The value of the data timestamp must be one or more days before the current date. For example, if the current date is November 11, 2020, set the value to 2020-11-10 00:00:00 or earlier. Configure this parameter in the YYYY-MM-DD 00:00:00 format. The StartBizDate parameter is used together with the EndBizDate parameter. You can configure only the BizDate parameter or the StartBizDate and EndBizDate parameters.
     *
     * @example 2020-11-11 00:00:00
     *
     * @var string
     */
    public $bizDate;

    /**
     * @description The parameters are synchronized to all the instances in the directed acyclic graph (DAG) of the workflow. If a workflow parameter specified in DagParameters is referenced as a scheduling parameter of a [node](https://help.aliyun.com/document_detail/147245.html), the value of the scheduling parameter is replaced with the value of the workflow parameter.
     *
     * @example {"kaaaa": "vaaaaa", "kbbbb": "vbbbbb"}
     *
     * @var string
     */
    public $dagParameters;

    /**
     * @description The end of the time range in which data generated needs to be processed. Configure this parameter in the yyyy-MM-dd HH:mm:ss format. The StartBizDate parameter is used together with the EndBizDate parameter. You can configure only the BizDate parameter or the StartBizDate and EndBizDate parameters.
     *
     * @example 2020-02-03 00:00:00
     *
     * @var string
     */
    public $endBizDate;

    /**
     * @description The IDs of the nodes that you do not need to run in the manually triggered workflow. DataWorks generates dry-run instances for all these nodes. After the dry-run instances are scheduled, the states of these instances are directly set to successful, but the scripts are not run. Separate multiple node IDs with commas (,). The ExcludeNodeIds parameter must be used together with the IncludeNodeIds parameter. This way, the settings of the ExcludeNodeIds parameter can take effect.
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
     * @description The IDs of the nodes that you need to run in the manually triggered workflow. Separate multiple node IDs with commas (,).
     *
     * @example 74324,74325
     *
     * @var string
     */
    public $includeNodeIds;

    /**
     * @description The scheduling parameters of nodes in the manually triggered workflow. Configure NodeParameters in the following JSON format: {"\\<ID of a node in the manually triggered workflow>": "Scheduling parameter settings of the node, which are in the same format as the parameter settings in the Scheduling Parameter section of the Properties tab on the DataStudio page", "\\<ID of a node in the manually triggered workflow>": "Scheduling parameter settings of the node, which are in the same format as the parameter settings in the Scheduling Parameter section of the Properties tab on the DataStudio page"}.
     *
     * @example {"20000123121": "key1=val2 key2=val2", "20000123124": "kkkk=vvvvv aaaa=bbbb"}
     *
     * @var string
     */
    public $nodeParameters;

    /**
     * @description The environment type of Operation Center. Valid values: PROD and DEV. The value PROD indicates the production environment. The value DEV indicates the development environment.
     *
     * This parameter is required.
     * @var string
     */
    public $projectEnv;

    /**
     * @description The ID of the workspace to which the manually triggered workflow belongs.
     *
     * @example 123
     *
     * @var int
     */
    public $projectId;

    /**
     * @description The name of the workspace to which the manually triggered workflow belongs.
     *
     * This parameter is required.
     * @example test_workspace
     *
     * @var string
     */
    public $projectName;

    /**
     * @description The beginning of the time range in which data generated needs to be processed. Configure this parameter in the yyyy-MM-dd HH:mm:ss format. The StartBizDate parameter is used together with the EndBizDate parameter. You can configure only the BizDate parameter or the StartBizDate and EndBizDate parameters.
     *
     * @example 2020-02-02 00:00:00
     *
     * @var string
     */
    public $startBizDate;
    protected $_name = [
        'bizDate'        => 'BizDate',
        'dagParameters'  => 'DagParameters',
        'endBizDate'     => 'EndBizDate',
        'excludeNodeIds' => 'ExcludeNodeIds',
        'flowName'       => 'FlowName',
        'includeNodeIds' => 'IncludeNodeIds',
        'nodeParameters' => 'NodeParameters',
        'projectEnv'     => 'ProjectEnv',
        'projectId'      => 'ProjectId',
        'projectName'    => 'ProjectName',
        'startBizDate'   => 'StartBizDate',
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
        if (null !== $this->endBizDate) {
            $res['EndBizDate'] = $this->endBizDate;
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
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectName) {
            $res['ProjectName'] = $this->projectName;
        }
        if (null !== $this->startBizDate) {
            $res['StartBizDate'] = $this->startBizDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RunManualDagNodesRequest
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
        if (isset($map['EndBizDate'])) {
            $model->endBizDate = $map['EndBizDate'];
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectName'])) {
            $model->projectName = $map['ProjectName'];
        }
        if (isset($map['StartBizDate'])) {
            $model->startBizDate = $map['StartBizDate'];
        }

        return $model;
    }
}
