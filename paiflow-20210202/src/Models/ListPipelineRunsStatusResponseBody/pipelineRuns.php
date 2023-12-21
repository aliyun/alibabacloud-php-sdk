<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models\ListPipelineRunsStatusResponseBody;

use AlibabaCloud\Tea\Model;

class pipelineRuns extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $isDeleted;

    /**
     * @example myName
     *
     * @var string
     */
    public $name;

    /**
     * @example node-98odqfpcjzwdf3caq3
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example 1557702098194904
     *
     * @var string
     */
    public $parentUserId;

    /**
     * @example flow-hynm2bv8wqhp5esfxq
     *
     * @var string
     */
    public $pipelineRunId;

    /**
     * @example lmi7d24h3kr0xczjlu
     *
     * @var string
     */
    public $sourceId;

    /**
     * @example Running
     *
     * @var string
     */
    public $status;

    /**
     * @example 1557702098194904
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'isDeleted'     => 'IsDeleted',
        'name'          => 'Name',
        'nodeId'        => 'NodeId',
        'parentUserId'  => 'ParentUserId',
        'pipelineRunId' => 'PipelineRunId',
        'sourceId'      => 'SourceId',
        'status'        => 'Status',
        'userId'        => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isDeleted) {
            $res['IsDeleted'] = $this->isDeleted;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->parentUserId) {
            $res['ParentUserId'] = $this->parentUserId;
        }
        if (null !== $this->pipelineRunId) {
            $res['PipelineRunId'] = $this->pipelineRunId;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pipelineRuns
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsDeleted'])) {
            $model->isDeleted = $map['IsDeleted'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['ParentUserId'])) {
            $model->parentUserId = $map['ParentUserId'];
        }
        if (isset($map['PipelineRunId'])) {
            $model->pipelineRunId = $map['PipelineRunId'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
