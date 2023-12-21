<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PAIFlow\V20210202\Models;

use AlibabaCloud\Tea\Model;

class GetPipelineRunResponseBody extends Model
{
    /**
     * @example PUBLIC
     *
     * @var string
     */
    public $accessibility;

    /**
     * @example {"arguments":{"parameters":[{"name":"execution","value":{"endpoint":"http://service.******","odpsProject":"******","spec":{"endpoint":"http://service.******","odpsProject":"*****"},"resourceType":"MaxCompute"}}]}}
     *
     * @var string
     */
    public $arguments;

    /**
     * @example 60
     *
     * @var int
     */
    public $duration;

    /**
     * @example 2021-01-30T12:52:33.028Z
     *
     * @var string
     */
    public $finishedAt;

    /**
     * @example 2021-01-30T12:51:33.028Z
     *
     * @var string
     */
    public $gmtCreateTime;

    /**
     * @example 2021-01-30T12:51:33.028Z
     *
     * @var string
     */
    public $gmtModifiedTime;

    /**
     * @example {"ApiVersion":"core/v1","Metadata":{"NodeId":"node-n06d**********fc53","Provider":"155**********904","Name":"flow-j94y**********lf7a","Version":"v1","Identifier":"9fe11111-****-****-****-****ec811861","Namespace":null,"DisplayName":"name","NodeType":"Dag"},"Spec":{}}
     *
     * @var string
     */
    public $manifest;

    /**
     * @example error message
     *
     * @var string
     */
    public $message;

    /**
     * @example testName
     *
     * @var string
     */
    public $name;

    /**
     * @example node-n06d**********fc53
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example {"mlflow":{"experimentId":"exp-**********"}}
     *
     * @var string
     */
    public $options;

    /**
     * @example 155**********904
     *
     * @var string
     */
    public $parentUserId;

    /**
     * @example pipeline-j94y**********lf7a
     *
     * @var string
     */
    public $pipelineId;

    /**
     * @example flow-j94y**********lf7a
     *
     * @var string
     */
    public $pipelineRunId;

    /**
     * @var string
     */
    public $pipelineRunUri;

    /**
     * @example DA869D1B-035A-43B2-ACC1-C56681BD9FAA
     *
     * @var string
     */
    public $requestId;

    /**
     * @example abcd*********hxfu
     *
     * @var string
     */
    public $sourceId;

    /**
     * @example UNKNOWN
     *
     * @var string
     */
    public $sourceType;

    /**
     * @example 2021-01-30T12:51:33.028Z
     *
     * @var string
     */
    public $startedAt;

    /**
     * @example Succeeded
     *
     * @var string
     */
    public $status;

    /**
     * @example 155**********904
     *
     * @var string
     */
    public $userId;

    /**
     * @example 15945
     *
     * @var string
     */
    public $workspaceId;
    protected $_name = [
        'accessibility'   => 'Accessibility',
        'arguments'       => 'Arguments',
        'duration'        => 'Duration',
        'finishedAt'      => 'FinishedAt',
        'gmtCreateTime'   => 'GmtCreateTime',
        'gmtModifiedTime' => 'GmtModifiedTime',
        'manifest'        => 'Manifest',
        'message'         => 'Message',
        'name'            => 'Name',
        'nodeId'          => 'NodeId',
        'options'         => 'Options',
        'parentUserId'    => 'ParentUserId',
        'pipelineId'      => 'PipelineId',
        'pipelineRunId'   => 'PipelineRunId',
        'pipelineRunUri'  => 'PipelineRunUri',
        'requestId'       => 'RequestId',
        'sourceId'        => 'SourceId',
        'sourceType'      => 'SourceType',
        'startedAt'       => 'StartedAt',
        'status'          => 'Status',
        'userId'          => 'UserId',
        'workspaceId'     => 'WorkspaceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessibility) {
            $res['Accessibility'] = $this->accessibility;
        }
        if (null !== $this->arguments) {
            $res['Arguments'] = $this->arguments;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->finishedAt) {
            $res['FinishedAt'] = $this->finishedAt;
        }
        if (null !== $this->gmtCreateTime) {
            $res['GmtCreateTime'] = $this->gmtCreateTime;
        }
        if (null !== $this->gmtModifiedTime) {
            $res['GmtModifiedTime'] = $this->gmtModifiedTime;
        }
        if (null !== $this->manifest) {
            $res['Manifest'] = $this->manifest;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->options) {
            $res['Options'] = $this->options;
        }
        if (null !== $this->parentUserId) {
            $res['ParentUserId'] = $this->parentUserId;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->pipelineRunId) {
            $res['PipelineRunId'] = $this->pipelineRunId;
        }
        if (null !== $this->pipelineRunUri) {
            $res['PipelineRunUri'] = $this->pipelineRunUri;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
        }
        if (null !== $this->sourceType) {
            $res['SourceType'] = $this->sourceType;
        }
        if (null !== $this->startedAt) {
            $res['StartedAt'] = $this->startedAt;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPipelineRunResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Accessibility'])) {
            $model->accessibility = $map['Accessibility'];
        }
        if (isset($map['Arguments'])) {
            $model->arguments = $map['Arguments'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['FinishedAt'])) {
            $model->finishedAt = $map['FinishedAt'];
        }
        if (isset($map['GmtCreateTime'])) {
            $model->gmtCreateTime = $map['GmtCreateTime'];
        }
        if (isset($map['GmtModifiedTime'])) {
            $model->gmtModifiedTime = $map['GmtModifiedTime'];
        }
        if (isset($map['Manifest'])) {
            $model->manifest = $map['Manifest'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['Options'])) {
            $model->options = $map['Options'];
        }
        if (isset($map['ParentUserId'])) {
            $model->parentUserId = $map['ParentUserId'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['PipelineRunId'])) {
            $model->pipelineRunId = $map['PipelineRunId'];
        }
        if (isset($map['PipelineRunUri'])) {
            $model->pipelineRunUri = $map['PipelineRunUri'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }
        if (isset($map['SourceType'])) {
            $model->sourceType = $map['SourceType'];
        }
        if (isset($map['StartedAt'])) {
            $model->startedAt = $map['StartedAt'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
