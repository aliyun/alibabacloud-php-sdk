<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Dara\Model;

class RunManualDagNodesRequest extends Model
{
    /**
     * @var string
     */
    public $bizDate;

    /**
     * @var string
     */
    public $dagParameters;

    /**
     * @var string
     */
    public $endBizDate;

    /**
     * @var string
     */
    public $excludeNodeIds;

    /**
     * @var string
     */
    public $flowName;

    /**
     * @var string
     */
    public $includeNodeIds;

    /**
     * @var string
     */
    public $nodeParameters;

    /**
     * @var string
     */
    public $projectEnv;

    /**
     * @var int
     */
    public $projectId;

    /**
     * @var string
     */
    public $projectName;

    /**
     * @var string
     */
    public $startBizDate;
    protected $_name = [
        'bizDate' => 'BizDate',
        'dagParameters' => 'DagParameters',
        'endBizDate' => 'EndBizDate',
        'excludeNodeIds' => 'ExcludeNodeIds',
        'flowName' => 'FlowName',
        'includeNodeIds' => 'IncludeNodeIds',
        'nodeParameters' => 'NodeParameters',
        'projectEnv' => 'ProjectEnv',
        'projectId' => 'ProjectId',
        'projectName' => 'ProjectName',
        'startBizDate' => 'StartBizDate',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
